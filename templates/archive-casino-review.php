<?php get_header(); ?>

<div class="casino-review-archive">
    <div class="aic-container">
        <div id="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
    </div>
    <div class="casino-review-archive-wrap">
        <div class="aic-container">
            <h1><?php the_field('review_archive_page_title', 'options'); ?></h1>
            <main class="casino-review-archive-content">
                <?php the_field('review_archive_page_content', 'options'); ?>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>