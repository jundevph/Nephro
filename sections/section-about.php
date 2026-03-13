<?php
/**
 * Section: About Us
 * Company introduction with text and dual image layout
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

<section id="about" class="about-section py-20 lg:py-28 mb-[7rem] bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">

        <div class="relative flex flex-col lg:block lg:min-h-[620px]">

            <!-- Z-INDEX LAYER 1 (back): Large Chair Image — top right, peeks behind card -->
            <div class="hidden lg:block absolute right-[10rem] -top-14 w-[35%] z-[1] rounded-[20px] overflow-hidden shadow-xl bg-white border-[6px] border-white">
                <img src="<?php echo esc_url($img_url . 'abt-img1.png'); ?>"
                     alt="Dialysis Chair at Nephro Access"
                     class="w-full h-[500px] object-cover about-image"
                     loading="lazy">
            </div>

            <!-- Z-INDEX LAYER 2 (middle): Light Blue Info Card -->
            <div class="bg-[#F3FAFC] rounded-[15px] ml-0 lg:ml-20 p-8 md:p-12 lg:p-16 lg:w-[50%] lg:min-h-[550px] relative z-[2]">
                <div class="max-w-md">
                    <h2 class="text-4xl md:text-[2.75rem] font-extrabold text-[#204185] tracking-tight mb-3">
                        About Us
                    </h2>
                    <h3 class="text-lg md:text-xl font-bold text-[#14919B] mb-8">
                        A Community Built on Trust
                    </h3>

                    <p class="text-gray-600 font-medium text-base mb-6">
                        At <strong class="text-gray-800">Nephro Access Dialysis Center</strong>, we want you to know that you have a dedicated partner to walk this path with you.
                    </p>
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        We have built our centers to be more than just medical facilities; they are sanctuaries for healing, designed to provide a welcoming and supportive environment where your health, comfort, and well-being are our highest priorities.
                    </p>
                </div>
            </div>

            <!-- Z-INDEX LAYER 3 (front): Storefront Image — overlaps card bottom-left -->
            <div class="relative lg:absolute lg:left-[10%] lg:bottom-[-75px] w-[85%] lg:w-[42%] z-[3] rounded-[20px] overflow-hidden shadow-2xl bg-white border-[6px] border-white mt-[-30px] lg:mt-0 mx-auto lg:mx-0">
                <img src="<?php echo esc_url($img_url . 'abt-img2.png'); ?>"
                     alt="Nephro Access Center Storefront"
                     class="w-full h-[250px] md:h-[320px] object-cover about-image"
                     loading="lazy">
            </div>

            <!-- Mobile-only: Chair Image -->
            <div class="lg:hidden w-full mt-6 rounded-[20px] overflow-hidden shadow-xl bg-white border-[6px] border-white">
                <img src="<?php echo esc_url($img_url . 'abt-img1.png'); ?>"
                     alt="Dialysis Chair at Nephro Access"
                     class="w-full h-[280px] object-cover about-image"
                     loading="lazy">
            </div>

            <!-- Read More Button — bottom right -->
            <div class="lg:absolute lg:bottom-[100px] lg:right-[15%] z-[4] mt-8 lg:mt-0 flex justify-center lg:justify-end">
                <a href="#"
                   class="inline-block bg-[#204185] hover:bg-[#163066] text-white text-sm font-semibold px-8 py-3.5 rounded-[8px] transition-transform hover:-translate-y-1 shadow-md">
                    Read More
                </a>
            </div>

        </div>

    </div>
</section>
