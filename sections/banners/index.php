<?php if (have_rows('chose_flexible_banner')): ?>
    <?php while (have_rows('chose_flexible_banner')) : the_row(); ?>
        <?php if( get_row_layout() == 'main_hero_section' ): ?>
            <?php include(get_theme_file_path('sections/banners/hero-banner.php')); ?> 
        <?php endif; ?> 
    <?php endwhile; ?>
<?php endif; ?>
