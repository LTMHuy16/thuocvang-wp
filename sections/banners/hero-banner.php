<?php 
    $subtitle = get_sub_field('hero_sub_title');
    $title = get_sub_field('hero_title');
    $hero_description = get_sub_field('hero_description');
    $button_text = get_sub_field('hero_button_text');
    $button_link = get_sub_field('hero_button_link');
    $number_info = get_sub_field('hero_number_info');
    $card_info = get_sub_field('card_info');
    $bg_image_left = get_sub_field('background_image_left');
    $bg_image_right = get_sub_field('background_image_right');
?>
<section class="hero primary-bg">
    <!-- BG LEFT -->
    <?php if(!empty($bg_image_left)): ?>
        <picture>
            <img class="plan lazy entered loaded"
                src="<?php echo esc_url($bg_image_left['url']); ?>" alt="<?php echo esc_attr($bg_image_left['alt']); ?>" data-role="deco" data-ll-status="loaded" />
        </picture>
    <?php endif; ?>
    <!-- END BG LEFT -->

    <div class="container hero_container d-md-flex flex-wrap justify-content-between">
        <!-- BG RIGHT -->
        <?php if(!empty($bg_image_right)): ?>
            <picture>
                <img class="hero_building lazy entered loaded" src="<?php echo esc_url($bg_image_right['url']); ?>" alt="<?php echo esc_attr($bg_image_right['alt']); ?>" data-role="deco" data-ll-status="loaded" />
            </picture>
        <?php endif; ?>
        <!-- END BG RIGHT -->

        <!-- HEADING -->
        <div class="hero_header section_header col-md-7 col-xl-auto">
            <?php if(!empty($subtitle)): ?>
                <span class="subtitle subtitle--extended"><?php echo esc_html($subtitle); ?></span>
            <?php endif; ?>
            <?php if(!empty($title)): ?>
                <h1 class="title"><?php echo esc_html($title); ?></h1>
            <?php endif; ?>
            <?php if(!empty($hero_description)): ?>
                <p class="text">
                    <?php echo esc_html($title); ?> 
                </p>
            <?php endif; ?>
            <?php if(!empty($button_text) && !empty($button_link)): ?>
                <a class="btn" href="<?php echo esc_url($button_link); ?> "><?php echo esc_html($button_text); ?> </a>
            <?php endif; ?>
            </div>
        <!-- END HEADING -->

        <div class="hero_info d-flex flex-column col-md-5 col-xl-auto align-items-md-end">
            <?php if(!empty($number_info)): ?>
                <div class="hero_info-numbers d-flex flex-wrap align-items-start justify-content-sm-center justify-content-md-between flex-grow-1">
                    <?php foreach ($number_info as $item): ?>
                        <?php 
                            if(!empty($item)) {
                                $number = $item['number'];
                                $label = $item['label'];
                            }
                        ?>
                            <div class="hero_info-numbers_group d-flex flex-column align-items-start align-items-md-end col-6 col-sm-auto col-md-12">
                                <h2 class="countNum number"><?php echo esc_html($number); ?> </h2>
                                <span class="label"><?php echo $label; ?></span>
                            </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- CARD INFO -->
            <?php if(!empty($card_info)): ?>
                <?php 
                    $title_card = $card_info['title_card'];
                    $square = $card_info['square'];
                    $card_status = $card_info['card_status'];
                    $button_text = $card_info['button_text'];
                    $button_link = $card_info['button_link'];
                    
                ?>
                <div class="hero_info-card">
                    <span class="hero_info-card_underlay"></span>
                    <div class="wrapper">
                        <?php if(!empty($title_card)): ?>
                            <h3 class="title"><?php echo esc_html($title_card); ?></h3>
                        <?php endif; ?>
                        <?php if(!empty($square)): ?>
                            <span class="square highlight d-flex align-items-center"><?php echo esc_html($square); ?><sup>2</sup></span>
                        <?php endif; ?>
                        <?php if(!empty($card_status)): ?>
                            <span class="info"><?php echo esc_html($card_status); ?></span>
                        <?php endif; ?>
                        <?php if(!empty($button_text) && !empty($button_link)): ?>
                            <a class="link link-arrow"
                                href="<?php echo esc_url($button_link); ?>">
                                <?php echo esc_html($button_text); ?>
                                <i class="icon-arrow_right"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                    <!-- BG RIGHT -->
                    <?php if(!empty($bg_image_right)): ?>
                        <picture>
                            <img class="hero_building--mini lazy entered loaded" src="<?php echo esc_url($bg_image_right['url']); ?>" alt="<?php echo esc_attr($bg_image_right['alt']); ?>" data-role="deco" data-ll-status="loaded" />
                        </picture>
                    <?php endif; ?>
                    <!-- END BG RIGHT -->
                </div>
            <?php endif; ?>
            <!-- END CARD INFO -->
        </div>
    </div>
</section>