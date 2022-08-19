<?php /* Template Name: Blog List */ ?>
<?php get_header(); ?>

<?php
    include(get_theme_file_path('sections/banners/index.php'));
?>

<main class="post section-nopb">
    <div class="container d-flex flex-wrap justify-content-center justify-content-md-between">
        <!-- POST CONTENT -->
        <div class="wrapper--content">
            <!-- POST -->
            <?php 
                $args = array(
                    'posts_per_page' => 3,
                    'post_type'   => 'post',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query( $args );
            ?>
            <?php if( $the_query->have_posts() ): ?>
                <ul class="blog_list row g-0">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li class="blog_list-item bog_item col-12">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="img-wrapper">
                                        <picture>
                                            <?php the_post_thumbnail(); ?> 
                                        </picture>
                                    </div>
                                    <div class="text-wrapper d-flex flex-column justify-content-between">
                                        <div class="info d-flex align-items-center">
                                            <?php the_author() ?>
                                            <span class="divider"></span>
                                            <span class="date">May 24, 2022</span>
                                        </div>
                                        <h4 class="title">
                                            <?php the_title(); ?>
                                        </h4>
                                        <p class="preview">
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <div class="divider--link">
                                            <a class="link link-arrow" href="<?php the_permalink(); ?>">
                                                Read post
                                                <i class="icon-arrow_right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            <!-- END POST -->
        </div>

        <!-- WIDGET -->
        <?php  
            include(get_theme_file_path('sections/post-content/widgets.php'));
        ?>
    </div>
</main>

<?php get_footer(); ?>