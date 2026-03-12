<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('assets/img/' . $path));
};
?>

<section
	class="relative bg-[#153B8A] bg-no-repeat bg-cover bg-center py-20 text-white"
	style="background-image: url('<?php echo $img('bg-with-wave.png'); ?>');"
>
	<div class="mx-auto max-w-7xl px-4">
		<div class="text-center">
			<img class="mx-auto h-16 w-auto" src="<?php echo $img('what-we-offer-logo.png'); ?>" alt="Nephro Access">
			<h2 class="mt-4 text-3xl font-extrabold tracking-tight lg:text-4xl">What We Offer</h2>
		</div>

		<div class="mt-12 grid gap-4 sm:grid-cols-3 lg:grid-cols-6">
			<?php
			$offers = array(
				'PhilHealth Accredited',
				'Zero Cash-out',
				'Loyalty Patient Program',
				'Nutritionist Counseling',
				'Media Entertainment',
				'Free HD Session',
				'Free Dialyzer',
				'Free Laboratories',
				'Free Epoetin',
				'Free IV Iron',
				'Free Wifi',
				'Free Parking',
			);
			foreach ($offers as $label) :
				?>
				<div class="rounded-xl bg-white p-5 shadow-sm">
					<h3 class="text-sm font-bold text-[#1E3A8A]"><?php echo esc_html($label); ?></h3>
					<p class="mt-2 text-xs leading-relaxed text-slate-500">
						Maecenas metus lectus, tempor nec massa sed, maximus ullamcorper lacus. Vivamus ligula
					</p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

