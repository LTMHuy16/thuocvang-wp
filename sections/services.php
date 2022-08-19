<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $service_box = get_sub_field('service_box');
?>
<section class="services section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container">
        <div class="services_header section_header">
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

        <!-- SERVICES BOX -->
        <?php if(!empty($service_box)): ?>
            <ul class="services_list">
                <?php $quantity = 0; ?>
                <?php foreach ($service_box as $box): ?>
                    <?php 
                        if(!empty($box)) {
                            $card_title = $box['title'];
                            $description = $box['description'];
                            $button_text = $box['button_text'];
                            $link_card = $box['link_card'];
                            $card_custom_class = $box['custom_class'];
                        }

                        $quantity += 1;
                        if($quantity < 10) {
                            $quantity_text = "0$quantity";
                        } else {
                            $quantity_text = $quantity;
                        }
                    ?>
                    <li class="services_list-item col-12 col-md-6 col-xxl-4 <?php if(!empty($card_custom_class)) {echo esc_attr($card_custom_class);} ?>">
                        <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                            <span class="number">
                                <?php echo esc_html($quantity_text); ?>
                            </span>
                            <?php if(!empty($link_card) && !empty($card_title)): ?>
                                <h4 class="title">
                                    <a href="<?php echo esc_url($link_card); ?>"><?php echo esc_html($card_title); ?></a>
                                </h4>
                            <?php endif; ?>
                            <?php if(!empty($description)): ?>
                                <p class="description">
                                    <?php echo esc_html($description); ?>
                                </p>
                            <?php endif; ?>
                            <?php if(!empty($button_text) && !empty($link_card)): ?>
                                <a class="link link-arrow" href="<?php echo esc_url($link_card); ?>">
                                    <?php echo esc_html($button_text); ?>
                                    <i class="icon-arrow_right"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <!-- END SERVICES BOX -->
    </div>
</section>