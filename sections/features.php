<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $list_infomation = get_sub_field('list_infomation');
    $feature_list = get_sub_field('feature_list');
    $bg_color = get_sub_field('background');
?>
<section class="features <?php if($bg_color) {echo esc_attr("primary-bg");} ?> section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container p-md-0">
        <div class="row g-0">
            <!-- COL INFOMATION -->
            <div class="features_header section_header col-12 col-md-12 col-lg-6 col-xl-4">
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
                    <?php if(!empty($highlighted_title)): ?>
                        <span class="highlight"><?php echo esc_html($highlighted_title); ?></span>
                    <?php endif; ?>
                    <?php if(!empty($normal_title)): ?>
                        <?php echo esc_html($normal_title); ?>
                    <?php endif; ?>
                </h2>

                <?php if(!empty($list_infomation)): ?>
                    <ul class="features_header-list">
                        <?php foreach($list_infomation as $item): ?>
                            <?php $text = $item['text'] ?>
                            <li class="features_header-list_item d-flex align-items-center">
                                <i class="icon-check icon"></i>
                                <?php echo esc_html($text); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <!-- END COL INFOMATION -->
            
            <!-- COL FEATURES BOX -->
            <?php if(!empty($feature_list)): ?>
            <?php foreach($feature_list as $item): ?>
                <?php
                    $image = $item['image'];
                    $box_title = $item['title'];
                    $box_desc = $item['description'];
                    $box_custom_class = $item['custom_class'];
                ?>
                <div class="features_card <?php if(!$bg_color) {echo esc_attr("features_card--alt");} ?> col-12 col-md-6 col-xl-4 <?php if(!empty($box_custom_class)) {echo esc_attr($box_custom_class);} ?>">
                    <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                        <?php if(!empty($image)): ?>
                            <picture>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </picture>
                        <?php endif; ?>
                        <?php if(!empty($box_title)): ?>
                            <h3 class="features_card-title"><?php echo esc_html($box_title); ?></h3>
                        <?php endif; ?>
                        <?php if(!empty($box_desc)): ?>
                            <p class="features_card-description"><?php echo esc_html($box_desc); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>