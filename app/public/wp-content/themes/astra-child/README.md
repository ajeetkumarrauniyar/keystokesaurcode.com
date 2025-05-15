# Astra Child Theme with Tailwind CSS

This is a WordPress child theme based on Astra with Tailwind CSS integration.

## Setup

1. Install Node.js dependencies:
   ```
   npm install
   ```

2. Build Tailwind CSS:
   ```
   npm run build
   ```

3. For development, you can watch for changes:
   ```
   npm run watch
   ```

## Using Tailwind CSS

Tailwind utility classes can be used directly in your HTML or PHP templates. For example:

```html
<div class="flex items-center justify-between p-4 bg-gray-100">
  <h2 class="text-xl font-bold text-blue-600">Title</h2>
  <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Button</button>
</div>
```

## File Structure

- `src/input.css` - The source Tailwind CSS file with directives
- `dist/output.css` - The compiled Tailwind CSS file
- `dist/script.js` - JavaScript file for theme functionality
- `functions.php` - WordPress theme functions including style/script enqueuing
- `header.php` - Theme header template
- `style.css` - Main theme stylesheet

## Development

When making changes to your theme, ensure you have the Tailwind CSS watcher running:

```
npm run watch
```

This will automatically rebuild your CSS as you add or remove Tailwind utility classes in your templates.

For production builds:

```
npm run build
```

## Customization

You can customize your Tailwind configuration in the `tailwind.config.js` file. 