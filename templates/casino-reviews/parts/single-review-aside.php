<aside class="single-casino-aside">
    <div class="aside-item aside-bonus-information">
        <div class="aside-header"><?php _e('Information', 'all-in-casino'); ?></div>
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
        <div class="aside-header"><?php _e('Deposit Methods', 'all-in-casino'); ?></div>
        <div class="list-wrapper">
            <ul>
                <?php
                $deposit_methods = get_field('review_deposit_methods');
                if ($deposit_methods) : ?>
                    <ul>
                        <?php foreach ($deposit_methods as $method) : ?>
                            <?php $tolowerdeposit = strtolower($method); ?>
                            <li><i class="icon-angle-double-right"></i><?php echo $method; ?><img src="<?php echo ALL_IN_CASINO_IMG . "payment-options/{$tolowerdeposit}.png" ?>" alt="<?php echo $tolowerdeposit; ?>-deposit"></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="aside-item aside-withdraw-methods">
        <div class="aside-header">
            <?php _e('Withdraw Methods', 'all-in-casino'); ?>
        </div>
        <div class="list-wrapper">
            <ul>
                <?php
                $withdrawal_methods = get_field('review_withdraw_methods');
                if ($withdrawal_methods) : ?>
                    <ul>
                        <?php foreach ($withdrawal_methods as $method) : ?>
                            <?php $tolowerwithdraw = strtolower($method); ?>
                            <li><i class="icon-angle-double-right"></i><?php echo $method; ?><img src="<?php echo ALL_IN_CASINO_IMG . "payment-options/{$tolowerwithdraw}.png" ?>" alt="<?php echo $tolowerwithdraw; ?>"></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="aside-item aside-providers">
        <div class="aside-header">
            <?php _e('Providers', 'all-in-casino'); ?>
        </div>
        <div class="list-wrapper">
            <ul>
                <?php
                $providers = get_field('review_providers');
                if ($providers) : ?>
                    <ul>
                        <?php foreach ($providers as $provider) : ?>
                            <li>
                                <i class="icon-angle-double-right"></i>
                                <?php echo $provider; ?>
                                <?php $tolowerprovider = strtolower($provider); ?>
                                <img src="<?php echo ALL_IN_CASINO_IMG . "providers/{$tolowerprovider}.png" ?>" alt="<?php echo $tolowerprovider; ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="aside-item aside-customer-support">
        <div class="aside-header">
            <?php _e('Customer Support', 'all-in-casino'); ?>
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