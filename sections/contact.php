<?php 
    $subtitle = get_sub_field('subtitle');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $contact_form = get_sub_field('contact_form');
    $infomation_title = get_sub_field('contact_infomatin_title');
    $contact_info = get_field('contact_infomation', 'options');
?>
<section class="contact section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container d-flex flex-wrap align-items-end justify-content-lg-between justify-content-xl-start">
        <div class="contact_form col-lg-6">
            <div class="contact_form-header section_header">
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

            <!-- CONTACT FORM 7 -->
            <?php 
                if(!empty($contact_form)) {
                    $form_id = $contact_form->id;
                    $form_title = $contact_form->title;
                    if(!empty($form_id) && !empty($form_title)) {
                        echo do_shortcode( '[contact-form-7 id="'.$form_id.'" title="'.$form_title.'"]' ); 
                    };
                }
            ?>
            <!-- END CONTACT FORM 7 -->
        </div>

        <!-- CONTACT INFO -->
        <div class="contact_info">
            <?php if(!empty($infomation_title)): ?>
                <h3 class="contact_info-header"><?php echo esc_html($infomation_title); ?></h3>
            <?php endif; ?>

            <?php if(!empty($contact_info)): ?>
                <?php 
                    $address = $contact_info['address'];
                    $emails = $contact_info['emails'];
                    $phone_list = $contact_info['phone_list'];
                    $social_media = $contact_info['social_media'];
                ?>
                <ul class="contact-info">
                    <?php if(!empty($address)): ?>
                        <li class="contact-info_group">
                            <span class="name">Address</span>
                            <span class="content"><?php echo esc_html($address) ?></span>
                        </li>
                    <?php endif; ?>		
                    <?php if(!empty($emails)): ?>
                        <li class="contact-info_group">
                            <span class="name">Email</span>
                            <span class="content d-inline-flex flex-column">
                                <?php foreach ($emails as $item): ?>
                                    <?php $email = $item['email'] ?>
                                    <a class="link" href="mailto:<?php echo esc_attr($email) ?>"><?php echo esc_html($email) ?></a>
                                <?php endforeach; ?>
                            </span>
                        </li>
                    <?php endif; ?>		
                    <?php if(!empty($phone_list)): ?>		
                        <li class="contact-info_group">
                            <span class="name">Phone</span>
                            <span class="content d-inline-flex flex-column">
                                <?php foreach ($phone_list as $item): ?>
                                    <?php $phone = $item['phone'] ?>
                                    <a class="link" href="tel:+<?php echo esc_attr($phone) ?>"><?php echo esc_html($phone) ?></a>
                                <?php endforeach; ?>
                            </span>
                        </li>
                    <?php endif; ?>
                </ul>

                <?php if(!empty($social_media)): ?>		
                    <ul class="socials d-flex align-items-center justify-content-start">
                        <?php foreach ($social_media as $item): ?>
                            <?php 
                                $social_name = $item['name'];
                                $social_link = $item['link'];
                            ?>
                            <li class="socials_item">
                                <a class="socials_item-link" href="<?php echo esc_attr($social_link) ?>" target="_blank">
                                    <i class="icon-<?php echo esc_attr($social_name) ?>"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <!-- END CONTACT INFO -->
    </div>
</section>