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

<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#0D3B66]">What We Offer</h2>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6">
            <?php
            $offers = [
                ['title' => 'PhilHealth Accredited', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-white'],
                ['title' => 'Zero Capital-out', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-white'],
                ['title' => 'Loyalty Patient Program', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-white'],
                ['title' => 'Nutritionist Counseling', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-white'],
                ['title' => 'Media Entertainment', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-white'],
                ['title' => 'Free MD Sponsor', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-[#14919B] text-white'],
                ['title' => 'Free Dialyzer', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-[#14919B] text-white'],
                ['title' => 'Free Labolatory', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-[#14919B] text-white'],
                ['title' => 'Free Epoetin', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-[#14919B] text-white'],
                ['title' => 'Free IV Iron', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-[#14919B] text-white'],
                ['title' => 'Free Hepatitis Screening', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-[#14919B] text-white'],
                ['title' => 'Free WiFi', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-[#14919B] text-white'],
                ['title' => 'Free Parking', 'desc' => 'Maaasahan mong walang Active PhilHealth ang kinakailangan dahil ang lahat ng aming serbisyo ay tinatanggap.', 'color' => 'bg-[#14919B] text-white'],
            ];

            foreach ($offers as $index => $offer) :
                $is_teal = str_contains($offer['color'], '14919B');
            ?>
                <div class="offer-card p-5 <?php echo esc_attr($offer['color']); ?> rounded-xl shadow-sm">
                    <div class="offer-icon mb-3">
                        <img src="<?php echo esc_url($img_url . 'what-we-offer-logo.png'); ?>"
                             alt="" class="w-8 h-8" aria-hidden="true"
                             loading="lazy">
                    </div>
                    <h3 class="text-sm font-bold mb-2 <?php echo $is_teal ? 'text-white' : 'text-[#0D3B66]'; ?>">
                        <?php echo esc_html($offer['title']); ?>
                    </h3>
                    <p class="text-xs leading-relaxed <?php echo $is_teal ? 'text-white/80' : 'text-gray-500'; ?>">
                        <?php echo esc_html($offer['desc']); ?>
                    </p>
                    <p class="mt-3 text-xs font-semibold <?php echo $is_teal ? 'text-white/90' : 'text-[#14919B]'; ?>">
                        Server: Shamian Agius
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
