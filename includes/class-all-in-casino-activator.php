<?php

/**
 * Fired during plugin activation
 *
 * @link       yoursite.lv
 * @since      1.0.0
 *
 * @package    All_In_Casino
 * @subpackage All_In_Casino/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    All_In_Casino
 * @subpackage All_In_Casino/includes
 * @author     KR <yoursite.lv>
 */
class All_In_Casino_Activator
{

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate()
	{
		require_once ALL_IN_CASINO_BASE_DIR . 'includes/class-all-in-casino-post-types.php';
		//Register CPT
		$plugin_post_type = new All_In_Casino_Post_Types(ALL_IN_CASINO_NAME, ALL_IN_CASINO_VERSION);
		$plugin_post_type->init();


		//Flush permalinks
		flush_rewrite_rules();
	}
}
