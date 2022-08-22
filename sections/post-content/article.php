<article class="post_article">

    <?php $header_image = get_field('header_image'); ?>

    <?php if(!empty($header_image)): ?>

        <div class="post_article-img">
            <img class="post_article-img_img post_article-media lazy entered loaded" src="<?php echo esc_url($header_image['url']) ?>" alt="<?php echo esc_attr($header_image['alt']) ?>" data-ll-status="loaded" />
        </div>

    <?php endif; ?>

    <div class="post_article-info d-flex align-items-center flex-wrap">
        <span class="date"><?php echo get_the_date('dS M Y', get_the_ID()); ?></span>

        <span class="divider"></span>

        <span class="author">
            by <?php the_author(); ?>
        </span>

        <span class="divider"></span>

        <span class="comments_text">

            <?php
                $comment_count = $post->{"comment_count"};
                if ($comment_count > 1) {
                    echo esc_html("$comment_count Comments");
                } else {
                    echo esc_html("$comment_count Comment");
                }
            ?>

        </span>
    </div>
    

    <?php the_content(); ?>


    <?php if (have_rows('post_flexible_content')): ?>

        <?php while (have_rows('post_flexible_content')) : the_row(); ?>

            <?php if( get_row_layout() == 'paragraph'): ?>

                <?php 
                    $content = get_sub_field('content');
                    if (!empty($content)):
                ?>

                    <?php the_field('content', $post->id); ?>

                <?php endif; ?>


            <?php elseif( get_row_layout() == 'section_content'): ?>
                    <?php 
                        $heading = get_sub_field('heading');
                        $paragraphs = get_sub_field('paragraphs');
                    ?>

                    <?php if(!empty($heading)): ?>
                        <h3 class="post_article-header"><?php echo esc_html($heading) ?></h3>
                    <?php endif; ?>

                    <?php if(!empty($paragraphs)): ?>

                        <?php foreach($paragraphs as $p): ?>

                            <p class="post_article-text">
                                <?php echo esc_html($p['content']) ?>
                            </p>

                        <?php endforeach; ?>

                    <?php endif; ?>
            
            <?php elseif( get_row_layout() == 'quote'): ?>
                    <?php 
                        $quote_content = get_sub_field('quote_content');
                        $author_name = get_sub_field('author_name');

                        if(!empty($quote_content) && !empty($author_name)):
                    ?>

                    <div class="post_article-quote primary-bg">
                        <q class="post_article-quote_quote">
                            <?php echo esc_html($quote_content) ?>
                        </q>
                        <span class="post_article-quote_author">
                            <?php echo esc_html($author_name) ?>
                        </span>
                    </div>

                <?php endif; ?> 

            <?php elseif( get_row_layout() == 'image_and_text'): ?>

                <?php 
                    $image = get_sub_field('image');
                    $list_text = get_sub_field('list_text');

                    if(!empty($image) && !empty($list_text)):
                ?>

                <div class="wrapper wrapper--list d-flex flex-wrap flex-md-nowrap flex-lg-wrap flex-xl-nowrap align-items-center">

                    <ul class="post_article-list">
                        <?php foreach ($list_text as $item): ?>  
                              
                            <li class="post_article-list_item d-flex align-items-center">

                                <i class="icon-check icon"></i>

                                <?php echo esc_html($item['text']) ?>

                            </li>

                        <?php endforeach; ?>
                    </ul>

                    <div class="wrapper wrapper--media">
                        <picture>
                            <img class="lazy post_article-media entered loaded" src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_url($image['alt']) ?>" data-ll-status="loaded" />
                        </picture>
                    </div>

                </div>

                <?php endif; ?> 
            <?php endif; ?> 
        <?php endwhile; ?>
    <?php endif; ?>
</article>