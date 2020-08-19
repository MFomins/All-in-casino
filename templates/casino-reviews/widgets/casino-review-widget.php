<div class="casino-review-widget-wrap">
    <div class="casino-review-widget-upper">
        <div class="casino-review-widget-image">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </div>
        <div class="casino-review-widget-icon">
            <img src="<?php echo ALL_IN_CASINO_PLUGIN_URL . 'public/img/icon-gift.png' ?>" alt="Gift Icon">
        </div>
        <div class="casino-review-widget-bonus">
            <?php echo get_field('review_bonus_text_first_line'); ?>
        </div>
    </div>
    <div class="casino-review-widget-lower">
        <div class="review-cta">
            <a href="<?php the_field('review_redirect'); ?>"><?php _e('Get Bonus', 'all-in-casino'); ?></a>
        </div>
    </div>
</div>