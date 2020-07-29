<?php

if (!defined('ABSPATH')) {
    exit;
}

function fc_add_content($content)
{
    $content_output = '<div class="fc-sticky-bottom">';

    $content_output .= '<div class="fc-content-wrapper aic-container"><div class="fc-close-btn"><i class="fas fa-times"></i></div>';

    $content_output .= '<div class="fc-content-left">';

    $content_output .= '<div class="fc-content-img-wrap">';

    $content_output .= '<img class="fc-content-img">';

    $content_output .= '</div>';

    $content_output .= ' <div class="fc-content-text-wrap">';

    $content_output .= '<div class="fc-content-heading">';

    $content_output .= "Heading text";

    $content_output .= '</div>';

    $content_output .= '<div class="fc-content-info">';

    $content_output .= "Info text";

    $content_output .= '</div>';

    $content_output .= '</div>';

    $content_output .= '</div>';

    $content_output .= '<div class="fc-content-cta"><a href="#">Reģistrēties</a></div>';

    $content_output .= '</div></div>';

    if (get_field('fc_enable', 'options') == true) {
        return $content . $content_output;
    } else {
        return $content;
    }
}

add_filter('the_content', 'fc_add_content');
