<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('assets/img/' . $path));
};
?>

<section class="bg-[#EAF6FF] py-20">
	<div class="mx-auto max-w-7xl px-4">
		<div class="text-center">
			<h2 class="text-3xl font-extrabold text-[#1E3A8A] lg:text-4xl">Why Choose Us</h2>
			<p class="mx-auto mt-4 max-w-3xl text-sm leading-relaxed text-slate-600">
				Morbi ornare velit vitae felis commodo, at blandit est vestibulum. Mauris quam arcu, facilisis ut vestibulum sit amet, pellentesque in metus. Aenean pharetra mauris ac sem faucibus, consectetur
			</p>
		</div>

		<div class="mt-12 grid items-start gap-10 lg:grid-cols-12">
			<div class="relative lg:col-span-6">
				<img class="w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('why-choose-us-img.png'); ?>" alt="Why Choose Us">
				<div class="pointer-events-none absolute -bottom-4 -left-4 h-16 w-16 rounded-full bg-teal-500/30"></div>
			</div>

			<div class="lg:col-span-6">
				<ul class="space-y-4 text-sm text-slate-700">
					<li class="flex items-center gap-3">
						<img class="h-5 w-5 flex-shrink-0" src="<?php echo $img('icon-check.png'); ?>" alt="">
						<span>Lorem ipsum dolor sit amet</span>
					</li>
					<li class="flex items-center gap-3">
						<img class="h-5 w-5 flex-shrink-0" src="<?php echo $img('icon-check.png'); ?>" alt="">
						<span>Lorem ipsum dolor sit amet</span>
					</li>
					<li class="flex items-center gap-3">
						<img class="h-5 w-5 flex-shrink-0" src="<?php echo $img('icon-check.png'); ?>" alt="">
						<span>Lorem ipsum dolor sit amet</span>
					</li>
					<li class="flex items-center gap-3">
						<img class="h-5 w-5 flex-shrink-0" src="<?php echo $img('icon-check.png'); ?>" alt="">
						<span>Lorem ipsum dolor sit amet</span>
					</li>
				</ul>

				<div class="mt-8 rounded-2xl bg-[#1E3A8A] p-6 text-white shadow-lg lg:-ml-20">
					<p class="text-sm leading-relaxed text-white/90">
						Morbi ornare velit vitae felis commodo, at blandit est vestibulum. Mauris quam arcu, facilisis ut vestibulum sit amet, pellentesque in metus. Aenean pharetra mauris ac sem faucibus, consectetur ex fermentum. Mauris placerat scelerisque pulvinar. Etiam accumsan justo ut justo elementum rhoncus. Morbi ullamcorper pharetra ligula, eget vehicula nunc dignissim hendrerit. In dignissim sodales arcu ac mattis. Etiam ut ante ut nunc gravida
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

