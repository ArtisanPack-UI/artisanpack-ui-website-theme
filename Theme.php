<?php

/**
 * ArtisanPack UI theme runtime.
 *
 * Extends cms-framework's Theme base class to hook into per-request behavior:
 *   - Enqueue Font Awesome 7 Pro on the front-end AND the editor canvas.
 *   - Enqueue the theme's mobile-menu drawer script on the front-end.
 *   - Register the four custom image sizes the design brief documents.
 *
 * The static theme stylesheet (style.css) is concatenated into
 * `/api/v1/global-styles/css` by cms-framework — no need to enqueue it here.
 * The editor stylesheet (editor.css) is likewise auto-concatenated by
 * cms-framework 2.5.0+.
 *
 * @since 1.0.0
 */

declare(strict_types=1);

namespace Themes\ArtisanpackUi;

use ArtisanPackUI\CMSFramework\Modules\SiteEditor\Resolution\PatternResolver;
use ArtisanPackUI\CMSFramework\Modules\Themes\Contracts\Theme as BaseTheme;

final class Theme extends BaseTheme
{
    /**
     * Font Awesome 7 Pro CSS entrypoint, served from
     * /themes/artisanpack-ui/assets/vendor/fontawesome/css/all.min.css via
     * cms-framework's asset route.
     */
    private const FA_HANDLE = 'artisanpack-ui-fa7';

    private const FA_SRC = 'vendor/fontawesome/css/all.min.css';

    /**
     * Enqueue on the public front-end.
     */
    public function frontendStyles(): array
    {
        return [
            [
                'handle' => self::FA_HANDLE,
                'src' => self::FA_SRC,
                'ver' => '7.3.1',
            ],
        ];
    }

    /**
     * Enqueue in the site-editor canvas iframe so icons render there too.
     */
    public function editorStyles(): array
    {
        return [
            [
                'handle' => self::FA_HANDLE,
                'src' => self::FA_SRC,
                'ver' => '7.3.1',
            ],
        ];
    }

    /**
     * Front-end scripts.
     *
     * Ships the click-to-copy behavior for `.ap-clipboard` chips used in
     * hero patterns.
     */
    public function frontendScripts(): array
    {
        return [
            [
                'handle' => 'artisanpack-ui-clipboard',
                'src' => 'js/clipboard.js',
                'defer' => true,
                'ver' => '1.0.0',
            ],
        ];
    }

    /**
     * Custom image sizes the design brief documents. Registered before boot()
     * so any code that queries image variants sees the registrations first.
     */
    public function registerImageSizes(): void
    {
        if (! function_exists('apRegisterImageSize')) {
            return;
        }

        apRegisterImageSize('hero-wide', 2400, 900, true);
        apRegisterImageSize('post-cover', 1600, 900, true);
        apRegisterImageSize('package-hero', 1600, 1000, true);
        apRegisterImageSize('card-thumb', 400, 300, true);
    }

    /**
     * Advertise the theme's whole-page starter patterns to the
     * page-pattern-inserter modal.
     *
     * The visual-editor modal's client-side filter (`filterModalPatterns`)
     * only keeps patterns whose `post_types` array contains the current
     * document's post-type slug — anything unscoped is treated as a sidebar
     * inserter snippet and dropped. cms-framework's file-based pattern
     * pipeline never stamps `post_types` (its header parser doesn't
     * recognise the field), so without this step every theme pattern ships
     * with `post_types: null` and gets filtered out of the "Choose a
     * pattern" modal shown when a page or package is first created.
     *
     * Scope is limited to patterns tagged with the `full-page` category —
     * the modal is a starter picker for a fresh record, not a snippet
     * catalogue, so surfacing hero / CTA / testimonial sections there
     * would drown the actual full-page options. Section patterns keep
     * working through the sidebar inserter regardless. Priority 20 puts
     * this pass after cms-framework's own merge (default priority 10) so
     * we see the theme entries it just added.
     */
    public function extend(): void
    {
        if (! function_exists('addFilter')) {
            return;
        }

        addFilter(
            'ap.visualEditor.patterns',
            static function (mixed $patterns): array {
                if (! is_array($patterns)) {
                    return [];
                }

                foreach ($patterns as $slug => $entry) {
                    if (! is_array($entry) || ($entry['source'] ?? null) !== 'theme') {
                        continue;
                    }

                    $categories = is_array($entry['categories'] ?? null) ? $entry['categories'] : [];

                    if (! in_array('full-page', $categories, true)) {
                        continue;
                    }

                    if (! array_key_exists('post_types', $entry) || $entry['post_types'] === null) {
                        $entry['post_types'] = ['page', 'package'];
                        $patterns[$slug]     = $entry;
                    }
                }

                return $patterns;
            },
            20,
        );

        // Expand `<!-- wp:pattern {"slug":"..."} /-->` references before the
        // pattern's raw markup reaches the editor. The full-page patterns
        // shipped by this theme (about-full, home-full, …) are composed
        // almost entirely of these references — WordPress's `core/pattern`
        // placeholder that resolves to another registered pattern's blocks.
        // The visual-editor bundle does NOT register `core/pattern`, so
        // client-side `parse()` returns placeholder blocks with no content
        // and inserting a full-page pattern lands an empty canvas. Doing
        // the expansion here — recursively, with a cycle guard — hands
        // the client the fully-materialised block markup and the pattern
        // inserts as authored.
        $themeSlug = $this->slug();
        addFilter(
            'ap.visualEditor.patternRender',
            static function (mixed $html, string $_slug = '', array $_context = []) use ($themeSlug): mixed {
                if (! is_string($html) || ! str_contains($html, 'wp:pattern')) {
                    return $html;
                }

                $resolver = app(PatternResolver::class);

                return self::expandPatternReferences($html, $resolver, $themeSlug, []);
            },
            10,
        );
    }

    /**
     * Recursively substitute `<!-- wp:pattern {"slug":"..."} /-->` markers
     * with the raw markup of the referenced pattern. A pattern already
     * being expanded higher up the stack is dropped rather than re-entered
     * so a mis-authored cycle doesn't run this into an infinite loop.
     *
     * @param  list<string>  $stack  Short slugs currently mid-expansion.
     */
    private static function expandPatternReferences(
        string $html,
        PatternResolver $resolver,
        string $themeSlug,
        array $stack,
    ): string {
        $result = preg_replace_callback(
            '#<!--\s*wp:pattern\s+(\{[^}]*\})\s*/-->#',
            static function (array $match) use ($resolver, $themeSlug, $stack): string {
                $attrs = json_decode($match[1], true);

                if (! is_array($attrs)) {
                    return '';
                }

                $slug = $attrs['slug'] ?? null;

                if (! is_string($slug) || '' === trim($slug)) {
                    return '';
                }

                $prefix = $themeSlug.'/';
                $short  = str_starts_with($slug, $prefix)
                    ? substr($slug, strlen($prefix))
                    : $slug;

                if (in_array($short, $stack, true)) {
                    return '';
                }

                $resolved = $resolver->resolve($short);

                if (null === $resolved) {
                    return '';
                }

                return self::expandPatternReferences(
                    $resolved->rawContent,
                    $resolver,
                    $themeSlug,
                    [...$stack, $short],
                );
            },
            $html,
        );

        return is_string($result) ? $result : $html;
    }
}
