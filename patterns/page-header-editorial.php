<?php

/**
 * Title: Page Header — Editorial
 * Slug: artisanpack-ui/page-header-editorial
 * Categories: header, text
 * Synced: no
 * Description: Breadcrumb + flush-left title + neon rule.
 */
?>
<!-- wp:artisanpack/group {"tagName":"header","align":"full","style":{"color":{"gradient":"radial-gradient(120% 90% at 0% -10%, color-mix(in srgb, var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary) 16%, transparent), transparent 55%), var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"},"spacing":{"padding":{"top":"72px","bottom":"56px","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"18px"},"border":{"bottom":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<header class="wp-block-artisanpack-group alignfull wp-block-group has-background" style="border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-style:solid;border-bottom-width:1px;background:radial-gradient(120% 90% at 0% -10%, color-mix(in srgb, var(--wp--preset--color--primary) 16%, transparent), transparent 55%), var(--wp--preset--color--base);padding-top:72px;padding-right:var(--wp--preset--spacing--gutter);padding-bottom:56px;padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"13px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-link-color" style="font-size:13px"><a href="/">Home</a> <span data-icon-set="fas" data-icon-name="chevron-right" style="font-size:10px;opacity:0.6" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> <a href="#">Resources</a> <span data-icon-set="fas" data-icon-name="chevron-right" style="font-size:10px;opacity:0.6" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> <span style="color:var(--wp--preset--color--text)">Documentation</span></p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/group {"layout":{"type":"constrained","contentSize":"820px","justifyContent":"left"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/heading {"level":1} -->
<h1 class="wp-block-heading">Building with blocks</h1>
<!-- /wp:artisanpack/heading --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"}}},"style":{"spacing":{"margin":{"top":"20px","bottom":"2px"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row" style="margin-top:20px;margin-bottom:2px"><!-- wp:artisanpack/group {"artisanpackFlex":{"item":{"grow":{"base":0},"shrink":{"base":0},"basis":{"base":"96px"}}},"gradient":"neon","style":{"dimensions":{"minHeight":"1px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"},"artisanpackEffects":{"opacity":60}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-grow-0 ap-shrink-0 ap-basis-[96px] has-neon-gradient-background has-background" style="min-height:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"18px","lineHeight":"1.65"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:18px;line-height:1.65">Compose full pages from section patterns — no re-implementing primitives. This is the way ArtisanPack is meant to be used.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></header>
<!-- /wp:artisanpack/group -->
