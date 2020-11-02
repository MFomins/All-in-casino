<div class="single-casino-review">
    <div class="single-casino-upper">
        <div class="aic-container">
            <div id="breadcrumbs">
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                <div class="last-modified">
                    <span> <?php _e("Updated: ", "all-in-casino") . the_modified_date("d-m-y"); ?></span>
                </div>
            </div>
        </div>
        <div class="head-bonus-wrap aic-container">
            <div class="single-casino-upper-left">
                <div class="upper-left-logo">
                    <a href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow"><?php the_post_thumbnail(); ?>
                    </a>
                    <div class="mobile-casino-header"><?php echo the_title(); ?></div>
                </div>
                <table id="review-main-table">
                    <tbody>
                        <tr class="rating">

                            <td><span>⭐</span><?php _e('Rating', 'all-in-casino'); ?> </td>
                            <td>
                                <?php
                                $casino_rating = get_field('review_rating');
                                $max_value = 5;
                                echo '<span class="casino-rating">' . number_format($casino_rating, 1) . '</span>';
                                ?> / <?php echo $max_value; ?>
                            </td>
                        <tr>
                            <td>⏳ <?php _e('Withdrawal time', 'all-in-casino'); ?></td>
                            <td><?php the_field('review_withdrawal_time'); ?></td>
                        </tr>
                        <tr>
                            <td>🎁 <?php _e('Welcome bonus', 'all-in-casino'); ?></td>
                            <td class="table-cta"><a href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow"><?php the_field('review_bonus_text_first_line') . the_field('review_bonus_text_second_line'); ?></a></td>
                        </tr>
                        <tr class="cta">
                            <td class="hide">🏆 <?php echo get_the_title(); ?></td>
                            <td colspan="2" class="td-cta">
                                <a class="animated-button" href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <?php _e('Play Here!', 'all-in-casino'); ?>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="single-casino-upper-right">
                <div class="single-casino-h1">
                    <h1><?php echo the_title(); ?></h1>
                </div>
                <div class="upper-right-bonus-info">
                    <a href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow">
                        <span><?php the_field('review_bonus_text_first_line'); ?></span>
                        <span><?php the_field('review_bonus_text_second_line'); ?></span>
                    </a>
                </div>

                <!-- Mobile pluses/minues-->
                <div class="mobile-pluses-minuses">
                    <div class="upper-right-pluses">
                        <?php
                        // Check rows exists.
                        if (have_rows('review_casino_pluses')) :
                            // Loop through rows.
                            while (have_rows('review_casino_pluses')) : the_row();
                                // Load sub field value.
                                $sub_value = get_sub_field('review_item_field');
                                // Do something...
                                echo '<div class="field-item"><i class="icon-plus-squared"></i>' . $sub_value . '</div>';
                            // End loop.
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="upper-right-minuses">
                        <?php
                        // Check rows exists.
                        if (have_rows('review_casino_minuses')) :
                            // Loop through rows.
                            while (have_rows('review_casino_minuses')) : the_row();
                                // Load sub field value.
                                $sub_value = get_sub_field('review_minus_item_field');
                                // Do something...
                                echo '<div class="field-item"><i class="icon-minus-squared"></i>' . $sub_value . '</div>';
                            // End loop.
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <!-- End mobile pluses/minuses -->

                <div class="upper-right-get-bonus"><a href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow"><?php _e('Get Bonus', 'all-in-casino'); ?> <i class="icon-angle-double-right"></i></a></div>
                <div class="upper-right-terms">
                    <?php
                    if (get_field('review_terms')) the_field('review_terms');
                    ?>
                </div>
                <div class="pluses-minuses-wrap">
                    <div class="upper-right-pluses">
                        <?php
                        // Check rows exists.
                        if (have_rows('review_casino_pluses')) :
                            // Loop through rows.
                            while (have_rows('review_casino_pluses')) : the_row();
                                // Load sub field value.
                                $sub_value = get_sub_field('review_item_field');
                                // Do something...
                                echo '<div class="field-item"><i class="icon-plus-squared"></i>' . $sub_value . '</div>';
                            // End loop.
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="upper-right-minuses">
                        <?php
                        // Check rows exists.
                        if (have_rows('review_casino_minuses')) :
                            // Loop through rows.
                            while (have_rows('review_casino_minuses')) : the_row();
                                // Load sub field value.
                                $sub_value = get_sub_field('review_minus_item_field');
                                // Do something...
                                echo '<div class="field-item"><i class="icon-minus-squared"></i>' . $sub_value . '</div>';
                            // End loop.
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/parts/single-review-nav.php'; ?>
    </div>

    <div class="single-casino-lower aic-container">
        <main class="single-casino-main">
            <?php if (get_field('review_enable_summary')) : ?>
                <div id="summary">
                    <div class="summary-content">
                        <div class="summary-header"><?php the_field('review_review_summary'); ?></div>
                        <p><?php the_field('review_summary_text'); ?></p>
                    </div>
                </div>
            <?php endif ?>
            <?php the_content(); ?>
        </main>
        <?php include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/parts/single-review-aside.php'; ?>
    </div>
    <div class="single-casino-action hidden">
        <div class="action-wrap">
            <div class="single-ca-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="single-ca-info">
                <span class="ca-info"><?php the_field('review_bonus_text_first_line'); ?></span>
                <a href="#" class="ca-button"><?php _e('Get Bonus', 'all-in-casino'); ?></a>
            </div>
        </div>
    </div>
</div>