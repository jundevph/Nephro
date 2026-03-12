<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('assets/img/' . $path));
};
?>

<section
	class="relative overflow-hidden bg-white"
	style="background-image: url('<?php echo $img('hero-image.png'); ?>'); background-size: cover; background-position: center;"
>
	<div class="absolute inset-0 bg-gradient-to-r from-[#1E3A8A]/85 via-[#1E3A8A]/55 to-transparent"></div>

	<div class="relative mx-auto max-w-7xl px-4">
		<div class="relative min-h-[520px] pb-24 pt-20 lg:min-h-[600px] lg:pb-28 lg:pt-24">
			<div class="max-w-xl">
				<h1 class="text-4xl font-extrabold leading-tight text-white sm:text-5xl lg:text-6xl">
					Alagang Totoo,<br> Alagang Pamilya.
				</h1>
			</div>

			<div class="absolute bottom-0 left-0 w-full max-w-[560px]">
				<div class="rounded-tr-[140px] bg-white/95 px-8 pb-10 pt-10 shadow-[0_-10px_30px_rgba(0,0,0,0.08)] backdrop-blur-sm sm:px-10">
					<p class="max-w-md text-sm leading-relaxed text-slate-500">
						We understand that a diagnosis of chronic kidney disease marks the beginning of a new journey, one that can feel overwhelming for both you and your loved ones.
					</p>
					<div class="mt-6">
						<a class="inline-flex items-center justify-center rounded-md bg-teal-500 px-6 py-3 text-xs font-bold uppercase tracking-wide text-white shadow-sm hover:bg-teal-600 transition" href="#">
							Book Your Session Today
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<img class="pointer-events-none absolute bottom-0 left-0 w-full" src="<?php echo $img('hero-wave.png'); ?>" alt="">
</section>

<section class="relative z-10 -mt-6">
	<div class="mx-auto grid max-w-5xl grid-cols-2 gap-3 px-4 sm:grid-cols-4 sm:gap-5">
		<a class="flex items-center justify-center rounded-xl bg-[#1E3A8A] px-4 py-5 text-center text-sm font-semibold leading-snug text-white shadow-md hover:bg-[#1e40af] transition" href="#">
			Advanced Medical<br>Technology
		</a>
		<a class="flex items-center justify-center rounded-xl bg-teal-500 px-4 py-5 text-center text-sm font-semibold leading-snug text-white shadow-md hover:bg-teal-600 transition" href="#">
			A Superior Patient<br>Environment
		</a>
		<a class="flex items-center justify-center rounded-xl bg-teal-500 px-4 py-5 text-center text-sm font-semibold leading-snug text-white shadow-md hover:bg-teal-600 transition" href="#">
			Guaranteed Physician-Led<br>Supervision
		</a>
		<a class="flex items-center justify-center rounded-xl bg-teal-500 px-4 py-5 text-center text-sm font-semibold leading-snug text-white shadow-md hover:bg-teal-600 transition" href="#">
			Uncompromising Safety &amp;<br>Infection Control
		</a>
	</div>
</section>

