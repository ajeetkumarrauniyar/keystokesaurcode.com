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
function astra_child_customize_register($wp_customize)
{

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

    // Features Section
    $wp_customize->add_section('astra_child_features_section', array(
        'title'    => __('Features Section', 'astra-child'),
        'priority' => 40,
    ));

    // Features Cards JSON
    $wp_customize->add_setting('features_cards_json', array(
        'default'           => json_encode([
            [
                'title' => 'Interactive Tutorials',
                'desc' => 'Learn by doing with hands-on coding exercises that reinforce concepts in real-time.',
                'icon' => 'lightning-bolt',
                'bullets' => [
                    'Live code execution',
                    'Real-time feedback',
                    'Step-by-step guidance'
                ]
            ],
            [
                'title' => 'Customizable Learning Paths',
                'desc' => 'Create personalized learning journeys based on your skill level and career goals.',
                'icon' => 'path',
                'bullets' => [
                    'Skill assessment',
                    'Adaptive difficulty',
                    'Progress tracking'
                ]
            ],
            [
                'title' => 'Community Support',
                'desc' => 'Connect with fellow learners and mentors to solve problems and share knowledge.',
                'icon' => 'users',
                'bullets' => [
                    'Discussion forums',
                    'Code reviews',
                    'Mentor matching'
                ]
            ],
            [
                'title' => 'Project-Based Learning',
                'desc' => 'Build real-world applications that you can add to your portfolio while learning.',
                'icon' => 'project',
                'bullets' => [
                    'Portfolio-ready projects',
                    'Industry-relevant skills',
                    'Guided implementation'
                ]
            ],
            [
                'title' => 'Code Challenges',
                'desc' => 'Test your skills with competitive coding challenges and improve problem-solving abilities.',
                'icon' => 'trophy',
                'bullets' => [
                    'Algorithm challenges',
                    'Leaderboards',
                    'Multiple solutions'
                ]
            ],
            [
                'title' => 'Database Integration',
                'desc' => 'Learn how to connect your applications to databases and manage data effectively.',
                'icon' => 'database',
                'bullets' => [
                    'SQL fundamentals',
                    'ORM techniques',
                    'Data modeling'
                ]
            ]
        ], JSON_PRETTY_PRINT),
        'sanitize_callback' => function ($input) {
            // Validate JSON
            json_decode($input);
            return (json_last_error() === JSON_ERROR_NONE) ? $input : '';
        },
    ));
    $wp_customize->add_control('features_cards_json', array(
        'label'    => __('Features Cards (JSON)', 'astra-child'),
        'section'  => 'astra_child_features_section',
        'type'     => 'textarea',
        'priority' => 10,
        'description' => __('Edit the features cards as JSON. Each card can have a title, desc, icon, and bullets array. Icons: lightning-bolt, path, users, project, trophy, database.', 'astra-child'),
    ));
}
add_action('customize_register', 'astra_child_customize_register');
