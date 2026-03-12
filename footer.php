<?php
/**
 * Theme Footer
 * Multi-column footer with logo, quick links, branch info, and copyright
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

    <footer class="site-footer relative bg-[#0D3B66] text-white pt-20 pb-0 mt-0">

        <!-- Wave Top -->
        <div class="absolute top-0 left-0 w-full -translate-y-[98%]">
            <img src="<?php echo esc_url($img_url . 'wave3.png'); ?>" alt="" class="w-full" aria-hidden="true">
        </div>

        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-10">

                <!-- Col 1: Logo & Description -->
                <div>
                    <img src="<?php echo esc_url($img_url . 'Logo-footer.png'); ?>"
                         alt="Nephro Access"
                         class="h-12 w-auto mb-4"
                         loading="lazy">
                    <p class="text-white/70 text-xs leading-relaxed mb-4">
                        Complete with state-of-the-art equipment and powered by skilled medical staff committed to innovative, safe, and compassionate patient care.
                    </p>
                    <!-- Social -->
                    <div class="flex items-center gap-3">
                        <a href="#" aria-label="Facebook"><img src="<?php echo esc_url($img_url . 'fb_footer.png'); ?>" alt="" class="w-5 h-5" aria-hidden="true"></a>
                        <a href="#" aria-label="TikTok"><img src="<?php echo esc_url($img_url . 'tiktok-footer.png'); ?>" alt="" class="w-5 h-5" aria-hidden="true"></a>
                        <a href="#" aria-label="Instagram"><img src="<?php echo esc_url($img_url . 'ig_footer.png'); ?>" alt="" class="w-5 h-5" aria-hidden="true"></a>
                        <a href="#" aria-label="LinkedIn"><img src="<?php echo esc_url($img_url . 'linkd_footer.png'); ?>" alt="" class="w-5 h-5" aria-hidden="true"></a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-[#14919B] text-sm font-bold uppercase mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-xs text-white/80">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#facilities" class="hover:text-white transition-colors">Our Facilities</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#news" class="hover:text-white transition-colors">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Pasig Branch -->
                <div>
                    <h4 class="text-[#14919B] text-sm font-bold uppercase mb-4">Pasig Branch</h4>
                    <div class="flex items-start gap-2 mb-3">
                        <img src="<?php echo esc_url($img_url . 'loc-footer.png'); ?>" alt="" class="w-4 h-4 mt-0.5 flex-shrink-0" aria-hidden="true">
                        <p class="text-xs text-white/80 leading-relaxed">
                            Calapan, Dalahican Enterprises, Pasig City
                        </p>
                    </div>
                    <p class="text-xs text-white/80 mb-1">
                        <span class="text-[#14919B] font-semibold">Mon-Sat:</span> 5:30 AM-PM (Mon-Sat/3rd)
                    </p>
                    <p class="text-xs text-white/80">
                        <span class="text-[#14919B] font-semibold">Sun:</span> 5:30 AM-PM (3rd-6pm Only)
                    </p>
                    <p class="text-xs text-white/60 mt-2">329 1716 + 0205</p>
                </div>

                <!-- Col 4: Malabon / Tarlac -->
                <div>
                    <h4 class="text-[#14919B] text-sm font-bold uppercase mb-4">Malabon City · Tarlac/Ens</h4>

                    <div class="mb-4">
                        <div class="flex items-start gap-2 mb-2">
                            <img src="<?php echo esc_url($img_url . 'loc-footer.png'); ?>" alt="" class="w-4 h-4 mt-0.5 flex-shrink-0" aria-hidden="true">
                            <p class="text-xs text-white/80 leading-relaxed">
                                Palanas st., Danglaw, Malabon City
                            </p>
                        </div>
                        <p class="text-xs text-white/80">
                            <span class="text-[#14919B] font-semibold">Mon-Sat:</span> 5:30 AM-PM (Mon thru Sat)
                        </p>
                        <p class="text-xs text-white/60 mt-1">329 1716 + 0205</p>
                    </div>

                    <div>
                        <div class="flex items-start gap-2 mb-2">
                            <img src="<?php echo esc_url($img_url . 'loc-footer.png'); ?>" alt="" class="w-4 h-4 mt-0.5 flex-shrink-0" aria-hidden="true">
                            <p class="text-xs text-white/80 leading-relaxed">
                                Tarlac area, Pangasinan enabl City
                            </p>
                        </div>
                        <p class="text-xs text-white/80">
                            <span class="text-[#14919B] font-semibold">Daily:</span> 5:30 PM-PM (Mon thru Sat)
                        </p>
                        <p class="text-xs text-white/60 mt-1">329 1716 + 0205</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom py-4 flex flex-wrap items-center justify-between gap-4 text-xs text-white/50">
                <p>Copyright &copy; <?php echo esc_html((string)date('Y')); ?>. All rights reserved. Designed and Developed by TYRANNUS SOLUTIONS CONSULTING.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-white transition-colors">Site Map</a>
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>