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
                    <span class="date"><?php the_date(); ?></span>
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