<?php
/**
 * Template part for displaying the features section
 *
 * @package Astra-Child
 */

function astra_child_feature_icon($icon) {
    switch ($icon) {
        case 'lightning-bolt':
            return '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>';
        case 'path':
            return '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>';
        case 'users':
            return '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>';
        case 'project':
            return '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>';
        case 'trophy':
            return '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>';
        case 'database':
            return '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>';
        default:
            return '';
    }
}

$features_json = get_theme_mod('features_cards_json', '');
$features = json_decode($features_json, true);
if (!is_array($features)) {
    $features = [];
}
?>

<section id="features" class="py-20 bg-neutral-900">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-500">
        Features
      </h2>
      <p class="text-neutral-300 max-w-2xl mx-auto">
        Discover powerful tools and resources designed to accelerate your coding journey.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($features as $card): ?>
        <div class="bg-neutral-800 rounded-lg border border-neutral-700 p-6 transition-all duration-300 hover:border-cyan-400 hover:shadow-[0_0_15px_rgba(6,182,212,0.2)] group">
          <div class="w-14 h-14 bg-gradient-to-br from-cyan-400 to-teal-500 rounded-lg flex items-center justify-center mb-6 text-neutral-900 group-hover:scale-110 transition-transform duration-300">
            <?php echo astra_child_feature_icon($card['icon'] ?? ''); ?>
          </div>
          <h3 class="text-xl font-bold mb-3 text-white group-hover:text-cyan-400 transition-colors duration-300">
            <?php echo esc_html($card['title'] ?? ''); ?>
          </h3>
          <p class="text-neutral-400">
            <?php echo esc_html($card['desc'] ?? ''); ?>
          </p>
          <?php if (!empty($card['bullets']) && is_array($card['bullets'])): ?>
            <ul class="mt-4 space-y-2">
              <?php foreach ($card['bullets'] as $bullet): ?>
                <li class="flex items-center text-neutral-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <?php echo esc_html($bullet); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-16 text-center">
      <a href="#categories" class="inline-block px-8 py-3 bg-gradient-to-r from-cyan-400 to-teal-500 text-neutral-900 font-bold rounded-md transform transition-all duration-300 hover:scale-105 hover:shadow-[0_0_15px_rgba(6,182,212,0.5)]">
        Explore All Features
      </a>
    </div>
  </div>
</section> 