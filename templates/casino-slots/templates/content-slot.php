<div class="casino-slots-wrap">
    <div class="casino-slots-head-bg">
        <div class="single-slot-name aic-container">
            <h1><?php the_field('slot_name'); ?></h1>
        </div>
        <div class="casino-slots-head aic-container">
            <div class="casino-slots-head-left">
                <div class="iframe-wrap">
                    <a class="slot-iframe-cta" href="<?php the_field('slot_redirect'); ?>"><?php echo __('Play for real money', 'all-in-casino'); ?></a>
                    <div class="load-iframe"><?php echo __('Play for play money', 'all-in-casino'); ?></div>
                </div>
                <iframe id="aic-iframe" data-src="<?php the_field('slot_iframe'); ?>" style="background-color: rgb(0, 0, 0); width: 850px; height: 500px;" width="100%" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" wmode="opaque"></iframe>
            </div>
        </div>
    </div>
    <div class="casino-slots-content aic-container">
        <?php the_content(); ?>
    </div>
</div>