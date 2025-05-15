<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Enqueue parent theme styles
 */
function astra_child_enqueue_styles() {
    wp_enqueue_style(
        'astra-theme-css',
        get_template_directory_uri() . '/style.css',
        array(),
        ASTRA_THEME_VERSION,
        'all'
    );
    
    wp_enqueue_style(
        'astra-child-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-theme-css'),
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles'); 