<?php get_header(); ?>

<div class="single-casino-review">

    <div class="single-casino-lower aic-container">
        <h1><?php the_field('review_archive_page_title', 'options'); ?></h1>
        <main class="single-casino-main">
            <?php the_field('review_archive_page_content', 'options'); ?>
        </main>
    </div>

</div>

<?php get_footer(); ?>