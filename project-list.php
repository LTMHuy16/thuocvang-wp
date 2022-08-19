<?php /* Template Name: Project List */ ?>
<?php get_header(); ?>

<main>
    <?php include(get_theme_file_path('sections/banners/index.php')); ?>

    <!-- PROJECT LIST -->
    <?php 
        function list_posts_by_taxonomy( $post_type, $taxonomy, $get_terms_args = array(), $wp_query_args = array() ){
            $tax_terms = get_terms( $taxonomy, $get_terms_args );
            if( $tax_terms ){
                foreach( $tax_terms  as $tax_term ){
                    $query_args = array(
                        "post_type"=> $post_type,
                        "$taxonomy" => $tax_term->slug,
                        "post_status"=> "publish",
                        "posts_per_page"=> -1,
                        "ignore_sticky_posts"=> true
                    );
                    $query_args = wp_parse_args( $wp_query_args, $query_args );
                    $my_query = new WP_Query( $query_args );
                    if( $my_query->have_posts() ) { ?>
                        <h2 id="<?php echo $tax_term->slug; ?>" class="tax_term-heading"><?php echo $tax_term->name; ?></h2>
                        <ul>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                        </ul>
                        <?php
                    }
                    wp_reset_query();
                }
            }
        }

        list_posts_by_taxonomy( "post", "Projects" ); 
    ?>
    
    <?php if( $the_projects->have_posts() ): ?>
        <section class="projects section">
            <ul class="projects_list row g-0">
                <?php while( $the_projects->have_posts() ) : $the_projects->the_post(); ?>
                    <?php 
                        $card_title = the_title();
                        $link_card = the_permalink();
                        $location = the_excerpt();
                    ?>
                    <li class="projects_list-item col-12 col-md-6">
                        <a href="<?php echo esc_url($link_card); ?>">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <div class="img-wrapper">
                                    <picture>
                                        <?php the_post_thumbnail(); ?>
                                    </picture>
                                </div>
                                <div class="text-wrapper">
                                    <?php if(!empty($link_card) && !empty($card_title)): ?>
                                    <h3 class="projects_list-item_title">
                                        <a href="<?php echo esc_url($link_card); ?>"><?php echo esc_html($card_title); ?></a>
                                    </h3>
                                    <?php endif; ?>
                                    <div class="projects_list-item_info d-flex flex-wrap align-items-center justify-content-between">
                                        <span class="separator"></span>
                                        <?php if(!empty($location)): ?>
                                        <span class="location d-flex align-items-center">
                                            <i class="icon-location icon"></i>
                                            <?php echo esc_html($location); ?>
                                        </span>
                                        <?php endif; ?>
                                        <?php if(!empty($link_card)): ?>
                                        <a class="link link-arrow link-arrow--alt"
                                            href="<?php echo esc_url($link_card); ?>">
                                            Detail
                                            <i class="icon-arrow_right"></i>
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </section>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</main>

<?php get_footer(); ?>