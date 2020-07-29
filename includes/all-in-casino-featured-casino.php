<?php

if (!defined('ABSPATH')) {
    exit;
}

function fc_add_content($content)
{
    $redirect = get_field('fc_redirect', 'options');
    $main_text = get_field('fc_main_text', 'options');
    $sub_text = get_field('fc_sub_text', 'options');
    $image = get_field('fc_casino_image', 'options');

    $content_output = '<div class="fc-sticky-bottom">';

    $content_output .= '<div class="fc-content-wrapper aic-container"><div class="fc-close-btn">X</div>';

    $content_output .= '<div class="fc-content-left">';

    $content_output .= '<div class="fc-content-img-wrap">';

    $content_output .= '<img class="fc-content-img" src="'.$image['url'].'" alt="'.$image['alt'].'">';

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

    $content_output .= '<div class="fc-content-cta"><a href="#" class="fc-cta-btn"><span></span><span></span><span></span><span></span>Reģistrēties</a></div>';

    $content_output .= '</div></div>';

    if (get_field('fc_enable', 'options') == true) {
        return $content . $content_output;
    } else {
        return $content;
    }
}

add_filter('the_content', 'fc_add_content');
