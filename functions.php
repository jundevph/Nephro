<?php
/**
 * Theme Functions
 */

function setup_tailwind_theme() {
    // 1. Add support for Title Tags (so you don't have to hardcode them in header.php)
    add_theme_support('title-tag');

    // 2. Load Tailwind CSS via CDN (Great for collaboration/dev)
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
}

// This tells WordPress to run the function above when it's loading scripts
add_action('wp_enqueue_scripts', 'setup_tailwind_theme');