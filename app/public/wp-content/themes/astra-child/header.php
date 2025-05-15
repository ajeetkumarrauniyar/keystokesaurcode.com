<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="">

    <!-- Alpine.js - Load first -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"></script>

    <!-- Font Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Core CSS and Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.45.1/apexcharts.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- Project-specific styles -->
    <style>
        /* Base styles */
        :root {
            --primary-color: #1a1a1a;
            --secondary-color: #0ff;
            --accent-color: ;
        }

        /* Strict no-scrollbar rules */
        * {
            -ms-overflow-style: none !important;
            /* IE and Edge */
            scrollbar-width: none !important;
            /* Firefox */
        }

        *::-webkit-scrollbar {
            display: none !important;
            /* Chrome, Safari and Opera */
        }

        /* Typography */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Inter, Inter, system-ui, sans-serif;
        }

        body {
            font-family: Space Mono, Inter, system-ui, sans-serif;
        }

        /* Interactive elements */
        .interactive-element {
            transition: all 0.3s ease;
        }

        .interactive-element:hover {
            transform: translateY(-2px);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
    </style>

    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased text-gray-800 min-h-screen flex flex-col'); ?>>
    <?php wp_body_open(); ?>

    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 focus:z-50 focus:p-4 focus:bg-white focus:text-black">
        Skip to main content
    </a>

    <!-- Navigation Section -->
    <header class="bg-neutral-900 text-white">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <!-- <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-500"> -->
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold text-white">
                        <?php echo get_bloginfo('name'); ?>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" id="mobile-menu-button" class="text-white hover:text-cyan-400 focus:outline-none transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>

                <!-- Desktop menu -->
                <div class="hidden md:flex items-center space-x-6">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex space-x-6',
                        'fallback_cb' => false,
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 1,
                        'link_before' => '<span class="text-white hover:text-cyan-400 transition-colors duration-300">',
                        'link_after' => '</span>'
                    ));
                    ?>

                    <!-- CTA Button
                    <a href="<?php echo esc_url(home_url('/get-started')); ?>" class="px-4 py-2 bg-gradient-to-r from-cyan-400 to-teal-500 text-neutral-900 font-bold rounded-md transition-all duration-300 hover:scale-105">
                        Get Started
                    </a> -->
                </div>
            </nav>

            <!-- Mobile menu (hidden by default) -->
            <div id="mobile-menu" class="md:hidden pb-4 hidden">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex flex-col space-y-4',
                    'fallback_cb' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 1,
                    'link_before' => '<span class="text-white hover:text-cyan-400 transition-colors duration-300">',
                    'link_after' => '</span>'
                ));
                ?>
                <div class="mt-4">
                    <a href="<?php echo esc_url(home_url('/get-started')); ?>" class="block w-full text-center px-4 py-2 bg-gradient-to-r from-cyan-400 to-teal-500 text-neutral-900 font-bold rounded-md transition-all duration-300 hover:scale-105">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main content wrapper -->

    <body class="antialiased text-gray-800 min-h-screen flex flex-col">
        <!-- Skip to main content link for accessibility -->
        <a
            href="#main-content"
            class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 focus:z-50 focus:p-4 focus:bg-white focus:text-black">
            Skip to main content
        </a>
        <main id="main-content" class="flex-1 relative">

            <script>
                // Mobile menu toggle functionality
                document.addEventListener('DOMContentLoaded', function() {
                    const mobileMenuButton = document.getElementById('mobile-menu-button');
                    const mobileMenu = document.getElementById('mobile-menu');

                    if (mobileMenuButton && mobileMenu) {
                        mobileMenuButton.addEventListener('click', function() {
                            mobileMenu.classList.toggle('hidden');
                        });
                    }
                });
            </script>