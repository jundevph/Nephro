<?php
function load_my_scripts() {
    // This is how you link your CSS
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    // This is how you link a JS library (like Alpine.js or React)
    wp_enqueue_script('my-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'load_my_scripts');