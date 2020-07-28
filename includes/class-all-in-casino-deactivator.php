<?php

/**
 * Fired during plugin deactivation
 *
 * @link       yoursite.lv
 * @since      1.0.0
 *
 * @package    All_In_Casino
 * @subpackage All_In_Casino/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    All_In_Casino
 * @subpackage All_In_Casino/includes
 * @author     KR <yoursite.lv>
 */
class All_In_Casino_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		// Unregister CPT
		unregister_post_type('casino-review');

		unregister_post_type('casino-slot');

		//Flush Rewrite Rules
		flush_rewrite_rules();
	}

}
