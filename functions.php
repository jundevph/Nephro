<?php
/**
 * Theme Functions
 */

function nephro_setup_theme() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'main-menu'   => __('Main Menu', 'nephro'),
			'footer-menu' => __('Footer Menu', 'nephro'),
		)
	);
}
add_action('after_setup_theme', 'nephro_setup_theme');

function nephro_enqueue_assets() {
	// Tailwind via CDN (good for quick theme development).
	wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);

	// Theme stylesheet for small custom tweaks.
	wp_enqueue_style('nephro-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'nephro_enqueue_assets');

/**
 * Build a safe theme asset URL (handles spaces).
 */
function nephro_asset_url($relative_path) {
	$relative_path = ltrim((string) $relative_path, '/');
	$parts         = array_map('rawurlencode', explode('/', $relative_path));
	return trailingslashit(get_template_directory_uri()) . implode('/', $parts);
}