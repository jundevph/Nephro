<?php
/**
 * Section: Hero
 * Hero banner with background image, wave overlay, headline, description, CTA, and feature pills
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

<section class="hero relative" style="background-image: url('<?php echo esc_url($img_url . 'Hero-image.png'); ?>');">

    <!-- Gradient Overlay
    <div class="absolute inset-0 bg-gradient-to-r from-[#204185]/90 via-[#204185]/70 to-transparent z-[1]"></div> -->

    <!-- Content -->
    <div class="hero-content relative z-[2] max-w-[85rem] mx-auto px-4">
        <div class="max-w-2xl">
            <h1 class="text-[2.5rem] md:text-5xl lg:text-[4.2rem] font-bold text-white leading-[1.1]">
                Alagang Totoo,<br>Alagang Pamilya.
            </h1>

            <div class="hero-lower-content max-w-[18rem] md:max-w-[19.5rem]">
                <p class="text-[#707070] text-sm md:text-base leading-relaxed mb-8 font-medium">
                    We understand that a diagnosis of chronic kidney disease marks the beginning of a new journey, one that can feel overwhelming for both you and your loved ones.
                </p>

                <a href="#about"
                   class="cta-button inline-block bg-[#1CA0AA] hover:bg-[#14838b] text-white font-bold text-xs md:text-sm uppercase tracking-wide px-8 py-4 rounded-[6px] transition-all shadow-md">
                    Book Your Session Today
                </a>
            </div>
        </div>
    </div>

  
</section>

<!-- Feature Blocks -->
<section class="feature-pills relative -mt-16 md:mt-[5rem] z-20 pb-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 justify-center">
            <?php
            $features = [
                ['title' => "Advanced Medical\nTechnology", 'bg' => 'bg-[#2A438A]'],
                ['title' => "A Superior Patient\nEnvironment", 'bg' => 'bg-[#1CA0AA]'],
                ['title' => "Guaranteed Physician-Led\nSupervision", 'bg' => 'bg-[#2A438A]'],
                ['title' => "Uncompromising Safety &\nInfection Control", 'bg' => 'bg-[#1CA0AA]'],
            ];

            foreach ($features as $feature) : ?>
                <div class="feature-pill <?php echo esc_attr($feature['bg']); ?> shadow-xl rounded-[12px] px-4 py-8 flex flex-col items-center justify-center text-center transition-transform hover:-translate-y-1">
                    <span class="text-white text-sm md:text-[15px] font-bold leading-snug whitespace-pre-line"><?php echo esc_html($feature['title']); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
