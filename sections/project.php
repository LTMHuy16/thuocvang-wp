<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $project_box = get_sub_field('project_box');
?>
<section class="projects primary-bg section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container">
        <div class="projects_header section_header">
            <?php if(!empty($subtitle)): ?>
                <span class="subtitle"><?php echo esc_html($subtitle); ?></span>
            <?php endif; ?>
            <?php 
                if($title) {
                    $normal_title = $title['normal_title'];
                    $highlighted_title = $title['highlighted_title'];
                }
            ?>
            <h2 class="title">
                <?php if(!empty($normal_title)): ?>
                    <?php echo esc_html($normal_title); ?>
                <?php endif; ?>
                <?php if(!empty($highlighted_title)): ?>
                    <span class="highlight"><?php echo esc_html($highlighted_title); ?></span>
                <?php endif; ?>
            </h2>
        </div>

        <!-- PROJECT -->
        <?php if(!empty($project_box)): ?>
            <ul class="projects_list row g-0">
                <?php foreach ($project_box as $box): ?>
                    <?php 
                        if(!empty($box)) {
                            $image = $box['image'];
                            $card_title = $box['title'];
                            $description = $box['description'];
                            $button_text = $box['button_text'];
                            $link_card = $box['link_card'];
                            $card_custom_class = $box['custom_class'];
                        }
                    ?>
                    <li class="projects_list-item col-12 col-md-6">
                        <?php if(!empty($link_card)): ?>
                            <a href="<?php echo esc_url($link_card); ?>">
                                <div class="wrapper d-flex flex-column justify-content-between">
                                    <?php if(!empty($image)): ?>
                                        <div class="img-wrapper">
                                            <picture>
                                                <img class="projects_list-item_img lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            </picture>
                                        </div>
                                    <?php endif; ?>
                                    <div class="text-wrapper">
                                        <?php if(!empty($link_card) && !empty($card_title)): ?>
                                            <h3 class="projects_list-item_title">
                                                <a href="<?php echo esc_url($link_card); ?>"><?php echo esc_html($card_title); ?></a>
                                            </h3>
                                        <?php endif; ?>
                                        <div
                                            class="projects_list-item_info d-flex flex-wrap align-items-center justify-content-between">
                                            <span class="separator"></span>
                                            <?php if(!empty($description)): ?>
                                                <span class="location d-flex align-items-center">
                                                    <i class="icon-location icon"></i>
                                                    <?php echo esc_html($description); ?>
                                                </span>
                                            <?php endif; ?>
                                            <?php if(!empty($link_card) && !empty($button_text)): ?>
                                                <a class="link link-arrow link-arrow--alt"
                                                    href="<?php echo esc_url($link_card); ?>">
                                                    <?php echo esc_html($button_text); ?>
                                                    <i class="icon-arrow_right"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <!-- END PROJECT -->
    </div>
</section>