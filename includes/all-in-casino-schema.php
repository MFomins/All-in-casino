<?php

if (!defined('ABSPATH')) {
    die;
}

add_action('wp_head', 'add_review_list_schema'); //Add Schema to header

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
                    'worstRating' => 0,
                    'bestRating' => 5,
                    'ratingValue' => get_field('review_rating'),
                )
            );
            echo '<script type="application/ld+json">' . json_encode($review_schema) . '</script>';
        }
    }
}
