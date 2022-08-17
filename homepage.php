<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>

<main>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php include(get_theme_file_path('sections/banners/index.php')); ?>
        <?php include(get_theme_file_path('sections/index.php')); ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>