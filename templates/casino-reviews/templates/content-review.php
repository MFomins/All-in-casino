<div class="single-casino-review">
    <div class="single-casino-upper">
        <div class="head-bonus-wrap aic-container">
            <div class="single-casino-upper-left">
                <div class="upper-left-logo"><a href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow"><?php the_post_thumbnail(); ?></a></div>
                <table id="review-main-table">
                    <tbody>
                        <tr class="rating">

                            <td><span>⭐</span><?php _e('Rating', 'all-in-casino'); ?> </td>
                            <td><i>
                                    <?php
                                    $casino_rating = get_field('review_rating');
                                    $max_value = 10;
                                    echo number_format($casino_rating, 1);
                                    ?> / <?php echo $max_value; ?>
                                </i></td>
                        <tr>
                            <td>🎲 <?php _e('Total number of games', 'all-in-casino'); ?></td>
                            <td><i><?php the_field('review_total_games'); ?></i></td>
                        </tr>
                        <tr>
                            <td>🎁 <?php _e('Welcome bonus', 'all-in-casino'); ?></td>
                            <td class="table-cta"><a href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow"><?php the_field('review_bonus_text_first_line') . the_field('review_bonus_text_second_line'); ?></a></td>
                        </tr>
                        <tr class="cta">
                            <td class="hide">🏆 <?php echo get_the_title(); ?></td>
                            <td colspan="2"><a class="btn" href="<?php the_field('review_redirect'); ?>" target="_blank" rel="nofollow">Play Here!</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="single-casino-upper-right">
                <div class="single-casino-h1"><?php echo the_title(); ?></div>
                <div class="upper-right-bonus-info">
                    <span><?php the_field('review_bonus_text_first_line'); ?></span>
                    <span><?php the_field('review_bonus_text_second_line'); ?></span>
                </div>

                <div class="upper-right-terms">
                    <?php
                    if (get_field('review_terms')) the_field('review_terms');
                    ?>
                </div>

                <div class="upper-right-get-bonus"><a href="#">GET BONUS <i class="icon-angle-double-right"></i></a></div>
                <div class="upper-right-pluses">
                    <?php
                    // Check rows exists.
                    if (have_rows('review_casino_pluses')) :
                        // Loop through rows.
                        while (have_rows('review_casino_pluses')) : the_row();
                            // Load sub field value.
                            $sub_value = get_sub_field('review_item_field');
                            // Do something...
                            echo '<div class="field-item"><i class="icon-plus-circled"></i>' . $sub_value . '</div>';
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
                            echo '<div class="field-item"><i class="icon-minus-circled"></i>' . $sub_value . '</div>';
                        // End loop.
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="single-casino-lower aic-container">
        <main class="single-casino-main">
            <?php the_content(); ?>
        </main>
        <?php include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/parts/single-review-aside.php'; ?>
    </div>
</div>