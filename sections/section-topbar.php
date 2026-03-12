<?php
/**
 * Section: Top Bar
 * Contact information and social media icons strip
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

<div class="topbar bg-gradient-to-r from-[#0D3B66] to-[#14919B] text-white text-xs">
    <div class="max-w-7xl mx-auto px-4 py-2 flex flex-wrap items-center justify-between gap-2">

        <!-- Contact Info -->
        <div class="flex flex-wrap items-center gap-3 md:gap-5">
            <!-- Pasig City -->
            <div class="flex items-center gap-1.5">
                <img src="<?php echo esc_url($img_url . 'Icon-fa-solid-location-nav.png'); ?>" alt="" class="w-3 h-3" aria-hidden="true">
                <span class="font-semibold">Pasig City:</span>
                <span class="opacity-90">(049) 301-021-0116 / 1786-6322</span>
            </div>

            <span class="topbar-divider hidden md:inline-block"></span>

            <!-- Malabon City -->
            <div class="flex items-center gap-1.5">
                <img src="<?php echo esc_url($img_url . 'Icon-fa-solid-location-nav.png'); ?>" alt="" class="w-3 h-3" aria-hidden="true">
                <span class="font-semibold">Malabon City:</span>
                <span class="opacity-90">(049) 1414-0295 / 1566-0127</span>
            </div>

            <span class="topbar-divider hidden md:inline-block"></span>

            <!-- Pasig Sandoval -->
            <div class="flex items-center gap-1.5">
                <img src="<?php echo esc_url($img_url . 'Icon-fa-solid-location-nav.png'); ?>" alt="" class="w-3 h-3" aria-hidden="true">
                <span class="font-semibold">Pasig City - Sandoval:</span>
                <span class="opacity-90">Soon to Open</span>
            </div>
        </div>

        <!-- Social Icons -->
        <div class="flex items-center gap-3">
            <a href="#" aria-label="Facebook" class="hover:opacity-80">
                <img src="<?php echo esc_url($img_url . 'fb-nav.png'); ?>" alt="" class="w-4 h-4" aria-hidden="true">
            </a>
            <a href="#" aria-label="Instagram" class="hover:opacity-80">
                <img src="<?php echo esc_url($img_url . 'ig-nav.png'); ?>" alt="" class="w-4 h-4" aria-hidden="true">
            </a>
            <a href="#" aria-label="LinkedIn" class="hover:opacity-80">
                <img src="<?php echo esc_url($img_url . 'linkd-nav.png'); ?>" alt="" class="w-4 h-4" aria-hidden="true">
            </a>
            <a href="#" aria-label="TikTok" class="hover:opacity-80">
                <img src="<?php echo esc_url($img_url . 'tiktok-nav.png'); ?>" alt="" class="w-4 h-4" aria-hidden="true">
            </a>
        </div>
    </div>
</div>
