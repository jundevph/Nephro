<?php
/**
 * Section: News & Events
 * Blog cards with featured image, date, excerpt, and read more
 *
 * @package Nephro
 */

declare(strict_types=1);

$img_url = get_template_directory_uri() . '/assets/img/';
?>

<section id="news" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#0D3B66]">News &amp; Events</h2>
        </div>

        <!-- News Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <?php
            // Try to pull from WordPress posts first
            $news_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ]);

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <article class="news-card bg-white shadow-md rounded-xl overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="overflow-hidden h-52">
                                <?php the_post_thumbnail('medium_large', [
                                    'class'   => 'w-full h-52 object-cover',
                                    'loading' => 'lazy',
                                ]); ?>
                            </div>
                        <?php endif; ?>

                        <div class="p-5">
                            <h3 class="text-lg font-bold text-[#0D3B66] mb-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-[#14919B] transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <time class="text-[#14919B] text-xs font-medium block mb-3" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo esc_html(get_the_date('d F, Y')); ?>
                            </time>

                            <p class="text-gray-500 text-sm leading-relaxed mb-4">
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 18)); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="news-read-more text-[#14919B] text-sm font-semibold hover:text-[#0D3B66] transition-colors">
                                Read More
                            </a>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();

            else :
                // Fallback static cards when no posts exist
                $static_news = [
                    ['img' => 'news-img1.png', 'title' => 'News Title Here', 'date' => '15 September, 2025'],
                    ['img' => 'news-img2.png', 'title' => 'News Title Here', 'date' => '15 September, 2025'],
                    ['img' => 'news-img3.png', 'title' => 'News Title Here', 'date' => '15 September, 2025'],
                ];

                foreach ($static_news as $news) : ?>
                    <article class="news-card bg-white shadow-md rounded-xl overflow-hidden">
                        <div class="overflow-hidden h-52">
                            <img src="<?php echo esc_url($img_url . $news['img']); ?>"
                                 alt="<?php echo esc_attr($news['title']); ?>"
                                 class="w-full h-52 object-cover"
                                 loading="lazy">
                        </div>

                        <div class="p-5">
                            <h3 class="text-lg font-bold text-[#0D3B66] mb-2">
                                <a href="#" class="hover:text-[#14919B] transition-colors">
                                    <?php echo esc_html($news['title']); ?>
                                </a>
                            </h3>

                            <time class="text-[#14919B] text-xs font-medium block mb-3">
                                <?php echo esc_html($news['date']); ?>
                            </time>

                            <p class="text-gray-500 text-sm leading-relaxed mb-4">
                                Curabitur eget element non volutpat condimentum eget pretium sed nibh porta opin porttiere arci tellus agte office.
                            </p>

                            <a href="#" class="news-read-more text-[#14919B] text-sm font-semibold hover:text-[#0D3B66] transition-colors">
                                Read More
                            </a>
                        </div>
                    </article>
                <?php endforeach;
            endif; ?>

        </div>
    </div>
</section>
