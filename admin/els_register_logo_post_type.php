<?php
// Register Logo Custom Post Type
function els_register_logo_post_type() {
    $args = array(
        'label' => __('Logos', 'easy-logo-slider'),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'page-attributes'),
        'menu_icon' => 'dashicons-format-image',
        'hierarchical' => false,
    );
    register_post_type('els_logo', $args);
}
add_action('init', 'els_register_logo_post_type');