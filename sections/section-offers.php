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

<section class="relative pt-0 pb-20 md:pb-28">
    <!-- Wave transition from white to blue -->
    <div class="w-full">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto block" preserveAspectRatio="none">
            <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,70 L1440,120 L0,120 Z" fill="#204185"/>
        </svg>
    </div>

    <div class="bg-[#204185] -mt-1">
    <div class="max-w-[85rem] mx-auto px-4 pb-20">

        <!-- Section Header -->
        <div class="text-center mb-14">
            <img src="<?php echo esc_url($img_url . 'Logo-footer.png'); ?>" alt="" class="h-12 mx-auto mb-4" aria-hidden="true" loading="lazy">
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
    </div>
</section>
