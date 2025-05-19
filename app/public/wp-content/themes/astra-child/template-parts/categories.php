<?php

/**
 * Template part for displaying the categories section
 *
 * @package Astra-Child
 */
?>

<section id="categories" class="py-20 bg-neutral-800">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2
        class="text-3xl md:text-4xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-500">
        <?php echo esc_html(get_theme_mod('categories_section_title', 'Categories')); ?>

      </h2>
      <p class="text-neutral-300 max-w-2xl mx-auto">
        <?php echo esc_html(get_theme_mod('categories_section_description', 'Explore our comprehensive library of tutorials across popular programming languages and frameworks.')); ?>
      </p>
    </div>

    <div
      class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Python Category -->
      <div
        class="group relative overflow-hidden rounded-lg border border-neutral-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-[0_0_15px_rgba(6,182,212,0.2)]">
        <div
          class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-blue-800/40 opacity-50 group-hover:opacity-70 transition-opacity duration-300"></div>
        <div class="relative p-6">
          <div class="flex items-center mb-4">
            <div
              class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-white"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <path
                  d="M12 2c-5.5 0-10 3.8-10 8.5 0 2.4 1 4.5 2.7 6L4 22l6.8-3.4c.4.1.8.1 1.2.1 5.5 0 10-3.8 10-8.5S17.5 2 12 2z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-white">Python</h3>
          </div>

          <p class="text-neutral-300 mb-6">
            Master Python programming with tutorials ranging from
            basics to advanced concepts.
          </p>

          <div class="space-y-3 mb-6">
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Data Science & ML</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Web Development</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Automation & Scripting</span>
            </div>
          </div>

          <div class="flex items-center justify-between">
            <span class="text-sm text-neutral-400">42 Tutorials</span>
            <a
              href="#"
              class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300 flex items-center group">
              <span>Explore</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- JavaScript Category -->
      <div
        class="group relative overflow-hidden rounded-lg border border-neutral-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-[0_0_15px_rgba(6,182,212,0.2)]">
        <div
          class="absolute inset-0 bg-gradient-to-br from-yellow-600/20 to-yellow-800/40 opacity-50 group-hover:opacity-70 transition-opacity duration-300"></div>
        <div class="relative p-6">
          <div class="flex items-center mb-4">
            <div
              class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-neutral-900"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <path
                  d="M20 17.58A5 5 0 0 0 18 8h-1.26A8 8 0 1 0 4 16.25"></path>
                <line x1="8" y1="16" x2="8.01" y2="16"></line>
                <line x1="8" y1="20" x2="8.01" y2="20"></line>
                <line x1="12" y1="18" x2="12.01" y2="18"></line>
                <line x1="12" y1="22" x2="12.01" y2="22"></line>
                <line x1="16" y1="16" x2="16.01" y2="16"></line>
                <line x1="16" y1="20" x2="16.01" y2="20"></line>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-white">
              JavaScript
            </h3>
          </div>

          <p class="text-neutral-300 mb-6">
            Build dynamic web applications with modern JavaScript
            frameworks and libraries.
          </p>

          <div class="space-y-3 mb-6">
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>React & Vue</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Node.js & Express</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Modern ES6+ Features</span>
            </div>
          </div>

          <div class="flex items-center justify-between">
            <span class="text-sm text-neutral-400">56 Tutorials</span>
            <a
              href="#"
              class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300 flex items-center group">
              <span>Explore</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Java Category -->
      <div
        class="group relative overflow-hidden rounded-lg border border-neutral-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-[0_0_15px_rgba(6,182,212,0.2)]">
        <div
          class="absolute inset-0 bg-gradient-to-br from-red-600/20 to-red-800/40 opacity-50 group-hover:opacity-70 transition-opacity duration-300"></div>
        <div class="relative p-6">
          <div class="flex items-center mb-4">
            <div
              class="w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-white"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <path
                  d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-white">Java</h3>
          </div>

          <p class="text-neutral-300 mb-6">
            Develop enterprise-grade applications with Java's robust
            ecosystem and frameworks.
          </p>

          <div class="space-y-3 mb-6">
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Spring Framework</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Android Development</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Enterprise Applications</span>
            </div>
          </div>

          <div class="flex items-center justify-between">
            <span class="text-sm text-neutral-400">38 Tutorials</span>
            <a
              href="#"
              class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300 flex items-center group">
              <span>Explore</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Ruby Category -->
      <div
        class="group relative overflow-hidden rounded-lg border border-neutral-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-[0_0_15px_rgba(6,182,212,0.2)]">
        <div
          class="absolute inset-0 bg-gradient-to-br from-pink-600/20 to-pink-800/40 opacity-50 group-hover:opacity-70 transition-opacity duration-300"></div>
        <div class="relative p-6">
          <div class="flex items-center mb-4">
            <div
              class="w-12 h-12 bg-pink-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-white"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <polygon
                  points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-white">Ruby</h3>
          </div>

          <p class="text-neutral-300 mb-6">
            Build elegant web applications with Ruby on Rails and
            other Ruby frameworks.
          </p>

          <div class="space-y-3 mb-6">
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Ruby on Rails</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Sinatra</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>API Development</span>
            </div>
          </div>

          <div class="flex items-center justify-between">
            <span class="text-sm text-neutral-400">24 Tutorials</span>
            <a
              href="#"
              class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300 flex items-center group">
              <span>Explore</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- C# Category -->
      <div
        class="group relative overflow-hidden rounded-lg border border-neutral-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-[0_0_15px_rgba(6,182,212,0.2)]">
        <div
          class="absolute inset-0 bg-gradient-to-br from-purple-600/20 to-purple-800/40 opacity-50 group-hover:opacity-70 transition-opacity duration-300"></div>
        <div class="relative p-6">
          <div class="flex items-center mb-4">
            <div
              class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-white"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <polyline points="16 18 22 12 16 6"></polyline>
                <polyline points="8 6 2 12 8 18"></polyline>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-white">C#</h3>
          </div>

          <p class="text-neutral-300 mb-6">
            Create powerful applications with Microsoft's versatile
            programming language.
          </p>

          <div class="space-y-3 mb-6">
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>.NET Core</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>ASP.NET MVC</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Unity Game Development</span>
            </div>
          </div>

          <div class="flex items-center justify-between">
            <span class="text-sm text-neutral-400">31 Tutorials</span>
            <a
              href="#"
              class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300 flex items-center group">
              <span>Explore</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Go Category -->
      <div
        class="group relative overflow-hidden rounded-lg border border-neutral-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-[0_0_15px_rgba(6,182,212,0.2)]">
        <div
          class="absolute inset-0 bg-gradient-to-br from-cyan-600/20 to-cyan-800/40 opacity-50 group-hover:opacity-70 transition-opacity duration-300"></div>
        <div class="relative p-6">
          <div class="flex items-center mb-4">
            <div
              class="w-12 h-12 bg-cyan-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-white"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path
                  d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-white">Go</h3>
          </div>

          <p class="text-neutral-300 mb-6">
            Build efficient, reliable, and scalable server-side
            applications with Go.
          </p>

          <div class="space-y-3 mb-6">
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Microservices</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Concurrency</span>
            </div>
            <div class="flex items-center text-neutral-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2 text-cyan-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Cloud-Native Development</span>
            </div>
          </div>

          <div class="flex items-center justify-between">
            <span class="text-sm text-neutral-400">19 Tutorials</span>
            <a
              href="#"
              class="text-cyan-400 hover:text-cyan-300 transition-colors duration-300 flex items-center group">
              <span>Explore</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-16 text-center">
      <a
        href="#latest-tutorials"
        class="inline-block px-8 py-3 bg-gradient-to-r from-cyan-400 to-teal-500 text-neutral-900 font-bold rounded-md transform transition-all duration-300 hover:scale-105 hover:shadow-[0_0_15px_rgba(6,182,212,0.5)]">
        View All Categories
      </a>
    </div>
  </div>
</section>