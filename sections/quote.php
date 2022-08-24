<?php 
    $subtitle = get_sub_field('subtitle');
    $quote_content = get_sub_field('quote_content');
    $author_name = get_sub_field('author_name');
    $bg_color = get_sub_field('background_color');
    $custom_class = get_sub_field('custom_class');
    $image_decoration = get_sub_field('image_decoration');
    $animation = get_sub_field('animation');

    $image_decoration['alt'] == "" ? $image_decoration["alt"] = "ThuocVang" : ""; 
?>
<section class="quote section <?php if(!empty($bg_color)) {echo esc_attr($bg_color);} ?> <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container">
        <div class="quote_header section_header">
            <div class="quote_header-icon <?php if(!empty($animation)) {echo esc_attr("quote_header-icon--animated");} ?>">
                <picture>
                    <img src="<?php echo esc_url($image_decoration['url']) ?>" alt="<?php echo esc_attr($image_decoration['alt']) ?>">
                </picture>
            </div>

            <?php if(!empty($subtitle)): ?>
                <span class="subtitle"><?php echo esc_html($subtitle); ?></span>
            <?php endif; ?>
            <?php if(!empty($quote_content)): ?>
                <h2 class="quote__content title"><?php echo esc_html($quote_content); ?></h2>
            <?php endif; ?>

            <?php if(!empty($author_name)): ?>
                <span class="author"><?php echo esc_html($author_name); ?></span>
            <?php endif; ?>
        </div>
    </div>
</section>