<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset') ?> />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- HEADER -->
    <?php 
		$header_logo = get_field('header_logo', 'options');
		$header_logo_link = get_field('header_logo_link', 'options');
    ?>
    <header class="header primary-bg" data-page="home">
        <div class="header_navbar">
            <div class="container d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                <?php if(!empty($header_logo) && !empty($header_logo_link)): ?>
                <?php 
                    $image = $header_logo['image'];
                    $normal_text = $header_logo['normal_text'];
                    $highlighted_text = $header_logo['highlighted_text'];
				?>
                <a class="brand d-inline-flex align-items-center justify-content-center"
                    href="<?php echo esc_url($header_logo_link['url']); ?>">
                    <?php if(!empty($image)): ?>
						<picture>
							<img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_url($image['alt']) ?>">
						</picture>
                    <?php endif; ?>
                    <?php if(!empty($normal_text)): ?>
						<?php echo esc_html($normal_text) ?>
						<span class="highlight"><?php echo esc_html($highlighted_text) ?></span>
                    <?php endif; ?>
                </a>
                <?php endif; ?>
                <nav class="header_navbar-nav">
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => '',
							'menu_class' => 'header_navbar-nav_list',
							'item_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'add_li_class' => 'list-item'
						));
					?>
				<?php endif; ?>
                </nav>
                <button class="hamburger">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM64 256C64 238.3 78.33 224 96 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H96C78.33 288 64 273.7 64 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/></svg>
                </button>
            </div>
        </div>
    </header>
    <!-- END HEADER -->