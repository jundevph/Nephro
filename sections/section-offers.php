<?php
/**
 * Section: What We Offer
 * Grid of service offering cards
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

<section class="py-20 md:py-28 bg-[#204185]">
    <div class="max-w-[85rem] mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-wide">What We Offer</h2>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6 justify-center">
            <?php
            $offers = [
                ['title' => 'PhilHealth Accredited'],
                ['title' => 'Zero Cash-out'],
                ['title' => 'Loyalty Patient Program'],
                ['title' => 'Nutritionist Counseling'],
                ['title' => 'Media Entertainment'],
                ['title' => 'Free HD Session'],
                ['title' => 'Free Dialyzer'],
                ['title' => 'Free Laboratories'],
                ['title' => 'Free Epoetin'],
                ['title' => 'Free IV Iron'],
                ['title' => 'Free WiFi'],
                ['title' => 'Free Parking'],
            ];

            foreach ($offers as $offer) : ?>
                <div class="bg-[#F5FBFC] p-6 lg:p-8 rounded-[16px] shadow-lg text-center transition-transform hover:-translate-y-1">
                    <h3 class="text-sm lg:text-base font-bold text-[#14919B] mb-4">
                        <?php echo esc_html($offer['title']); ?>
                    </h3>
                    <p class="text-xs lg:text-[13px] text-gray-500 leading-relaxed font-medium">
                        Maecenas metus lectus, tempor nec massa sed, maximus ullamcorper lacus. Vivamus ligula
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
