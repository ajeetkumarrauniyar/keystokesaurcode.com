<?php
/**
 * The template for displaying the footer
 * 
 * @package Astra Child
 */
?>

<footer id="footer" class="bg-neutral-900 text-white">
  <div class="container mx-auto px-4">
    <div class="pt-16 pb-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Column 1: About -->
        <div>
          <h3 class="text-xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-500">
            <?php bloginfo('name'); ?>
          </h3>
          <p class="text-neutral-400 mb-4">
            <?php bloginfo('description'); ?>
          </p>
          <div class="flex space-x-4">
            <!-- Social icons (replace # with your links) -->
            <a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300">
              <span class="screen-reader-text">Twitter</span>
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300">
              <span class="screen-reader-text">GitHub</span>
              <i class="fab fa-github"></i>
            </a>
            <a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300">
              <span class="screen-reader-text">Facebook</span>
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300">
              <span class="screen-reader-text">Instagram</span>
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>

        <!-- Column 2: Quick Links (Dynamic Menu) -->
        <div>
          <h3 class="text-lg font-bold mb-4">Quick Links</h3>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'footer_menu',
              'menu_class'     => 'space-y-2',
              'container'      => false,
              'fallback_cb'    => false,
              'link_before'    => '<span class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>',
              'link_after'     => '</span>',
            ));
          ?>
        </div>

        <!-- Column 3: Widget Area (Optional) -->
        <div>
          <h3 class="text-lg font-bold mb-4">Resources</h3>
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <ul class="space-y-2">
              <?php dynamic_sidebar( 'footer-1' ); ?>
            </ul>
          <?php else: ?>
            <ul class="space-y-2">
              <li><a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300 flex items-center">Documentation</a></li>
              <li><a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300 flex items-center">API Reference</a></li>
              <li><a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300 flex items-center">Community Forum</a></li>
              <li><a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300 flex items-center">GitHub Repository</a></li>
              <li><a href="#" class="text-neutral-400 hover:text-cyan-400 transition-colors duration-300 flex items-center">YouTube Channel</a></li>
            </ul>
          <?php endif; ?>
        </div>

        <!-- Column 4: Contact -->
        <div>
          <h3 class="text-lg font-bold mb-4">Contact Us</h3>
          <ul class="space-y-3">
            <li class="flex items-start">
              <i class="fa fa-envelope text-cyan-400 mr-2 mt-0.5"></i>
              <span class="text-neutral-400">support@keystrokeaurcode.com</span>
            </li>
            <li class="flex items-start">
              <i class="fa fa-phone text-cyan-400 mr-2 mt-0.5"></i>
              <span class="text-neutral-400">(123) 456-7890</span>
            </li>
            <li class="flex items-start">
              <i class="fa fa-map-marker-alt text-cyan-400 mr-2 mt-0.5"></i>
              <span class="text-neutral-400">123 Coding Street, Tech City, TC 12345</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="border-t border-neutral-800 py-6">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <p class="text-neutral-500 text-sm mb-4 md:mb-0">
          &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
        </p>
        <div class="flex space-x-6">
          <a href="#" class="text-neutral-500 hover:text-cyan-400 text-sm transition-colors duration-300">Privacy Policy</a>
          <a href="#" class="text-neutral-500 hover:text-cyan-400 text-sm transition-colors duration-300">Terms of Service</a>
          <a href="#" class="text-neutral-500 hover:text-cyan-400 text-sm transition-colors duration-300">Cookie Policy</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
