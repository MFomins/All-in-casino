<div class="casino-reviews-item">
    <?php if (get_field('review_more_info_enable') == true) : ?>
        <div class="tabs-box">
            <div class="tabs-box-item-wrap">
                <span class="more-tab-button"><i class="icon-info"></i></span>
                <span class="main-tab-button">→</span>
            </div>
        </div>
    <?php endif; ?>
    <!-- First tab start -->
    <div id="main-tab">
        <?php include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/parts/reviews-main-tab.php'; ?>
    </div>
    <!-- First tab end -->

    <div id="payments-tab" style="display:none;">
        <?php include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/parts/reviews-payments-tab.php'; ?>
    </div>
</div>