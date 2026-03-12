<?php
/**
 * Section: Why Choose Us
 * Left image with right-side bullet points
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

<section class="why-choose-section py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#0D3B66] mb-4">Why Choose Us</h2>
            <p class="text-gray-500 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                Morbi ornare urbi vitae felis commodo, ut blandit est vestibulum. Mauris quas arcu, facilisis ut vestibulum ut amet, pellentesque in metus. Aenean pharetra magna ut sem faucibus, consectetur.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Image -->
            <div class="why-choose-image rounded-xl overflow-hidden shadow-lg">
                <img src="<?php echo esc_url($img_url . 'why-choos-us-img.png'); ?>"
                     alt="Why choose Nephro Access"
                     class="w-full h-auto object-cover"
                     loading="lazy">
            </div>

            <!-- Right Content -->
            <div>
                <!-- Bullet Points -->
                <div class="space-y-5 mb-8">
                    <?php
                    $reasons = [
                        'Lorem ipsum dolor sit amet',
                        'Lorem ipsum dolor sit amet',
                        'Lorem ipsum dolor sit amet',
                        'Lorem ipsum dolor sit amet',
                    ];

                    foreach ($reasons as $reason) : ?>
                        <div class="check-item flex items-start gap-3">
                            <img src="<?php echo esc_url($img_url . 'Icon-fa-solid-circle-check.png'); ?>"
                                 alt="" class="w-6 h-6 flex-shrink-0 mt-0.5" aria-hidden="true">
                            <span class="text-gray-700 text-sm md:text-base font-medium"><?php echo esc_html($reason); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Description -->
                <p class="text-gray-500 text-sm leading-relaxed">
                    Morbi ornare urbi vitae felis commodo, ut blandit est vestibulum. Mauris quas arcu, facilisis ut vestibulum ut amet, pellentesque in metus. Aenean pharetra magna ut sem faucibus, consectetur ultricorper. Etiam accumsan dolor ut purus elementum rhoncus. Mauris aliquot convallis commodo primeer. Etiam accumsan dolor ut purus elementum rhoncus. In dignissim sodales arcu ac mattis. Etiam ut ante et nunc gravida.
                </p>
            </div>
        </div>
    </div>
</section>
