<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       yoursite.lv
 * @since      1.0.0
 *
 * @package    All_In_Casino
 * @subpackage All_In_Casino/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    All_In_Casino
 * @subpackage All_In_Casino/includes
 * @author     KR <yoursite.lv>
 */
class All_In_Casino
{

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      All_In_Casino_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct()
	{
		if (defined('ALL_IN_CASINO_VERSION')) {
			$this->version = ALL_IN_CASINO_VERSION;
		} else {
			$this->version = '1.0.0';
		}

		if (defined('ALL_IN_CASINO_NAME')) {
			$this->plugin_name = ALL_IN_CASINO_NAME;
		} else {
			$this->plugin_name = 'all-in-casino';
		}

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		$this->define_post_type_hooks();
		$this->define_shortcode_hooks();
		$this->define_widgets_hooks();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - All_In_Casino_Loader. Orchestrates the hooks of the plugin.
	 * - All_In_Casino_i18n. Defines internationalization functionality.
	 * - All_In_Casino_Admin. Defines all hooks for the admin area.
	 * - All_In_Casino_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies()
	{

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-all-in-casino-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-all-in-casino-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-all-in-casino-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'public/class-all-in-casino-public.php';

		/**
		 * The class responsible for defining all widgets
		 * of the site.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'vendor/advanced-custom-fields-pro/acf.php';

		/**
		 * The class responsible for defining custom post types
		 * of the site.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-all-in-casino-post-types.php';

		/**
		 * The class responsible for defining all shortcodes
		 * of the site.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-all-in-casino-shortcodes.php';

		/**
		 * The class responsible for defining all widgets
		 * of the site.
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-all-in-casino-widgets.php';

		/**
		 * Functionality responsible for adding acf fields / settings page
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/all-in-casino-acf-setup.php';

		/**
		 * Functionality responsible for adding featured casino at the bottom of the pages
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/all-in-casino-featured-casino.php';

		/**
		 * Functionality responsible for adding schema to casino reviews
		 */
		require_once plugin_dir_path(dirname(__FILE__)) . 'includes/all-in-casino-schema.php';

		/**
		 * Functionality responsible for removing cpt slug
		 */
		if(get_field('disable_reviews_slug','options')) {
			require_once plugin_dir_path(dirname(__FILE__)) . 'includes/all-in-casino-remove-slug.php';
		}

		$this->loader = new All_In_Casino_Loader();
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the All_In_Casino_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale()
	{

		$plugin_i18n = new All_In_Casino_i18n();

		$this->loader->add_action('plugins_loaded', $plugin_i18n, 'load_plugin_textdomain');
	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks()
	{

		$plugin_admin = new All_In_Casino_Admin($this->get_plugin_name(), $this->get_version());

		$this->loader->add_action('admin_enqueue_scripts', $plugin_admin, 'enqueue_styles');
		$this->loader->add_action('admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts');
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks()
	{

		$plugin_public = new All_In_Casino_Public($this->get_plugin_name(), $this->get_version());

		$this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_styles');
		$this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_scripts');
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run()
	{
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name()
	{
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    All_In_Casino_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader()
	{
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version()
	{
		return $this->version;
	}

	/**
	 * Defining all action and filter hooks for registering custom post types
	 *
	 * @return void
	 */
	public function define_post_type_hooks()
	{
		$plugin_post_types = new All_In_Casino_Post_Types($this->get_plugin_name(), $this->get_version());

		$this->loader->add_action('init', $plugin_post_types, 'init');

		$this->loader->add_filter('single_template', $plugin_post_types, 'single_template_casino_slot');

		$this->loader->add_filter('single_template', $plugin_post_types, 'single_template_casino_review');
	}

	public function define_shortcode_hooks()
	{
		$plugin_shortcodes = new All_In_Casino_Shortcodes($this->get_plugin_name(), $this->get_version());

		add_shortcode('casino_slots_list', array($plugin_shortcodes, 'casino_slots_list'));

		add_shortcode('casino_reviews_list', array($plugin_shortcodes, 'casino_reviews_list'));
	}

	public function define_widgets_hooks()
	{
		$plugin_widgets = new All_In_Casino_Widgets($this->get_plugin_name(), $this->get_version());

		$this->loader->add_action('widgets_init', $plugin_widgets, 'register_widgets');
	}
}
