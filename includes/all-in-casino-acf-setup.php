<?php

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'AIC Settings',
        'menu_title'    => 'AIC Settings',
        'menu_slug'     => 'aic-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Featured Casino',
        'menu_title'    => 'Featured Casino',
        'parent_slug'    => 'aic-general-settings',
    ));
}

