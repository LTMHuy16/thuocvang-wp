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

                    <a class="link link-arrow link-arrow--alt" href="<?php the_permalink(); ?>">
                        Detail
                        <i class="icon-arrow_right"></i>
                    </a>

                </div>
            </div>
        </div>
    </a>
</li>