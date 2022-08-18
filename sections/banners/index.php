<?php if (have_rows('chose_flexible_banner')): ?>
    <?php while (have_rows('chose_flexible_banner')) : the_row(); ?>
        <?php 
            switch (get_row_layout()) {
                case "main_hero_section":
                    include(get_theme_file_path('sections/banners/hero-banner.php'));
                    break;
                case "banner_extension":
                    include(get_theme_file_path('sections/banners/info-banner.php'));
                    break;
            }
        ?>
    <?php endwhile; ?>
<?php endif; ?>
