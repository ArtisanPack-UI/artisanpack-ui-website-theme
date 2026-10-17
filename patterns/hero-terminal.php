<?php

/**
 * Title: Hero — Terminal
 * Slug: artisanpack-ui/hero-terminal
 * Categories: featured, hero
 * Synced: no
 * Description: Two-column hero leading with the install flow — text and CTAs left, terminal panel right.
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","gradient":"wash-corners","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-wash-corners-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"4rem","top":"3rem"}}}} -->
<div class="wp-block-artisanpack-columns wp-block-columns are-vertically-aligned-center"><!-- wp:artisanpack/column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"1.75rem"}}} -->
<div class="wp-block-artisanpack-column wp-block-column is-vertically-aligned-center"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"default"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow"} -->
<p class="wp-block-paragraph is-style-eyebrow">Get started in seconds</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"level":1,"fontSize":"h2"} -->
<h1 class="wp-block-heading has-h-2-font-size">From composer require to shipped</h1>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Install any ArtisanPack package and its config, assets and components are wired up for you.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/buttons {"style":{"spacing":{"blockGap":"0.875rem"}}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons"><!-- wp:artisanpack/button {"fontSize":"button-lg","style":{"spacing":{"padding":{"top":"0.9375rem","bottom":"0.9375rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link has-button-lg-font-size has-custom-font-size wp-element-button" href="#" style="padding-top:0.9375rem;padding-right:1.5rem;padding-bottom:0.9375rem;padding-left:1.5rem">Read the docs <span class="ap-inline-icon" data-icon-set="fas" data-icon-name="arrow-right" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span></a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-hollow","fontSize":"button-lg","style":{"spacing":{"padding":{"top":"0.9375rem","bottom":"0.9375rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-hollow"><a class="wp-block-button__link has-button-lg-font-size has-custom-font-size wp-element-button" href="https://github.com/ArtisanPack-UI" style="padding-top:0.9375rem;padding-right:1.5rem;padding-bottom:0.9375rem;padding-left:1.5rem"><span class="ap-inline-icon" data-icon-set="fab" data-icon-name="github" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> View on GitHub</a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons -->

<!-- wp:artisanpack/copy-command {"command":"composer require artisanpack-ui/livewire-ui-components","backgroundColor":"ink"} /--></div>
<!-- /wp:artisanpack/column -->

<!-- wp:artisanpack/column {"verticalAlignment":"center"} -->
<div class="wp-block-artisanpack-column wp-block-column is-vertically-aligned-center"><!-- wp:artisanpack/terminal {"lines":"$ composer require artisanpack-ui/livewire-ui-components\n# Using version ^2.0 for artisanpack-ui/livewire-ui-components\n# ✓ Installed\n\n$ php artisan artisanpack:install\n✓ Published config \u0026 assets\n✓ Ready to build"} /--></div>
<!-- /wp:artisanpack/column --></div>
<!-- /wp:artisanpack/columns --></section>
<!-- /wp:artisanpack/group -->
