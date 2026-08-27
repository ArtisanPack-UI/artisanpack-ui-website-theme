<?php

/**
 * Title: Hero — Split
 * Slug: artisanpack-ui/hero-split
 * Categories: featured, hero
 * Synced: no
 * Description: Two-column hero: copy left, media right. Radial atmospheric bloom, eyebrow, dual CTAs, click-to-copy install.
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","align":"full","className":"ap-hero","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<section class="alignfull wp-block-artisanpack-group wp-block-group is-layout-constrained ap-hero">

<!-- wp:artisanpack/group {"className":"ap-hero-split","layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-hero-split">

<!-- wp:artisanpack/group {"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group">

<!-- wp:artisanpack/paragraph {"className":"ap-eyebrow"} -->
<p class="ap-eyebrow">ArtisanPack UI</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1.08","fontSize":"clamp(2.25rem, 4.5vw, 3.25rem)"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 4.5vw, 3.25rem);font-weight:700;letter-spacing:-0.02em;line-height:1.08">The Laravel toolkit for makers who ship</h1>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"lineHeight":"1.65","fontSize":"var:preset|font-size|h6"}}} -->
<p class="has-text-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--h6);line-height:1.65">Eight Composer packages built for the TALL stack — components, forms, CMS and a starter kit that brings them together.</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons is-layout-flex">
<!-- wp:artisanpack/button -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Get started</a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-outline"} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">View on GitHub</a></div>
<!-- /wp:artisanpack/button -->
</div>
<!-- /wp:artisanpack/buttons -->

<!-- wp:artisanpack/html -->
<div class="ap-clipboard" data-clipboard>
<code class="ap-clipboard__value">composer require artisanpack-ui/livewire-ui-components</code>
<button type="button" class="ap-clipboard__button" data-clipboard-target aria-label="Copy install command"><i class="fa-regular fa-copy" aria-hidden="true"></i><span>Copy</span></button>
</div>
<!-- /wp:artisanpack/html -->

</div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"className":"ap-hero-split__media","layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-hero-split__media">
<!-- wp:artisanpack/image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><!-- TODO: media_id for hero-wide image --><img alt="Product screenshot"/></figure>
<!-- /wp:artisanpack/image -->
</div>
<!-- /wp:artisanpack/group -->

</div>
<!-- /wp:artisanpack/group -->

</section>
<!-- /wp:artisanpack/group -->
