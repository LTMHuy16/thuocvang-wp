<?php 
	$footer_logo_content = get_field('footer_logo_content', 'options');
	$footer_company = get_field('footer_company', 'options');
	$footer_subcribe = get_field('footer_subcribe', 'options');
	$contact_infomation = get_field('contact_infomation', 'options');
	$footer_right_text = get_field('footer_right_text', 'options');
	$subcribe_form = get_field('subcribe_form', 'options');
?>

<footer class="footer primary-bg">
    <div class="container">
        <div class="footer_main d-flex flex-wrap justify-content-md-between col-12">

			<!-- LOGO CONTTENT -->
            <div class="footer_main-block col-sm-6 col-xl-2">
                <div>
                    <div class="textwidget custom-html-widget d-flex flex-column">

						<?php if(!empty($footer_logo_content)): ?>

							<?php 
								$image = $footer_logo_content['image'];
								$image['alt'] == "" ? $image["alt"] = "ThuocVang" : ""; 
								$normal_text = $footer_logo_content['normal_text'];
								$highlighted_text = $footer_logo_content['hightlighted_text'];
								$link = $footer_logo_content['link'];
								$footer_desciption = $footer_logo_content['footer_desciption'];
							?>

							<?php if(!empty($link)): ?>
								
								<a class="brand d-inline-flex align-items-center justify-content-center justify-content-sm-start"
									href="<?php echo esc_url($link); ?>">

									<?php if(!empty($image)): ?>

										<picture>
											<img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
										</picture>

									<?php endif; ?>

									<?php echo esc_html($normal_text) ?>

									<span class="highlight"><?php echo esc_html($highlighted_text) ?></span>
								</a>
								
							<?php endif; ?>
						<?php endif; ?>

						<?php if(!empty($footer_desciption)): ?>
							<p class="footer_main-block_subtitle footer_main-block_subtitle--brand">
								<?php echo esc_html($footer_desciption) ?>
							</p>
						<?php endif; ?>		
	
                    </div>
                </div>
            </div>

			<!-- CONTACT -->
			<?php if(!empty($contact_infomation)): ?>

				<?php 
					$address = $contact_infomation['address'];
					$phone_list = $contact_infomation['phone_list'];
				?>

				<div class="footer_main-block col-12 col-sm-6 col-xl-3">
					<div class="footer__contacts">
						<div class="textwidget custom-html-widget">
							<h4 class="footer_main-block_title">Contacts</h4>

							<?php if(!empty($phone_list)): ?>
								<div class="group-wrapper d-flex justify-content-center justify-content-sm-start">
									<i class="icon-call icon"></i>
									<div class="group d-flex flex-column">

										<?php foreach ($phone_list as $phone): ?>

											<?php $phone_number = $phone['phone'] ?>

											<a href="tel:+<?php echo esc_attr($phone_number) ?>"><?php echo esc_html($phone_number) ?></a>

										<?php endforeach; ?>

									</div>
								</div>
							<?php endif; ?>

							<?php if(!empty($address)): ?>
								<div class="group-wrapper d-flex justify-content-center justify-content-sm-start">
									<i class="icon-location icon"></i>
									<div class="group">
										<span><?php echo esc_html($address) ?></span>
									</div>
								</div>
							<?php endif; ?>			
						</div>
					</div>
				</div>
			<?php endif; ?>			

			<!-- LINKS -->
			<?php if(!empty($footer_company)): ?>
				<div class="footer_main-block footer__contact col-12 col-sm-6 col-xl-2">
					<div>
						<div class="textwidget custom-html-widget">
							<h4 class="footer_main-block_title">Company</h4>
							<ul class="footer_main-block_nav">

								<?php foreach ($footer_company as $item): ?>

									<?php 
										$item_text = $item['text'];
										$item_link = $item['link'];
									?>

									<?php if(!empty($item_text) && !empty($item_link)): ?>
										<li class="list-item">

											<a class="link d-inline-flex align-items-center"
												href="<?php echo esc_url($item_link) ?>">

												<i class="icon-chevron_right icon"></i>

												<?php echo esc_html($item_text) ?>
											</a>
										</li>
									<?php endif; ?>	

								<?php endforeach; ?>

							</ul>
						</div>
					</div>
				</div>
			<?php endif; ?>			

			<!-- SUBCRIBE -->
			<?php if(!empty($footer_subcribe)): ?>

				<?php 
					$subcribe_title = $footer_subcribe['title'];
					$subcribe_text = $footer_subcribe['text'];
				?>

				<div class="footer_main-block col-12 col-sm-6 col-xl-3">
					<div>
						<div class="textwidget custom-html-widget">
							
							<?php if(!empty($subcribe_title)): ?>
								<h4 class="footer_main-block_title"><?php echo esc_html($subcribe_title) ?></h4>
							<?php endif; ?>	
							
							<?php if(!empty($subcribe_text)): ?>
								<p class="footer_main-block_subtitle footer_main-block_subtitle--newsletter"><?php echo esc_html($subcribe_text) ?></p>
							<?php endif; ?>	
							
							
							<!-- FORM CONTACT FORM 7 -->
							<div class="footer_main-block_form col-12 col-md-auto">
								<?php 

									if(!empty($subcribe_form)) {

										$form_id = $subcribe_form->id;
										$form_title = $subcribe_form->title;

										if(!empty($form_id) && !empty($form_title)) {
											echo do_shortcode( '[contact-form-7 id="'.$form_id.'" title="'.$form_title.'"]' ); 
										};
									}

								?>
							</div>
							<!-- END FORM CONTACT FORM 7 -->
						</div>
					</div>
				</div>
			<?php endif; ?>		
	
        </div>

		<!-- RIGHT TEXT + SOCIAL -->
		<div class="footer_secondary col-12 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
			
			<?php if(!empty($footer_right_text)): ?>
				<p class="footer_secondary-copyright">
					<span> <span><?php echo esc_html($footer_right_text) ?></span></span>
				</p>
			<?php endif; ?>	

			<div>
				<?php if(!empty($contact_infomation)): ?>

					<?php 
						$social_media = $contact_infomation['social_media'];
					?>

					<div class="textwidget custom-html-widget">

						<?php if(!empty($social_media)): ?>

							<ul class="socials d-flex align-items-center justify-content-start socials--alt">

								<?php foreach ($social_media as $social): ?>

									<?php 
										$social_text = $social['name'];
										$social_link = $social['link'];
									?>

									<?php if(!empty($social_text) && !empty($social_link)): ?>

										<li class="socials_item">
											<a class="socials_item-link" href="<?php echo esc_url($social_link) ?>" target="_blank">
												<i class="icon-<?php echo esc_attr($social_text) ?>"></i>
											</a>
										</li>

									<?php endif; ?>	

								<?php endforeach; ?>

							</ul>

						<?php endif; ?>	

					</div>
				<?php endif; ?>	
			</div>
		</div>

    </div>
</footer>

<!-- SCROLL TO TOP -->
<a href="#" id="scrollToTop" type="button">
	<i class="icon icon-arrow_right"></i>
</a>



<?php wp_footer(); ?>

</body>

</html>