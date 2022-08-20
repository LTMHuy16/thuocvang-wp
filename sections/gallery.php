<?php 
    $gallery_list = get_sub_field('gallery_list');
?>
<?php if(!empty($gallery_list)): ?>
<section class="gallery">
    <div class="container-fluid p-0">
        <ul class="gallery_list d-flex flex-wrap justify-content-center">
            <?php foreach($gallery_list as $item): ?>
                <?php 
                    $image_background = $item['image_background'];
                    $subtitle = $item['subtitle'];
                    $title = $item['title'];
                    $label = $item['label'];
                ?>
                <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
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