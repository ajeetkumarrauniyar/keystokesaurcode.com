/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    './page-templates/**/*.php',
    './assets/css/**/*.css',
    './assets/css/src/components/**/*.css',
    './template-parts/**/*.php',
    './inc/**/*.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        'inter': ['Inter', 'system-ui', 'sans-serif'],
        'space': ['Space Mono', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
} 