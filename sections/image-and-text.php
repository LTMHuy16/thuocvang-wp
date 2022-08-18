<!-- STRUCTURE:
        + SINGLE IMAGE AND TEXT
        + LIST IMAGE AND TEXT (CAROUSEL)
-->

<!-- SINGLE IMAGE AND TEXT -->
<?php $single = get_sub_field('single_image_and_text'); ?>
<?php if(!empty($single)): ?>
    <?php 
        $subtitle = $single['subtitle'];
        $title = $single['title'];
        $description = $single['description'];
        $list_content = $single['list_content'];
        $button = $single['button'];
        $image_bg = $single['image'];
        $image_alignment = $single['image_alignment'];
        $custom_class = $single['custom_class'];
    ?>
    <section class="hero section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
        <div class="container d-flex flex-wrap flex-xl-nowrap align-items-xl-center justify-content-between <?php if(!empty($image_alignment)) {echo esc_attr($image_alignment);} ?>">

            <!-- INFOMATION CONTENT -->
            <?php 
                if(!empty($image_alignment) && $image_alignment !== "") {}
            ?>
            <div class="hero_header section_header col-lg-6 <?php if(!empty($image_alignment) && $image_alignment !== "") {echo esc_attr("hero_header--right");} ?>">
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
                <?php if(!empty($description)): ?>
                    <p class="text"><?php echo esc_html($description); ?></p>
                <?php endif; ?>

                <?php if(!empty($list_content)): ?>
                    <ul class="hero_header-list">
                        <?php foreach ($list_content as $item): 
                            $text = $item['text_content'];
                            if (!empty($text)):
                        ?>  
                                <li class="hero_header-list_item d-flex align-items-center">
                                    <i class="icon-arrow_right icon"></i>
                                    <?php echo esc_html($text); ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if(!empty($button)): ?>
                    <?php 
                        $button_text = $button['button_text'];
                        $button_link = $button['button_link'];
                        if(!empty($button_text) && !empty($button_text)):
                    ?>
                        <a class="btn" href="<?php echo esc_url($button_link) ?>">
                            <?php echo esc_html($button_text) ?>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <!-- IMAGE BACKGROUND -->
            <div class="hero_img col-lg-6">
                <?php if(!empty($image_bg)): ?>
                    <picture>
                        <img class="hero_img-img lazy entered loaded" src="<?php echo esc_url($image_bg['url']) ?>" alt="<?php echo esc_attr($image_bg['alt']) ?>" data-ll-status="loaded" />
                    </picture>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- END SINGLE IMAGE AND TEXT -->



<!-- LIST IMAGE AND TEXT -->
<?php $list = get_sub_field('image_and_text_list'); ?>
<?php if(!empty($list)): ?>
    <?php foreach ($list as $item): ?>
        <?php 
            $subtitle = $item['subtitle'];
            $title = $item['title'];
            $description = $item['description'];
            $list_content = $item['list_content'];
            $button = $item['button'];
            $image_bg = $item['image'];
            $image_alignment = $item['image_alignment'];
            $custom_class = $item['custom_class'];
        ?>
    <?php endforeach; ?>
<?php endif; ?>
<!-- END LIST IMAGE AND TEXT -->