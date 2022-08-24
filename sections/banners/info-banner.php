<?php 
    $subtitle = get_sub_field('subtitle');
    $title = get_sub_field('name_of_page');
    $image = get_sub_field('image');
    $image['alt'] == "" ? $image["alt"] = "ThuocVang" : ""; 
?>

<div class="header_extension">
    <div class="container">
        <div class="section_header">

            <?php if(!empty($subtitle)): ?>
                <span class="subtitle subtitle--extended"><?php echo esc_html($subtitle) ?></span>
            <?php endif; ?>

            <?php if(!empty($title)): ?>
                <h1 class="title"><?php echo esc_html($title) ?></h1>
            <?php endif; ?>

            <ul class="breadcrumbs d-flex align-items-center">
                <li class="breadcrumbs_item">
                    <a href="<?php echo get_home_url(); ?>">Home</a>
                </li>

                <?php if(!empty($title)): ?>
                    <li class="breadcrumbs_item breadcrumbs_item--current">
                        <span><?php echo esc_html($title) ?></span>
                    </li>
                <?php endif; ?>

            </ul>

        </div>
    </div>

    <?php if(!empty($image)): ?>

        <picture>
            <img class="lazy plan entered loaded" src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" />
        </picture>

    <?php endif; ?>

</div>