<?php

/**
 * Title: Hero — Package
 * Slug: artisanpack-ui/hero-package
 * Categories: featured, hero
 * Synced: no
 * Description: Package landing hero — breadcrumb, ident row, description, meta strip, click-to-copy install, buttons, plus a terminal panel on the right.
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","align":"full","className":"ap-hero","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"},"style":{"border":{"bottom":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<section class="alignfull wp-block-artisanpack-group wp-block-group is-layout-constrained ap-hero" style="border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

<!-- wp:artisanpack/group {"className":"ap-hero-package","layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-hero-package">

<!-- wp:artisanpack/paragraph {"className":"ap-hero-package__crumbs","textColor":"text-muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<p class="ap-hero-package__crumbs has-text-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><a href="/packages">Packages</a><span class="ap-hero-package__crumbs-sep" aria-hidden="true"> › </span><span class="ap-hero-package__crumbs-current">Foundation</span></p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/group {"className":"ap-hero-package__split","layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-hero-package__split">

<!-- wp:artisanpack/group {"className":"ap-hero-package__lede","layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-hero-package__lede">

<!-- wp:artisanpack/group {"className":"ap-hero-package__ident","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-hero-package__ident is-layout-flex is-vertical-align-center">

<!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":32,"iconColor":"accent","backgroundColor":"surface-raised","className":"ap-hero-package__badge","style":{"spacing":{"padding":{"top":"14px","right":"14px","bottom":"14px","left":"14px"}},"border":{"radius":"12px"}}} /-->

<!-- wp:artisanpack/heading {"level":1,"className":"ap-hero-package__title","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1.05","fontSize":"clamp(2.5rem, 5vw, 3.5rem)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h1 class="wp-block-heading ap-hero-package__title" style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 5vw, 3.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.05">Core</h1>
<!-- /wp:artisanpack/heading -->

</div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"className":"ap-hero-package__lede-copy","textColor":"text-muted","style":{"typography":{"lineHeight":"1.6","fontSize":"var:preset|font-size|h6"}}} -->
<p class="ap-hero-package__lede-copy has-text-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--h6);line-height:1.6">The foundational package that powers the entire ecosystem. Core unifies every ArtisanPack UI package's configuration into a single artisanpack.php file — one source of truth, zero configuration sprawl.</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/html -->
<ul class="ap-hero-package__meta">
<li class="ap-hero-package__meta-item ap-hero-package__version"><span>v1.2.0</span></li>
<li class="ap-hero-package__meta-item">MIT License</li>
<li class="ap-hero-package__meta-item ap-hero-package__stars"><i class="fa-solid fa-star" aria-hidden="true"></i><span>1</span></li>
</ul>
<!-- /wp:artisanpack/html -->

<!-- wp:artisanpack/copy-command {"command":"composer require artisanpack-ui/core","prefix":"$","buttonLabel":"Copy","copiedLabel":"Copied"} /-->

<!-- wp:artisanpack/buttons {"className":"ap-hero-package__ctas","layout":{"type":"flex"}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons ap-hero-package__ctas is-layout-flex">
<!-- wp:artisanpack/button {"className":"ap-hero-package__cta ap-hero-package__cta--primary"} -->
<div class="wp-block-artisanpack-button wp-block-button ap-hero-package__cta ap-hero-package__cta--primary"><a class="wp-block-button__link wp-element-button" href="#">Read the docs →</a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-outline ap-hero-package__cta ap-hero-package__cta--github"} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-outline ap-hero-package__cta ap-hero-package__cta--github"><a class="wp-block-button__link wp-element-button" href="#"><i class="fa-brands fa-github" aria-hidden="true"></i> View on GitHub</a></div>
<!-- /wp:artisanpack/button -->
</div>
<!-- /wp:artisanpack/buttons -->

</div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/terminal {"chromeStyle":"terminal","showChrome":true,"label":"terminal","lines":"$ composer require artisanpack-ui/core\n# Using version ^1.2 for artisanpack-ui/core\n✓ Installed\n\n$ php artisan vendor:publish --tag=artisanpack-config\n✓ Published config/artisanpack.php\n\n$ php artisan artisanpack:scaffold-config\n✓ Merged config from 4 packages"} /-->

</div>
<!-- /wp:artisanpack/group -->

</div>
<!-- /wp:artisanpack/group -->

</section>
<!-- /wp:artisanpack/group -->
