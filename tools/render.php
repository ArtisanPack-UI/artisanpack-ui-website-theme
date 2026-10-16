<?php

/**
 * Render a theme pattern (or any block-markup file) through Keystone's real
 * Blade renderer and wrap it in the live site's <head>.
 *
 * Usage (from anywhere):
 *
 *     php tools/render.php <pattern-slug|path/to/file> [--out=name] [--head-url=URL]
 *     php tools/render.php --clean
 *
 * The page is written to `<keystone>/public/_ap-render/<name>.html` and its
 * URL printed, ready for `tools/shoot.mjs`. `--clean` deletes that folder;
 * run it when you are done, so scratch pages never ship from `public/`.
 *
 * The <head> is borrowed from a live block-theme page (`/packages` by
 * default; the home page does not use the block-theme layout), so the
 * render picks up the current global styles, theme.json tokens, block style
 * variations, style.css and the theme's enqueued assets. Support CSS the
 * blocks collect while rendering (responsive rules, states, shadows,
 * gradient borders) is drained with `flushSupportAssets()`.
 *
 * Limits: `renderMarkup()` has no post in scope, so `post-*` and query
 * blocks render empty. Templates that need an entity are out of scope here.
 *
 * The Keystone root defaults to three levels up (themes/<slug>/tools) and can
 * be overridden with the KEYSTONE_PATH environment variable.
 */

declare(strict_types=1);

use ArtisanPackUI\VisualEditorRendererBlade\BlockRenderer;
use Illuminate\Contracts\Console\Kernel;

$themeDir = dirname(__DIR__);
$keystone = getenv('KEYSTONE_PATH') ?: dirname($themeDir, 2);
$renderDir = $keystone.'/public/_ap-render';

/*
 * Parse `--name=value` / `--flag` options in any position: getopt() stops at
 * the first positional argument, so `render.php file --out=x` would silently
 * ignore `--out`.
 */
$options = [];
$target = null;

foreach (array_slice($argv, 1) as $argument) {
    if (preg_match('/^--([a-z-]+)(?:=(.*))?$/', $argument, $match)) {
        $options[$match[1]] = $match[2] ?? true;
    } else {
        $target ??= $argument;
    }
}

if (isset($options['clean'])) {
    if (is_dir($renderDir)) {
        array_map('unlink', glob($renderDir.'/*') ?: []);
        rmdir($renderDir);
    }
    fwrite(STDOUT, "Removed {$renderDir}\n");
    exit(0);
}

if ($target === null) {
    fwrite(STDERR, "Usage: php tools/render.php <pattern-slug|file> [--out=name] [--head-url=URL]\n       php tools/render.php --clean\n");
    exit(1);
}

$file = is_file($target) ? $target : $themeDir.'/patterns/'.$target.'.php';

if (! is_file($file)) {
    fwrite(STDERR, "No pattern or file at {$file}\n");
    exit(1);
}

require $keystone.'/vendor/autoload.php';
$app = require $keystone.'/bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

/*
 * Patterns are read as text, never executed (cms-framework's PatternResolver
 * does the same): drop the leading `<?php … ?>` header block.
 */
$markup = (string) preg_replace('/^\s*<\?php.*?\?>\s*/s', '', (string) file_get_contents($file));

$renderer = app(BlockRenderer::class);
$html = $renderer->renderMarkup($markup);
$assets = $renderer->flushSupportAssets();

$headUrl = $options['head-url'] ?? rtrim((string) config('app.url'), '/').'/packages';
$headUrl = (string) preg_replace('#^http://#', 'https://', $headUrl);

$context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
$page = @file_get_contents($headUrl, false, $context);

if ($page === false || ! preg_match('#<head>(.*?)</head>#s', $page, $match)) {
    fwrite(STDERR, "Could not read a <head> from {$headUrl}\n");
    exit(1);
}

$head = $match[1];
$name = $options['out'] ?? pathinfo($file, PATHINFO_FILENAME);

$document = "<!doctype html>\n<html lang=\"en\">\n<head>{$head}</head>\n<body>\n"
    .$assets['css']."\n<main>\n".$html."\n</main>\n".$assets['scripts']
    ."\n</body>\n</html>\n";

if (! is_dir($renderDir)) {
    mkdir($renderDir, 0755, true);
}

file_put_contents("{$renderDir}/{$name}.html", $document);

fwrite(STDOUT, rtrim((string) preg_replace('#^http://#', 'https://', (string) config('app.url')), '/')."/_ap-render/{$name}.html\n");
