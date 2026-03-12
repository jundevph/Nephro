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

<section class="hero relative bg-cover bg-center" style="background-image: url('<?php echo esc_url($img_url . 'bg-with-wave.png'); ?>');">

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 py-20 md:py-28 lg:py-36">
        <div class="max-w-xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6">
                Alagang Totoo,<br>Alagang Pamilya.
            </h1>

            <p class="text-white/90 text-sm md:text-base leading-relaxed mb-8 max-w-md">
                We understand that a diagnosis of chronic kidney disease means that adjusting to a new journey can seem scary and overwhelming for both you and your family.
            </p>

            <a href="#about"
               class="cta-button inline-block bg-[#14919B] hover:bg-[#117A83] text-white font-bold text-sm uppercase tracking-wide px-8 py-3.5 rounded-full transition-all">
                Book Your Session Today
            </a>
        </div>
    </div>

    <!-- Hero Wave Bottom -->
    <div class="hero-wave">
        <img src="<?php echo esc_url($img_url . 'hero-wave.png'); ?>" alt="" class="w-full" aria-hidden="true">
    </div>
</section>

<!-- Feature Pills -->
<section class="feature-pills relative -mt-6 md:-mt-8 z-20 pb-16">
    <div class="max-w-5xl mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-4">
            <?php
            $features = [
                'Advanced Medical Technology',
                'A Superior Patient Experience',
                'Guaranteed Physician-Led Supervision',
                'Uncompromising Safety & Sterilization',
            ];

            foreach ($features as $feature) : ?>
                <div class="feature-pill bg-white shadow-lg rounded-full px-6 py-3 flex items-center gap-2 text-sm font-semibold text-[#0D3B66] border border-gray-100">
                    <svg class="w-5 h-5 text-[#14919B] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span><?php echo esc_html($feature); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
