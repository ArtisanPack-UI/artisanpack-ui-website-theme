<?php

/**
 * Title: Package Landing — Generic
 * Slug: artisanpack-ui/package-landing-generic
 * Categories: featured, full-page
 * Post Types: package
 * Synced: no
 * Description: A package page: the bound hero, Features, How it works, Get started with commands and code, Requirements and a call to action. Offered for a new, empty package; Core's copy is sample text.
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","gradient":"wash-diagonal","align":"full","className":"is-style-night","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"}},"border":{"bottom":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group is-style-night has-wash-diagonal-gradient-background has-background" style="border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-style:solid;border-bottom-width:1px;padding-top:5rem;padding-right:var(--wp--preset--spacing--gutter);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3.5rem","top":"3rem"}}}} -->
<div class="wp-block-artisanpack-columns wp-block-columns are-vertically-aligned-center"><!-- wp:artisanpack/column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-artisanpack-column wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"center"}}},"textColor":"text-muted","style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-center has-text-muted-color has-text-color" style="font-size:0.8125rem"><!-- wp:artisanpack/paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-muted"}}}}} -->
<p class="wp-block-paragraph has-link-color"><a href="/packages">Packages</a> <span data-icon-set="fas" data-icon-name="chevron-right" style="font-size:0.7em;color:var(--wp--preset--color--text-subtle)" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span></p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/post-terms {"term":"package-category","textColor":"text","style":{"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cubes"},"size":26,"backgroundColor":"primary-tint","iconColor":"#00E5FF","isDecorative":true,"style":{"spacing":{"padding":"1.0625rem"},"border":{"radius":"12px","width":"1px","style":"solid","color":"color-mix(in srgb, #2962FF 40%, transparent)"}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/post-title {"level":1,"fontSize":"h2","style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"layout":{"type":"constrained","contentSize":"520px","justifyContent":"left"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.65"}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-center"><!-- wp:artisanpack/paragraph {"backgroundColor":"primary-tint","textColor":"primary-text","className":"is-style-badge","bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph is-style-badge has-primary-text-color has-primary-tint-background-color has-text-color has-background">v2.0.1</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/paragraph {"className":"is-style-badge","bindings":{"content":{"source":"package","args":{"key":"license_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph is-style-badge">MIT License</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.8125rem","fontWeight":"600"}},"bindings":{"content":{"source":"package","args":{"key":"stars_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.8125rem;font-weight:600">★ 2.4k</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/copy-command {"command":"composer require artisanpack-ui/livewire-ui-components","backgroundColor":"ink","className":"is-style-night","style":{"spacing":{"margin":{"top":"1.625rem"}}},"bindings":{"command":{"source":"package","args":{"key":"install_command"}}}} /-->

<!-- wp:artisanpack/buttons {"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"1.625rem"}}}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons" style="margin-top:1.625rem"><!-- wp:artisanpack/button {"style":{"spacing":{"padding":{"top":"0.8125rem","bottom":"0.8125rem","left":"1.125rem","right":"1.125rem"}}},"bindings":{"url":{"source":"custom_field","args":{"key":"docs_url"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:0.8125rem;padding-right:1.125rem;padding-bottom:0.8125rem;padding-left:1.125rem">Read the docs <span class="ap-inline-icon" data-icon-set="fas" data-icon-name="arrow-right" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span></a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-hollow","style":{"spacing":{"padding":{"top":"0.8125rem","bottom":"0.8125rem","left":"1.125rem","right":"1.125rem"}}},"bindings":{"url":{"source":"package","args":{"key":"github_url"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-hollow"><a class="wp-block-button__link wp-element-button" href="https://github.com/ArtisanPack-UI" style="padding-top:0.8125rem;padding-right:1.125rem;padding-bottom:0.8125rem;padding-left:1.125rem"><span class="ap-inline-icon" data-icon-set="fab" data-icon-name="github" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> GitHub</a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons --></div>
<!-- /wp:artisanpack/column -->

<!-- wp:artisanpack/column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-artisanpack-column wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:artisanpack/terminal {"lines":"$ composer require artisanpack-ui/core","className":"is-style-night","bindings":{"lines":{"source":"package","args":{"key":"terminal"}}}} /--></div>
<!-- /wp:artisanpack/column --></div>
<!-- /wp:artisanpack/columns --></section>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">What it does</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">One config file to rule them all</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Core replaces scattered per-package config files with a single, centralized source of truth — scaffolded automatically and safe to customize.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/grid {"numColumns":3,"style":{"spacing":{"blockGap":"1.375rem"}}} -->
<div class="wp-block-artisanpack-grid ap-grid ap-grid-has-3-base-columns ap-grid-layout-fixed"><!-- wp:artisanpack/grid-item {"borderColor":"primary","className":"is-style-boxed"} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row is-style-boxed has-border-color has-primary-border-color"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"layer-group"},"size":22,"iconColor":"#FFFFFF","isDecorative":true,"gradient":"brand","className":"is-style-tile"} /-->

<!-- wp:artisanpack/heading {"level":3,"fontSize":"card-title","style":{"typography":{"lineHeight":"1.65"}}} -->
<h3 class="wp-block-heading has-card-title-font-size" style="line-height:1.65">Unified configuration</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontSize":"body-sm"} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-body-sm-font-size">Merge every ArtisanPack UI package's config into a single config/artisanpack.php file.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"secondary","className":"is-style-boxed"} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row is-style-boxed has-border-color has-secondary-border-color"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"wand-magic-sparkles"},"size":22,"backgroundColor":"secondary-tint","iconColor":"#00E5FF","isDecorative":true,"className":"is-style-tile"} /-->

<!-- wp:artisanpack/heading {"level":3,"fontSize":"card-title","style":{"typography":{"lineHeight":"1.65"}}} -->
<h3 class="wp-block-heading has-card-title-font-size" style="line-height:1.65">Automatic scaffolding</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontSize":"body-sm"} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-body-sm-font-size">Run artisanpack:scaffold-config to detect and merge configs from all installed packages.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"accent","className":"is-style-boxed"} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row is-style-boxed has-border-color has-accent-border-color"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"shield-halved"},"size":22,"backgroundColor":"accent-tint","iconColor":"#E040FB","isDecorative":true,"className":"is-style-tile"} /-->

<!-- wp:artisanpack/heading {"level":3,"fontSize":"card-title","style":{"typography":{"lineHeight":"1.65"}}} -->
<h3 class="wp-block-heading has-card-title-font-size" style="line-height:1.65">Preserves your settings</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontSize":"body-sm"} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-body-sm-font-size">Existing customizations stay intact when scaffolding — nothing is overwritten by default.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"primary","className":"is-style-boxed"} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row is-style-boxed has-border-color has-primary-border-color"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"plug"},"size":22,"backgroundColor":"primary-tint","iconColor":"#2962FF","isDecorative":true,"className":"is-style-tile"} /-->

<!-- wp:artisanpack/heading {"level":3,"fontSize":"card-title","style":{"typography":{"lineHeight":"1.65"}}} -->
<h3 class="wp-block-heading has-card-title-font-size" style="line-height:1.65">Laravel integration</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontSize":"body-sm"} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-body-sm-font-size">Auto-registers its service provider and hooks into Laravel's container and config system.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"secondary","className":"is-style-boxed"} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row is-style-boxed has-border-color has-secondary-border-color"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"rotate"},"size":22,"backgroundColor":"secondary-tint","iconColor":"#00E5FF","isDecorative":true,"className":"is-style-tile"} /-->

<!-- wp:artisanpack/heading {"level":3,"fontSize":"card-title","style":{"typography":{"lineHeight":"1.65"}}} -->
<h3 class="wp-block-heading has-card-title-font-size" style="line-height:1.65">Force override</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontSize":"body-sm"} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-body-sm-font-size">Need a clean slate? The --force flag updates existing keys exactly when you want it to.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"accent","className":"is-style-boxed"} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row is-style-boxed has-border-color has-accent-border-color"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"bullseye"},"size":22,"backgroundColor":"accent-tint","iconColor":"#E040FB","isDecorative":true,"className":"is-style-tile"} /-->

<!-- wp:artisanpack/heading {"level":3,"fontSize":"card-title","style":{"typography":{"lineHeight":"1.65"}}} -->
<h3 class="wp-block-heading has-card-title-font-size" style="line-height:1.65">Single source of truth</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontSize":"body-sm"} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-body-sm-font-size">Read everything through config('artisanpack.*') — no more hunting across scattered files.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item --></div>
<!-- /wp:artisanpack/grid --></section>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"section","align":"full","style":{"spacing":{"padding":{"top":"6.5rem","bottom":"6.5rem","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"4rem"},"border":{"top":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-section-background-color has-background" style="border-top-color:var(--wp--preset--color--border-subtle);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-style:solid;border-bottom-width:1px;padding-top:6.5rem;padding-right:var(--wp--preset--spacing--gutter);padding-bottom:6.5rem;padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"textColor":"text-link","style":{"typography":{"textAlign":"center","fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center wp-block-paragraph has-text-link-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.16em;text-transform:uppercase">How it works</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-weight:800">From install to unified config in five steps</h2>
<!-- /wp:artisanpack/heading --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/grid {"numColumns":5,"style":{"spacing":{"blockGap":"1.125rem"}},"responsive":{"numColumns":{"tablet":2,"mobile":1}}} -->
<div class="wp-block-artisanpack-grid ap-grid ap-grid-has-5-base-columns ap-grid-layout-fixed"><!-- wp:artisanpack/grid-item {"borderColor":"border-subtle","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"1.625rem","right":"1.375rem","bottom":"1.625rem","left":"1.375rem"}}}} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;padding-top:1.625rem;padding-right:1.375rem;padding-bottom:1.625rem;padding-left:1.375rem"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"justifyContent":{"base":"center"},"alignItems":{"base":"center"}},"item":{"grow":{"base":0},"shrink":{"base":0},"basis":{"base":"40px"}}},"gradient":"brand-card","style":{"dimensions":{"minHeight":"40px"},"border":{"radius":"11px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-justify-center ap-items-center ap-grow-0 ap-shrink-0 ap-basis-[40px] has-brand-card-gradient-background has-background" style="border-radius:11px;min-height:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:artisanpack/paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1"}}} -->
<p class="wp-block-paragraph has-white-color has-text-color" style="font-size:1rem;font-weight:700;line-height:1">1</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/heading {"level":3,"style":{"typography":{"fontSize":"1rem","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-size:1rem;font-weight:700">Install</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.875rem;line-height:1.6">Pull in Core and any ArtisanPack UI packages through Composer.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"border-subtle","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"1.625rem","right":"1.375rem","bottom":"1.625rem","left":"1.375rem"}}}} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;padding-top:1.625rem;padding-right:1.375rem;padding-bottom:1.625rem;padding-left:1.375rem"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"justifyContent":{"base":"center"},"alignItems":{"base":"center"}},"item":{"grow":{"base":0},"shrink":{"base":0},"basis":{"base":"40px"}}},"gradient":"brand-card","style":{"dimensions":{"minHeight":"40px"},"border":{"radius":"11px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-justify-center ap-items-center ap-grow-0 ap-shrink-0 ap-basis-[40px] has-brand-card-gradient-background has-background" style="border-radius:11px;min-height:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:artisanpack/paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1"}}} -->
<p class="wp-block-paragraph has-white-color has-text-color" style="font-size:1rem;font-weight:700;line-height:1">2</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/heading {"level":3,"style":{"typography":{"fontSize":"1rem","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-size:1rem;font-weight:700">Detect</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.875rem;line-height:1.6">scaffold-config finds every tagged config file across your installed packages.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"border-subtle","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"1.625rem","right":"1.375rem","bottom":"1.625rem","left":"1.375rem"}}}} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;padding-top:1.625rem;padding-right:1.375rem;padding-bottom:1.625rem;padding-left:1.375rem"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"justifyContent":{"base":"center"},"alignItems":{"base":"center"}},"item":{"grow":{"base":0},"shrink":{"base":0},"basis":{"base":"40px"}}},"gradient":"brand-card","style":{"dimensions":{"minHeight":"40px"},"border":{"radius":"11px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-justify-center ap-items-center ap-grow-0 ap-shrink-0 ap-basis-[40px] has-brand-card-gradient-background has-background" style="border-radius:11px;min-height:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:artisanpack/paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1"}}} -->
<p class="wp-block-paragraph has-white-color has-text-color" style="font-size:1rem;font-weight:700;line-height:1">3</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/heading {"level":3,"style":{"typography":{"fontSize":"1rem","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-size:1rem;font-weight:700">Merge</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.875rem;line-height:1.6">Each package's settings land in its own section of config/artisanpack.php.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"border-subtle","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"1.625rem","right":"1.375rem","bottom":"1.625rem","left":"1.375rem"}}}} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;padding-top:1.625rem;padding-right:1.375rem;padding-bottom:1.625rem;padding-left:1.375rem"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"justifyContent":{"base":"center"},"alignItems":{"base":"center"}},"item":{"grow":{"base":0},"shrink":{"base":0},"basis":{"base":"40px"}}},"gradient":"brand-card","style":{"dimensions":{"minHeight":"40px"},"border":{"radius":"11px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-justify-center ap-items-center ap-grow-0 ap-shrink-0 ap-basis-[40px] has-brand-card-gradient-background has-background" style="border-radius:11px;min-height:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:artisanpack/paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1"}}} -->
<p class="wp-block-paragraph has-white-color has-text-color" style="font-size:1rem;font-weight:700;line-height:1">4</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/heading {"level":3,"style":{"typography":{"fontSize":"1rem","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-size:1rem;font-weight:700">Preserve</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.875rem;line-height:1.6">Your existing customizations stay untouched unless you pass the --force flag.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item {"borderColor":"border-subtle","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"1.625rem","right":"1.375rem","bottom":"1.625rem","left":"1.375rem"}}}} -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;padding-top:1.625rem;padding-right:1.375rem;padding-bottom:1.625rem;padding-left:1.375rem"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"justifyContent":{"base":"center"},"alignItems":{"base":"center"}},"item":{"grow":{"base":0},"shrink":{"base":0},"basis":{"base":"40px"}}},"gradient":"brand-card","style":{"dimensions":{"minHeight":"40px"},"border":{"radius":"11px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-justify-center ap-items-center ap-grow-0 ap-shrink-0 ap-basis-[40px] has-brand-card-gradient-background has-background" style="border-radius:11px;min-height:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:artisanpack/paragraph {"textColor":"white","style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1"}}} -->
<p class="wp-block-paragraph has-white-color has-text-color" style="font-size:1rem;font-weight:700;line-height:1">5</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/heading {"level":3,"style":{"typography":{"fontSize":"1rem","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-size:1rem;font-weight:700">Access</h3>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.875rem;line-height:1.6">Read any setting through Laravel's standard config() helper.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/grid-item --></div>
<!-- /wp:artisanpack/grid --></section>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"6.5rem","bottom":"6.5rem","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"3rem"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:6.5rem;padding-right:var(--wp--preset--spacing--gutter);padding-bottom:6.5rem;padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"textColor":"text-link","style":{"typography":{"textAlign":"center","fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center wp-block-paragraph has-text-link-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.16em;text-transform:uppercase">Get started</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-weight:800">Three commands to a centralized config</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/group {"layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center","fontSize":"1rem","lineHeight":"1.65"}}} -->
<p class="has-text-align-center wp-block-paragraph has-text-muted-color has-text-color" style="font-size:1rem;line-height:1.65">Install Core, publish the base file, then let the scaffold command detect and merge configuration from every installed package.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"1.125rem"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"style":{"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch"><!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.04em","textTransform":"uppercase"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.04em;text-transform:uppercase">1 · Install</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/copy-command {"backgroundColor":"ink","className":"is-style-night is-style-full-width","bindings":{"command":{"source":"package","args":{"key":"install_command"}}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"style":{"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch"><!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.04em","textTransform":"uppercase"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.04em;text-transform:uppercase">2 · Publish</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/copy-command {"command":"php artisan vendor:publish \u002d\u002dtag=artisanpack-config","backgroundColor":"ink","className":"is-style-night is-style-full-width"} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"style":{"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch"><!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.04em","textTransform":"uppercase"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.04em;text-transform:uppercase">3 · Scaffold</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/copy-command {"command":"php artisan artisanpack:scaffold-config","backgroundColor":"ink","className":"is-style-night is-style-full-width"} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"},"margin":{"top":"3.5rem"}}}} -->
<div class="wp-block-artisanpack-columns wp-block-columns" style="margin-top:3.5rem"><!-- wp:artisanpack/column -->
<div class="wp-block-artisanpack-column wp-block-column"><!-- wp:artisanpack/group {"borderColor":"border","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"dimensions":{"minHeight":"100%"},"shadow":"var:preset|shadow|md"},"layout":{"type":"default"},"artisanpackEffects":{"overflowX":"hidden","overflowY":"hidden"}} -->
<div class="wp-block-artisanpack-group wp-block-group has-border-color has-border-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--md)"><!-- wp:artisanpack/paragraph {"backgroundColor":"surface-2","textColor":"text-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","lineHeight":"2.5rem"},"spacing":{"padding":{"right":"0.875rem","left":"0.875rem"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}}} -->
<p class="wp-block-paragraph has-text-muted-color has-surface-2-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-right:0.875rem;padding-left:0.875rem;font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;line-height:2.5rem"><span data-icon-set="fas" data-icon-name="circle" style="font-size:0.6875rem;color:#FF5F57" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> <span data-icon-set="fas" data-icon-name="circle" style="font-size:0.6875rem;color:#FEBC2E" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> <span data-icon-set="fas" data-icon-name="circle" style="font-size:0.6875rem;color:#28C840" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span>  UsesCore.php</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/code {"style":{"typography":{"fontSize":"0.8125rem","lineHeight":"1.85"},"spacing":{"padding":{"top":"1.375rem","right":"1.375rem","bottom":"1.375rem","left":"1.375rem"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","radius":"0px"}}} -->
<pre class="wp-block-code" style="border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:1.375rem;padding-right:1.375rem;padding-bottom:1.375rem;padding-left:1.375rem;font-size:0.8125rem;line-height:1.85"><code><mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--text-muted)" class="has-inline-color has-text-muted-color">// Access core through the facade</mark><br><mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--accent)" class="has-inline-color has-accent-color">use</mark> ArtisanPackUI\Core\Facades\<mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--secondary)" class="has-inline-color has-secondary-color">Core</mark>;<br><br>$core = Core::<mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--secondary)" class="has-inline-color has-secondary-color">getInstance</mark>();</code></pre>
<!-- /wp:artisanpack/code --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/column -->

<!-- wp:artisanpack/column -->
<div class="wp-block-artisanpack-column wp-block-column"><!-- wp:artisanpack/group {"borderColor":"border","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"dimensions":{"minHeight":"100%"},"shadow":"var:preset|shadow|md"},"layout":{"type":"default"},"artisanpackEffects":{"overflowX":"hidden","overflowY":"hidden"}} -->
<div class="wp-block-artisanpack-group wp-block-group has-border-color has-border-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--md)"><!-- wp:artisanpack/paragraph {"backgroundColor":"surface-2","textColor":"text-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","lineHeight":"2.5rem"},"spacing":{"padding":{"right":"0.875rem","left":"0.875rem"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px","style":"solid"}}}} -->
<p class="wp-block-paragraph has-text-muted-color has-surface-2-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-right:0.875rem;padding-left:0.875rem;font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;line-height:2.5rem"><span data-icon-set="fas" data-icon-name="circle" style="font-size:0.6875rem;color:#FF5F57" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> <span data-icon-set="fas" data-icon-name="circle" style="font-size:0.6875rem;color:#FEBC2E" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> <span data-icon-set="fas" data-icon-name="circle" style="font-size:0.6875rem;color:#28C840" aria-hidden="true" class="ap-inline-icon"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span>  config.php</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/code {"style":{"typography":{"fontSize":"0.8125rem","lineHeight":"1.85"},"spacing":{"padding":{"top":"1.375rem","right":"1.375rem","bottom":"1.375rem","left":"1.375rem"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","radius":"0px"}}} -->
<pre class="wp-block-code" style="border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:1.375rem;padding-right:1.375rem;padding-bottom:1.375rem;padding-left:1.375rem;font-size:0.8125rem;line-height:1.85"><code><mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--text-muted)" class="has-inline-color has-text-muted-color">// Read any package's settings</mark><br>$cms = <mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--secondary)" class="has-inline-color has-secondary-color">config</mark>(<mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--success)" class="has-inline-color has-success-color">'artisanpack.cms-framework'</mark>);<br><br>$title = <mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--secondary)" class="has-inline-color has-secondary-color">config</mark>(<br>    <mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--success)" class="has-inline-color has-success-color">'artisanpack.cms-framework.settings.site_title'</mark>,<br>    <mark style="background-color:rgba(0,0,0,0);color:var(--wp--preset--color--success)" class="has-inline-color has-success-color">'Default Title'</mark><br>);</code></pre>
<!-- /wp:artisanpack/code --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/column --></div>
<!-- /wp:artisanpack/columns --></section>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"section","align":"full","style":{"spacing":{"padding":{"top":"6.5rem","bottom":"6.5rem","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"3rem"},"border":{"top":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"}}},"layout":{"type":"constrained","contentSize":"852px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-section-background-color has-background" style="border-top-color:var(--wp--preset--color--border-subtle);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-style:solid;border-bottom-width:1px;padding-top:6.5rem;padding-right:var(--wp--preset--spacing--gutter);padding-bottom:6.5rem;padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"textColor":"text-link","style":{"typography":{"textAlign":"center","fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.16em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center wp-block-paragraph has-text-link-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.16em;text-transform:uppercase">Requirements</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-weight:800">Supported versions</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/group {"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center","fontSize":"1rem","lineHeight":"1.65"}}} -->
<p class="has-text-align-center wp-block-paragraph has-text-muted-color has-text-color" style="font-size:1rem;line-height:1.65">Requires PHP 8.2+ and Laravel 11, 12 or 13. Pick the Core release that matches your stack.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/table {"className":"is-style-versions"} -->
<figure class="wp-block-table is-style-versions"><table class="has-fixed-layout"><thead><tr><th>Package version</th><th class="has-text-align-center" data-align="center">PHP</th><th>Laravel versions</th></tr></thead><tbody><tr><td>1.0.x</td><td class="has-text-align-center" data-align="center">8.2+</td><td>10.x, 11.x, 12.x</td></tr><tr><td>1.1.x</td><td class="has-text-align-center" data-align="center">8.2+</td><td>11.x, 12.x</td></tr><tr><td>1.2.x</td><td class="has-text-align-center" data-align="center">8.2+</td><td>11.x, 12.x, 13.x</td></tr></tbody><tfoot><tr><td colspan="3">Laravel 13 requires PHP 8.3+. PHP 8.2 users continue to receive Laravel 11 / 12.</td></tr></tfoot></table></figure>
<!-- /wp:artisanpack/table --></section>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"tagName":"section","gradient":"aurora","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-aurora-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"backgroundColor":"ink","className":"is-style-night","style":{"border":{"width":"3px","radius":"20px","gradient":"neon"},"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"3rem","right":"3rem"},"blockGap":"1.375rem"},"shadow":"var:preset|shadow|glow-gradient"},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-artisanpack-group wp-block-group is-style-night has-ink-background-color has-background" style="border-width:3px;border-radius:20px;padding-top:4rem;padding-right:3rem;padding-bottom:4rem;padding-left:3rem;box-shadow:var(--wp--preset--shadow--glow-gradient)"><!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Ready to build on <span class="ap-gradient-text">Core?</span></h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/group {"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-lead">Install the foundation in one command and start unifying your configuration today. Free and open source under the MIT license.</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/buttons {"style":{"spacing":{"blockGap":"0.875rem","margin":{"top":"1.75rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons" style="margin-top:1.75rem"><!-- wp:artisanpack/button {"fontSize":"button-lg","style":{"spacing":{"padding":{"top":"0.9375rem","bottom":"0.9375rem","left":"1.5rem","right":"1.5rem"}}},"bindings":{"url":{"source":"custom_field","args":{"key":"docs_url"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link has-button-lg-font-size has-custom-font-size wp-element-button" href="#" style="padding-top:0.9375rem;padding-right:1.5rem;padding-bottom:0.9375rem;padding-left:1.5rem">Read the docs <span class="ap-inline-icon" data-icon-set="fas" data-icon-name="arrow-right" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span></a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-hollow","fontSize":"button-lg","style":{"spacing":{"padding":{"top":"0.9375rem","bottom":"0.9375rem","left":"1.5rem","right":"1.5rem"}}},"bindings":{"url":{"source":"package","args":{"key":"github_url"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-hollow"><a class="wp-block-button__link has-button-lg-font-size has-custom-font-size wp-element-button" href="#" style="padding-top:0.9375rem;padding-right:1.5rem;padding-bottom:0.9375rem;padding-left:1.5rem"><span class="ap-inline-icon" data-icon-set="fab" data-icon-name="github" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span> View on GitHub</a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons --></div>
<!-- /wp:artisanpack/group --></section>
<!-- /wp:artisanpack/group -->
