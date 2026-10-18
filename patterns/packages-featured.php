<?php

/**
 * Title: Packages — Featured
 * Slug: artisanpack-ui/packages-featured
 * Categories: featured, gallery
 * Synced: no
 * Description: The featured package in a neon frame, with three more listed beside it (design 7c).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Packages</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Start with the flagship</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Composer packages for the Laravel TALL stack — install what you need.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/columns {"verticalAlignment":"stretch","style":{"spacing":{"blockGap":{"left":"1.375rem","top":"1.375rem"}}}} -->
<div class="wp-block-artisanpack-columns wp-block-columns are-vertically-aligned-stretch"><!-- wp:artisanpack/column {"verticalAlignment":"stretch","width":"57.5%"} -->
<div class="wp-block-artisanpack-column wp-block-column is-vertically-aligned-stretch" style="flex-basis:57.5%"><!-- wp:artisanpack/query {"queryId":"104","query":{"perPage":1,"postType":"package","orderBy":"title","order":"asc","inherit":false,"sticky":"only"}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template -->
<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"flex-start"}}},"backgroundColor":"surface","style":{"border":{"width":"3px","style":"solid","radius":"12px","gradient":"neon"},"shadow":"var:preset|shadow|glow-gradient","dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"},"blockGap":"1.125rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-start has-surface-background-color has-background" style="border-style:solid;border-width:3px;border-radius:12px;min-height:100%;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem;box-shadow:var(--wp--preset--shadow--glow-gradient)"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":26,"iconColor":"#FFFFFF","isDecorative":true,"gradient":"brand","className":"is-style-tile","style":{"spacing":{"padding":{"top":"1.1875rem","right":"1.1875rem","bottom":"1.1875rem","left":"1.1875rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/group {"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/copy-command {"backgroundColor":"ink","className":"is-style-night","bindings":{"command":{"source":"package","args":{"key":"install_command"}}}} /-->

<!-- wp:artisanpack/buttons {"style":{"spacing":{"margin":{"top":"0.25rem"}}}} -->
<div class="wp-block-artisanpack-buttons wp-block-buttons" style="margin-top:0.25rem"><!-- wp:artisanpack/button {"bindings":{"url":{"source":"package","args":{"key":"permalink"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">View package <span class="ap-inline-icon" data-icon-set="fas" data-icon-name="arrow-right" aria-hidden="true"><svg aria-hidden="true" viewBox="0 0 24 24"></svg></span></a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons --></div>
<!-- /wp:artisanpack/group -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></div>
<!-- /wp:artisanpack/column -->

<!-- wp:artisanpack/column {"verticalAlignment":"stretch"} -->
<div class="wp-block-artisanpack-column wp-block-column is-vertically-aligned-stretch"><!-- wp:artisanpack/query {"queryId":"105","query":{"perPage":3,"postType":"package","orderBy":"title","order":"asc","inherit":false,"sticky":"exclude"}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template {"style":{"spacing":{"blockGap":"1.375rem"}}} -->
<!-- wp:artisanpack/post-variant {"matcher":{"kind":"pattern","value":"every-nth:3:start:1"},"label":"Secondary"} -->
<div class="wp-block-artisanpack-post-variant"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"borderColor":"secondary","className":"is-style-boxed is-style-linked","style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"blockGap":"1rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center is-style-boxed is-style-linked has-border-color has-secondary-border-color" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":18,"backgroundColor":"secondary-tint","iconColor":"#00E5FF","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.8125rem","right":"0.8125rem","bottom":"0.8125rem","left":"0.8125rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.8125rem","lineHeight":"1.5"}}} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/post-variant -->

<!-- wp:artisanpack/post-variant {"matcher":{"kind":"pattern","value":"every-nth:3:start:2"},"label":"Accent"} -->
<div class="wp-block-artisanpack-post-variant"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"borderColor":"accent","className":"is-style-boxed is-style-linked","style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"blockGap":"1rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center is-style-boxed is-style-linked has-border-color has-accent-border-color" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":18,"backgroundColor":"accent-tint","iconColor":"#E040FB","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.8125rem","right":"0.8125rem","bottom":"0.8125rem","left":"0.8125rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.8125rem","lineHeight":"1.5"}}} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/post-variant -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"borderColor":"primary","className":"is-style-boxed is-style-linked","style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"blockGap":"1rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center is-style-boxed is-style-linked has-border-color has-primary-border-color" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":18,"iconColor":"#FFFFFF","isDecorative":true,"gradient":"brand","className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.8125rem","right":"0.8125rem","bottom":"0.8125rem","left":"0.8125rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.8125rem","lineHeight":"1.5"}}} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></div>
<!-- /wp:artisanpack/column --></div>
<!-- /wp:artisanpack/columns --></section>
<!-- /wp:artisanpack/group -->
