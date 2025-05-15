<?php
/**
 * Template Name: Tailwind Test
 * 
 * A template to test if Tailwind CSS is working properly
 */

get_header(); ?>

<div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-blue-600 mb-4">Tailwind CSS Test</h1>
    
    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-gray-800 mb-2">Basic Utility Classes</h2>
        
        <div class="flex flex-col md:flex-row gap-4 mb-4">
            <div class="bg-red-200 p-4 rounded">Red background</div>
            <div class="bg-green-200 p-4 rounded">Green background</div>
            <div class="bg-blue-200 p-4 rounded">Blue background</div>
        </div>
        
        <div class="flex justify-between items-center mb-4">
            <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                Button 1
            </button>
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                Button 2
            </button>
        </div>
        
        <p class="text-sm italic text-gray-600">
            If you can see this page with proper styling (colored backgrounds, responsive layout, etc.), 
            then Tailwind CSS is working correctly!
        </p>
    </div>
</div>

<?php get_footer(); ?> 