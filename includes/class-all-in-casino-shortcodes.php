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

            // add_action('get_footer', array($this, 'enqueue_scripts'));
        }

        public function register_style()
        {
            wp_enqueue_style($this->plugin_name . '-shortcodes', ALL_IN_CASINO_PLUGIN_URL . 'public/css/all-in-casino-shortcodes.css', array(), $this->version, 'all');
        }

        // public function enqueue_scripts()
        // {
        //     wp_enqueue_style($this->plugin_name . '-shortcodes');
        // }

        public function casino_slots_list($atts)
        {
            $atts = shortcode_atts(
                array(
                    'limit' => '',
                    'id' => '',
                ),
                $atts,
                'casino_slots_list'
            );

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $loop_args = array(
                'post_type' => 'casino-slot',
                'posts_per_page' => $atts['limit'],
                'paged' => $paged,
                'id' => 'id',
            );
            $id = $atts['id'];
            $id = explode(',', $id);

            if (!empty($atts['id'])) {
                $loop_args['post__in'] = $id;
            }

            if (empty($atts['limit'])) {
                $loop_args['posts_per_page'] = -1;
            }

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
            <div class="pagination">
                <?php
                $total_pages = $loop->max_num_pages;
                if ($total_pages > 1) {
                    $current_page = max(1, get_query_var('paged'));

                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => '/page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => false,
                        'next_text'    => false,
                    ));
                }
                ?>
            </div>

        <?php
            return ob_get_clean();
        }

        public function casino_reviews_list($atts)
        {
            $atts = shortcode_atts(
                array(
                    'reviews' => '', //Slugs of casinos you need to display
                    'limit' => -1,
                    'itemlist' => '',
                    'single' => '', //Show shortcode without selling points
                    'type' => '',
                ),
                $atts,
                'casino_reviews_list'
            );

            $slugs = $atts['reviews'];
            $slugs = explode(',', $slugs);

            $loop_args = array(
                'post_type' => 'casino-review',
                'posts_per_page' => $atts['limit'],
                'orderby' => 'post_name__in',
            );

            if (!empty($atts['reviews'])) {
                $loop_args['post_name__in'] = $slugs;
            }

            $loop = new WP_Query($loop_args);

            ob_start();
        ?>

            <div class="casino-reviews-list" <?php if ($atts['itemlist'] == 'on') : echo 'itemscope itemtype="https://schema.org/ItemList"';
                                                endif; ?>>
                <?php

                $num = 0;
                while ($loop->have_posts()) :
                    $num++;
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
