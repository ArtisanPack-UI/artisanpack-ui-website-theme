<?php

/**
 * Title: Blog — List
 * Slug: artisanpack-ui/blog-list
 * Categories: featured, text
 * Synced: no
 * Description: Every post as a plain row: category, title and a mono date, no images (design 8f).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Blog</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">The archive</h2>
<!-- /wp:artisanpack/heading -->

<!-- wp:artisanpack/paragraph {"className":"is-style-lead","style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"1.625rem"}}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-lead" style="margin-top:1.625rem">Every post, plainly listed.</p>
<!-- /wp:artisanpack/paragraph --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"layout":{"type":"constrained","contentSize":"772px"}} -->
<div class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/query {"queryId":"117","query":{"perPage":5,"postType":"post","orderBy":"date","order":"desc","inherit":false}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"baseline"},"justifyContent":{"base":"space-between"}}},"className":"is-style-linked","style":{"spacing":{"padding":{"top":"1.375rem","right":"0","bottom":"1.375rem","left":"0"},"blockGap":"1.5rem"},"border":{"bottom":{"color":"var:preset|color|border-subtle","width":"1px","style":"solid"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-justify-between ap-items-baseline is-style-linked" style="border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-style:solid;border-bottom-width:1px;padding-top:1.375rem;padding-right:0;padding-bottom:1.375rem;padding-left:0"><!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}}},"style":{"spacing":{"blockGap":"0.375rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch"><!-- wp:artisanpack/post-terms {"term":"category","style":{"typography":{"fontSize":"0.71875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|primary-text"}}}}} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"item":{"grow":{"base":0},"shrink":{"base":0}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-grow-0 ap-shrink-0"><!-- wp:artisanpack/post-date {"format":"M j","textColor":"text-muted","fontFamily":"mono","style":{"typography":{"fontSize":"0.8125rem"}},"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></div>
<!-- /wp:artisanpack/group --></section>
<!-- /wp:artisanpack/group -->
