<?php

/**
 * Title: Blog — Overlay
 * Slug: artisanpack-ui/blog-overlay
 * Categories: featured, text
 * Synced: no
 * Description: Category, title and date over each post's full-bleed featured image (design 8e).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Blog</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Straight off the workbench</h2>
<!-- /wp:artisanpack/heading --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/query {"queryId":"116","query":{"perPage":3,"postType":"post","orderBy":"date","order":"desc","inherit":false}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template {"layout":"grid","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<!-- wp:artisanpack/cover {"useFeaturedImage":true,"minHeight":22.5,"minHeightUnit":"rem","gradient":"scrim","contentPosition":"bottom left","borderColor":"border-subtle","className":"is-style-night is-style-linked","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-night is-style-linked has-border-color has-border-subtle-border-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem;min-height:22.5rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-scrim-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"flex-start"}}},"style":{"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-start"><!-- wp:artisanpack/post-terms {"term":"category","className":"is-style-term-badge-gradient"} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.3125rem","fontWeight":"700","lineHeight":"1.25"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"center"}}},"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"0.78125rem","lineHeight":"1.4"},"spacing":{"blockGap":"0.3125rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-center has-text-color" style="color:rgba(255,255,255,0.85);font-size:0.78125rem;line-height:1.4"><!-- wp:artisanpack/post-date {"format":"M j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:artisanpack/post-reading-time {"prefix":"· "} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div></div>
<!-- /wp:artisanpack/cover -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></section>
<!-- /wp:artisanpack/group -->
