<?php if (have_rows('main_flexible_content')): ?>
    <?php while (have_rows('main_flexible_content')) : the_row(); ?>
        <?php 
            switch (get_row_layout()) {
                case "section_services":
                    include(get_theme_file_path('sections/services.php'));
                    break;
                case "section_project":
                    include(get_theme_file_path('sections/project.php'));
                    break;
                case "section_sport":
                    include(get_theme_file_path('sections/sport.php'));
                    break;
                case "section_features":
                    include(get_theme_file_path('sections/features.php'));
                    break;
                case "seciton_team":
                    include(get_theme_file_path('sections/team.php'));
                    break;
                case "section_gallery":
                    include(get_theme_file_path('sections/gallery.php'));
                    break;
                case "section_contact":
                    include(get_theme_file_path('sections/contact.php'));
                    break;
                case "secton_post":
                    include(get_theme_file_path('sections/posts.php'));
                    break;
                default:
                    return;
            }
        ?>
    <?php endwhile; ?> 
<?php endif; ?>

