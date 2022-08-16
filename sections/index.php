<?php if (have_rows('main_flexible_content')): ?>
    <?php while (have_rows('main_flexible_content')) : the_row(); ?>
        <?php if( get_row_layout() == 'section_services' ): ?>
            <?php include(get_theme_file_path('sections/services.php')); ?> 
        <?php elseif( get_row_layout() == 'section_project' ): ?>
            <?php include(get_theme_file_path('sections/project.php')); ?> 
        <?php elseif( get_row_layout() == 'section_sport' ): ?>
            <?php include(get_theme_file_path('sections/sport.php')); ?>
        <?php elseif( get_row_layout() == 'section_features' ): ?>
            <?php include(get_theme_file_path('sections/features.php')); ?> 
        <?php elseif( get_row_layout() == 'seciton_team' ): ?>
            <?php include(get_theme_file_path('sections/team.php')); ?>
        <?php elseif( get_row_layout() == 'section_gallery' ): ?>
            <?php include(get_theme_file_path('sections/gallery.php')); ?>
        <?php elseif( get_row_layout() == 'section_contact' ): ?>
            <?php include(get_theme_file_path('sections/contact.php')); ?>
        <?php elseif( get_row_layout() == 'secton_post' ): ?>
            <?php include(get_theme_file_path('sections/posts.php')); ?>
        <?php endif; ?> 
    <?php endwhile; ?>
<?php endif; ?>
