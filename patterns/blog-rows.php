<?php

/**
 * Title: Blog — Rows
 * Slug: artisanpack-ui/blog-rows
 * Categories: featured, text
 * Synced: no
 * Description: Recent posts as rows: cover left, category, title, excerpt and byline right (design 8d).
 */
?>
<!-- wp:artisanpack/group {"tagName":"section","backgroundColor":"base","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|gutter","right":"var:preset|spacing|gutter"},"blockGap":"var:preset|spacing|title-gap"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-artisanpack-group alignfull wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--gutter);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--gutter)"><!-- wp:artisanpack/group {"tagName":"header","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<header class="wp-block-artisanpack-group wp-block-group"><!-- wp:artisanpack/paragraph {"className":"is-style-eyebrow","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center wp-block-paragraph is-style-eyebrow">Blog</p>
<!-- /wp:artisanpack/paragraph -->

<!-- wp:artisanpack/heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Recent posts</h2>
<!-- /wp:artisanpack/heading --></header>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/query {"queryId":"115","query":{"perPage":4,"postType":"post","orderBy":"date","order":"desc","inherit":false}} -->
<div class="wp-block-artisanpack-query"><!-- wp:artisanpack/post-template {"style":{"spacing":{"blockGap":"1.25rem"}}} -->
<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row","mobile":"column"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center","mobile":"stretch"}}},"borderColor":"border-subtle","backgroundColor":"surface","className":"is-style-linked","style":{"border":{"width":"1px","style":"solid","radius":"12px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"1.75rem"}},"artisanpackEffects":{"overflowX":"hidden","overflowY":"hidden"}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row mobile:ap-flex-col ap-flex-nowrap ap-items-center mobile:ap-items-stretch is-style-linked has-border-color has-border-subtle-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:artisanpack/group {"artisanpackFlex":{"item":{"basis":{"base":"280px","mobile":"auto"},"grow":{"base":0},"shrink":{"base":0}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-grow-0 ap-shrink-0 ap-basis-[280px] mobile:ap-basis-auto"><!-- wp:artisanpack/post-featured-image {"aspectRatio":"16/10"} /--></div>
<!-- /wp:artisanpack/group -->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"column"},"alignItems":{"base":"stretch"}},"item":{"grow":{"base":1}}},"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.75rem","bottom":"1.25rem","left":"0"},"blockGap":"0.625rem"}},"responsive":{"style.spacing.padding":{"mobile":{"top":"0","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-col ap-items-stretch ap-grow-1" style="padding-top:1.25rem;padding-right:1.75rem;padding-bottom:1.25rem;padding-left:0"><!-- wp:artisanpack/post-terms {"term":"category","className":"is-style-term-badge"} /-->

<!-- wp:artisanpack/post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1.375rem","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} /-->

<!-- wp:artisanpack/post-excerpt {"textColor":"text-muted","style":{"typography":{"fontSize":"0.90625rem","lineHeight":"1.6"}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"nowrap"},"alignItems":{"base":"center"}}},"textColor":"text-muted","style":{"typography":{"fontSize":"0.8125rem","lineHeight":"1.4"},"spacing":{"blockGap":"0.625rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-nowrap ap-items-center has-text-muted-color has-text-color" style="font-size:0.8125rem;line-height:1.4"><!-- wp:artisanpack/avatar {"size":28,"style":{"border":{"radius":"50%"}}} /-->

<!-- wp:artisanpack/group {"artisanpackFlex":{"container":{"enabled":{"base":true},"direction":{"base":"row"},"wrap":{"base":"wrap"},"alignItems":{"base":"center"}}},"style":{"spacing":{"blockGap":"0.3125rem"}}} -->
<div class="wp-block-artisanpack-group wp-block-group ap-flex ap-flex-row ap-flex-wrap ap-items-center"><!-- wp:artisanpack/post-author-name /-->

<!-- wp:artisanpack/post-reading-time {"prefix":"· "} /--></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group --></div>
<!-- /wp:artisanpack/group -->
<!-- /wp:artisanpack/post-template --></div>
<!-- /wp:artisanpack/query --></section>
<!-- /wp:artisanpack/group -->
