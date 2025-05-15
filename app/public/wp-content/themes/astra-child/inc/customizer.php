<?php
/**
 * Astra Child Theme Customizer
 *
 * @package Astra-Child
 */

/**
 * Add hero section settings to the Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function astra_child_customize_register($wp_customize) {
    
    // Add a section for the hero
    $wp_customize->add_section('astra_child_hero_section', array(
        'title'    => __('Hero Section', 'astra-child'),
        'priority' => 30,
    ));
    
    // Hero Heading
    $wp_customize->add_setting('hero_heading', array(
        'default'           => 'Master Coding Through Interactive Tutorials',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('hero_heading', array(
        'label'    => __('Hero Heading', 'astra-child'),
        'section'  => 'astra_child_hero_section',
        'type'     => 'text',
        'priority' => 10,
    ));
    
    // Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default'           => 'Learn programming with hands-on exercises and real-world projects. Build your skills with our step-by-step coding tutorials.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label'    => __('Hero Description', 'astra-child'),
        'section'  => 'astra_child_hero_section',
        'type'     => 'textarea',
        'priority' => 20,
    ));
    
    // Primary Button Text
    $wp_customize->add_setting('primary_button_text', array(
        'default'           => 'Start Learning',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('primary_button_text', array(
        'label'    => __('Primary Button Text', 'astra-child'),
        'section'  => 'astra_child_hero_section',
        'type'     => 'text',
        'priority' => 30,
    ));
    
    // Primary Button URL
    $wp_customize->add_setting('primary_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('primary_button_url', array(
        'label'    => __('Primary Button URL', 'astra-child'),
        'section'  => 'astra_child_hero_section',
        'type'     => 'url',
        'priority' => 40,
    ));
    
    // Secondary Button Text
    $wp_customize->add_setting('secondary_button_text', array(
        'default'           => 'Browse Tutorials',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('secondary_button_text', array(
        'label'    => __('Secondary Button Text', 'astra-child'),
        'section'  => 'astra_child_hero_section',
        'type'     => 'text',
        'priority' => 50,
    ));
    
    // Secondary Button URL
    $wp_customize->add_setting('secondary_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('secondary_button_url', array(
        'label'    => __('Secondary Button URL', 'astra-child'),
        'section'  => 'astra_child_hero_section',
        'type'     => 'url',
        'priority' => 60,
    ));
    
    // Hero Background Image
    $wp_customize->add_setting('hero_background', array(
        'default'           => get_stylesheet_directory_uri() . '/assets/images/code-editor-dark.jpg',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label'    => __('Hero Background Image', 'astra-child'),
        'section'  => 'astra_child_hero_section',
        'settings' => 'hero_background',
        'priority' => 70,
    )));
}
add_action('customize_register', 'astra_child_customize_register'); 