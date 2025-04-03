<?php
// Enqueue Styles and Scripts
function els_enqueue_scripts() {
    wp_enqueue_script('jquery'); // Ensure jQuery is loaded

    // Check if Slick Carousel is already registered
    if (!wp_script_is('slick-js', 'registered')) {
        // Enqueue Slick Carousel only if not already registered
        wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
        wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    }

    // Enqueue Custom Slider JS (depends on jQuery and Slick)
    wp_enqueue_script('els-slider-js', plugin_dir_url(__FILE__) . 'js/els-slider.js', array('jquery', 'slick-js'), '1.0', true);

    // Enqueue Custom CSS
    wp_enqueue_style('els-slider-css', plugin_dir_url(__FILE__) . 'css/els-slider.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'els_enqueue_scripts');
