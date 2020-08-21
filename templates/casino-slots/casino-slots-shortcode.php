<div class="casino-slots-item">
    <div class="casino-slots-image">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </div>
    <div class="casino-slots-name">
        <?php echo get_the_title(); ?>
    </div>
    <div class="casino-slots-publisher">
        <?php echo get_field('slot_publisher'); ?>
    </div>
    <div class="casino-slots-slot-info">
        <div class="slot-info-field">
            <div class="slot-info-left"><?php echo __('RTP','all-in-casino'); ?></div>
            <div class="slot-info-right"><?php echo get_field('slot_payout_percentage'); ?></div>
        </div>
        <div class="slot-info-field">
            <div class="slot-info-left"><?php echo __('Bet per Spin','all-in-casino'); ?></div>
            <div class="slot-info-right"><?php echo get_field('slot_bet_range'); ?></div>
        </div>
        <div class="slot-info-field">
            <div class="slot-info-left"><?php echo __('Paylines','all-in-casino'); ?></div>
            <div class="slot-info-right"><?php echo get_field('slot_paylines'); ?></div>
        </div>
    </div>
    <div class="casino-slots-button">
            <a href="<?php echo get_permalink(); ?>" target="_blank"><?php echo __('Review','all-in-casino'); ?></a>
    </div>
</div>