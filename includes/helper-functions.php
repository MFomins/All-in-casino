<?php

/**
 * 
 * Helper Functions for AIC Plugin
 * 
 */

if (!defined('ABSPATH')) {
    exit;
}


//Function that adds FEATURED CASINO 
function fc_add_content($content)
{
    $redirect = get_field('fc_redirect', 'options');
    $main_text = get_field('fc_main_text', 'options');
    $sub_text = get_field('fc_sub_text', 'options');
    $image = get_field('fc_casino_image', 'options');

    $content_output = '<div class="fc-sticky-bottom">';

    $content_output .= '<div class="fc-content-wrapper aic-container"><div class="fc-close-btn"><i class="icon-cancel"></i></div>';

    $content_output .= '<div class="fc-content-left">';

    $content_output .= '<div class="fc-content-img-wrap">';

    $content_output .= '<img class="fc-content-img" src="' . $image['url'] . '" alt="' . $image['alt'] . '">';

    $content_output .= '</div>';

    $content_output .= '<div class="fc-content-text-wrap">';

    $content_output .= '<div class="fc-content-heading">';

    $content_output .= "{$main_text}";

    $content_output .= '</div>';

    $content_output .= '<div class="fc-content-info">';

    $content_output .= "{$sub_text}";

    $content_output .= '</div>';

    $content_output .= '</div>';

    $content_output .= '</div>';

    $content_output .= '<div class="fc-content-cta"><a href="' . $redirect . '" class="animated-button"><span></span><span></span><span></span><span></span>' . __('Register', 'all-in-casino') . '</a></div>';

    $content_output .= '</div></div>';

    if (get_field('fc_enable', 'options') == true) {
        return $content . $content_output;
    } else {
        return $content;
    }
}

//Featured casino filter
add_filter('the_content', 'fc_add_content');


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
                    'worstRating' => 0,
                    'bestRating' => 5,
                    'ratingValue' => get_field('review_rating'),
                )
            );
            echo '<script type="application/ld+json">' . json_encode($review_schema) . '</script>';
        }
    }
}

add_action('wp_head', 'add_review_list_schema');

//Changes the slug of the custom post type
function wpse247328_register_post_type_args($args, $post_type)
{

    if ('casino-review' === $post_type && get_field('aic_review_slug', 'options')) {
        $args['rewrite']['slug'] = get_field('aic_review_slug', 'options');
    }

    return $args;
}

add_filter('register_post_type_args', 'wpse247328_register_post_type_args', 10, 2);
