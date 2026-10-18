<?php

/**
 * Title: Packages — Meta
 * Slug: artisanpack-ui/packages-meta
 * Categories: featured, gallery
 * Synced: no
 * Description: Package cards with a version badge, tags and a View package link (design 7b).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Packages</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Browse the pack</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Composer packages for the Laravel TALL stack — install what you need.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/query {"queryId":"103","query":{"perPage":6,"postType":"package","orderBy":"title","order":"asc","inherit":false}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template {"layout":"grid","style":{"spacing":{"blockGap":"1.375rem"}}} -->
<!-- wp:artisanpack/post-variant {"matcher":{"kind":"pattern","value":"every-nth:3:start:2"},"label":"Secondary"} -->
<div class="wp-block-artisanpack-post-variant"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"secondary","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.875rem","right":"1.875rem","bottom":"1.875rem","left":"1.875rem"},"blockGap":"0.875rem"},"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch is-style-boxed has-border-color has-secondary-border-color" style="min-height:100%;padding-top:1.875rem;padding-right:1.875rem;padding-bottom:1.875rem;padding-left:1.875rem"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"flex-start"},"justifyContent":{"base":"space-between"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-justify-between ap-items-start"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":19,"backgroundColor":"secondary-tint","iconColor":"#00E5FF","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.90625rem","right":"0.90625rem","bottom":"0.90625rem","left":"0.90625rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/paragraph {"className":"is-style-badge","style":{"color":{"background":"transparent"},"border":{"width":"1.5px","style":"solid","color":"var:preset|color|border"},"typography":{"fontSize":"0.6875rem"},"spacing":{"padding":{"top":"0.125rem","right":"0.5rem","bottom":"0.125rem","left":"0.5rem"}}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph is-style-badge has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1.5px;background-color:transparent;padding-top:0.125rem;padding-right:0.5rem;padding-bottom:0.125rem;padding-left:0.5rem;font-size:0.6875rem">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.90625rem","lineHeight":"1.6"}}} /-->

<!-- wp:artisanpack/post-terms {"term":"package-tag","className":"is-style-tags"} /-->

<!-- wp:artisanpack/read-more {"content":"View package →","textColor":"text-link","style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"spacing":{"margin":{"top":"auto"},"padding":{"top":"0.375rem"}},"elements":{"link":{"color":{"text":"var:preset|color|text-link"}}}}} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/post-variant -->

<!-- wp:artisanpack/post-variant {"matcher":{"kind":"pattern","value":"every-nth:3:start:3"},"label":"Accent"} -->
<div class="wp-block-artisanpack-post-variant"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"accent","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.875rem","right":"1.875rem","bottom":"1.875rem","left":"1.875rem"},"blockGap":"0.875rem"},"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch is-style-boxed has-border-color has-accent-border-color" style="min-height:100%;padding-top:1.875rem;padding-right:1.875rem;padding-bottom:1.875rem;padding-left:1.875rem"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"flex-start"},"justifyContent":{"base":"space-between"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-justify-between ap-items-start"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":19,"backgroundColor":"accent-tint","iconColor":"#E040FB","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.90625rem","right":"0.90625rem","bottom":"0.90625rem","left":"0.90625rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/paragraph {"className":"is-style-badge","style":{"color":{"background":"transparent"},"border":{"width":"1.5px","style":"solid","color":"var:preset|color|border"},"typography":{"fontSize":"0.6875rem"},"spacing":{"padding":{"top":"0.125rem","right":"0.5rem","bottom":"0.125rem","left":"0.5rem"}}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph is-style-badge has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1.5px;background-color:transparent;padding-top:0.125rem;padding-right:0.5rem;padding-bottom:0.125rem;padding-left:0.5rem;font-size:0.6875rem">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.90625rem","lineHeight":"1.6"}}} /-->

<!-- wp:artisanpack/post-terms {"term":"package-tag","className":"is-style-tags"} /-->

<!-- wp:artisanpack/read-more {"content":"View package →","textColor":"text-link","style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"spacing":{"margin":{"top":"auto"},"padding":{"top":"0.375rem"}},"elements":{"link":{"color":{"text":"var:preset|color|text-link"}}}}} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/post-variant -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"primary","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.875rem","right":"1.875rem","bottom":"1.875rem","left":"1.875rem"},"blockGap":"0.875rem"},"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch is-style-boxed has-border-color has-primary-border-color" style="min-height:100%;padding-top:1.875rem;padding-right:1.875rem;padding-bottom:1.875rem;padding-left:1.875rem"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"flex-start"},"justifyContent":{"base":"space-between"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-justify-between ap-items-start"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":19,"iconColor":"#FFFFFF","isDecorative":true,"gradient":"brand","className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.90625rem","right":"0.90625rem","bottom":"0.90625rem","left":"0.90625rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/paragraph {"className":"is-style-badge","style":{"color":{"background":"transparent"},"border":{"width":"1.5px","style":"solid","color":"var:preset|color|border"},"typography":{"fontSize":"0.6875rem"},"spacing":{"padding":{"top":"0.125rem","right":"0.5rem","bottom":"0.125rem","left":"0.5rem"}}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph is-style-badge has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1.5px;background-color:transparent;padding-top:0.125rem;padding-right:0.5rem;padding-bottom:0.125rem;padding-left:0.5rem;font-size:0.6875rem">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.90625rem","lineHeight":"1.6"}}} /-->

<!-- wp:artisanpack/post-terms {"term":"package-tag","className":"is-style-tags"} /-->

<!-- wp:artisanpack/read-more {"content":"View package →","textColor":"text-link","style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"spacing":{"margin":{"top":"auto"},"padding":{"top":"0.375rem"}},"elements":{"link":{"color":{"text":"var:preset|color|text-link"}}}}} /--></div>
<!-- /wp:artisanpack/group -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></section>
<!-- /wp:artisanpack/group -->
