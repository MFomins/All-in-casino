<div class="casino-slots-item">
    <div class="casino-slots-image">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </div>
    <div class="casino-slots-name">
        <?php echo get_field('slot_name'); ?>
    </div>

    <div class="casino-slots-button">
        <a href="#">Review</a>
    </div>
</div>