<?php

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    die;
}
/**
 * Plugin Shortcode Functionality
 *
 */
if (!class_exists('All_In_Casino_Widgets')) :
    class All_In_Casino_Widgets
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
        }

        public function register_widgets()
        {
            require_once ALL_IN_CASINO_BASE_DIR . 'includes/widgets/class-all-in-casino-widgets-casino-slots.php';

            register_widget('All_In_Casino_Widget_Casino_Slots');

            require_once ALL_IN_CASINO_BASE_DIR . 'includes/widgets/class-all-in-casino-widgets-casino-reviews.php';

            register_widget('All_In_Casino_Widget_Casino_Reviews');
        }
    }
endif;
