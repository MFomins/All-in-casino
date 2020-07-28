<div class="casino-slots-item">
    <div class="casino-slots-image">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </div>
    <div class="casino-slots-name">
        <?php echo get_field('slot_name'); ?>
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
            <div class="slot-info-left"><?php echo __('Bet','all-in-casino'); ?></div>
            <div class="slot-info-right"><?php echo get_field('slot_bet_range'); ?></div>
        </div>
        <div class="slot-info-field">
            <div class="slot-info-left"><?php echo __('Jackpot','all-in-casino'); ?></div>
            <div class="slot-info-right"><?php echo get_field('slot_jackpot'); ?></div>
        </div>
    </div>
    <div class="casino-slots-button">
            <a href="<?php echo get_permalink(); ?>"><?php echo __('Review','all-in-casino'); ?></a>
    </div>
</div>