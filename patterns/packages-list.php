<?php

/**
 * Title: Packages — List
 * Slug: artisanpack-ui/packages-list
 * Categories: featured, text
 * Synced: no
 * Description: Package rows with version, install command and a View button (design 7d).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Packages</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Related packages</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Others in the ArtisanPack stack you might want.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/query {"queryId":"106","query":{"perPage":4,"postType":"package","orderBy":"title","order":"asc","inherit":false},"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template {"style":{"spacing":{"blockGap":"1rem"}}} -->
<!-- wp:artisanpack/post-variant {"matcher":{"kind":"pattern","value":"every-nth:3:start:2"},"label":"Secondary"} -->
<div class="wp-block-artisanpack-post-variant"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row","mobile":"column"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center","mobile":"stretch"}}},"borderColor":"secondary","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.375rem","right":"1.625rem","bottom":"1.375rem","left":"1.625rem"},"blockGap":"1.5rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row mobile:ap-flex-col ap-flex-nowrap ap-items-center mobile:ap-items-stretch is-style-boxed has-border-color has-secondary-border-color" style="padding-top:1.375rem;padding-right:1.625rem;padding-bottom:1.375rem;padding-left:1.625rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":19,"backgroundColor":"secondary-tint","iconColor":"#00E5FF","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.90625rem","right":"0.90625rem","bottom":"0.90625rem","left":"0.90625rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"flex-start"}},"item":{"grow":{"base":1},"shrink":{"base":1},"basis":{"base":"0"}}},"style":{"spacing":{"blockGap":"0.1875rem"},"dimensions":{"minWidth":"0"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-start ap-grow-1 ap-shrink-1 ap-basis-0"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"baseline"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-baseline"><!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontFamily":"mono","style":{"typography":{"fontSize":"0.75rem"}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-mono-font-family" style="font-size:0.75rem">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.5"}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row","mobile":"column"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center","mobile":"stretch"}}},"style":{"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row mobile:ap-flex-col ap-flex-nowrap ap-items-center mobile:ap-items-stretch"><!-- wp:artisanpack/copy-command {"backgroundColor":"surface","bindings":{"command":{"source":"package","args":{"key":"install_command"}}}} /-->

<!-- wp:artisanpack/buttons -->
<div class="wp-block-artisanpack-buttons wp-block-buttons"><!-- wp:artisanpack/button {"className":"is-style-hollow","style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"padding":{"top":"0.4375rem","right":"0.875rem","bottom":"0.4375rem","left":"0.875rem"}}},"bindings":{"url":{"source":"package","args":{"key":"permalink"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-hollow"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="padding-top:0.4375rem;padding-right:0.875rem;padding-bottom:0.4375rem;padding-left:0.875rem;font-size:0.8125rem">View</a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/post-variant -->

<!-- wp:artisanpack/post-variant {"matcher":{"kind":"pattern","value":"every-nth:3:start:3"},"label":"Accent"} -->
<div class="wp-block-artisanpack-post-variant"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row","mobile":"column"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center","mobile":"stretch"}}},"borderColor":"accent","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.375rem","right":"1.625rem","bottom":"1.375rem","left":"1.625rem"},"blockGap":"1.5rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row mobile:ap-flex-col ap-flex-nowrap ap-items-center mobile:ap-items-stretch is-style-boxed has-border-color has-accent-border-color" style="padding-top:1.375rem;padding-right:1.625rem;padding-bottom:1.375rem;padding-left:1.625rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":19,"backgroundColor":"accent-tint","iconColor":"#E040FB","isDecorative":true,"className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.90625rem","right":"0.90625rem","bottom":"0.90625rem","left":"0.90625rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"flex-start"}},"item":{"grow":{"base":1},"shrink":{"base":1},"basis":{"base":"0"}}},"style":{"spacing":{"blockGap":"0.1875rem"},"dimensions":{"minWidth":"0"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-start ap-grow-1 ap-shrink-1 ap-basis-0"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"baseline"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-baseline"><!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontFamily":"mono","style":{"typography":{"fontSize":"0.75rem"}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-mono-font-family" style="font-size:0.75rem">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.5"}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row","mobile":"column"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center","mobile":"stretch"}}},"style":{"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row mobile:ap-flex-col ap-flex-nowrap ap-items-center mobile:ap-items-stretch"><!-- wp:artisanpack/copy-command {"backgroundColor":"surface","bindings":{"command":{"source":"package","args":{"key":"install_command"}}}} /-->

<!-- wp:artisanpack/buttons -->
<div class="wp-block-artisanpack-buttons wp-block-buttons"><!-- wp:artisanpack/button {"className":"is-style-hollow","style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"padding":{"top":"0.4375rem","right":"0.875rem","bottom":"0.4375rem","left":"0.875rem"}}},"bindings":{"url":{"source":"package","args":{"key":"permalink"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-hollow"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="padding-top:0.4375rem;padding-right:0.875rem;padding-bottom:0.4375rem;padding-left:0.875rem;font-size:0.8125rem">View</a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/post-variant -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row","mobile":"column"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center","mobile":"stretch"}}},"borderColor":"primary","className":"is-style-boxed","style":{"spacing":{"padding":{"top":"1.375rem","right":"1.625rem","bottom":"1.375rem","left":"1.625rem"},"blockGap":"1.5rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row mobile:ap-flex-col ap-flex-nowrap ap-items-center mobile:ap-items-stretch is-style-boxed has-border-color has-primary-border-color" style="padding-top:1.375rem;padding-right:1.625rem;padding-bottom:1.375rem;padding-left:1.625rem"><!-- wp:artisanpack/icon {"iconRef":{"set":"fas","name":"cube"},"size":19,"iconColor":"#FFFFFF","isDecorative":true,"gradient":"brand","className":"is-style-tile","style":{"spacing":{"padding":{"top":"0.90625rem","right":"0.90625rem","bottom":"0.90625rem","left":"0.90625rem"}}},"bindings":{"iconRef":{"source":"custom_field","args":{"key":"icon"}}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"flex-start"}},"item":{"grow":{"base":1},"shrink":{"base":1},"basis":{"base":"0"}}},"style":{"spacing":{"blockGap":"0.1875rem"},"dimensions":{"minWidth":"0"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-start ap-grow-1 ap-shrink-1 ap-basis-0"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"baseline"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-baseline"><!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/paragraph {"textColor":"text-muted","fontFamily":"mono","style":{"typography":{"fontSize":"0.75rem"}},"bindings":{"content":{"source":"package","args":{"key":"version_label"},"onEmpty":"hide"}}} -->
<p class="wp-block-paragraph has-text-muted-color has-text-color has-mono-font-family" style="font-size:0.75rem">v1.0.0</p>
<!-- /wp:artisanpack/paragraph --></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.5"}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row","mobile":"column"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center","mobile":"stretch"}}},"style":{"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row mobile:ap-flex-col ap-flex-nowrap ap-items-center mobile:ap-items-stretch"><!-- wp:artisanpack/copy-command {"backgroundColor":"surface","bindings":{"command":{"source":"package","args":{"key":"install_command"}}}} /-->

<!-- wp:artisanpack/buttons -->
<div class="wp-block-artisanpack-buttons wp-block-buttons"><!-- wp:artisanpack/button {"className":"is-style-hollow","style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"padding":{"top":"0.4375rem","right":"0.875rem","bottom":"0.4375rem","left":"0.875rem"}}},"bindings":{"url":{"source":"package","args":{"key":"permalink"},"onEmpty":"hide"}}} -->
<div class="wp-block-artisanpack-button wp-block-button is-style-hollow"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="padding-top:0.4375rem;padding-right:0.875rem;padding-bottom:0.4375rem;padding-left:0.875rem;font-size:0.8125rem">View</a></div>
<!-- /wp:artisanpack/button --></div>
<!-- /wp:artisanpack/buttons --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></section>
<!-- /wp:artisanpack/group -->
