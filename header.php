<?php
/**
 * Theme Header
 * Loads the document head, top bar, and navigation via section partials.
 *
 * @package Nephro
 */

declare(strict_types=1);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>
    <?php wp_body_open(); ?>

    <header id="site-header">
        <?php get_template_part('sections/section', 'topbar'); ?>
        <?php get_template_part('sections/section', 'navbar'); ?>
    </header>