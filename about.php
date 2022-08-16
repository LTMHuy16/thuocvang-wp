<?php  /** Template Name: About Us */ ?>
<?php get_header(); ?>
<?php while(have_posts()): the_post();?>
  <?php include(get_theme_file_path('sections/main-banner.php')); ?>
  <?php include(get_theme_file_path('sections/main-content.php')); ?>
<?php endwhile; ?>
<?php get_footer(); ?>