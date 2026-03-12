<footer class="relative mt-20 text-white">

    <div
        class="relative bg-[#153B8A] bg-no-repeat bg-cover bg-top pt-32 pb-0"
        style="background-image: url('<?php echo esc_url(nephro_asset_url('Home/BG footer.png')); ?>');"
    >
        <div class="mx-auto max-w-7xl px-4">
            <div class="grid gap-10 md:grid-cols-12">

                <!-- Column 1: Logo + Description + Social -->
                <div class="md:col-span-3">
                    <img class="h-14 w-auto" src="<?php echo esc_url(nephro_asset_url('Home/Logo-footer.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    <p class="mt-5 text-sm leading-relaxed text-white/80">
                        Excepteur sint occaecat cupidatat non proident sunt icula qui officia deserunt mollit anim est. laborum sed perspiciatis.
                    </p>
                    <div class="mt-5 flex items-center gap-3">
                        <a class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15 hover:bg-white/25 transition" href="#" aria-label="Facebook">
                            <img class="h-4 w-4" src="<?php echo esc_url(nephro_asset_url('Home/fb_footer.png')); ?>" alt="">
                        </a>
                        <a class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15 hover:bg-white/25 transition" href="#" aria-label="Instagram">
                            <img class="h-4 w-4" src="<?php echo esc_url(nephro_asset_url('Home/ig_footer.png')); ?>" alt="">
                        </a>
                        <a class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15 hover:bg-white/25 transition" href="#" aria-label="LinkedIn">
                            <img class="h-4 w-4" src="<?php echo esc_url(nephro_asset_url('Home/linkd_footer.png')); ?>" alt="">
                        </a>
                        <a class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15 hover:bg-white/25 transition" href="#" aria-label="TikTok">
                            <img class="h-4 w-4" src="<?php echo esc_url(nephro_asset_url('Home/tiktok-footer.png')); ?>" alt="">
                        </a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="md:col-span-2">
                    <h3 class="text-base font-bold text-teal-400">Quick Links</h3>
                    <ul class="mt-4 space-y-2 text-sm text-white/80">
                        <li><a class="hover:text-white transition" href="#">Home</a></li>
                        <li><a class="hover:text-white transition" href="#">About Us</a></li>
                        <li><a class="hover:text-white transition" href="#">Our Facilities</a></li>
                        <li><a class="hover:text-white transition" href="#">News &amp; Events</a></li>
                        <li><a class="hover:text-white transition" href="#">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Pasig Branch -->
                <div class="md:col-span-4">
                    <h3 class="flex items-center gap-2 text-sm font-bold uppercase tracking-wide">
                        <img class="h-4 w-4" src="<?php echo esc_url(nephro_asset_url('Home/loc-footer.png')); ?>" alt="">
                        Pasig Branch
                    </h3>
                    <div class="mt-4 text-sm leading-relaxed text-white/80">
                        <p>3rd Floor of Choice Market Ortigas, Ortigas Avenue Extension, Pasig City.</p>
                        <p class="mt-2"><span class="font-semibold text-teal-400">Phone:</span> 7758-5372 / 0917-307-0110</p>
                        <p class="mt-1"><span class="font-semibold text-teal-400">Clinic Operation:</span> 5:30-9:00 PM (Mon-Sat)</p>
                        <p class="mt-1"><span class="font-semibold text-teal-400">1st Shift:</span> 6:00 AM - 7:30 AM</p>
                        <p class="mt-1"><span class="font-semibold text-teal-400">2nd Shift:</span> 10:00 AM - 11:30 AM</p>
                        <p class="mt-1"><span class="font-semibold text-teal-400">3rd Shift:</span> 3:00 PM - 4:30 PM</p>
                    </div>
                </div>

                <!-- Column 4: Malabon Branch -->
                <div class="md:col-span-3">
                    <h3 class="flex items-center gap-2 text-sm font-bold uppercase tracking-wide">
                        <img class="h-4 w-4" src="<?php echo esc_url(nephro_asset_url('Home/loc-footer.png')); ?>" alt="">
                        Malabon City - Tinajeros
                    </h3>
                    <div class="mt-4 text-sm leading-relaxed text-white/80">
                        <p>Clinica de Salvacion Bldg., 23 Gov. Pascual Ave., Tinajeros, Malabon City.</p>
                        <p class="mt-2"><span class="font-semibold text-teal-400">Phone:</span> 7004-2671 / 0917-169-8292</p>
                        <p class="mt-1"><span class="font-semibold text-teal-400">Clinic Operation:</span> 5:30-9:00 PM (Mon-Sat)</p>
                        <p class="mt-1"><span class="font-semibold text-teal-400">1st Shift:</span> 6:00 AM - 7:30 AM</p>
                        <p class="mt-1"><span class="font-semibold text-teal-400">2nd Shift:</span> 10:00 AM - 11:30 AM</p>
                        <p class="mt-1"><span class="font-semibold text-teal-400">3rd Shift:</span> 3:00 PM - 4:30 PM</p>
                    </div>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="mt-10 flex flex-col items-center justify-between gap-4 border-t border-white/15 py-5 text-xs text-white/60 sm:flex-row">
                <p>Copyright &copy; <?php echo esc_html(date('Y')); ?>. All rights reserved. Designed &amp; Developed by ITWORKS GLOBALK SOLUTIONS</p>
                <div class="flex items-center gap-6">
                    <a class="hover:text-white transition" href="#">Site Map</a>
                    <a class="hover:text-white transition" href="#">Privacy Policy</a>
                    <a class="hover:text-white transition" href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </div>

</footer>

    <?php wp_footer(); ?>
</body>
</html>
