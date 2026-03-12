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
    <div class="max-w-[85rem] mx-auto px-4 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0">
            <img src="<?php echo esc_url($img_url . 'Logo-Nav.png'); ?>"
                 alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                 class="h-10 md:h-[50px] w-auto">
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center gap-10">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-[15px] font-bold text-[#1CA0AA] hover:text-[#14838b] transition-colors">Home</a>
            <a href="#about" class="text-[15px] font-bold text-[#204185] hover:text-[#163066] transition-colors">About Us</a>
            <a href="#facilities" class="text-[15px] font-bold text-[#204185] hover:text-[#163066] transition-colors">Our Facilities</a>
            <a href="#news" class="text-[15px] font-bold text-[#204185] hover:text-[#163066] transition-colors">News &amp; Events</a>
            <a href="#"
               class="inline-block bg-[#1CA0AA] hover:bg-[#14838b] text-white text-[15px] font-bold px-8 py-3 rounded-lg shadow-sm transition-transform hover:-translate-y-0.5 ml-2">
                Book Now
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
        <div class="px-4 py-6 flex flex-col gap-4 text-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-base font-bold text-[#1CA0AA]">Home</a>
            <a href="#about" class="text-base font-bold text-[#204185]">About Us</a>
            <a href="#facilities" class="text-base font-bold text-[#204185]">Our Facilities</a>
            <a href="#news" class="text-base font-bold text-[#204185]">News &amp; Events</a>
            <a href="#" class="inline-block bg-[#1CA0AA] text-white text-base font-bold px-6 py-3 rounded-lg mt-2 mx-4">
                Book Now
            </a>
        </div>
    </div>
</nav>
