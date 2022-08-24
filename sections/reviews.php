<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $review_list = get_sub_field('review_list');
?>

<section class="reviews section <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container">
        <div class="reviews_header section_header">
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
        
        <?php if(!empty($review_list)): ?>
            <div class="wrapper--slider">
                <div class="reviews_slider owl-carousel">
                    <?php foreach ($review_list as $item): ?>
                        <?php 
                            $star_number = $item['star_number'];
                            $review_content = $item['review_content'];
                            $client_name = $item['client_name'];
                            $client_job = $item['client_job'];
                            $client_portraits = $item['client_portraits'];

                            $client_portraits['alt'] == "" ? $client_portraits["alt"] = "ThuocVang" : ""; 
                        ?>
                        <div class="reviews_slider-slide_wrapper d-flex flex-column justify-content-between align-items-start">
                            <?php if(!empty($star_number)): ?>
                                <ul class="stars d-flex align-items-center">
                                    <?php  
                                        for ($i = 0; $i <= $star_number; $i++) { 
                                            echo '<li class="stars_star"><i class="icon-star"></i></li>
                                            ';
                                        }
                                    ?>
                                    
                                </ul>
                            <?php endif; ?>

                            <?php if(!empty($review_content)): ?>
                                <p class="text"><?php echo esc_html($review_content) ?></p>
                            <?php endif; ?>

                            <div class="author d-flex align-items-center">
                                <?php if(!empty($client_portraits)): ?>
                                    <picture>
                                        <img class="avatar lazy" src="<?php echo esc_url($client_portraits['url']) ?>" alt="<?php echo esc_attr($client_portraits['alt']) ?>" />
                                    </picture>
                                <?php endif; ?>
                                <div class="wrapper">
                                    <?php if(!empty($client_name)): ?>
                                        <span class="name"><?php echo esc_html($client_name) ?></span>
                                    <?php endif; ?>
                                    <?php if(!empty($client_job)): ?>
                                        <span class="profession"><?php echo esc_html($client_job) ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>