<aside class="single-casino-aside">
    <div class="aside-item aside-bonus-information">
        <div class="aside-header"><?php _e('Information','all-in-casino'); ?></div>
        <div class="list-wrapper">
            <?php
            $result = '';
            $result = "<table class='bonus-table'><tbody>";
            // Check rows exists.
            if (have_rows('review_bonus_information')) :
                while (have_rows('review_bonus_information')) : the_row();
                    // Load sub field value.
                    $left = get_sub_field('review_bonus_information_left');
                    $right = get_sub_field('review_bonus_information_right');
                    // Do something...
                    $result .= "<tr><td>{$left}</td><td>{$right}</td></tr>";
                // End loop.
                endwhile;
            endif;
            $result .= "</tbody></table>";
            echo $result;
            ?>
        </div>
    </div>
    <div class="aside-item aside-deposit-methods">
        <div class="aside-header"><?php _e('Deposit Methods','all-in-casino'); ?></div>
        <div class="list-wrapper">
            <ul>
                <?php
                // Check rows exists.
                if (have_rows('review_single_deposit_methods')) :
                    // Loop through rows.
                    while (have_rows('review_single_deposit_methods')) : the_row();
                        // Load sub field value.
                        $deposit = get_sub_field('review_single_deposit_method');
                        echo "<li><i class='icon-angle-right'></i>{$deposit}</li>";
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    </div>
    <div class="aside-item aside-withdraw-methods">
        <div class="aside-header">
        <?php _e('Withdraw Methods','all-in-casino'); ?>
        </div>
        <div class="list-wrapper">
            <ul>
                <?php
                // Check rows exists.
                if (have_rows('review_single_withdraw_methods')) :
                    // Loop through rows.
                    while (have_rows('review_single_withdraw_methods')) : the_row();
                        // Load sub field value.
                        $withdraw = get_sub_field('review_single_withdraw_method');
                        echo "<li><i class='icon-angle-right'></i>{$withdraw}</li>";
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    </div>
    <div class="aside-item aside-customer-support">
        <div class="aside-header">
        <?php _e('Customer Support','all-in-casino'); ?>
        </div>
        <div class="list-wrapper">
            <ul>
                <?php
                // Check rows exists.
                if (have_rows('review_customer_support')) :
                    // Loop through rows.
                    while (have_rows('review_customer_support')) : the_row();
                        // Load sub field value.
                        $support = get_sub_field('review_customer_support_item');
                        echo "<li>{$support}</li>";
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    </div>
</aside>