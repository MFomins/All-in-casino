<div class="casino-reviews-item <?php if ($atts['single']) echo 'single'; ?>" <?php if ($atts['itemlist'] == 'on') : echo 'itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
                                                                                endif; ?>>
    <span class="position" <?php if ($atts['itemlist'] == 'on') : echo 'itemprop="position"';
                            endif; ?> style="display: none;"><?php echo $num; ?></span>
    <div id="main-tab">
        <?php if ($atts['type'] == 'sportsbook') {
            include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/parts/sportsbook-main-tab.php';
        } else {
            include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/parts/reviews-main-tab.php';
        }
        ?>
    </div>
</div>