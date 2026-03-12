<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('assets/img/' . $path));
};
?>

<div class="hidden md:block bg-gradient-to-r from-teal-600 to-teal-500 text-white">
	<div class="mx-auto max-w-7xl px-4">
		<div class="flex items-center justify-between py-2 text-xs">
			<div class="flex items-center gap-8 text-white/90">
				<span class="inline-flex items-center gap-1.5">
					<img class="h-3 w-3 brightness-0 invert" src="<?php echo $img('loc-footer.png'); ?>" alt="">
					<strong>Pasig City - CMO</strong>
					<span>0917 307 0110 &middot; 7758 5372</span>
				</span>
				<span class="hidden lg:inline-flex items-center gap-1.5">
					<img class="h-3 w-3 brightness-0 invert" src="<?php echo $img('loc-footer.png'); ?>" alt="">
					<strong>Malabon City - Tinajeros</strong>
					<span>0917 169 8292 &middot; 7004 2671</span>
				</span>
				<span class="hidden xl:inline-flex items-center gap-1.5">
					<img class="h-3 w-3 brightness-0 invert" src="<?php echo $img('loc-footer.png'); ?>" alt="">
					<strong>Pasig City - Sandoval</strong>
					<span>Soon to Open</span>
				</span>
			</div>

			<div class="flex items-center gap-2">
				<a class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition" href="#" aria-label="Facebook">
					<img class="h-3.5 w-3.5" src="<?php echo $img('fb-nav.png'); ?>" alt="">
				</a>
				<a class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition" href="#" aria-label="Instagram">
					<img class="h-3.5 w-3.5" src="<?php echo $img('ig-nav.png'); ?>" alt="">
				</a>
				<a class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition" href="#" aria-label="LinkedIn">
					<img class="h-3.5 w-3.5" src="<?php echo $img('linkd-nav.png'); ?>" alt="">
				</a>
				<a class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition" href="#" aria-label="TikTok">
					<img class="h-3.5 w-3.5" src="<?php echo $img('tiktok-nav.png'); ?>" alt="">
				</a>
			</div>
		</div>
	</div>
</div>

