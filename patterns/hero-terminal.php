<?php

/**
 * Title: Hero — Terminal
 * Slug: artisanpack-ui/hero-terminal
 * Categories: featured, hero
 * Synced: no
 * Description: Two-column hero leading with the install flow — text and CTAs left, terminal panel right.
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","align":"full","className":"ap-hero","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<section class="alignfull wp-block-artisanpack-group wp-block-group is-layout-constrained ap-hero">

<!-- wp:artisanpack/group {"className":"ap-hero-split","layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-hero-split">

<!-- wp:artisanpack/group {"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group">

<!-- wp:artisanpack/paragraph {"className":"ap-eyebrow"} -->
<p class="ap-eyebrow">Get started in seconds</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1.08","fontSize":"clamp(2.25rem, 4.5vw, 3.25rem)"}}} -->
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 4.5vw, 3.25rem);font-weight:700;letter-spacing:-0.02em;line-height:1.08">From composer require to shipped</h1>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"lineHeight":"1.65","fontSize":"var:preset|font-size|h6"}}} -->
<p class="has-text-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--h6);line-height:1.65">Install any ArtisanPack package and its config, assets and components are wired up for you.</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons is-layout-flex">
<!-- wp:artisanpack/button -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Read the docs</a></div>
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

<!-- wp:artisanpack/html -->
<div class="ap-terminal">
<div class="ap-terminal__chrome">
<span class="ap-terminal__dots"><span></span><span></span><span></span></span>
<span class="ap-terminal__label">terminal</span>
</div>
<pre class="ap-terminal__body"><span class="prompt">$</span> composer require artisanpack-ui/livewire-ui-components
<span class="muted">  Using version ^2.0 for artisanpack-ui/livewire-ui-components</span>
<span class="ok">  ✓ Installed</span>

<span class="prompt">$</span> php artisan artisanpack:install
<span class="ok">  ✓ Published config &amp; assets</span>
<span class="ok">  ✓ Ready to build</span>
</pre>
</div>
<!-- /wp:artisanpack/html -->

</div>
<!-- /wp:artisanpack/group -->

</section>
<!-- /wp:artisanpack/group -->
