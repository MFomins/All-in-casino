<?php

/**
 * 
 * Helper Functions for AIC Plugin
 * 
 */

if (!defined('ABSPATH')) {
    exit;
}

//Function that adds casino reviews schema
function add_review_list_schema()
{
    if (get_field('enable_schema', 'options')) {
        if (is_singular('casino-review')) {
            $review_schema = array(
                '@context'  => "http://schema.org",
                '@type'     => "Review",
                'image' => get_the_post_thumbnail_url(),
                'itemReviewed' => array(
                    '@type' => "Organization",
                    'name'   => get_the_title(),
                ),
                'author' => array(
                    '@type' => "Organization",
                    'name' => get_field('reviews_schema_name', 'options'),
                    'url'   => get_field('reviews_schema_site_url', 'options'),
                ),
                'reviewRating' => array(
                    '@type' => "Rating",
                    'worstRating' => 1,
                    'bestRating' => 5,
                    'ratingValue' => get_field('review_rating'),
                )
            );
            echo '<script type="application/ld+json">' . json_encode($review_schema) . '</script>';
        }
    }
}

add_action('wp_head', 'add_review_list_schema');

//Changes the slug of the casino reiviews post type
function aic_register_post_type_args($args, $post_type)
{
    if ('casino-review' === $post_type && get_field('aic_review_slug', 'options')) {
        $args['rewrite']['slug'] = get_field('aic_review_slug', 'options');
    }
    return $args;
}

add_filter('register_post_type_args', 'aic_register_post_type_args', 10, 2);

//Add archive page option 
function aic_change_archive($args, $post_type)
{
    if ('casino-review' === $post_type && get_field('enable_review_archive', 'options')) {
        $args['has_archive'] = true;
    } else {
        $args['has_archive'] = false;
    }
    return $args;
}
add_filter('register_post_type_args', 'aic_change_archive', 10, 2);

//Changes the slug of the casino review custom post type archive page
function aic_change_casino_archive_slug($args, $post_type)
{
    if ('casino-review' === $post_type && get_field('review_archive_slug', 'options')) {
        $args['has_archive'] = get_field('review_archive_slug', 'options');
    }
    return $args;
}
add_filter('register_post_type_args', 'aic_change_casino_archive_slug', 10, 2);
