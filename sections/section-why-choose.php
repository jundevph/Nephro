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

<section class="why-choose-section py-5 lg:pt-[5rem] bg-[#F3FBFA] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#204185] mb-4 tracking-tight">Why Choose Us</h2>
            <p class="text-gray-500 text-sm md:text-base max-w-3xl mx-auto leading-relaxed">
                Morbi ornare velit vitae felis commodo, at blandit est vestibulum. Mauris quam arcu, facilisis ut vestibulum sit amet, pellentesque in metus. Aenean pharetra mauris ac sem faucibus, consectetur
            </p>
        </div>

        <div class="relative flex flex-col lg:block lg:min-h-[500px]">

            <!-- Left Image -->
            <div class="w-[80%] md:w-[45%] lg:w-[39%] rounded-[20px] overflow-hidden lg:absolute left-[10rem] top-0 z-0 mx-auto lg:mx-0">
                <img src="<?php echo esc_url($img_url . 'why-choos-us-img.png'); ?>"
                     alt="Why choose Nephro Access"
                     class="w-full h-auto object-cover"
                     loading="lazy">
            </div>

            <!-- Right Content (Checkmarks) -->
            <div class="lg:absolute lg:top-8 right-0 lg:w-[45%] mt-12 lg:mt-0 z-10 px-4 max-w-sm lg:max-w-none mx-auto lg:mx-0">
                <div class="space-y-6">
                    <?php
                    $reasons = [
                        'Lorem ipsum dolor sit amet',
                        'Lorem ipsum dolor sit amet',
                        'Lorem ipsum dolor sit amet',
                        'Lorem ipsum dolor sit amet',
                    ];

                    foreach ($reasons as $reason) : ?>
                        <div class="check-item flex items-center gap-4">
                            <svg class="w-6 h-6 flex-shrink-0 text-[#1CA0AA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm md:text-base font-semibold"><?php echo esc_html($reason); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Overlapping Dark Blue Block -->
            <div class="bg-[#204185] rounded-[16px] p-8 md:p-10 lg:p-10 mt-[-40px] lg:mt-0 lg:absolute lg:bottom-[0px] lg:left-[40%] lg:right-auto lg:w-[55%] z-20 relative mx-4 lg:mx-0">
                <p class="text-white/95 text-sm md:text-[15px] leading-relaxed">
                    Morbi ornare velit vitae felis commodo, at blandit est vestibulum. Mauris quam arcu, facilisis ut vestibulum sit amet, pellentesque in metus. Aenean pharetra mauris ac sem faucibus, consectetur ullamcorper ex fermentum. Mauris placerat scelerisque pulvinar. Etiam accumsan justo ut justo elementum rhoncus. Morbi ullamcorper pharetra ligula, eget vehicula nunc dignissim hendrerit. In dignissim sodales arcu ac mattis. Etiam ut ante ut nunc gravida.
                </p>
            </div>

        </div>
    </div>
</section>
