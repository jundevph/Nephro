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

<section id="about" class="about-section py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="about-card bg-[#F0FDFA] rounded-2xl p-8 md:p-12 lg:p-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

                <!-- Text Content -->
                <div>
                    <p class="text-[#14919B] text-sm font-semibold uppercase tracking-wide mb-2">About Us</p>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#0D3B66] mb-6">
                        A Community Built on Trust
                    </h2>

                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        At <strong class="text-[#0D3B66]">Nephro Access Dialysis Center</strong>, we want you to know that you have a dedicated partner to walk this path with you.
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        We have built our centers to more than just medical facilities; they are sanctuaries for healing, designed to provide comfort and peace of mind. Here, your health, comfort, and well-being are our highest priorities.
                    </p>

                    <!-- Small inset image -->
                    <div class="my-6 rounded-xl overflow-hidden shadow-md max-w-xs">
                        <img src="<?php echo esc_url($img_url . 'abt-img2.png'); ?>"
                             alt="Nephro Access Center interior"
                             class="about-image w-full h-auto object-cover"
                             loading="lazy">
                    </div>

                    <a href="#"
                       class="read-more-btn inline-flex items-center gap-2 bg-[#14919B] hover:bg-[#117A83] text-white text-sm font-semibold px-6 py-3 rounded-full transition-all">
                        Read More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Right Image -->
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo esc_url($img_url . 'abt-img1.png'); ?>"
                         alt="Dialysis chair at Nephro Access"
                         class="about-image w-full h-auto object-cover"
                         loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
