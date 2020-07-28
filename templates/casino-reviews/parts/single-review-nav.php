<div class="review-navigation aic-container">
    <div class="prev-review">
        <?php

        $prev_post = get_adjacent_post(false, '', true);
        if (!empty($prev_post)) {
            echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '"><span>←</span>' . get_the_post_thumbnail($prev_post) . '</a>';
        }

        ?>
    </div>
    <div class="next-review">
        <?php
        $next_post = get_adjacent_post(false, '', false);
        if (!empty($next_post)) {
            echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . get_the_post_thumbnail($next_post) .  '<span>→</span></a>';
        }
        ?>

    </div>
</div>