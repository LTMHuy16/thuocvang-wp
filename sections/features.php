<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $description = get_sub_field('description');
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

                <?php if(!empty($description)): ?>
                    <p class="text"><?php echo esc_html($description); ?></p>
                <?php endif; ?>

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
                <?php $quantity = 0 ?>
                <?php foreach($feature_list as $item): ?>
                    <?php $only_image_in_box = $item['only_image_in_box']; ?>
                    <!-- Only Image Card -->
                    <?php if($only_image_in_box): ?>
                        <?php $logo_img = $item['image_logo']; ?>
                        <?php if($only_image_in_box): ?>
                            <div class="feature-wrapper col-12 col-md-6 col-xl-4">
                                <div class="features_card--img d-flex justify-content-center align-items-center ">
                                    <picture>
                                        <img src="<?php echo esc_url($logo_img['url']); ?>" alt="<?php echo esc_attr($logo_img['alt']); ?>">
                                    </picture>
                                </div>
                            </div>
                        <?php endif; ?>
                    <!-- End Only Image Card -->
                    
                    <!-- Card Full Content -->
                    <?php else: ?>
                        <?php
                            $img_or_numb = $item['image_or_number'];
                            if ($img_or_numb) {
                                $image = $item['image'];
                            }

                            $quantity += 1;
                            if($quantity < 10) {
                                $quantity_text = "0$quantity";
                            } else {
                                $quantity_text = $quantity;
                            }

                            $box_title = $item['title'];
                            $box_desc = $item['description'];
                            $card_btn = $item['button'];
                            if($card_btn) {
                                $card_btn_text = $card_btn['button_text'];
                                $card_btn_link = $card_btn['button_link'];
                            }
                            $box_custom_class = $item['custom_class'];
                        ?>
                        <div class="features_card <?php if(!$bg_color) {echo esc_attr("features_card--alt");} ?> col-12 col-md-6 col-xl-4 <?php if(!empty($box_custom_class)) {echo esc_attr($box_custom_class);} ?>">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <!-- IMAGE OR NUMBER -->
                                <?php if($img_or_numb): ?>
                                    <?php if(!empty($image)): ?>
                                        <picture>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        </picture>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <span class="number">
                                        <?php echo esc_html($quantity_text); ?>
                                    </span>
                                <?php endif; ?>
                                <!-- END IMAGE OR NUMBER -->

                                <!-- CARD CONTENT -->
                                <?php if(!empty($box_title)): ?>
                                    <h3 class="features_card-title"><?php echo esc_html($box_title); ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($box_desc)): ?>
                                    <p class="features_card-description"><?php echo esc_html($box_desc); ?></p>
                                <?php endif; ?>
                                <!-- END CARD CONTENT -->

                                <!-- BUTTON CARD -->
                                <?php if(!empty($card_btn_text) && !empty($card_btn_link)): ?>
                                    <a class="link link-arrow" href="<?php echo esc_url($card_btn_link); ?>">
                                        <?php echo esc_html($card_btn_text); ?>
                                        <i class="icon-arrow_right"></i>
                                    </a>
                                <?php endif; ?>
                                <!-- END BUTTON CARD -->
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- Card Full Content -->
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>