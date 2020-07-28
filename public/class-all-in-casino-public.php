<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       yoursite.lv
 * @since      1.0.0
 *
 * @package    All_In_Casino
 * @subpackage All_In_Casino/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    All_In_Casino
 * @subpackage All_In_Casino/public
 * @author     KR <yoursite.lv>
 */
class All_In_Casino_Public
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{
		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/all-in-casino-public.css', array(), $this->version, 'all');

		wp_enqueue_style($this->plugin_name . '-fontello', plugin_dir_url(__FILE__) . '../vendor/fontello/css/fontello-embedded.css', array(), $this->version, 'all');

		wp_register_style($this->plugin_name . '-widgets', plugin_dir_url(__FILE__) . 'css/all-in-casino-widgets.css', array(), $this->version, 'alls');

		if (is_singular('casino-slot')) {
			wp_enqueue_style($this->plugin_name . '-single-casino-slot', plugin_dir_url(__FILE__) . 'css/all-in-casino-casino-slot.css', array(), $this->version, 'all');
		}

		if (is_singular('casino-review')) {
			wp_enqueue_style($this->plugin_name . '-single-casino-review', plugin_dir_url(__FILE__) . 'css/all-in-casino-casino-review.css', array(), $this->version, 'all');
		}

		if (is_active_widget(false, false, 'casino_slot', true)) {
			wp_enqueue_style($this->plugin_name . '-widgets');
		}
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{
		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/all-in-casino-public.js', array('jquery'), $this->version, false);
	}

}
