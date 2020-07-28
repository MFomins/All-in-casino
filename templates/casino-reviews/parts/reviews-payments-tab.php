<div class="payments-info">
    <span class="payments-info-header">Time for withdraw to process</span>
    <div class="payments-info-time">approx. 24-48 hours</div>
</div>
<div class="payment-cards">
    <span class="payments-info-header">Deposit methods</span>
    <div class="deposit-methods">
        <?php
        $cards = get_field('review_deposit_methods');
        if ($cards) : ?>
            <?php foreach ($cards as $card) : ?>
                <?php echo "<img src='" . ALL_IN_CASINO_PLUGIN_URL . "public/img/payment-options/{$card}.png' alt='{$card}'>"; ?>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>
    <span class="payments-info-header">Withdraw methods</span>
    <div class="widthdraw-methods">
        <?php
        $cards = get_field('review_deposit_methods');
        if ($cards) : ?>
            <?php foreach ($cards as $card) : ?>
                <?php echo "<img src='" . ALL_IN_CASINO_PLUGIN_URL . "public/img/payment-options/{$card}.png' alt='{$card}'>"; ?>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>