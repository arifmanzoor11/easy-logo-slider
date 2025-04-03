<?php
/**
 * Plugin Name:       Easy Logo Slider
 * Plugin URI:        https://guitarchordslyrics.com/easy-logo-slider
 * Description:       A lightweight and responsive logo slider using a custom post type and shortcode. Supports autoplay, custom scrolling speeds, and Slick Carousel.
 * Version:           2.0
 * Author:            Arif M.
 * Author URI:        https://guitarchordslyrics.com
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       easy-logo-slider
 */

if (!defined('ABSPATH')) exit;

include_once(plugin_dir_path(__FILE__) . 'admin/els_register_logo_post_type.php');
include_once(plugin_dir_path(__FILE__) . 'admin/els_logo_slider_shortcode.php');
include_once(plugin_dir_path(__FILE__) . 'admin/els_make_logo_sort.php');
include_once(plugin_dir_path(__FILE__) . 'admin/els_documentation.php');
// Enqueue Scripts and Styles
include_once(plugin_dir_path(__FILE__) . 'inc/els_enqueue_scripts.php');

