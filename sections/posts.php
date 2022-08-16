<section class="blog section">
    <div class="container">
        <div class="wrapper d-flex flex-wrap align-items-end justify-content-sm-between">
            <div class="blog_header section_header">
                <span class="subtitle">Building The Future</span>
                <h2 class="title">
                    Latest From the <span class="highlight">Blog</span>
                </h2>
            </div>
            <a class="btn blog_btn" href="https://shtheme.com/demosd/axialwp/?page_id=27">Our blog</a>
        </div>


        <!-- POST -->
        <?php 
            $args = array(
                'posts_per_page' => 10,
                'post_type'   => 'post',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
            <ul class="blog_list row g-0">
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li class="blog_list-item col-12 col-md-6 col-lg-4">
                        <div class="wrapper d-flex flex-column justify-content-between">
                            <div class="img-wrapper">
                                <picture>
                                    <?php the_post_thumbnail(); ?> 
                                </picture>
                            </div>
                            <div class="text-wrapper d-flex flex-column justify-content-between">
                                <div class="info d-flex align-items-center">
                                    <?php the_category(); ?>
                                    <span class="divider"></span>
                                    <span class="date">May 24, 2022</span>
                                </div>
                                <h4 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        <!-- END POST -->
    </div>
</section>