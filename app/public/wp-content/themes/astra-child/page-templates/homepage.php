<?php

/**
 * Template Name: Homepage
 * 
 * Template for displaying the homepage with hero section and other content blocks
 *
 * @package Astra-Child
 */

get_header();

// Include the hero section
get_template_part('template-parts/hero');
get_template_part('template-parts/features');
get_template_part('template-parts/categories');
get_template_part('template-parts/latest-tutorials');
get_template_part('template-parts/newsletter');

// Add other sections here as they're developed

get_footer();
