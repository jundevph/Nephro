<?php get_header(); ?>

<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('Home/' . $path));
};
?>

<main>

	<!-- ===== HERO ===== -->
	<section class="relative min-h-[520px] overflow-hidden lg:min-h-[600px]">
		<div class="absolute inset-0">
			<img class="h-full w-full object-cover" src="<?php echo $img('Hero image.png'); ?>" alt="Nephro Access Dialysis Center">
			<div class="absolute inset-0 bg-gradient-to-r from-[#1E3A8A]/90 via-[#1E3A8A]/60 to-transparent"></div>
		</div>

		<div class="relative mx-auto max-w-7xl px-4 py-20 lg:py-28">
			<div class="max-w-lg text-white">
				<h1 class="text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
					Alagang Totoo,<br> Alagang Pamilya.
				</h1>
				<p class="mt-6 text-base leading-7 text-white/85 sm:text-lg">
					We understand that a diagnosis of chronic kidney disease marks the beginning of a new journey, one that can feel overwhelming for both you and your loved ones.
				</p>
				<div class="mt-8">
					<a class="inline-flex items-center justify-center rounded-md border-2 border-amber-400 px-6 py-3 text-sm font-bold uppercase tracking-wide text-amber-300 hover:bg-amber-400 hover:text-slate-900 transition" href="#">
						Book Your Session Today
					</a>
				</div>
			</div>
		</div>

		<img class="pointer-events-none absolute bottom-0 left-0 w-full" src="<?php echo $img('hero wave.png'); ?>" alt="">
	</section>


	<!-- ===== QUICK LINKS ===== -->
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


	<!-- ===== ABOUT US ===== -->
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
						<img class="h-64 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('abt img2.png'); ?>" alt="Nephro Access Lobby">
					</div>
				</div>

				<div class="flex flex-col items-end lg:col-span-7">
					<img class="w-full rounded-2xl object-cover shadow-sm lg:h-[480px]" src="<?php echo $img('abt img1.png'); ?>" alt="Dialysis Chair">
					<div class="mt-6">
						<a class="inline-flex items-center justify-center rounded-md border-2 border-[#1E3A8A] px-8 py-3 text-sm font-bold text-[#1E3A8A] hover:bg-[#1E3A8A] hover:text-white transition" href="#">
							Read More
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- ===== WHY CHOOSE US ===== -->
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
					<img class="w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('why choos us img.png'); ?>" alt="Why Choose Us">
					<div class="pointer-events-none absolute -bottom-4 -left-4 h-16 w-16 rounded-full bg-teal-500/30"></div>
				</div>

				<div class="lg:col-span-6">
					<ul class="space-y-4 text-sm text-slate-700">
						<li class="flex items-center gap-3">
							<img class="h-5 w-5 flex-shrink-0" src="<?php echo $img('Icon fa-solid-circle-check.png'); ?>" alt="">
							<span>Lorem ipsum dolor sit amet</span>
						</li>
						<li class="flex items-center gap-3">
							<img class="h-5 w-5 flex-shrink-0" src="<?php echo $img('Icon fa-solid-circle-check.png'); ?>" alt="">
							<span>Lorem ipsum dolor sit amet</span>
						</li>
						<li class="flex items-center gap-3">
							<img class="h-5 w-5 flex-shrink-0" src="<?php echo $img('Icon fa-solid-circle-check.png'); ?>" alt="">
							<span>Lorem ipsum dolor sit amet</span>
						</li>
						<li class="flex items-center gap-3">
							<img class="h-5 w-5 flex-shrink-0" src="<?php echo $img('Icon fa-solid-circle-check.png'); ?>" alt="">
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


	<!-- ===== WHAT WE OFFER ===== -->
	<section
		class="relative bg-[#153B8A] bg-no-repeat bg-cover bg-center py-20 text-white"
		style="background-image: url('<?php echo $img('bg with wave.png'); ?>');"
	>
		<div class="mx-auto max-w-7xl px-4">
			<div class="text-center">
				<img class="mx-auto h-16 w-auto" src="<?php echo $img('what we offer logo.png'); ?>" alt="Nephro Access">
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


	<!-- ===== WAVE DIVIDER ===== -->
	<div class="relative -mb-1">
		<img class="block w-full" src="<?php echo $img('wave1.png'); ?>" alt="">
	</div>


	<!-- ===== OUR FACILITY ===== -->
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
				<img class="h-56 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('img1.png'); ?>" alt="Facility 1">
				<img class="h-56 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('img2.png'); ?>" alt="Facility 2">
				<img class="h-56 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('img3.png'); ?>" alt="Facility 3">
				<img class="h-56 w-full rounded-2xl object-cover shadow-sm" src="<?php echo $img('img4.png'); ?>" alt="Facility 4">
			</div>

			<div class="mt-8 text-center">
				<a class="inline-flex items-center justify-center rounded-full bg-[#1E3A8A] px-8 py-3 text-sm font-semibold text-white shadow-sm hover:bg-[#1e40af] transition" href="#">
					See More
				</a>
			</div>
		</div>
	</section>


	<!-- ===== NEWS & EVENTS ===== -->
	<section class="bg-white py-20">
		<div class="mx-auto max-w-7xl px-4">
			<div class="text-center">
				<h2 class="text-3xl font-extrabold text-[#1E3A8A] lg:text-4xl">News &amp; Events</h2>
			</div>

			<div class="mt-12 grid gap-8 md:grid-cols-3">
				<?php
				$news_fallback = array(
					array('img' => 'news img1.png', 'title' => 'News Title Here', 'date' => '23 September 2025'),
					array('img' => 'news img2.png', 'title' => 'News Title Here', 'date' => '23 September 2025'),
					array('img' => 'news img3.png', 'title' => 'News Title Here', 'date' => '23 September 2025'),
				);

				$q = new WP_Query(
					array(
						'post_type'      => 'post',
						'posts_per_page' => 3,
					)
				);

				$cards = array();
				if ($q->have_posts()) :
					while ($q->have_posts()) :
						$q->the_post();
						$cards[] = array(
							'title' => get_the_title(),
							'url'   => get_permalink(),
							'date'  => get_the_date('d F Y'),
							'thumb' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
							'ex'    => wp_trim_words(get_the_excerpt(), 14),
						);
					endwhile;
					wp_reset_postdata();
				endif;

				for ($i = count($cards); $i < 3; $i++) {
					$cards[] = array(
						'title' => $news_fallback[$i]['title'],
						'url'   => '#',
						'date'  => $news_fallback[$i]['date'],
						'thumb' => $img($news_fallback[$i]['img']),
						'ex'    => 'Excepteur sint occaecat cupidatat non proident sunt icula qui officia',
					);
				}

				foreach ($cards as $c) :
					$thumb = !empty($c['thumb']) ? $c['thumb'] : $img('news img1.png');
				?>
				<article>
					<div class="overflow-hidden rounded-2xl">
						<img class="aspect-[4/3] w-full object-cover" src="<?php echo esc_url($thumb); ?>" alt="">
					</div>
					<div class="mt-5">
						<h3 class="text-lg font-bold text-slate-900">
							<a class="hover:text-[#1E3A8A] transition" href="<?php echo esc_url($c['url']); ?>"><?php echo esc_html($c['title']); ?></a>
						</h3>
						<p class="mt-1 text-sm font-semibold text-[#1E3A8A]"><?php echo esc_html($c['date']); ?></p>
						<p class="mt-2 text-sm leading-relaxed text-slate-600"><?php echo esc_html($c['ex']); ?></p>
						<a class="mt-3 inline-block text-sm font-bold text-[#1E3A8A] hover:underline" href="<?php echo esc_url($c['url']); ?>">Read More</a>
					</div>
				</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
