<div class="casino-slots-wrap">
    <div class="casino-slots-head-bg">
        <div class="single-slot-name aic-container">
            <h1><?php the_field('slot_name'); ?></h1>
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
                    <span class="single-info-item-title">RTP</span>
                    <span class="single-info-item-data"><?php echo get_field('slot_payout_percentage'); ?></span>
                </div>
                <div class="single-info-item">
                    <img src="<?php echo ALL_IN_CASINO_PLUGIN_URL . 'public/img/money.png'; ?>" alt="Bet range">
                    <span class="single-info-item-title">Bets</span>
                    <span class="single-info-item-data"><?php echo get_field('slot_bet_range'); ?></span>
                </div>
                <div class="single-info-item">
                    <img src="<?php echo ALL_IN_CASINO_PLUGIN_URL . 'public/img/jackpot.png'; ?>" alt="Slot jackpot">
                    <span class="single-info-item-title">Jackpot</span>
                    <span class="single-info-item-data"><?php echo get_field('slot_jackpot'); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="casino-slots-content aic-container">
        <?php the_content(); ?>
    </div>
</div>