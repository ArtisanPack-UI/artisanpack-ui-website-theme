<?php

/**
 * Title: Blog — Magazine
 * Slug: artisanpack-ui/blog-magazine
 * Categories: featured, text
 * Synced: no
 * Description: The latest post as a large card beside two smaller stacked cards (design 8h).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Blog</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">This week's reads</h2>
<!-- /wp:artisanpack/heading --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/columns {"style":{"spacing":{"blockGap":{"left":"1.5rem","top":"1.5rem"}}}} -->
<div class="wp-block-artisanpack-columns wp-block-columns"><!-- wp:artisanpack/column {"width":"60%"} -->
<div class="wp-block-artisanpack-column wp-block-column" style="flex-basis:60%"><!-- wp:artisanpack/query {"queryId":"119","query":{"perPage":1,"postType":"post","orderBy":"date","order":"desc","inherit":false}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template -->
<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"border-subtle","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0.75rem"},"dimensions":{"minHeight":"100%"},"shadow":"var:preset|shadow|sm"},"artisanpackEffects":{"overflowX":"hidden","overflowY":"hidden"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--sm)"><!-- wp:artisanpack/post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}},"item":{"grow":{"base":1}}},"style":{"spacing":{"padding":{"top":"0.375rem","right":"1.75rem","bottom":"1.75rem","left":"1.75rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch ap-grow-1" style="padding-top:0.375rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem"><!-- wp:artisanpack/post-terms {"term":"category","className":"is-style-term-badge"} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.625rem","fontWeight":"700","lineHeight":"1.25"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.65"}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"textColor":"text-muted","style":{"typography":{"fontSize":"0.8125rem","lineHeight":"1.4"},"spacing":{"blockGap":"0.625rem","margin":{"top":"auto"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center has-text-muted-color has-text-color" style="margin-top:auto;font-size:0.8125rem;line-height:1.4"><!-- wp:artisanpack/avatar {"size":28,"style":{"border":{"radius":"50%"}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.3125rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-center"><!-- wp:artisanpack/post-author-name /-->

<!-- wp:artisanpack/post-reading-time {"prefix":"· "} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></div>
<!-- /wp:artisanpack/column -->

<!-- wp:artisanpack/column -->
<div class="wp-block-artisanpack-column wp-block-column"><!-- wp:artisanpack/query {"queryId":"120","query":{"perPage":2,"postType":"post","orderBy":"date","order":"desc","inherit":false,"offset":1}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"stretch"}}},"borderColor":"border-subtle","backgroundColor":"surface","className":"is-style-linked","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"artisanpackEffects":{"overflowX":"hidden","overflowY":"hidden"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-stretch is-style-linked has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:artisanpack/group {"artisanpackFlex":{"item":{"basis":{"base":"130px"},"grow":{"base":0},"shrink":{"base":0}}},"style":{"dimensions":{"minHeight":"100%"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-grow-0 ap-shrink-0 ap-basis-[130px]" style="min-height:100%"><!-- wp:artisanpack/post-featured-image {"height":"100%","style":{"dimensions":{"minHeight":"100%"}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"},"justifyContent":{"base":"center"}},"item":{"grow":{"base":1}}},"style":{"spacing":{"padding":{"top":"1.125rem","right":"1.25rem","bottom":"1.125rem","left":"1.25rem"},"blockGap":"0.5rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-justify-center ap-items-stretch ap-grow-1" style="padding-top:1.125rem;padding-right:1.25rem;padding-bottom:1.125rem;padding-left:1.25rem"><!-- wp:artisanpack/post-terms {"term":"category","style":{"typography":{"fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|primary-text"}}}}} /-->

<!-- wp:artisanpack/post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"1.03125rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"center"}}},"textColor":"text-muted","style":{"typography":{"fontSize":"0.78125rem","lineHeight":"1.4"},"spacing":{"blockGap":"0.3125rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-center has-text-muted-color has-text-color" style="font-size:0.78125rem;line-height:1.4"><!-- wp:artisanpack/post-date {"format":"M j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:artisanpack/post-reading-time {"prefix":"· "} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></div>
<!-- /wp:artisanpack/column --></div>
<!-- /wp:artisanpack/columns --></section>
<!-- /wp:artisanpack/group -->
