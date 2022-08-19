<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $section_image = get_sub_field('section_image');
    $section_content = get_sub_field('section_content');
    $section_content = get_sub_field('section_content');
?>
<section class="spots section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container d-flex flex-wrap flex-lg-nowrap">
        <div class="wrapper">
            <div class="spots_header section_header">
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
            </div>
            <?php if(!empty($section_image)): ?>
                <div class="spots_map">
                    <picture>
                        <img class="spots_map-map lazy" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>"/>
                    </picture>
                </div>
            <?php endif; ?>
        </div>
        <?php if(!empty($section_content)): ?>
            <?php 
                $infomation_text = $section_content['infomation_text'];
                $number_list = $section_content['number_list'];
                $button_text = $section_content['button_text'];
                $button_link = $section_content['button_link'];
            ?>
            <div class="spots_info col-lg-6 col-xl-auto">
                <?php if(!empty($infomation_text)): ?>
                    <p class="spots_info-text"><?php echo esc_html($infomation_text); ?></p>
                <?php endif; ?>
                <?php if(!empty($number_list)): ?>
                    <div class="wrapper d-flex flex-wrap justify-content-center justify-content-md-start">
                        <?php foreach($number_list as $item): ?>
                            <?php 
                                $number = $item['number'];
                                $number_info = $item['number_info'];
                            ?>
                            <div class="spots_info-number col-12 col-md-6">
                                <?php if(!empty($number)): ?>
                                    <h2 class="countNum number"><?php echo esc_html($number); ?></h2>
                                <?php endif; ?>
                                <?php if(!empty($number_info)): ?>
                                    <span class="label"><?php echo esc_html($number_info); ?></span>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if(!empty($button_text) && !empty($button_link)): ?>
                    <div class="spots_info-btn d-flex justify-content-center justify-content-lg-start">
                        <a class="btn" href="<?php echo esc_url($button_link); ?>"><?php echo esc_html($button_text); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>