<?php
/**
 * Template part for displaying latest tutorials section
 *
 * @package Astra-child
 */
?>

<style>
    /* Fix line-height for code blocks in tutorials section */
    #latest-tutorials .bg-neutral-900 pre {
        line-height: 1rem !important;
        margin: 0;
        padding: 2px 0;
        background-color: inherit;
        box-sizing: border-box;
        font-family: 'Space Mono', monospace;
        white-space: pre-wrap;
        word-break: break-word;
    }

    /* Add spacing between code blocks */
    #latest-tutorials .bg-neutral-900 {
        padding: 1rem !important;
    }

    /* Ensure consistent background color */
    #latest-tutorials .bg-neutral-900 pre.bg-inherit {
        background-color: transparent !important;
    }
</style>

<section id="latest-tutorials" class="py-20 bg-neutral-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-500">
                <?php echo esc_html__('Tutorials', 'astra-child'); ?>
            </h2>
            <p class="text-neutral-300 max-w-2xl mx-auto">
                <?php echo esc_html__('Explore our latest coding tutorials and level up your programming skills.', 'astra-child'); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => $paged,
            );

            $latest_tutorials = new WP_Query($args);

            if ($latest_tutorials->have_posts()) :
                while ($latest_tutorials->have_posts()) : $latest_tutorials->the_post();
                    // Get the primary category
                    $categories = get_the_category();
                    $primary_category = !empty($categories) ? $categories[0]->name : '';

                    // Get estimated reading time
                    $content = get_the_content();
                    $word_count = str_word_count(strip_tags($content));
                    $reading_time = ceil($word_count / 200); // Assuming 200 words per minute
            ?>
                    <div class="bg-neutral-800 rounded-lg overflow-hidden border border-neutral-700 transition-all duration-300 hover:border-cyan-400 hover:shadow-[0_0_15px_rgba(6,182,212,0.2)] group">
                        <div class="relative h-48 overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                ?>
                                <img src="<?php echo esc_url($thumbnail_url); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>"
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                />
                            <?php endif; ?>
                            <?php if ($primary_category) : ?>
                                <div class="absolute top-0 left-0 bg-gradient-to-r from-cyan-400 to-teal-500 text-neutral-900 text-xs font-bold px-3 py-1 rounded-br-lg">
                                    <?php echo esc_html($primary_category); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xs text-neutral-400">
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="text-xs text-neutral-400 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <?php printf(esc_html__('%d min read', 'astra-child'), $reading_time); ?>
                                </span>
                            </div>

                            <h3 class="text-xl font-bold mb-3 text-white group-hover:text-cyan-400 transition-colors duration-300">
                                <?php the_title(); ?>
                            </h3>

                            <p class="text-neutral-400 mb-4">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>

                            <!-- //TODO:-Add code block detection and display -->

                            <a href="<?php the_permalink(); ?>"
                                class="inline-flex items-center text-cyan-400 hover:text-cyan-300 transition-colors duration-300 group-hover:translate-x-1">
                                <?php echo esc_html__('Read Tutorial', 'astra-child'); ?>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 ml-1 transform transition-transform duration-300 group-hover:translate-x-1"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <div class="mt-12 flex flex-col items-center">
            <?php
            $total_posts = $latest_tutorials->found_posts;
            $total_pages = ceil($total_posts / 3);
            if ($total_pages > 1) :
            ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8 w-full max-w-lg">
                    <?php
                    for ($i = 1; $i <= min(3, $total_pages); $i++) :
                        $button_class = $i == $paged ?
                            'px-4 py-2 bg-gradient-to-r from-cyan-400 to-teal-500 rounded-md text-neutral-900 font-bold' :
                            'px-4 py-2 bg-neutral-800 border border-neutral-700 rounded-md text-white hover:border-cyan-400 transition-colors duration-300';
                    ?>
                        <a href="<?php echo esc_url(get_pagenum_link($i)); ?>" class="<?php echo esc_attr($button_class); ?>">
                            <?php echo esc_html($i); ?>
                        </a>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>

            <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="inline-block px-8 py-3 bg-neutral-800 border border-neutral-700 text-white rounded-md hover:border-cyan-400 transition-colors duration-300 flex items-center">
                <?php echo esc_html__('View All Tutorials', 'astra-child'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</section>