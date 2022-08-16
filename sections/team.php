<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $button = get_sub_field('button');
    $video_bakground = get_sub_field('video_bakground');
    $video_setting = get_sub_field('video_setting');
    $description = get_sub_field('description');
    $main_list_text = get_sub_field('main_list_text');
    $team_quote_list = get_sub_field('team_quote_list');
?>
<section class="team primary-bg section">
    <div class="container">
        <!-- HEADER -->
        <div class="wrapper d-flex flex-wrap align-items-end justify-content-center justify-content-sm-between">
            <div class="team_header section_header">
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
            <!-- BUTTON -->
            <?php if(!empty($button)): ?>
                <?php 
                    $btn_text = $button['text'];
                    $btn_link = $button['link'];
                ?>
                <?php if(!empty($btn_text) && !empty($btn_link)): ?>
                    <a class="btn team_btn" href="<?php echo esc_url($btn_link); ?>"><?php echo esc_html($btn_text); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <!-- END HEADER -->

        <div class="row g-0">
            <!-- VIDEO LINK -->
            <?php if(!empty($video_bakground)): ?>
                <div class="team_video col-12">
                    <picture>
                        <img class="team_video-thumb lazy" src="<?php echo esc_url($video_bakground['url']); ?>" alt="<?php echo esc_url($video_bakground['alt']); ?>" />
                    </picture>
                    <?php if(!empty($video_setting)): ?>
                        <?php 
                            $video_link = $video_setting['video_link'];
                            $open_in_new_tag = $video_setting['open_in_new_tag'];
                        ?>
                        <a class="btn-play d-inline-flex align-items-center justify-content-center"
                            href="<?php echo esc_url($video_link); ?>">
                            <i class="icon-play"></i>
                            <?php 
                                if ($open_in_new_tag) {
                                    echo "target='_blank'";
                                }
                            ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <!-- VIDEO LINK -->
            
            <!-- SECTION TEXT -->
            <div class="team_main col-12 col-lg-6">
                <?php if(!empty($description)): ?>
                    <p class="team_main-text"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
                <?php if(!empty($main_list_text)): ?>
                <ul class="team_main-list col-12">
                    <?php foreach ($main_list_text as $item): ?>
                        <?php $text = $item['text']; ?>
                        <li class="team_main-list_item d-flex align-items-center">
                            <i class="icon-check icon"></i>
                            <?php echo esc_html($text); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <!-- END SECTION TEXT -->

            <!-- MEMBER'S QUOTE -->
            <?php if(!empty($team_quote_list)): ?>
                <div class="team_quote col-12 col-lg-6">
                    <?php foreach ($team_quote_list as $item): ?>
                        <?php 
                            $quote_content = $item['quote_content'];
                            $member_portrait = $item['member_portrait'];
                            $member_name = $item['member_name'];
                            $member_position = $item['member_position'];
                        ?>
                        <div class="team_quote-wrapper">
                            <?php if(!empty($quote_content)): ?>
                                <q class="team_quote-quote">
                                    <?php echo esc_html($text); ?>
                                </q>
                            <?php endif; ?>
                            <div class="team_quote-author d-flex flex-wrap flex-sm-nowrap align-items-center justify-content-end justify-content-sm-between">
                                <div class="wrapper d-flex align-items-center">
                                    <?php if(!empty($member_portrait)): ?>
                                        <picture>
                                            <img class="team_quote-author_avatar lazy" src="<?php echo esc_url($member_portrait['url']); ?>" alt="<?php echo esc_attr($member_portrait['alt']); ?>" />
                                        </picture>
                                    <?php endif; ?>
                                    <div class="wrapper wrapper--info">
                                        <?php if(!empty($member_name)): ?>
                                            <span class="team_quote-author_name"><?php echo esc_html($member_name); ?></span>
                                        <?php endif; ?>
                                        <?php if(!empty($member_position)): ?>
                                            <span class="team_quote-author_profession"><?php echo esc_html($member_position); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- Quote Icon -->
                                <svg class="quote-icon" width="83" height="73" viewBox="0 0 83 73" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M47 0V36.5H70.9999C70.9999 49.9171 60.2333 60.8333 47 60.8333V73C66.8516 73 83 56.6273 83 36.5V0L47 0Z"
                                        fill="#FFC631"></path>
                                    <path
                                        d="M0 36.5H23.9999C23.9999 49.9171 13.2333 60.8333 0 60.8333V73C19.8516 73 36 56.6273 36 36.5V0H0V36.5Z"
                                        fill="#FFC631"></path>
                                </svg>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <!-- END MEMBER'S QUOTE -->
        </div>
    </div>
</section>