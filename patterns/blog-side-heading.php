<?php

/**
 * Title: Blog — Side Heading
 * Slug: artisanpack-ui/blog-side-heading
 * Categories: featured, text
 * Synced: no
 * Description: A sticky heading on the left, the latest posts in a two-column grid on the right (design 8g).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/columns {"style":{"spacing":{"blockGap":{"left":"3rem","top":"2.5rem"}}}} -->
<div class="wp-block-artisanpack-columns wp-block-columns"><!-- wp:artisanpack/column {"width":"32%"} -->
<div class="wp-block-artisanpack-column wp-block-column" style="flex-basis:32%"><!-- wp:artisanpack/group {"style":{"position":{"value":"sticky","offsets":{"top":{"value":6.3125,"unit":"rem"}}},"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"default"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow"} -->
<p class="wp-block-paragraph is-style-eyebrow">Blog</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading -->
<h2 class="wp-block-heading">From the workshop</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Notes on building, theming and shipping with the TALL stack.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/column -->

<!-- wp:artisanpack/column -->
<div class="wp-block-artisanpack-column wp-block-column"><!-- wp:artisanpack/query {"queryId":"118","query":{"perPage":4,"postType":"post","orderBy":"date","order":"desc","inherit":false}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template {"layout":"grid","columns":2,"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"borderColor":"border-subtle","backgroundColor":"surface","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0.75rem"},"dimensions":{"minHeight":"100%"},"shadow":"var:preset|shadow|sm"},"artisanpackEffects":{"overflowX":"hidden","overflowY":"hidden"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--sm)"><!-- wp:artisanpack/post-featured-image {"aspectRatio":"16/10"} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}},"item":{"grow":{"base":1}}},"style":{"spacing":{"padding":{"top":"0.375rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch ap-grow-1" style="padding-top:0.375rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem"><!-- wp:artisanpack/post-terms {"term":"category","className":"is-style-term-badge"} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.90625rem","lineHeight":"1.6"}}} /-->

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
<!-- /wp:artisanpack/column --></div>
<!-- /wp:artisanpack/columns --></section>
<!-- /wp:artisanpack/group -->
