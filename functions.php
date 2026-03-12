<?php
/**
 * Nephro Access Theme Functions
 *
 * @package Nephro
 */

declare(strict_types=1);

/* ---------------------------------------------------------------
   Theme Setup
--------------------------------------------------------------- */
function nephro_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);

    register_nav_menus([
        'main-menu'   => __('Primary Navigation', 'nephro'),
        'footer-menu' => __('Footer Navigation', 'nephro'),
    ]);
}
add_action('after_setup_theme', 'nephro_theme_setup');

/* ---------------------------------------------------------------
   Enqueue Styles & Scripts
--------------------------------------------------------------- */
function nephro_enqueue_assets(): void
{
    $theme_uri    = get_template_directory_uri();
    $theme_dir    = get_template_directory();
    $theme_ver    = wp_get_theme()->get('Version') ?: '1.0.0';

    // Tailwind CDN (dev — replace with a build step for production)
    wp_enqueue_script(
        'tailwind-cdn',
        'https://cdn.tailwindcss.com',
        [],
        null,
        false
    );

    // Tailwind config (inline after CDN loads)
    wp_add_inline_script('tailwind-cdn', nephro_tailwind_config());

    // Section CSS files — each section has its own stylesheet
    $section_css = [
        'section-topbar',
        'section-navbar',
        'section-hero',
        'section-about',
        'section-why-choose',
        'section-offers',
        'section-gallery',
        'section-news',
        'section-footer',
    ];

    foreach ($section_css as $handle) {
        $file_path = "{$theme_dir}/assets/css/{$handle}.css";
        if (file_exists($file_path)) {
            wp_enqueue_style(
                "nephro-{$handle}",
                "{$theme_uri}/assets/css/{$handle}.css",
                [],
                $theme_ver
            );
        }
    }

    // Main JS
    wp_enqueue_script(
        'nephro-main',
        "{$theme_uri}/assets/js/main.js",
        [],
        $theme_ver,
        true
    );
}
add_action('wp_enqueue_scripts', 'nephro_enqueue_assets');

/* ---------------------------------------------------------------
   Tailwind Configuration (inline script)
--------------------------------------------------------------- */
function nephro_tailwind_config(): string
{
    return <<<'JS'
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    navy:  '#0D3B66',
                    teal:  '#14919B',
                    mint:  '#F0FDFA',
                },
                fontFamily: {
                    sans: ['Inter', 'Poppins', 'system-ui', 'sans-serif'],
                },
            },
        },
    };
JS;
}