<?php get_header(); ?>

<main class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <h2 class="text-xl font-bold text-gray-800 mb-4">
                    <a href="<?php the_permalink(); ?>" class="hover:text-blue-600">
                        <?php the_title(); ?>
                    </a>
                </h2>
                
                <div class="text-gray-600 leading-relaxed mb-4">
                    <?php the_excerpt(); ?> </div>

                <a href="<?php the_permalink(); ?>" class="text-blue-500 font-semibold hover:underline">
                    Read More &rarr;
                </a>
            </article>
        <?php endwhile; else : ?>
            <p class="text-center text-gray-500 col-span-full">No content found.</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>