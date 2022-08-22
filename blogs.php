<?php /* Template Name: Blog List */ ?>

<?php get_header(); ?>

<?php include(get_theme_file_path('sections/banners/index.php')); ?>

<main class="post section-nopb">
    <div class="container d-flex flex-wrap justify-content-center justify-content-md-between">
        <div class="wrapper--content">

            <?php 
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'posts_per_page' => 1,
                    'post_type'   => 'post',
                    'post_status' => 'publish',
                    'paged' => $paged
                );
                
                $the_query = new WP_Query( $args );
            ?>

            <?php if( $the_query->have_posts() ): ?>

                <ul class="blog_list row g-0">

                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php get_template_part('template-parts/single-blog', get_post_type() ); ?>

                    <?php endwhile; ?>

                </ul>

                <!-- PAGINATION -->
                <?php qdn_custom_pagination($the_query); ?>

                
            <?php endif; ?>
            
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        </div>

        <!-- WIDGET -->
        <?php include(get_theme_file_path('sections/post-content/widgets.php')); ?>

</main>

<?php get_footer(); ?>