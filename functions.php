<?php
if (!defined('ABSPATH')) exit;

// Chargement des styles et scripts
function csmb_enqueue_styles() {
    wp_enqueue_style('csmb-style', get_stylesheet_uri());
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/tailwind.min.css');
    wp_enqueue_script('csmb-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'csmb_enqueue_styles');

// Support du thème
function csmb_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'csmb'),
        'footer' => __('Menu Footer', 'csmb'),
    ));
}
add_action('after_setup_theme', 'csmb_theme_support');

// Custom Post Type pour les Services
function csmb_register_post_types() {
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'csmb'),
            'singular_name' => __('Service', 'csmb'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'csmb_register_post_types');