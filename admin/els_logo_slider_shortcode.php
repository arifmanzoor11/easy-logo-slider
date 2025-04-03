<?php
// Shortcode to Display Logo Slider
function els_logo_slider_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'number' => '-1',  // Show all logos by default
            'order' => 'ASC',
            'orderby' => 'menu_order',
            'slides_to_show' => '4',
            'slides_to_scroll' => '1',
            'autoplay' => 'true',
            'autoplay_speed' => '2000',
        ),
        $atts,
        'easy_logo_slider'
    );

    $query_args = array(
        'post_type' => 'els_logo',
        'posts_per_page' => (int) $atts['number'],
        'order' => sanitize_text_field($atts['order']),
        'orderby' => sanitize_text_field($atts['orderby']),
    );
    $logos = new WP_Query($query_args);
    
    if (!$logos->have_posts()) return '<p>No logos found.</p>';
    
    $output = '<div class="els-logo-slider" 
        data-slides-to-show="' . esc_attr($atts['slides_to_show']) . '" 
        data-slides-to-scroll="' . esc_attr($atts['slides_to_scroll']) . '" 
        data-autoplay="' . esc_attr($atts['autoplay']) . '" 
        data-autoplay-speed="' . esc_attr($atts['autoplay_speed']) . '">
    ';
    
    while ($logos->have_posts()) {
        $logos->the_post();
        if (has_post_thumbnail()) {
            $output .= '<div class="els-logo-item logo-v-center">' . get_the_post_thumbnail(get_the_ID(), 'medium') . '</div>';
        }
    }
    wp_reset_postdata();
    $output .= '</div>';
    
    return $output;
}
add_shortcode('easy_logo_slider', 'els_logo_slider_shortcode');
