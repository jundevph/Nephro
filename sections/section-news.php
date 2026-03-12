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
        <div class="text-center mb-14">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#204185] tracking-tight">News &amp; Events</h2>
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
                    <article class="news-card bg-white shadow-sm rounded-2xl overflow-hidden border border-gray-100">
                        <div class="overflow-hidden h-56">
                            <?php if (has_post_thumbnail()) :
                                the_post_thumbnail('medium_large', [
                                    'class'   => 'w-full h-56 object-cover',
                                    'loading' => 'lazy',
                                ]);
                            else : ?>
                                <img src="<?php echo esc_url($img_url . 'news-img1.png'); ?>"
                                     alt="<?php the_title_attribute(); ?>"
                                     class="w-full h-56 object-cover" loading="lazy">
                            <?php endif; ?>
                        </div>

                        <div class="p-6">
                            <h3 class="text-lg font-extrabold text-[#204185] mb-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-[#1CA0AA] transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <time class="text-[#204185] text-xs font-semibold block mb-3" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo esc_html(get_the_date('d F Y')); ?>
                            </time>

                            <p class="text-gray-500 text-sm leading-relaxed mb-5">
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 12)); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="news-read-more text-[#204185] text-sm font-bold hover:text-[#1CA0AA] transition-colors">
                                Read More
                            </a>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();

            else :
                // Fallback static cards when no posts exist
                $static_news = [
                    ['img' => 'news-img1.png', 'title' => 'News Tittle Here', 'date' => '23 September 2025'],
                    ['img' => 'news-img2.png', 'title' => 'News Tittle Here', 'date' => '23 September 2025'],
                    ['img' => 'news-img3.png', 'title' => 'News Tittle Here', 'date' => '23 September 2025'],
                ];

                foreach ($static_news as $news) : ?>
                    <article class="news-card bg-white shadow-sm rounded-2xl overflow-hidden border border-gray-100">
                        <div class="overflow-hidden h-56">
                            <img src="<?php echo esc_url($img_url . $news['img']); ?>"
                                 alt="<?php echo esc_attr($news['title']); ?>"
                                 class="w-full h-56 object-cover"
                                 loading="lazy">
                        </div>

                        <div class="p-6">
                            <h3 class="text-lg font-extrabold text-[#204185] mb-2">
                                <a href="#" class="hover:text-[#1CA0AA] transition-colors">
                                    <?php echo esc_html($news['title']); ?>
                                </a>
                            </h3>

                            <time class="text-[#204185] text-xs font-semibold block mb-3">
                                <?php echo esc_html($news['date']); ?>
                            </time>

                            <p class="text-gray-500 text-sm leading-relaxed mb-5">
                                Excepteur sint occaecat cupidatat non proident sunt iculpa qui officia
                            </p>

                            <a href="#" class="news-read-more text-[#204185] text-sm font-bold hover:text-[#1CA0AA] transition-colors">
                                Read More
                            </a>
                        </div>
                    </article>
                <?php endforeach;
            endif; ?>

        </div>
    </div>
</section>
