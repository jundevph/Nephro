<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('assets/img/' . $path));
};
?>

<div class="relative -mb-1">
	<img class="block w-full" src="<?php echo $img('wave-1.png'); ?>" alt="">
</div>

<section class="bg-[#EAF6FF] py-16">
	<div class="mx-auto max-w-7xl px-4">
		<div class="text-center">
			<p class="text-sm font-bold text-teal-600">Gallery</p>
			<h2 class="mt-2 text-3xl font-extrabold text-[#1E3A8A] lg:text-4xl">Our Facility</h2>
			<p class="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-slate-600">
				Morbi ornare velit vitae felis commodo, at blandit est vestibulum. Mauris quam arcu, facilisis ut vestibulum sit amet, pellentesque in metus. Aenean pharetra mauris ac sem faucibus, consectetur
			</p>
		</div>

		<div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
			<img class="h-56 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('facility-1.png'); ?>" alt="Facility 1">
			<img class="h-56 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('facility-2.png'); ?>" alt="Facility 2">
			<img class="h-56 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('facility-3.png'); ?>" alt="Facility 3">
			<img class="h-56 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('facility-4.png'); ?>" alt="Facility 4">
		</div>

		<div class="mt-8 text-center">
			<a class="inline-flex items-center justify-center rounded-full bg-[#1E3A8A] px-8 py-3 text-sm font-semibold text-white shadow-sm hover:bg-[#1e40af] transition" href="#">
				See More
			</a>
		</div>
	</div>
</section>

