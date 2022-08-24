<?php 
    $subtitle = get_sub_field('sub_title');
    $title = get_sub_field('title');
    $custom_class = get_sub_field('custom_class');
    $bg_color = get_sub_field('background_color');
    $processes = get_sub_field('processes');
?>
<section class="process section <?php if(!empty($bg_color)) {echo esc_attr($bg_color);} ?>  <?php if(!empty($custom_class)) {echo esc_attr($custom_class);} ?>">
    <div class="container d-flex flex-wrap justify-content-between align-items-end">
        <div class="process_header section_header">
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
    
    <!-- PROCESS LIST -->
    <?php if(!empty($processes)): ?>
        <div class="container-fluid process_fluid p-0">
            <div class="container">
                <ul class="process_steps progress-tracker progress-tracker--vertical flex-xl-row">
                    <?php foreach ($processes as $item): ?>
                        <?php 
                            $process_title = $item['process_title'];
                            $process_desctiption = $item['process_desctiption'];
                        ?>
                        <li class="process_steps-step progress-step is-complete">
                            <div class="progress-marker">
                                <span class="progress-marker_spot"></span>
                                <span class="progress-marker_spot--underlay"></span>
                            </div>
                            <div class="process_steps-step_wrapper">
                                <?php if(!empty($process_title)): ?>
                                    <h4 class="title"><?php echo esc_html($process_title) ?></h4>
                                <?php endif; ?>
                                <?php if(!empty($process_desctiption)): ?>
                                    <p class="description"><?php echo esc_html($process_desctiption) ?></p>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <!-- END PROCESS LIST -->
</section>