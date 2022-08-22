<?php get_header(); ?>

<div class="header_extension">
    <div class="container">
        <div class="section_header">

            <span class="subtitle subtitle--extended">Single Post</span>

            <h1 class="title">

                <?php
                    $post_name = $post->post_title;
                    if(!empty($post_name)) {
                        echo esc_html($post_name);
                    }
                ?>

            </h1>

            <ul class="breadcrumbs d-flex align-items-center">
                <li class="breadcrumbs_item">
                    <a href="<?php echo get_home_url(); ?>">Home</a>
                </li>
                <li class="breadcrumbs_item breadcrumbs_item--current">
                    <span> Single post </span>
                </li>
            </ul>

        </div>
    </div>
</div>

<main class="post section-nopb">

    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container d-flex flex-wrap justify-content-center justify-content-md-between">

            <!-- POST CONTENT -->
            <div class="wrapper--content col-12">

                <?php include(get_theme_file_path('sections/post-content/article.php')); ?>

            </div>

            <!-- WIDGET -->
            <?php include(get_theme_file_path('sections/post-content/widgets.php')); ?>

        </div>
    <?php endwhile; ?>

</main>

<?php get_footer(); ?>