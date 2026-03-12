<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-slate-900 antialiased'); ?>>
    <?php wp_body_open(); ?>

    <div class="hidden md:block bg-gradient-to-r from-teal-600 to-teal-500 text-white">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex items-center justify-between py-2 text-xs">
                <div class="flex items-center gap-8 text-white/90">
                    <span class="inline-flex items-center gap-1.5">
                        <img class="h-3 w-3 brightness-0 invert" src="<?php echo esc_url(nephro_asset_url('Home/loc-footer.png')); ?>" alt="">
                        <strong>Pasig City - CMO</strong>
                        <span>0917 307 0110 &middot; 7758 5372</span>
                    </span>
                    <span class="hidden lg:inline-flex items-center gap-1.5">
                        <img class="h-3 w-3 brightness-0 invert" src="<?php echo esc_url(nephro_asset_url('Home/loc-footer.png')); ?>" alt="">
                        <strong>Malabon City - Tinajeros</strong>
                        <span>0917 169 8292 &middot; 7004 2671</span>
                    </span>
                    <span class="hidden xl:inline-flex items-center gap-1.5">
                        <img class="h-3 w-3 brightness-0 invert" src="<?php echo esc_url(nephro_asset_url('Home/loc-footer.png')); ?>" alt="">
                        <strong>Pasig City - Sandoval</strong>
                        <span>Soon to Open</span>
                    </span>
                </div>

                <div class="flex items-center gap-2">
                    <a class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition" href="#" aria-label="Facebook">
                        <img class="h-3.5 w-3.5" src="<?php echo esc_url(nephro_asset_url('Home/fb-nav.png')); ?>" alt="">
                    </a>
                    <a class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition" href="#" aria-label="Instagram">
                        <img class="h-3.5 w-3.5" src="<?php echo esc_url(nephro_asset_url('Home/ig-nav.png')); ?>" alt="">
                    </a>
                    <a class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition" href="#" aria-label="LinkedIn">
                        <img class="h-3.5 w-3.5" src="<?php echo esc_url(nephro_asset_url('Home/linkd-nav.png')); ?>" alt="">
                    </a>
                    <a class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition" href="#" aria-label="TikTok">
                        <img class="h-3.5 w-3.5" src="<?php echo esc_url(nephro_asset_url('Home/tiktok-nav.png')); ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header class="relative z-50 bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex items-center justify-between gap-6 py-3">
                <a class="flex-shrink-0" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="h-12 w-auto" src="<?php echo esc_url(nephro_asset_url('Home/Logo-Nav.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                </a>

                <nav class="hidden lg:flex items-center gap-8">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container'      => false,
                            'menu_class'     => 'flex items-center gap-8 text-sm font-semibold text-slate-700',
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </nav>

                <a class="hidden md:inline-flex items-center justify-center rounded-full bg-teal-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-teal-600 transition" href="#">
                    Book Now
                </a>
            </div>
        </div>
    </header>
