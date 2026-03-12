<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50 text-gray-900'); ?>>
    <?php wp_body_open(); ?>

    <header class="bg-white shadow-sm mb-8">
        <nav class="container mx-auto px-4 py-6 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            
            <div class="hidden md:block">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container'      => false,
                    'menu_class'     => 'flex space-x-6 font-medium',
                ));
                ?>
            </div>
        </nav>
    </header>