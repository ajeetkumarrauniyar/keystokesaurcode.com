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
function astra_child_enqueue_styles()
{
    // Parent theme style
    wp_enqueue_style(
        'astra-theme-css',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('astra')->get('Version'),
        'all'
    );

    // Child theme style
    wp_enqueue_style(
        'astra-child-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-theme-css'),
        '1.0.0',
        'all'
    );

    // Enqueue Tailwind CSS
    wp_enqueue_style(
        'tailwind-css',
        get_stylesheet_directory_uri() . '/dist/output.css',
        array('astra-child-theme-css'),
        '1.0.0',
        'all'
    );

    // Enqueue custom JavaScript
    wp_enqueue_script(
        'astra-child-script',
        get_stylesheet_directory_uri() . '/dist/script.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

/**
 * Register navigation menus
 */
function astra_child_register_menus()
{
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'astra-child'),
        'footer'  => esc_html__('Footer Menu', 'astra-child'),
    ));
}
add_action('after_setup_theme', 'astra_child_register_menus');

/**
 * Include the customizer settings.
 */
require_once get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Add support for post thumbnails
 */
function astra_child_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'astra_child_setup');
