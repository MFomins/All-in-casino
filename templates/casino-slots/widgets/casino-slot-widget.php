<div class="casino-slots-item">
    <div class="casino-slots-image">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </div>
    <div class="casino-slots-name">
        <?php echo get_the_title(); ?>
    </div>

    <div class="casino-slots-button">
        <a href="#"><?php _e('Review', 'all-in-casino'); ?></a>
    </div>
</div>