<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('assets/img/' . $path));
};
?>

<header class="relative z-50 bg-white shadow-sm">
	<div class="mx-auto max-w-7xl px-4">
		<div class="flex items-center justify-between gap-6 py-3">
			<a class="flex-shrink-0" href="<?php echo esc_url(home_url('/')); ?>">
				<img class="h-12 w-auto" src="<?php echo $img('logo-nav.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
			</a>

			<nav class="hidden lg:flex items-center gap-8">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'container'      => false,
						'menu_class'     => 'flex items-center gap-8 text-sm font-semibold text-slate-700',
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>

			<a class="hidden md:inline-flex items-center justify-center rounded-full bg-teal-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-teal-600 transition" href="#">
				Book Now
			</a>
		</div>
	</div>
</header>

