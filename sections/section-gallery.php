<?php
/**
 * Section: Gallery / Our Facility
 * Image gallery showcasing the facility
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

<section id="facilities" class="gallery-section py-16 md:py-24 bg-[#F0FDFA] relative">

    <!-- Wave Top -->
    <div class="absolute top-0 left-0 w-full">
        <img src="<?php echo esc_url($img_url . 'wave2.png'); ?>" alt="" class="w-full" aria-hidden="true">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center mb-4">
            <p class="text-[#14919B] text-sm font-semibold uppercase tracking-wide mb-2">Gallery</p>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#0D3B66] mb-4">Our Facility</h2>
            <p class="text-gray-500 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                Morbi ornare urbi vitae felis commodo, ut blandit est vestibulum. Aliquam quas arcu, facilisis ut vestibulum ut amet, pellentesque in metus. Aenean pharetra magna ut sem faucibus, consectetur.
            </p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-10">
            <?php
            $gallery_images = ['img1.png', 'img2.png', 'img3.png', 'img4.png'];

            foreach ($gallery_images as $index => $image) : ?>
                <div class="gallery-item rounded-xl overflow-hidden shadow-md">
                    <img src="<?php echo esc_url($img_url . $image); ?>"
                         alt="Nephro Access facility photo <?php echo esc_attr((string)($index + 1)); ?>"
                         class="w-full h-48 md:h-56 object-cover"
                         loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Show More Button -->
        <div class="text-center mt-10">
            <a href="#"
               class="inline-block bg-[#0D3B66] hover:bg-[#0A2E52] text-white text-sm font-semibold px-8 py-3 rounded-full transition-colors">
                Show More
            </a>
        </div>
    </div>
</section>
