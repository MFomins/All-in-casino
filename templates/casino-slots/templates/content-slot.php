<div class="casino-slots-wrap">
    <div class="casino-slots-head-bg">
        <div class="breadcrumbs aic-container">
	        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <div class="single-slot-name aic-container">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
        <div class="casino-slots-head aic-container">
            <div class="casino-slots-head-iframe">
                <div class="iframe-wrap">
                    <a class="slot-iframe-cta" href="<?php the_field('slot_redirect'); ?>"><?php echo __('Play for real money', 'all-in-casino'); ?></a>
                    <div class="load-iframe"><?php echo __('Play for play money', 'all-in-casino'); ?></div>
                </div>
                <iframe id="aic-iframe" data-src="<?php the_field('slot_iframe'); ?>" style="background-color: rgb(0, 0, 0);" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" wmode="opaque"></iframe>
            </div>
            <div class="casino-slots-information">
                <div class="single-info-item">
                    <img src="<?php echo ALL_IN_CASINO_PLUGIN_URL . 'public/img/coin.png'; ?>" alt="RTP">
                    <span class="single-info-item-title"><?php _e('RTP','all-in-casino'); ?></span>
                    <span class="single-info-item-data"><?php echo get_field('slot_payout_percentage'); ?></span>
                </div>
                <div class="single-info-item">
                    <img src="<?php echo ALL_IN_CASINO_PLUGIN_URL . 'public/img/money.png'; ?>" alt="Bet range">
                    <span class="single-info-item-title"><?php _e('Bet per Spin','all-in-casino'); ?></span>
                    <span class="single-info-item-data"><?php echo get_field('slot_bet_range'); ?></span>
                </div>
                <div class="single-info-item">
                    <img src="<?php echo ALL_IN_CASINO_PLUGIN_URL . 'public/img/jackpot.png'; ?>" alt="Slot paylines">
                    <span class="single-info-item-title"><?php _e('Paylines','all-in-casino'); ?></span>
                    <span class="single-info-item-data"><?php echo get_field('slot_paylines'); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="casino-slots-content aic-container">
        <?php the_content(); ?>
    </div>
</div>