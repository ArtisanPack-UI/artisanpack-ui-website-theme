<?php

/**
 * Title: Hero — Image
 * Slug: artisanpack-ui/hero-image
 * Categories: featured, hero
 * Synced: no
 * Description: Full-bleed image with dark overlay, eyebrow, centered title, dual CTAs, click-to-copy install command.
 */
?>
<!-- wp:artisanpack/cover {"align":"full","overlayColor":"ink","dimRatio":70,"minHeight":600,"contentPosition":"center center","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-center" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><!-- TODO: media_id for hero-wide image --><div class="wp-block-cover__inner-container">

<!-- wp:artisanpack/paragraph {"align":"center","className":"ap-eyebrow"} -->
<p class="has-text-align-center ap-eyebrow">ArtisanPack UI</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"level":1,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1.08","fontSize":"clamp(2.5rem, 5vw, 3.5rem)"},"color":{"text":"#ffffff"}}} -->
<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff;font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 5vw, 3.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.08">Build the whole thing with one pack</h1>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"align":"center","style":{"typography":{"lineHeight":"1.65","fontSize":"var:preset|font-size|h6"},"color":{"text":"rgba(255,255,255,0.9)"}}} -->
<p class="has-text-align-center has-text-color" style="color:rgba(255,255,255,0.9);font-size:var(--wp--preset--font-size--h6);line-height:1.65">The Livewire Starter Kit brings every ArtisanPack package together in a single, ready-to-ship Laravel app.</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons is-layout-flex is-content-justification-center">
<!-- wp:artisanpack/button -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Get the Starter Kit</a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-outline"} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Watch the demo</a></div>
<!-- /wp:artisanpack/button -->
</div>
<!-- /wp:artisanpack/buttons -->

<!-- wp:artisanpack/html -->
<div class="ap-clipboard" data-clipboard style="margin-inline:auto;">
<code class="ap-clipboard__value">laravel new my-app --using=artisanpack-ui/starter-kit</code>
<button type="button" class="ap-clipboard__button" data-clipboard-target aria-label="Copy install command"><i class="fa-regular fa-copy" aria-hidden="true"></i><span>Copy</span></button>
</div>
<!-- /wp:artisanpack/html -->

</div></div>
<!-- /wp:artisanpack/cover -->
