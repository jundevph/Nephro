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

<section id="about" class="about-section py-20 lg:py-28 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="relative flex flex-col lg:block lg:min-h-[600px]">
            
            <!-- Light Blue Info Card -->
            <div class="bg-[#F3FAFC] rounded-[32px] p-8 md:p-12 lg:p-16 lg:w-[62%] lg:min-h-[520px] relative z-0">
                <div class="max-w-lg lg:pr-10">
                    <h2 class="text-4xl md:text-[2.75rem] font-extrabold text-[#204185] tracking-tight mb-3">
                        About Us
                    </h2>
                    <h3 class="text-lg md:text-xl font-bold text-[#14919B] mb-8">
                        A Community Built on Trust
                    </h3>

                    <p class="text-gray-600 font-medium text-base mb-6">
                        At <strong class="text-gray-800">Nephro Access Dialysis Center</strong>, we want you to know that you have a dedicated partner to walk this path with you.
                    </p>
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-8">
                        We have built our centers to be more than just medical facilities; they are sanctuaries for healing, designed to provide a welcoming and supportive environment where your health, comfort, and well-being are our highest priorities.
                    </p>
                </div>
            </div>

            <!-- Floating Image Composition -->
            <div class="relative lg:absolute w-full lg:w-[50%] lg:right-0 lg:top-[-10px] mt-10 lg:mt-0 z-10 flex flex-col">
                
                <!-- Large Chair Image (Top Right) -->
                <div class="w-[85%] self-end rounded-[20px] overflow-hidden shadow-xl bg-white border-[6px] border-white">
                    <img src="<?php echo esc_url($img_url . 'abt-img1.png'); ?>"
                         alt="Dialysis Chair at Nephro Access"
                         class="w-full h-[300px] md:h-[400px] lg:h-[350px] object-cover about-image"
                         loading="lazy">
                </div>

                <!-- Storefront Image (Bottom Left, overlapping) -->
                <div class="w-[85%] lg:w-[95%] -mt-20 lg:-mt-24 self-start rounded-[20px] overflow-hidden shadow-2xl bg-white border-[6px] border-white z-20 lg:-ml-28 xl:-ml-36">
                    <img src="<?php echo esc_url($img_url . 'abt-img2.png'); ?>"
                         alt="Nephro Access Center Storefront"
                         class="w-full h-[250px] md:h-[300px] lg:h-[280px] object-cover about-image"
                         loading="lazy">
                </div>
                
                <!-- Read More Button -->
                <div class="self-end mt-8 lg:-mt-12 lg:pr-8 relative z-30">
                    <a href="#"
                       class="inline-block bg-[#204185] hover:bg-[#163066] text-white text-sm font-semibold px-8 py-3.5 rounded-[8px] transition-transform hover:-translate-y-1 shadow-md">
                        Read More
                    </a>
                </div>

            </div>
            
        </div>
        
    </div>
</section>
