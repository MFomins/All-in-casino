<div class="casino-reviews-1" <?php if (get_field('review_bg_color')) {
                                    echo 'style="background-color:' . get_field('review_bg_color') . '"';
                                } ?>>
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <a href="<?php echo get_permalink(); ?>"><i class="icon-info"></i></i><?php the_title(); ?> →</a href="#">
</div>
<div class="casino-reviews-2">
    <div class="bonus-main-line"><?php echo get_field('review_bonus_text_first_line'); ?></div>
    <div class="bonus-second-line"><?php echo get_field('review_bonus_text_second_line'); ?></div>
</div>
<div class="casino-reviews-3">
    <?php
    // Check rows exists.
    if (have_rows('review_casino_pluses')) :

        // Loop through rows.
        while (have_rows('review_casino_pluses')) : the_row();

            // Load sub field value.
            $sub_value = get_sub_field('review_item_field');
            // Do something...
            echo '<div class="field-item"><img src="' . ALL_IN_CASINO_PLUGIN_URL . 'public/img/icons/checked.svg' . '" alt="Checked">' . $sub_value . '</div>';
        // End loop.
        endwhile;

    endif;
    ?>
</div>
<div class="casino-reviews-4">
    <div class="terms-and-cta-wrap">
        <div class="toplist-cta-wrap">
            <a href="<?php the_field('review_redirect'); ?>" class="animated-button">
                <?php echo __('Play', 'all-in-casino'); ?>
            </a>
        </div>
        <div class="casino-review-terms">
            <?php if (get_field('review_terms')) : ?>
                <?php echo get_field('review_terms'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>