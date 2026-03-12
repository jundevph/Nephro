<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('assets/img/' . $path));
};
?>

<section class="bg-white py-20">
	<div class="mx-auto max-w-7xl px-4">
		<div class="grid items-start gap-10 lg:grid-cols-12">

			<div class="lg:col-span-5">
				<div class="rounded-2xl bg-[#EEF5FC] p-8 lg:p-10">
					<h2 class="text-3xl font-extrabold text-[#1E3A8A] lg:text-4xl">About Us</h2>
					<p class="mt-3 text-lg font-bold text-teal-600">A Community Built on Trust</p>
					<p class="mt-4 text-sm leading-relaxed text-slate-600">
						At <strong>Nephro Access Dialysis Center</strong>, we want you to know that you have a dedicated partner to walk this path with you.
					</p>
					<p class="mt-3 text-sm leading-relaxed text-slate-600">
						We have built our centers to be more than just medical facilities; they are sanctuaries for healing, designed to provide a welcoming and supportive environment where your health, comfort, and well-being are our highest priorities.
					</p>
				</div>

				<div class="mt-5">
					<img class="h-64 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('abt-img2.png'); ?>" alt="Nephro Access Lobby">
				</div>
			</div>

			<div class="flex flex-col items-end lg:col-span-7">
				<img class="w-full rounded-2xl object-cover shadow-sm lg:h-[480px]" src="<?php echo $img('abt-img1.png'); ?>" alt="Dialysis Chair">
				<div class="mt-6">
					<a class="inline-flex items-center justify-center rounded-md border-2 border-[#1E3A8A] px-8 py-3 text-sm font-bold text-[#1E3A8A] hover:bg-[#1E3A8A] hover:text-white transition" href="#">
						Read More
					</a>
				</div>
			</div>

		</div>
	</div>
</section>

