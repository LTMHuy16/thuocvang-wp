<?php /* Template Name: Single Post */ ?>
<?php get_header(); ?>

<main class="post section-nopb">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container d-flex flex-wrap justify-content-center justify-content-md-between">
            <!-- POST CONTENT -->
            <div class="wrapper--content">
                <?php
                    include(get_theme_file_path('sections/post-content/article.php'));
                    include(get_theme_file_path('sections/post-content/post-comments.php'));
                    include(get_theme_file_path('sections/post-content/reply.php'));
                ?>
            </div>

            <!-- WIDGET -->
            <?php  
                include(get_theme_file_path('sections/post-content/widgets.php'));
            ?>
        </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>