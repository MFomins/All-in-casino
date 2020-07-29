<?php

add_filter('register_post_type_args', 'spartacus_change_cpt_slug', 10, 2);

add_filter('post_type_link', 'spartacus_remove_slug', 10, 3);

add_action('pre_get_posts', 'spartacus_parse_request');

function spartacus_change_cpt_slug($args, $post_type)
{

    // Make sure we're only modifying our desired post type.
    if ('casino-review' != $post_type)
        return $args;

    $args['rewrite'] = array('rewrite' => false);

    return $args;
}


function spartacus_remove_slug($post_link, $post, $leavename)
{
    if ('casino-review' != $post->post_type || 'publish' != $post->post_status) {
        return $post_link;
    }

    $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);

    return $post_link;
}

function spartacus_parse_request($query)
{
    if (!$query->is_main_query() || 2 != count($query->query) || !isset($query->query['page'])) {
        return;
    }

    if (!empty($query->query['name'])) {
        $query->set('post_type', array('casino-review', 'post', 'page'));
    }
}
