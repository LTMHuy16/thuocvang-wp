<?php /* Template Name: Project List */ ?>
<?php get_header(); ?>

<main>
    <?php include(get_theme_file_path('sections/banners/index.php')); ?>

    <!-- PROJECT LIST -->
    
    <?php 
        // get slugs from advanded custom field
        $slugs = get_field('slugs');
        $terms = array();
        foreach($slugs as $slug) {
            array_push($terms, $slug->slug);
        }

        $args = array(
            'posts_per_page' => 6,
            'post_type'   => 'post',
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => 'Projects',                
                    'field' => 'slug', 
                    'terms' => $terms,
                ),
            )
        );
        $the_project_query = new WP_Query( $args );
        if(!empty($the_project_query)):
    ?>
        <main class="projects section">
            <div class="container">
                <ul class="d-flex flex-wrap">
                    <?php while ($the_project_query->have_posts()) : $the_project_query->the_post(); ?>
                        <li class="projects_list-item col-12 col-lg-6">
                            <a href="<?php the_permalink(); ?>">
                                <div class="wrapper d-flex flex-column justify-content-between">
                                    <div class="img-wrapper">
                                        <picture>
                                            <?php the_post_thumbnail(); ?>
                                        </picture>
                                    </div>
                                    <div class="text-wrapper">
                                        <h3 class="projects_list-item_title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="projects_list-item_info d-flex flex-wrap align-items-center justify-content-between">
                                            <span class="separator"></span>
                                            <span class="location d-flex align-items-center">
                                                <i class="icon-location icon"></i>
                                                <?php the_excerpt(); ?>
                                            </span>
                                            <a class="link link-arrow link-arrow--alt"
                                                href="<?php the_permalink(); ?>">
                                                Detail
                                                <i class="icon-arrow_right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </main>
    <?php endif; ?>
</main>


<?php get_footer(); ?>