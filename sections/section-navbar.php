<?php
/**
 * Section: Navigation
 * Main navigation bar with logo, menu links, and sign-up CTA
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

<nav class="navbar bg-white sticky top-0 z-50 shadow-sm" id="main-nav">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0">
            <img src="<?php echo esc_url($img_url . 'Logo-Nav.png'); ?>"
                 alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                 class="h-10 md:h-12 w-auto">
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center gap-8">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link text-sm font-semibold text-gray-700 active">Home</a>
            <a href="#about" class="nav-link text-sm font-semibold text-gray-700">About Us</a>
            <a href="#facilities" class="nav-link text-sm font-semibold text-gray-700">Our Facilities</a>
            <a href="#news" class="nav-link text-sm font-semibold text-gray-700">News &amp; Events</a>
            <a href="#"
               class="inline-block bg-[#14919B] hover:bg-[#117A83] text-white text-sm font-semibold px-6 py-2.5 rounded-full transition-colors">
                Sign Up
            </a>
        </div>

        <!-- Mobile Hamburger -->
        <button type="button"
                class="lg:hidden flex flex-col gap-1.5 p-2"
                id="mobile-menu-toggle"
                aria-label="Toggle navigation menu"
                aria-expanded="false">
            <span class="block w-6 h-0.5 bg-gray-700 transition-transform" id="hamburger-top"></span>
            <span class="block w-6 h-0.5 bg-gray-700 transition-opacity" id="hamburger-mid"></span>
            <span class="block w-6 h-0.5 bg-gray-700 transition-transform" id="hamburger-bot"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu lg:hidden bg-white border-t" id="mobile-menu">
        <div class="px-4 py-4 flex flex-col gap-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-sm font-semibold text-gray-700 py-2">Home</a>
            <a href="#about" class="text-sm font-semibold text-gray-700 py-2">About Us</a>
            <a href="#facilities" class="text-sm font-semibold text-gray-700 py-2">Our Facilities</a>
            <a href="#news" class="text-sm font-semibold text-gray-700 py-2">News &amp; Events</a>
            <a href="#"
               class="inline-block bg-[#14919B] text-white text-sm font-semibold px-6 py-2.5 rounded-full text-center">
                Sign Up
            </a>
        </div>
    </div>
</nav>
