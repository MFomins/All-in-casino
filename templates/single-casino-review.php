<?php

if (!defined('ABSPATH')) {
    die;
}

/**
 * The template for displaying casino posts
 */

get_header();

?>

		<?php
        // Start the loop.
        while (have_posts()) :
            the_post();

            include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/templates/content-review.php';

        endwhile;
        ?>
<?php get_footer(); ?>
