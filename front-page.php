<?php
/**
 * Template Name: Front Page
 * Description: Homepage template that assembles all modular sections.
 *
 * @package Nephro
 */

declare(strict_types=1);

get_header();
?>

<main id="main-content" role="main">
    <?php get_template_part('sections/section', 'hero'); ?>
    <?php get_template_part('sections/section', 'about'); ?>
    <?php get_template_part('sections/section', 'why-choose'); ?>
    <?php get_template_part('sections/section', 'offers'); ?>
    <?php get_template_part('sections/section', 'gallery'); ?>
    <?php get_template_part('sections/section', 'news'); ?>
</main>

<?php get_footer(); ?>
