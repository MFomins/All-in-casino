<div class="casino-reviews-1" <?php if (get_field('review_bg_color')) : ?> <?php echo 'style="background-color:' . get_field('review_bg_color') . '"'; ?> <?php endif; ?>>
    <?php if (get_field('sportsbook_ribbon')) : ?>
        <span class="ribbon"><?php the_field('sportsbook_ribbon'); ?></span>
    <?php endif; ?>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow"><?php the_post_thumbnail(); ?></a>
    <?php endif; ?>
</div>
<div class="casino-reviews-2">
    <div class="bonus-main-line"><?php echo get_field('sportsbook_bonus_text_first_line'); ?></div>
    <div class="bonus-second-line"><?php echo get_field('sportsbook_bonus_text_second_line'); ?></div>
</div>
<div class="casino-reviews-3">
    <?php
    // Check rows exists.
    if (have_rows('sportsbook_casino_pluses')) :
        // Loop through rows.
        while (have_rows('sportsbook_casino_pluses')) : the_row();
            // Load sub field value.
            $sub_value = get_sub_field('sportsbook_item_field');
            // Do something...
            echo '<div class="field-item"><img width="20px" height="15px" src="' . ALL_IN_CASINO_PLUGIN_URL . 'public/img/icons/checked.svg' . '" alt="Checked">' . $sub_value . '</div>';
        // End loop.
        endwhile;
    endif;
    ?>
</div>
<div class="casino-reviews-4">
    <div class="cta-wrap">
        <?php if (get_field('sportsbook_affiliate_redirect')) : ?>
            <a class="play" href="<?php the_field('sportsbook_affiliate_redirect'); ?>" target="_blank" rel="nofollow">
                <?php echo __('Play', 'all-in-casino'); ?>
            </a>
        <?php endif; ?>
        <a class="review" href="<?php echo get_permalink(); ?>" <?php if ($atts['itemlist'] == 'on') : echo 'itemprop="url"';
                                                                endif; ?>><span <?php if ($atts['itemlist'] == 'on') : echo 'itemprop="name"';
                                                                                endif; ?>><?php _e('Review »', 'all-in-casino'); ?></span></a>
    </div>
    <?php if (get_field('review_terms')) : ?>
        <div class="casino-review-terms">
            <?php echo get_field('review_terms'); ?>
        </div>
    <?php endif; ?>
</div>