<?php 
    $gallery_list = get_sub_field('gallery_list');
    $is_in_container = get_sub_field('gallery_in_container');
?>
<?php if(!empty($gallery_list)): ?>
<section class="gallery <?php if($is_in_container) {echo esc_attr('gallery--my');} ?>">
    <div class="container<?php if($is_in_container == 0) {echo esc_attr('-fluid');} ?> p-0">
        <ul class="gallery_list <?php if($is_in_container) {echo esc_attr('gallery__inner');} ?> d-flex flex-wrap justify-content-center">
            <?php foreach($gallery_list as $item): ?>
                <?php 
                    $image_background = $item['image_background'];
                    $subtitle = $item['subtitle'];
                    $title = $item['title'];
                    $label = $item['label'];

                    $image_background['alt'] == "" ? $image_background["alt"] = "ThuocVang" : ""; 
                ?>
                <li class="gallery_list-item <?php if($is_in_container) {echo esc_attr('gallery_list-item--pad');} ?> col-12 col-sm-6 <?php if($is_in_container == 0) {echo esc_attr('col-xl-3');} else {echo esc_attr("col-xl-4");} ?> ">
                    <?php if(!empty($image_background)): ?>
                        <a href="<?php echo esc_url($image_background['url']) ?>" data-caption="<?php echo esc_attr($image_background['alt']) ?>"  class="gallery_list-item_trigger ">
                            
                            <div class="img-wrapper">

                                <picture>
                                    <img class="lazy" src="<?php echo esc_url($image_background['url']); ?>" alt="<?php echo esc_url($image_background['alt']); ?>" />
                                </picture>

                            </div>

                            <div class="text-wrapper d-flex flex-column justify-content-end">
                                <?php if(!empty($subtitle)): ?>
                                    <span class="subtitle"><?php echo esc_html($subtitle); ?></span>
                                <?php endif; ?>
                                <?php if(!empty($title)): ?>
                                    <h4 class="title"><?php echo esc_html($title); ?></h4>
                                <?php endif; ?>
                                <?php if(!empty($label)): ?>
                                    <span class="label"><?php echo esc_html($label); ?></span>
                                <?php endif; ?>
                            </div>

                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php endif; ?>