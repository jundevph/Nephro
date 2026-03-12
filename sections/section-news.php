<?php
$img = function ($path) {
	return esc_url(nephro_asset_url('assets/img/' . $path));
};
?>

<section class="bg-white py-20">
	<div class="mx-auto max-w-7xl px-4">
		<div class="text-center">
			<h2 class="text-3xl font-extrabold text-[#1E3A8A] lg:text-4xl">News &amp; Events</h2>
		</div>

		<div class="mt-12 grid gap-8 md:grid-cols-3">
			<?php
			$news_fallback = array(
				array('img' => 'news-1.png', 'title' => 'News Title Here', 'date' => '23 September 2025'),
				array('img' => 'news-2.png', 'title' => 'News Title Here', 'date' => '23 September 2025'),
				array('img' => 'news-3.png', 'title' => 'News Title Here', 'date' => '23 September 2025'),
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
				$thumb = !empty($c['thumb']) ? $c['thumb'] : $img('news-1.png');
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

