<aside class="widgets">
    <!-- RECENT POST -->
    <?php 
        $args = array(
            'posts_per_page' => 3,
            'post_type'   => 'post',
            'post_status' => 'publish'
        );
        $the_query = new WP_Query( $args );
    ?>
    <?php if( $the_query->have_posts() ): ?>
        <div class="widgets_widget widgets_widget--latest">
            <h3 class="widgets_widget-title">Recent Posts</h3>
            <ul class="list">
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li class="list-item">
                        <h4 class="title">
                            <?php the_title(); ?>
                        </h4>
                        <a class="link link-arrow" href="<?php the_permalink(); ?>">
                            Read now <i class="icon-arrow_right icon"></i>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <!-- END RECENT POST -->

    <!-- CATEGORY -->
    <?php
        $args = array(
            'type'      => 'post',
            'number'    => 10,
            'parent'    => 0
        );
        $categories = get_categories( $args ); 
    ?>
    <?php if(!empty($categories)): ?>
        <div id="categories-2" class="widgets_widget widget_categories">
            <h3 class="widgets_widget-title">Categories</h3>
            <ul>
                <?php foreach ( $categories as $category ): ?>
                    <li class="cat-item cat-item-5">
                        <a href="<?php echo get_term_link($category->slug, 'category'); ?>"><?php echo esc_html($category->name) ?></a>
                    </li>
                <?php endforeach;  ?>
            </ul>
        </div>
    <?php endif; ?>
    <!-- END CATEGORY -->

    <!-- TAG -->
    <?php
        $tags = get_tags();
        if(!empty($tags)):
    ?>
        <div id="tag_cloud-2" class="widgets_widget widget_tag_cloud">
            <h3 class="widgets_widget-title">Tags</h3>
            <div class="tagcloud">
                <ul class="wp-tag-cloud">
                    <?php foreach ($tags as $tag): ?>
                        <?php $tag_link = get_tag_link( $tag->term_id ); ?>
                        <li>
                            <a href="<?php echo esc_url($tag_link) ?>" class="tag-cloud-link tag-link-12 tag-link-position-1" style="font-size: 11px"><?php echo esc_html($tag->name) ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <!-- END TAG -->

    <!-- SUBCRIBE -->
    <?php  
        $footer_subcribe = get_field('footer_subcribe', 'options');
        $subcribe_form = get_field('subcribe_form', 'options');
        $contact_infomation = get_field('contact_infomation', 'options');

        if(!empty($footer_subcribe)):
    ?>
        <?php  
            $subcribe_title = $footer_subcribe['title'];
            $subcribe_text = $footer_subcribe['text'];
        ?>
        <div id="custom_html-2" class="widget_text widgets_widget widget_custom_html">
            <div class="textwidget custom-html-widget">
                <div class="widgets_widget--newsletter">
                    <?php if(!empty($subcribe_title)): ?>
                        <h3 class="widgets_widget-title"><?php echo esc_html($subcribe_title) ?></h3>
                    <?php endif; ?>
                    <?php if(!empty($subcribe_text)): ?>
                        <p class="text"><?php echo esc_html($subcribe_text) ?></p>
                    <?php endif; ?>	

                    <!-- SUBCRIBE FORM -->
                    <div class="footer_main-block_form col-12 col-md-auto">
                        <?php 
                            if(!empty($subcribe_form)) {
                                $form_id = $subcribe_form->id;
                                $form_title = $subcribe_form->title;
                                if(!empty($form_id) && !empty($form_title)) {
                                    echo do_shortcode( '[contact-form-7 id="'.$form_id.'" title="'.$form_title.'"]' ); 
                                };
                            }
                        ?>
                    </div>
                    <!-- END SUBCRIBE FORM -->

                    <!-- SOCIAL -->
                    <?php if(!empty($contact_infomation)): ?>
                        <?php $social_media = $contact_infomation['social_media']; ?>
                        <ul class="socials d-flex align-items-center justify-content-start">
                            <?php if(!empty($social_media)): ?>
                                <?php foreach ($social_media as $social): ?>
                                    <?php 
                                        $social_text = $social['name'];
                                        $social_link = $social['link'];
                                    ?>
                                    <?php if(!empty($social_text) && !empty($social_link)): ?>
                                        <li class="socials_item">
                                            <a class="socials_item-link" href="<?php echo esc_url($social_link) ?>" target="_blank">
                                                <i class="icon-<?php echo esc_attr($social_text) ?>"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>	
                                <?php endforeach; ?>
                            <?php endif; ?>	
                        </ul>
                    <?php endif; ?>	
                    <!-- END SOCIAL -->
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- END SUBCRIBE -->
</aside>