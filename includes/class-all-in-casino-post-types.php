<?php

/**
 *
 * @link       yoursite.lv
 * @since      1.0.0
 *
 * @package    All_In_Casino
 * @subpackage All_In_Casino/public
 */

/**
 * Functionality for our custom post types
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    All_In_Casino
 * @subpackage All_In_Casino/public
 * @author     KR <yoursite.lv>
 */
class All_In_Casino_Post_Types
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

    public function init()
    {
        $this->register_cpt_casino_review();

        $this->register_cpt_casino_slot();

    }

    public function register_cpt_casino_review()
    {
        $labels = array(
            'name'                  => _x('Casino Reviews', 'Post type general name', 'all-in-casino'),
            'singular_name'         => _x('Casino Review', 'Post type singular name', 'all-in-casino'),
            'menu_name'             => _x('Casino Reviews', 'Admin Menu text', 'all-in-casino'),
            'name_admin_bar'        => _x('Casino Review', 'Add New on Toolbar', 'all-in-casino'),
            'add_new'               => __('Add New', 'all-in-casino'),
            'add_new_item'          => __('Add New Casino Review', 'all-in-casino'),
            'new_item'              => __('New Casino Review', 'all-in-casino'),
            'edit_item'             => __('Edit Casino Review', 'all-in-casino'),
            'view_item'             => __('View Casino Review', 'all-in-casino'),
            'all_items'             => __('All Casino Reviews', 'all-in-casino'),
            'search_items'          => __('Search Casino Reviews', 'all-in-casino'),
            'parent_item_colon'     => __('Parent Casino Reviews:', 'all-in-casino'),
            'not_found'             => __('No casino reviews found.', 'all-in-casino'),
            'not_found_in_trash'    => __('No casino reviews found in Trash.', 'all-in-casino'),
            'featured_image'        => _x('Casino review Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'all-in-casino'),
            'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'all-in-casino'),
            'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'all-in-casino'),
            'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'all-in-casino'),
            'archives'              => _x('Casino review archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'all-in-casino'),
            'insert_into_item'      => _x('Insert into casino review', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'all-in-casino'),
            'uploaded_to_this_item' => _x('Uploaded to this casino review', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'all-in-casino'),
            'filter_items_list'     => _x('Filter casino reviews list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'all-in-casino'),
            'items_list_navigation' => _x('Casino reviews list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'all-in-casino'),
            'items_list'            => _x('Casino reviews list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'all-in-casino'),
        );

        $args = array(
            'labels' => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'review'),
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-text-page',
            'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        );

        register_post_type('casino-review', $args);
    }

    public function register_cpt_casino_slot()
    {
        $labels = array(
            'name'                  => _x('Casino Slots', 'Post type general name', 'all-in-casino'),
            'singular_name'         => _x('Casino Slot', 'Post type singular name', 'all-in-casino'),
            'menu_name'             => _x('Casino Slots', 'Admin Menu text', 'all-in-casino'),
            'name_admin_bar'        => _x('Casino Slot', 'Add New on Toolbar', 'all-in-casino'),
            'add_new'               => __('Add New', 'all-in-casino'),
            'add_new_item'          => __('Add New Casino Slot', 'all-in-casino'),
            'new_item'              => __('New Casino Slot', 'all-in-casino'),
            'edit_item'             => __('Edit Casino Slot', 'all-in-casino'),
            'view_item'             => __('View Casino Slot', 'all-in-casino'),
            'all_items'             => __('All Casino Slots', 'all-in-casino'),
            'search_items'          => __('Search Casino Slots', 'all-in-casino'),
            'parent_item_colon'     => __('Parent Casino Slots:', 'all-in-casino'),
            'not_found'             => __('No casino slots found.', 'all-in-casino'),
            'not_found_in_trash'    => __('No casino slots found in Trash.', 'all-in-casino'),
            'featured_image'        => _x('Casino slot Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'all-in-casino'),
            'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'all-in-casino'),
            'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'all-in-casino'),
            'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'all-in-casino'),
            'archives'              => _x('Casino slot archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'all-in-casino'),
            'insert_into_item'      => _x('Insert into casino slot', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'all-in-casino'),
            'uploaded_to_this_item' => _x('Uploaded to this casino slot', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'all-in-casino'),
            'filter_items_list'     => _x('Filter casino slots list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'all-in-casino'),
            'items_list_navigation' => _x('Casino slots list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'all-in-casino'),
            'items_list'            => _x('Casino slots list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'all-in-casino'),
        );

        $args = array(
            'labels' => $labels,
            'public'             => false,//Have to finish. Will not be in menu
            'publicly_queryable' => true,
            'show_ui'            => false,//Have to finish. Will not be in menu
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'slot'),
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-admin-collapse',
            'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        );

        register_post_type('casino-slot', $args);
    }

    public function single_template_casino_slot($template)
    {
        if (is_singular('casino-slot')) {
            //Template for casino slot CPT
            require_once ALL_IN_CASINO_BASE_DIR . 'public/class-all-in-casino-template-loader.php';

            $template_loader = new All_In_Casino_Template_Loader();

            return $template_loader->get_template_part('single', 'casino-slot', false);
        }

        return $template;
    }

    public function single_template_casino_review($template)
    {
        if (is_singular('casino-review')) {
            //Template for casino slot CPT
            require_once ALL_IN_CASINO_BASE_DIR . 'public/class-all-in-casino-template-loader.php';

            $template_loader = new All_In_Casino_Template_Loader();

            return $template_loader->get_template_part('single', 'casino-review', false);
        }

        return $template;
    }
}
