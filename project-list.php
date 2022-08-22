<?php /* Template Name: Project List */ ?>

<?php get_header(); ?>

<main>

    <?php include(get_theme_file_path('sections/banners/index.php')); ?>
    
    <?php 
        // get slugs from advanded custom field
        $slugs = get_field('slugs');
        $terms = array();
        foreach($slugs as $slug) {
            array_push($terms, $slug->slug);
        }

        $max_post = get_option( "posts_per_page");
        if (!empty($max_post)) {
            $max_post = 6;
        }

        // create WP_query
        $args = array(
            'posts_per_page'    => $max_post,
            'post_type'         => 'post',
            "paged"             => 1,
            'post_status'       => 'publish',
            'tax_query'         => array(
                array(
                    'taxonomy'  => 'Projects',                
                    'field'     => 'slug', 
                    'terms'     => $terms,
                ),
            )
        );

        $pj_query = new WP_Query( $args );

        if(!empty($pj_query)):

    ?>

        <main class="projects section">
            <div class="container">

                <ul class="d-flex flex-wrap mb-4">
                    <?php while ($pj_query->have_posts()) : $pj_query->the_post(); ?>
                        <?php get_template_part('template-parts/single-project'); ?>
                    <?php endwhile; ?>
                </ul>

                <!-- PAGINATION -->
                <?php qdn_custom_pagination($pj_query); ?>

                
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query(); ?>

            </div>
        </main>

    <?php endif; ?>

</main>


<?php get_footer(); ?>