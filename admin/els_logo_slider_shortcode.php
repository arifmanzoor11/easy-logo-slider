<?php
// Shortcode to Display Logo Slider
function els_logo_slider_shortcode($atts) {
    // Default attributes
    $atts = shortcode_atts(array(
        'slides_to_show' => 4,
        'slides_to_scroll' => 1,
        'autoplay' => 'true',
        'autoplay_speed' => 3000,
        'max_width' => '160px',
        'width' => '200px',
        'height' => '200px',
        'object_fit' => 'contain',
        'slides_to_show_tablet' => 2,
        'slides_to_show_mobile' => 1,
        'show_arrows' => true,
        'show_dots' => true,
    ), $atts);
    // Start output buffering
    ob_start();

    // Query for logos
    $args = array(
        'post_type' => 'els_logo',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );

    $logos_query = new WP_Query($args);

    if ($logos_query->have_posts()) :
        // Generate unique ID for multiple sliders on same page
        $slider_id = 'els-slider-' . uniqid();
        
        // Add inline styles for this specific slider
        echo '<style>
            #' . $slider_id . ' .els-logo-item img {
                max-width: ' . esc_attr($atts['max_width']) . ';
                width: ' . esc_attr($atts['width']) . ';
                height: ' . esc_attr($atts['height']) . ';
                object-fit: ' . esc_attr($atts['object_fit']) . ';
                margin: auto;
            }
        </style>';

        // Slider container
        echo '<div id="' . $slider_id . '" class="els-logo-slider logo-v-center"
            data-slides-to-show="' . esc_attr($atts['slides_to_show']) . '"
            data-slides-to-scroll="' . esc_attr($atts['slides_to_scroll']) . '"
            data-slides-in-tablet="' . esc_attr($atts['slides_to_show_tablet']) . '"
            data-slides-in-mobile="' . esc_attr($atts['slides_to_show_mobile']) . '"
            show-arrows="' . esc_attr($atts['show_arrows']) . '"
            show-dots="' . esc_attr($atts['show_dots']) . '"
            data-autoplay="' . esc_attr($atts['autoplay']) . '"
            data-autoplay-speed="' . esc_attr($atts['autoplay_speed']) . '">';

        while ($logos_query->have_posts()) : $logos_query->the_post();
            if (has_post_thumbnail()) :
                echo '<div class="els-logo-item">';
                echo get_the_post_thumbnail(get_the_ID(), 'full');
                echo '</div>';
            endif;
        endwhile;

        echo '</div>';
    endif;

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode('easy_logo_slider', 'els_logo_slider_shortcode');
