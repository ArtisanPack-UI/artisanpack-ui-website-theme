<?php

/**
 * Title: Packages — Stats
 * Slug: artisanpack-ui/packages-stats
 * Categories: featured, gallery
 * Synced: no
 * Description: Package cards with an installs / latest / license strip (design 7h).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Packages</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Trusted, maintained, growing</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Composer packages for the Laravel TALL stack — install what you need.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/grid {"numColumns":3,"style":{"spacing":{"blockGap":"1.375rem"}}} -->
<div class="wp-block-artisanpack-grid ap-grid ap-grid-has-3-base-columns ap-grid-layout-fixed"><!-- wp:artisanpack/grid-item -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row"><!-- wp:artisanpack/single-content {"postId":21,"postType":"package"} -->
<div class="wp-block-artisanpack-single-content ap-single-content"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"primary","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.875rem","right":"1.875rem","bottom":"1.875rem","left":"1.875rem"},"blockGap":"0.875rem"},"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch is-style-boxed has-border-color has-primary-border-color" style="min-height:100%;padding-top:1.875rem;padding-right:1.875rem;padding-bottom:1.875rem;padding-left:1.875rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":21,"iconColor":"#FFFFFF","isDecorative":true,"gradient":"brand","className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.96875rem","right":"0.96875rem","bottom":"0.96875rem","left":"0.96875rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.90625rem","lineHeight":"1.6"}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"flex-start"}}},"style":{"spacing":{"blockGap":"1.375rem","margin":{"top":"auto"},"padding":{"top":"0.875rem"}},"border":{"top":{"width":"1px","style":"solid","color":"var:preset|color|border-subtle"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-start" style="border-top-color:var(--wp--preset--color--border-subtle);border-top-style:solid;border-top-width:1px;margin-top:auto;padding-top:0.875rem"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"download"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"downloads"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">installs</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"tag"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">latest</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"scale-balanced"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"license"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">MIT</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">license</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/single-content --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row"><!-- wp:artisanpack/single-content {"postId":36,"postType":"package"} -->
<div class="wp-block-artisanpack-single-content ap-single-content"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"secondary","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.875rem","right":"1.875rem","bottom":"1.875rem","left":"1.875rem"},"blockGap":"0.875rem"},"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch is-style-boxed has-border-color has-secondary-border-color" style="min-height:100%;padding-top:1.875rem;padding-right:1.875rem;padding-bottom:1.875rem;padding-left:1.875rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":21,"backgroundColor":"secondary-tint","iconColor":"#00E5FF","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.96875rem","right":"0.96875rem","bottom":"0.96875rem","left":"0.96875rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.90625rem","lineHeight":"1.6"}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"flex-start"}}},"style":{"spacing":{"blockGap":"1.375rem","margin":{"top":"auto"},"padding":{"top":"0.875rem"}},"border":{"top":{"width":"1px","style":"solid","color":"var:preset|color|border-subtle"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-start" style="border-top-color:var(--wp--preset--color--border-subtle);border-top-style:solid;border-top-width:1px;margin-top:auto;padding-top:0.875rem"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"download"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"downloads"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">installs</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"tag"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">latest</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"scale-balanced"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"license"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">MIT</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">license</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/single-content --></div>
<!-- /wp:artisanpack/grid-item -->

<!-- wp:artisanpack/grid-item -->
<div class="wp-block-artisanpack-grid-item ap-grid-item ap-grid-item-layout-normal ap-grid-item-span-1-base-columns ap-grid-item-span-1-base-row"><!-- wp:artisanpack/single-content {"postId":12,"postType":"package"} -->
<div class="wp-block-artisanpack-single-content ap-single-content"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"accent","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.875rem","right":"1.875rem","bottom":"1.875rem","left":"1.875rem"},"blockGap":"0.875rem"},"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch is-style-boxed has-border-color has-accent-border-color" style="min-height:100%;padding-top:1.875rem;padding-right:1.875rem;padding-bottom:1.875rem;padding-left:1.875rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":21,"backgroundColor":"accent-tint","iconColor":"#E040FB","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.96875rem","right":"0.96875rem","bottom":"0.96875rem","left":"0.96875rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.90625rem","lineHeight":"1.6"}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"flex-start"}}},"style":{"spacing":{"blockGap":"1.375rem","margin":{"top":"auto"},"padding":{"top":"0.875rem"}},"border":{"top":{"width":"1px","style":"solid","color":"var:preset|color|border-subtle"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-start" style="border-top-color:var(--wp--preset--color--border-subtle);border-top-style:solid;border-top-width:1px;margin-top:auto;padding-top:0.875rem"><!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"download"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"downloads"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">installs</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"tag"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">latest</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"scale-balanced"},"size":12,"iconColor":"#00E5FF","isDecorative":true} /-->

<!-- wp:artisanpack/paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700","lineHeight":"1.3"}},"bindings":{"content":{"source":"package","args":{"key":"license"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph" style="font-size:1rem;font-weight:700;line-height:1.3">MIT</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","style":{"typography":{"fontSize":"0.71875rem","textTransform":"uppercase","letterSpacing":"0.06em","lineHeight":"1.3"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color" style="font-size:0.71875rem;letter-spacing:0.06em;line-height:1.3;text-transform:uppercase">license</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/single-content --></div>
<!-- /wp:artisanpack/grid-item --></div>
<!-- /wp:artisanpack/grid --></section>
<!-- /wp:artisanpack/group -->
