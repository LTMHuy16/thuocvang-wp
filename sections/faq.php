<?php 
    $heading_position = get_sub_field('heading_position');
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $desription = get_sub_field('desription');
    $custom_class = get_sub_field('custom_class');
    $button = get_sub_field('button');
    $faq_list = get_sub_field('faq_list');
?>
<section class="faq section">
    <div class="container d-xl-flex flex-nowrap justify-content-start align-items-start justify-content-xl-between <?php if($heading_position) {echo esc_attr("flex-lg-row-reverse");} ?>">
        <div class="faq_header section_header col-xl-4">
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

            <?php if(!empty($desription)): ?>
                <p class="text"><?php echo esc_html($desription); ?></p>
            <?php endif; ?>

            <?php if(!empty($button)): ?>
                <div class="wrapper">
                    <a class="btn" href="">Contact Us</a>
                </div>
            <?php endif; ?>
        </div>

        <div class="accordion faq_accordion col-xl-7">
            <?php if(!empty($faq_list)): ?>
                <?php $id = 0; ?>
                <?php foreach ($faq_list as $item): ?>
                    <?php 
                        $question = $item['question'];
                        $answer = $item['answer'];
                        $id += 1;
                    ?>
                    <?php if(!empty($question) && !empty($answer)): ?>
                        <div class="faq_accordion accordion-wrapper">
                            <button class="faq_accordion-trigger accordion-trigger collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr($id); ?>" aria-expanded="false"
                                aria-controls="collapse<?php echo esc_attr($id); ?>">
                                <span class="question"><?php echo esc_html($question); ?></span>
                                <span class="faq_accordion-trigger_icon accordion-trigger_icon icon-plus"></span>
                            </button>
                            <div id="collapse<?php echo esc_attr($question); ?>" class="faq_accordion-content accordion-content collapse" style="">
                                <p class="text"><?php echo esc_html($answer); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>