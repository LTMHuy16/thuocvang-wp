<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $button = get_sub_field('button');
?>
<section class="blog section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container">
        <div class="wrapper d-flex flex-wrap align-items-end justify-content-sm-between">
            <div class="blog_header section_header">
                <?php if(!empty($subtitle)): ?>
                    <span class="subtitle"><?php echo esc_html($subtitle); ?></span>
                <?php endif; ?>
                <?php 
                    if($title) {
                        $normal_title = $title['normal_title'];
                        $highlighted_title = $title['highlighted_title'];
                        $normal_title_after = $title['normal_title_after'];
                    }
                ?>
                <h2 class="title">
                    <?php if(!empty($normal_title)): ?>
                        <?php echo esc_html($normal_title); ?>
                    <?php endif; ?>
                    <?php if(!empty($highlighted_title)): ?>
                        <span class="highlight"><?php echo esc_html($highlighted_title); ?></span>
                    <?php endif; ?>
                    <?php if(!empty($normal_title_after)): ?>
                        <?php echo esc_html($normal_title_after); ?>
                    <?php endif; ?>
                </h2>
            </div>
            <?php if(!empty($button)): ?>
                <?php 
                    $button_text = $button['button_text'];
                    $button_link = $button['button_link'];
                ?>
                <a class="btn blog_btn" href="<?php echo esc_attr($button_link) ?>"><?php echo esc_html($button_text) ?></a>
            <?php endif; ?>
        </div>


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
                    <li class="blog_list-item col-12 col-md-6 col-lg-4">
                        <div class="wrapper d-flex flex-column justify-content-between">
                            <a class="link link-arrow" href="<?php the_permalink(); ?>">
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
</section>