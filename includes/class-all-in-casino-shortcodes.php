<?php
// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    die;
}
/**
 * Plugin Shortcode Functionality
 *
 */
if (!class_exists('All_In_Casino_Shortcodes')) :
    class All_In_Casino_Shortcodes
    {

        /**
         * The ID of this plugin.
         *
         * @since    1.0.0
         * @access   private
         * @var      string $plugin_name The ID of this plugin.
         */
        private $plugin_name;

        /**
         * The version of this plugin.
         *
         * @since    1.0.0
         * @access   private
         * @var      string $version The current version of this plugin.
         */
        private $version;

        /**
         * @var it will be all the css for all shortcodes
         */
        protected $shortcode_css;

        /**
         * Initialize the class and set its properties.
         *
         * @since    1.0.0
         *
         * @param      string $plugin_name The name of the plugin.
         * @param      string $version The version of this plugin.
         */
        public function __construct($plugin_name, $version)
        {

            $this->plugin_name = $plugin_name;
            $this->version     = $version;
            $this->setup_hooks();
        }

        public function setup_hooks()
        {
            add_action('wp_enqueue_scripts', array($this, 'register_style'));

            add_action('get_footer', array($this, 'enqueue_scripts'));
        }

        public function register_style()
        {
            wp_register_style($this->plugin_name . '-shortcodes', ALL_IN_CASINO_PLUGIN_URL . 'public/css/all-in-casino-shortcodes.css');
        }

        public function enqueue_scripts()
        {
            wp_enqueue_style($this->plugin_name . '-shortcodes');
        }

        public function casino_slots_list($atts, $content)
        {
            $loop_args = array(
                'post_type' => 'casino-slot',
                'posts_per_page' => 4,
            );

            $loop = new WP_Query($loop_args);

            ob_start();
?>

            <div class="casino-slots-list">
                <?php
                while ($loop->have_posts()) :

                    $loop->the_post();

                    include ALL_IN_CASINO_BASE_DIR . 'templates/casino-slots/casino-slots-shortcode.php';

                endwhile;
                wp_reset_postdata();
                ?>
            </div>

        <?php
            return ob_get_clean();
        }

        public function casino_reviews_list($atts)
        {
            $atts = shortcode_atts(
                array(
                    'reviews' => '',
                ),
                $atts,
                'casino_reviews_list'
            );

            $slugs = $atts['reviews'];
            $slugs = explode(',', $slugs);

            $loop_args = array(
                'post_type' => 'casino-review',
                'posts_per_page' => get_option('posts_per_page'),
                'orderby' => 'post_name__in',
            );

            if (!empty($atts['reviews'])) {
                $loop_args['post_name__in'] = $slugs;
            }

            $loop = new WP_Query($loop_args);

            ob_start();
        ?>

            <div class="casino-reviews-list">
                <?php
                while ($loop->have_posts()) :

                    $loop->the_post();

                    include ALL_IN_CASINO_BASE_DIR . 'templates/casino-reviews/casino-reviews-shortcode.php';

                endwhile;
                wp_reset_postdata();
                ?>
            </div>

<?php
            return ob_get_clean();
        }
    }
endif;
