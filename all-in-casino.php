<?php

/**
 * The plugin bootstrap file
 *
 * @link              yoursite.lv
 * @since             1.0.0
 * @package           All_In_Casino
 *
 * @wordpress-plugin
 * Plugin Name:       All In Casino
 * Plugin URI:        yoursite.lv
 * Description:       All In Casino plugin
 * Version:           1.0.24
 * Author:            KR
 * Author URI:        yoursite.lv
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       all-in-casino
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ALL_IN_CASINO_VERSION', '1.0.24' );

define('ALL_IN_CASINO_NAME', 'all-in-casino');

//Plugin directory path
define('ALL_IN_CASINO_BASE_DIR', plugin_dir_path(__FILE__));

//Plugin directory URL
define('ALL_IN_CASINO_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-all-in-casino-activator.php
 */
function activate_all_in_casino() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-all-in-casino-activator.php';
	All_In_Casino_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-all-in-casino-deactivator.php
 */
function deactivate_all_in_casino() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-all-in-casino-deactivator.php';
	All_In_Casino_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_all_in_casino' );
register_deactivation_hook( __FILE__, 'deactivate_all_in_casino' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-all-in-casino.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_all_in_casino() {

	$plugin = new All_In_Casino();
	$plugin->run();

}
run_all_in_casino();
