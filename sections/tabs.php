<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $tabs_list = get_sub_field('tabs_list');
?>
<section class="tabs section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container">
        <!-- SECTION HEDING -->
        <div class="tabs_header section_header d-flex flex-wrap flex-lg-nowrap align-items-lg-end justify-content-xl-between">
            <div class="tabs_header-wrapper">
                <?php if(!empty($subtitle)): ?>
                    <span class="subtitle"><?php echo esc_html($subtitle); ?></span>
                <?php endif; ?>
                <?php 
                    if($title) {
                        $normal_title = $title['normal_title'];
                        $highlighted_title = $title['highlighted_title'];
                        $normal_title_after = $title['normal_title_after'];
                    }
                ?>
                <h2 class="title">
                    <?php if(!empty($normal_title)): ?>
                        <?php echo esc_html($normal_title); ?>
                    <?php endif; ?>
                    <?php if(!empty($highlighted_title)): ?>
                        <span class="highlight"><?php echo esc_html($highlighted_title); ?></span>
                    <?php endif; ?>
                    <?php if(!empty($normal_title_after)): ?>
                        <?php echo esc_html($normal_title_after); ?>
                    <?php endif; ?>
                </h2>
            </div>
        </div>
        <!-- END SECTION HEDING -->

        <!-- TAB LIST -->
        <?php if(!empty($tabs_list)): ?>
            <div class="tabs_services d-lg-flex align-items-lg-start">
                <!-- TAB TITLES -->
                <div class="tabs_services-triggers d-lg-flex flex-column">
                    <?php $data_id = 0; ?>
                    <?php foreach($tabs_list as $item): ?>
                        <?php 
                            $tabtitle = $item['tab_title'];
                            $data_id += 1;
                        ?>
                        <?php if(!empty($tabtitle)): ?>
                            <!-- active -->
                            <h4 class="tabs_services-triggers_trigger d-flex align-items-center <?php if($data_id == 1) {echo esc_attr("active");} ?>" data-id="<?php echo esc_attr($data_id) ?>">
                                <?php echo esc_html($tabtitle); ?>
                            </h4>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <!-- END TAB TITLES -->

                <!-- TAB CONTENT -->
                <div class="tabs_services-content">
                    <?php $data_id = 0; ?>
                    <?php foreach($tabs_list as $item): ?>
                        <?php
                            $tab_img = $item['image'];
                            $tab_img['alt'] == "" ? $tab_img["alt"] = "ThuocVang" : ""; 
                            $tab_duration = $item['duration'];
                            $tab_price = $item['price'];
                            $tab_button = $item['button'];
                            $tab_content = $item['content'];

                            $data_id += 1;
                        ?>
                        <!-- active -->
                        <div class="content <?php if($data_id == 1) {echo esc_attr("active");} ?>" data-id="<?php echo esc_attr($data_id) ?>">
                            <?php if(!empty($tab_img)): ?>
                                <div class="img-wrapper">
                                    <picture>
                                        <img class="lazy entered loaded" src="<?php echo esc_url($tab_img['url']); ?>" alt="<?php echo esc_attr($tab_img['alt']); ?>"/>
                                    </picture>
                                </div>
                            <?php endif; ?>

                            <div class="text-wrapper d-flex flex-column">
                                <div class="main d-sm-flex flex-md-column flex-lg-row align-items-center justify-content-between">
                                    <table class="main_table">
                                        <tbody>
                                            <?php if(!empty($tab_duration)): ?>
                                                <tr>
                                                    <td class="property">Duration</td>
                                                    <td class="value"><?php echo esc_html($tab_duration); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if(!empty($tab_price)): ?>
                                                <tr>
                                                    <td class="property">Price</td>
                                                    <td class="value"><?php echo esc_html($tab_price); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    
                                    <?php if(!empty($tab_button)): ?>
                                        <?php 
                                            $tab_btn_text = $tab_button['button_text'];
                                            $tab_btn_link = $tab_button['button_link'];
                                        ?>
                                        <?php if(!empty($tab_btn_text) && !empty($tab_btn_link)): ?>
                                            <a class="main_btn btn" href="<?php echo esc_url($tab_btn_link); ?>"><?php echo esc_html($tab_btn_text); ?></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>

                                <?php if(!empty($tab_content)): ?>
                                    <div class="description">
                                        <?php foreach($tab_content as $text): ?>
                                            <?php $single_p = $text['single_paragraph']; ?>
                                            <p class="text"><?php echo esc_html($single_p); ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- END TAB CONTENT -->
            </div>
        <?php endif; ?>
        <!-- END TAB LIST -->
    </div>
</section>