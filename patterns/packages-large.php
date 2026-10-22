<?php

/**
 * Title: Packages — Large
 * Slug: artisanpack-ui/packages-large
 * Categories: featured, gallery
 * Synced: no
 * Description: Two large package cards with a meta line, tags and two buttons (design 7g).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Packages</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Featured packages</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Composer packages for the Laravel TALL stack — install what you need.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/grid {"numColumns":2,"style":{"spacing":{"blockGap":"1.375rem"}}} -->
<div class="wp-block-artisanpack-grid ap-grid ap-grid-has-2-base-columns ap-grid-layout-fixed"><!-- wp:artisanpack/grid-item -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row"><!-- wp:artisanpack/single-content {"postId":21,"postType":"package"} -->
<div class="wp-block-artisanpack-single-content ap-single-content"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"primary","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"2.25rem","right":"2.25rem","bottom":"2.25rem","left":"2.25rem"},"blockGap":"1rem"},"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch is-style-boxed has-border-color has-primary-border-color" style="min-height:100%;padding-top:2.25rem;padding-right:2.25rem;padding-bottom:2.25rem;padding-left:2.25rem"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":22,"iconColor":"#FFFFFF","isDecorative":true,"gradient":"brand","className":"is-style-tile","style":{"spacing":{"padding":{"top":"1.0625rem","right":"1.0625rem","bottom":"1.0625rem","left":"1.0625rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.375rem","fontWeight":"700","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontFamily":"mono","style":{"typography":{"fontSize":"0.78125rem"}},"bindings":{"content":{"source":"package","args":{"key":"meta"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-mono-font-family" style="font-size:0.78125rem">v1.0.0 · MIT</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.96875rem","lineHeight":"1.65"}}} /-->

<!-- wp:artisanpack/post-terms {"term":"package-tag","className":"is-style-tags"} /-->

<!-- wp:artisanpack/buttons {"style":{"spacing":{"margin":{"top":"0.25rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons" style="margin-top:0.25rem"><!-- wp:artisanpack/button {"bindings":{"url":{"source":"package","args":{"key":"permalink"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">View package <span class="ap-inline-icon" data-icon-set="fas" data-icon-name="arrow-right" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span></a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-hollow","bindings":{"url":{"source":"custom_field","args":{"key":"docs_url"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-hollow"><a class="wp-block-button__link wp-element-button" href="#">Docs</a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/single-content --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row"><!-- wp:artisanpack/single-content {"postId":36,"postType":"package"} -->
<div class="wp-block-artisanpack-single-content ap-single-content"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"secondary","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"2.25rem","right":"2.25rem","bottom":"2.25rem","left":"2.25rem"},"blockGap":"1rem"},"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch is-style-boxed has-border-color has-secondary-border-color" style="min-height:100%;padding-top:2.25rem;padding-right:2.25rem;padding-bottom:2.25rem;padding-left:2.25rem"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":22,"backgroundColor":"secondary-tint","iconColor":"#00E5FF","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"1.0625rem","right":"1.0625rem","bottom":"1.0625rem","left":"1.0625rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.375rem","fontWeight":"700","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontFamily":"mono","style":{"typography":{"fontSize":"0.78125rem"}},"bindings":{"content":{"source":"package","args":{"key":"meta"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-mono-font-family" style="font-size:0.78125rem">v1.0.0 · MIT</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.96875rem","lineHeight":"1.65"}}} /-->

<!-- wp:artisanpack/post-terms {"term":"package-tag","className":"is-style-tags"} /-->

<!-- wp:artisanpack/buttons {"style":{"spacing":{"margin":{"top":"0.25rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons" style="margin-top:0.25rem"><!-- wp:artisanpack/button {"bindings":{"url":{"source":"package","args":{"key":"permalink"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">View package <span class="ap-inline-icon" data-icon-set="fas" data-icon-name="arrow-right" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span></a></div>
<!-- /wp:artisanpack/button -->

<!-- wp:artisanpack/button {"className":"is-style-hollow","bindings":{"url":{"source":"custom_field","args":{"key":"docs_url"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-hollow"><a class="wp-block-button__link wp-element-button" href="#">Docs</a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/single-content --></div>
<!-- /wp:artisanpack/grid-item --></div>
<!-- /wp:artisanpack/grid --></section>
<!-- /wp:artisanpack/group -->
