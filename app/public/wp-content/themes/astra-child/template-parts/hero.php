<?php

/**
 * Template part for displaying the hero section
 *
 * @package Astra-Child
 */
?>

<!-- Hero Section -->
<section id="hero" class="relative min-h-screen bg-neutral-900 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img
            src="<?php echo esc_url(get_theme_mod('hero_background', get_stylesheet_directory_uri() . '/assets/images/code-editor-dark.jpg')); ?>"
            alt="<?php echo esc_attr__('Code editor interface with neon accents', 'astra-child'); ?>"
            class="w-full h-full object-cover opacity-40" />
        <div class="absolute inset-0 bg-gradient-to-r from-neutral-900 via-neutral-900/90 to-neutral-900/80"></div>
    </div>

    <div class="container mx-auto px-4 py-20 md:py-32 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1
                class="text-4xl md:text-6xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-500">
                <?php echo esc_html(get_theme_mod('hero_heading', 'Master Coding Through Interactive Tutorials')); ?>
            </h1>

            <p class="text-lg md:text-xl text-neutral-300 mb-8">
                <?php echo esc_html(get_theme_mod('hero_description', 'Learn programming with hands-on exercises and real-world projects. Build your skills with our step-by-step coding tutorials.')); ?>
            </p>

            <div
                class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <a href="<?php echo esc_url(get_theme_mod('primary_button_url', '#')); ?>"
                    id="start-learning-btn"
                    class="px-8 py-3 bg-gradient-to-r from-cyan-400 to-teal-500 text-neutral-900 font-bold rounded-md transform transition-all duration-300 hover:scale-105 hover:shadow-[0_0_15px_rgba(6,182,212,0.5)]">
                    <?php echo esc_html(get_theme_mod('primary_button_text', 'Start Learning')); ?>
                </a>

                <a href="<?php echo esc_url(get_theme_mod('secondary_button_url', '#')); ?>"
                    class="px-8 py-3 bg-transparent border border-neutral-700 text-white rounded-md transition-all duration-300 hover:border-cyan-400 hover:text-cyan-400">
                    <?php echo esc_html(get_theme_mod('secondary_button_text', 'Browse Tutorials')); ?>
                </a>
            </div>
        </div>

        <div class="mt-12 relative">
            <div class="w-full max-w-4xl mx-auto rounded-lg overflow-hidden border border-neutral-800 shadow-[0_0_30px_rgba(6,182,212,0.15)]">
                <div class="bg-neutral-800 px-4 py-2 flex items-center">
                    <div class="flex space-x-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="ml-4 text-neutral-400 text-sm">main.py</div>
                </div>

                <div class="bg-neutral-900 p-6 font-mono text-sm md:text-base overflow-hidden">
                    <div class="typing-animation">
                        <pre class="text-neutral-300 bg-inherit"><span class="text-purple-400">def</span> <span class="text-cyan-400">hello_world</span>():</pre>
                        <pre class="text-neutral-300 pl-4 bg-inherit"><span class="text-green-400"># Welcome to <?php echo esc_html(get_bloginfo('name')); ?></span></pre>
                        <pre class="text-neutral-300 pl-4 bg-inherit"><span class="text-purple-400">print</span>(<span class="text-yellow-400">"Hello, Developer!"</span>)</pre>
                        <pre class="text-neutral-300 pl-4 bg-inherit"><span class="text-green-400"># Learn to code the right way</span></pre>
                        <pre class="text-neutral-300 pl-4 bg-inherit"><span class="text-purple-400">return</span> <span class="text-yellow-400">"Start your coding journey today!"</span></pre>
                        <pre class="text-neutral-300 bg-inherit"></pre>
                        <pre class="text-neutral-300 bg-inherit"><span class="text-teal-400">result</span> = <span class="text-cyan-400">hello_world</span>()</pre>
                        <pre class="text-neutral-300 bg-inherit"><span class="text-purple-400">print</span>(<span class="text-teal-400">result</span>)</pre>
                    </div>
                </div>
            </div>

            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-full max-w-4xl h-full bg-gradient-to-b from-transparent to-neutral-900 pointer-events-none"></div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <a href="#features"
            class="flex flex-col items-center text-neutral-400 hover:text-cyan-400 transition-colors duration-300">
            <span class="text-sm mb-2">Explore Features</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </a>
    </div>
</section>

<style>
    /* Additional styles for pulse glow effect mentioned in the animation script */
    @keyframes pulseGlow {
        0% {
            box-shadow: 0 0 5px rgba(6, 182, 212, 0.5);
        }

        50% {
            box-shadow: 0 0 20px rgba(6, 182, 212, 0.8);
        }

        100% {
            box-shadow: 0 0 5px rgba(6, 182, 212, 0.5);
        }
    }

    .pulse-glow {
        animation: pulseGlow 1s ease-in-out;
    }

    /* Fix line-height for code block in hero section */
    #hero .typing-animation pre {
        line-height: 1.3 !important;
        margin: 0;
        padding: 0;
        padding-left: 1rem !important;
        box-sizing: border-box;
    }
    #hero .typing-animation pre:not([class*="pl-4"]) {
        padding-left: 0 !important;
    }
</style>

<script>
    // Typing animation effect
    document.addEventListener("DOMContentLoaded", function() {
        const codeLines = document.querySelectorAll(".typing-animation pre");
        let delay = 0;
        const baseDelay = 100;

        codeLines.forEach((line, index) => {
            line.style.opacity = "0";
            setTimeout(() => {
                line.style.opacity = "1";
                line.classList.add("typed");
            }, delay);
            delay += baseDelay * (line.textContent.length / 10) + 300;
        });

        // Start Learning button glow effect
        const startBtn = document.getElementById("start-learning-btn");
        if (startBtn) {
            setInterval(() => {
                startBtn.classList.add("pulse-glow");
                setTimeout(() => {
                    startBtn.classList.remove("pulse-glow");
                }, 1000);
            }, 3000);
        }
    });
</script>