<?php

/**
 * Title: Hero — Centered
 * Slug: artisanpack-ui/hero-centered
 * Categories: featured, hero
 * Synced: no
 * Description: Centered starfield hero with eyebrow, gradient headline, dual CTAs, and click-to-copy install command.
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","align":"full","className":"ap-starfield ap-hero","layout":{"type":"constrained","contentSize":"820px","wideSize":"1200px"}} -->
<section class="alignfull wp-block-artisanpack-group wp-block-group is-layout-constrained ap-starfield ap-hero">

<!-- wp:artisanpack/paragraph {"align":"center","className":"ap-eyebrow"} -->
<p class="has-text-align-center ap-eyebrow">ArtisanPack UI</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"level":1,"textAlign":"center","className":"ap-gradient-text","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1.08","fontSize":"clamp(2.5rem, 5vw, 3.5rem)"}}} -->
<h1 class="wp-block-heading has-text-align-center ap-gradient-text" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 5vw, 3.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.08">Ship beautiful Laravel apps, artfully packed</h1>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","align":"center","style":{"typography":{"lineHeight":"1.65","fontSize":"var:preset|font-size|h6"}}} -->
<p class="has-text-muted-color has-text-color has-text-align-center" style="font-size:var(--wp--preset--font-size--h6);line-height:1.65">A dark-first component kit for the TALL stack — themeable, accessible, and built to move fast.</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons is-layout-flex is-content-justification-center">
<!-- wp:artisanpack/button -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Get started</a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-outline"} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Browse packages</a></div>
<!-- /wp:artisanpack/button -->
</div>
<!-- /wp:artisanpack/buttons -->

<!-- wp:artisanpack/html -->
<div class="ap-clipboard" data-clipboard style="margin-inline:auto;">
<code class="ap-clipboard__value">composer require artisanpack-ui/livewire-ui-components</code>
<button type="button" class="ap-clipboard__button" data-clipboard-target aria-label="Copy install command"><i class="fa-regular fa-copy" aria-hidden="true"></i><span>Copy</span></button>
</div>
<!-- /wp:artisanpack/html -->

</section>
<!-- /wp:artisanpack/group -->
