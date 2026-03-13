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

    <!-- Footer Wave -->
    <div class="relative w-full ">
        <img src="<?php echo esc_url($img_url . 'wave3.png'); ?>" alt="" class="w-full h-auto block" aria-hidden="true">
    </div>

    <footer class="site-footer bg-[#214099] text-white pt-16 pb-0 mt-0 relative">

        <div class="max-w-[85rem] mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12">

                <!-- Col 1: Logo & Description -->
                <div>
                    <img src="<?php echo esc_url($img_url . 'Logo-footer.png'); ?>"
                         alt="Nephro Access"
                         class="h-12 w-auto mb-6"
                         loading="lazy">
                    <p class="text-white/80 text-sm leading-relaxed mb-6 font-medium pr-4">
                        Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim est laborum sed perspiciatis.
                    </p>
                    <!-- Social -->
                    <div class="flex items-center gap-3">
                        <a href="#" aria-label="Facebook" class="w-8 h-8 rounded-full bg-[#1CA0AA] flex items-center justify-center hover:bg-[#14838b] transition-colors"><svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
                        <a href="#" aria-label="Instagram" class="w-8 h-8 rounded-full bg-[#1CA0AA] flex items-center justify-center hover:bg-[#14838b] transition-colors"><svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.058 3.252.148 4.771 1.691 4.919 4.919.046 1.265.058 1.646.058 4.85s-.012 3.584-.058 4.85c-.15 3.238-1.66 4.77-4.919 4.919-1.266.046-1.646.058-4.85.058s-3.584-.012-4.85-.058c-3.251-.15-4.77-1.682-4.919-4.919-.046-1.266-.058-1.645-.058-4.85s.012-3.584.058-4.85c.15-3.239 1.66-4.77 4.919-4.919 1.266-.046 1.645-.058 4.85-.058zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 1.926-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 5.058 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.947.072s3.668-.014 4.948-.072c4.354-.2 6.782-1.921 6.979-6.98.059-1.28.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.196-5.054-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a>
                        <a href="#" aria-label="LinkedIn" class="w-8 h-8 rounded-full bg-[#1CA0AA] flex items-center justify-center hover:bg-[#14838b] transition-colors"><svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg></a>
                        <a href="#" aria-label="TikTok" class="w-8 h-8 rounded-full bg-[#1CA0AA] flex items-center justify-center hover:bg-[#14838b] transition-colors"><svg class="w-4 h-4 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="lg:pl-8">
                    <h4 class="text-[#1CA0AA] text-base font-bold mb-5">Quick Links</h4>
                    <ul class="space-y-4 text-sm text-white/90 font-medium">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#1CA0AA] transition-colors">Home</a></li>
                        <li><a href="#about" class="hover:text-[#1CA0AA] transition-colors">About Us</a></li>
                        <li><a href="#facilities" class="hover:text-[#1CA0AA] transition-colors">Our Facilities</a></li>
                        <li><a href="#news" class="hover:text-[#1CA0AA] transition-colors">News &amp; Events</a></li>
                        <li><a href="#" class="hover:text-[#1CA0AA] transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Pasig Branch -->
                <div>
                    <h4 class="text-white text-base font-bold mb-4 flex items-center gap-2 uppercase tracking-wide">
                        <svg class="w-4 h-4 text-[#1CA0AA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        PASIG BRANCH
                    </h4>
                    <div class="mb-5">
                        <p class="text-sm text-white/90 leading-relaxed font-medium">
                            3rd Floor of Choice Market Ortigas,<br>Ortigas Avenue Extension, Pasig City.
                        </p>
                        <p class="text-sm mt-3"><span class="text-[#1CA0AA] font-semibold">Phone:</span> <span class="text-white/90 font-medium">7758-5372 / 0917-307-0110</span></p>
                    </div>
                    
                    <p class="text-sm mb-4"><span class="text-[#1CA0AA] font-semibold">Clinic Operation:</span> <span class="text-white/90 font-medium">5:30-9:00 PM (Mon-Sat)</span></p>
                    
                    <div class="space-y-2 text-sm text-white/90 font-medium">
                        <p><span class="text-[#1CA0AA] font-semibold mr-1">1st Shift:</span> 6:00 AM - 7:30 AM</p>
                        <p><span class="text-[#1CA0AA] font-semibold mr-1">2nd Shift:</span> 10:00 AM - 11:30 AM</p>
                        <p><span class="text-[#1CA0AA] font-semibold mr-1">3rd Shift:</span> 3:00 PM - 4:30 PM</p>
                    </div>
                </div>

                <!-- Col 4: Malabon City -->
                <div>
                    <h4 class="text-white text-base font-bold mb-4 flex items-center gap-2 uppercase tracking-wide">
                        <svg class="w-4 h-4 text-[#1CA0AA]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        MALABON CITY - TINAJEROS
                    </h4>
                    
                    <div class="mb-5">
                        <p class="text-sm text-white/90 leading-relaxed font-medium">
                            Clinica de Salvacion Bldg., 23 Gov.<br>Pascual Ave., Tinajeros, Malabon City.
                        </p>
                        <p class="text-sm mt-3"><span class="text-[#1CA0AA] font-semibold">Phone:</span> <span class="text-white/90 font-medium">7004-2671 / 0917-169-8292</span></p>
                    </div>
                    
                    <p class="text-sm mb-4"><span class="text-[#1CA0AA] font-semibold">Clinic Operation:</span> <span class="text-white/90 font-medium">5:30-9:00 PM (Mon-Sat)</span></p>
                    
                    <div class="space-y-2 text-sm text-white/90 font-medium">
                        <p><span class="text-[#1CA0AA] font-semibold mr-1">1st Shift:</span> 6:00 AM - 7:30 AM</p>
                        <p><span class="text-[#1CA0AA] font-semibold mr-1">2nd Shift:</span> 10:00 AM - 11:30 AM</p>
                        <p><span class="text-[#1CA0AA] font-semibold mr-1">3rd Shift:</span> 3:00 PM - 4:30 PM</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom py-6 border-t border-white flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/80 font-medium">
                <p>Copyright &copy; <?php echo esc_html((string)date('Y')); ?>. All rights reserved. Designed & Developed by ITWORKS GLOBALK SOLUTIONS</p>
                <div class="flex items-center gap-6">
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