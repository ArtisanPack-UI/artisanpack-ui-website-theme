<?php

/**
 * Title: Hero — Package
 * Slug: artisanpack-ui/hero-package
 * Categories: featured, hero
 * Synced: no
 * Description: Package landing hero — breadcrumb, ident row, description, meta strip, click-to-copy install, buttons, plus a terminal panel.
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","align":"full","className":"ap-hero","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"},"style":{"border":{"bottom":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"}}}} -->
<section class="alignfull wp-block-artisanpack-group wp-block-group is-layout-constrained ap-hero" style="border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-style:solid;border-bottom-width:1px">

<!-- wp:artisanpack/group {"className":"ap-hero-split","layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-hero-split">

<!-- wp:artisanpack/group {"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group">

<!-- wp:artisanpack/paragraph {"className":"ap-eyebrow"} -->
<p class="ap-eyebrow">Packages · Components</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/html -->
<div class="ap-hero-package__ident">
<span class="ap-hero-package__badge" aria-hidden="true"><i class="fa-solid fa-cube"></i></span>
<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4vw, 2.75rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1;margin:0">Livewire UI Components</h1>
</div>
<!-- /wp:artisanpack/html -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"lineHeight":"1.65","fontSize":"var:preset|font-size|h6"}}} -->
<p class="has-text-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--h6);line-height:1.65">70+ accessible Blade components — forms, tables, charts, modals and more — for the Laravel TALL stack.</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/html -->
<div class="ap-hero-package__meta">
<span>v2.4.0</span><span>MIT License</span><span>1.2k stars</span>
</div>
<!-- /wp:artisanpack/html -->

<!-- wp:artisanpack/html -->
<div class="ap-clipboard" data-clipboard>
<code class="ap-clipboard__value">composer require artisanpack-ui/livewire-ui-components</code>
<button type="button" class="ap-clipboard__button" data-clipboard-target aria-label="Copy install command"><i class="fa-regular fa-copy" aria-hidden="true"></i><span>Copy</span></button>
</div>
<!-- /wp:artisanpack/html -->

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

</div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/html -->
<div class="ap-terminal">
<div class="ap-terminal__chrome">
<span class="ap-terminal__dots"><span></span><span></span><span></span></span>
<span class="ap-terminal__label">terminal</span>
</div>
<pre class="ap-terminal__body"><span class="prompt">$</span> composer require artisanpack-ui/livewire-ui-components
<span class="muted">  Loading Composer repositories</span>
<span class="ok">  ✓ Installed 1 package</span>

<span class="prompt">$</span> php artisan artisanpack:install components
<span class="ok">  ✓ Published views, assets, config</span>
<span class="ok">  ✓ Ready to use in Blade</span>
</pre>
</div>
<!-- /wp:artisanpack/html -->

</div>
<!-- /wp:artisanpack/group -->

</section>
<!-- /wp:artisanpack/group -->
