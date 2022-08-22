<?php 

    $subtitle       = get_sub_field('sub_title');
    $title          = get_sub_field('title');
    $description    = get_sub_field('description');
    $custom_class   = get_sub_field('custom_class');
    $contact_info   = get_field('contact_infomation', 'options');
    
?>

<div class="section">
    <div class="container">
        <div class="info_data row g-0">
            <div class="info_data-card section_header col-md-6 col-xxl-3">
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

            <?php if(!empty($contact_info)): ?>

                <?php 
                    $address        = $contact_info['address'];
                    $emails         = $contact_info['emails'];
                    $phone_list     = $contact_info['phone_list'];
                    $social_media   = $contact_info['social_media'];
                ?>

                <!-- Address -->
                <div class="info_data-card col-md-6 col-xxl-3">

                    <?php if(!empty($address)): ?>

                        <div class="wrapper d-flex flex-column justify-content-between">
                            <i class="icon-location icon"></i>
                            <h4 class="title">Address</h4>
                            <span class="content"><?php echo esc_html($address) ?></span>
                        </div>

                    <?php endif; ?>	

                </div>
                <!-- End Address -->

                <!-- Email -->
                <?php if(!empty($emails)): ?>

                    <div class="info_data-card col-md-6 col-xxl-3">
                        <div class="wrapper d-flex flex-column justify-content-between">
                            <i class="icon-inbox icon"></i>
                            <h4 class="title">Emails</h4>
                            <div class="content d-flex flex-column">

                                <?php foreach ($emails as $item): ?>

                                        <?php $email = $item['email'] ?>

                                        <a class="link" href="mailto:<?php echo esc_attr($email) ?>"><?php echo esc_html($email) ?></a>

                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                <?php endif; ?>	
                <!-- End Email -->

                <!-- Phone -->
                <?php if(!empty($phone_list)): ?>
                    <div class="info_data-card col-md-6 col-xxl-3">
                        <div class="wrapper d-flex flex-column justify-content-between">
                            <i class="icon-call icon"></i>
                            <h4 class="title">Phone</h4>
                            <div class="content d-flex flex-column">
                                <?php foreach ($phone_list as $item): ?>
                                        <?php $phone = $item['phone'] ?>
                                        <a class="link" href="tel:+<?php echo esc_attr($phone) ?>"><?php echo esc_html($phone) ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>	
            <?php endif; ?>
        </div>

        <!-- GOOGLE MAP -->
        <?php if(!empty($contact_info)): ?>
            <?php 
                $gg_map_ifamre = $contact_info['google_iframe'];
            ?>
            <div class="info_map">
                <?php echo $gg_map_ifamre; ?>
            </div>
        <?php endif; ?>
    </div>
</div>