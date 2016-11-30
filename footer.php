<div class="footer-wrap">
	<?php $option = get_option("tophot_theme_options"); ?>
	<?php if(!empty($option['footer_page'])){ ?>
		<?php $footer_page = $option['footer_page']; ?>
		<?php $footer = new WP_Query("page_id=$footer_page"); while($footer->have_posts()) : $footer->the_post(); ?>
			<div class="container footer-page">
				<?php the_content(); ?>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php } ?>
	<?php if(!empty($option['footer_top']) or !empty($option['footer_bottom'])){ ?>
		<div class="footer">
			<?php if  (!empty($option['footer_top'])) {  ?>
				<?php if  ($option['footer_top'] == '1') {  ?>
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-md-3 footer-logo">
									<?php if(!empty($option['footer_logo'])) { ?>
										<img src="<?php echo esc_url($option['footer_logo']); ?>" srcset="<?php echo esc_url($option['footer_logo']); ?> 1x, <?php echo esc_url($option['footer_logox2']); ?> 2x"  alt="<?php echo the_title(); ?>"  />
									<?php } else { ?>
										<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo-footer.png" alt="<?php echo the_title(); ?>" />
									<?php } ?>
								</div>
								<div class="col-md-4 footer-about">
									<h2><?php echo esc_html__('About Us', 'tophot'); ?></h2>
									<p><?php echo html_entity_decode(get_theme_mod('tophot_footer_about_us', 'Donec eu tellus convallis, vehicula neque sed, mattis elit. Praesent ornare, ligula in efficitur egestas, massa lacus vulputate enim')); ?> </p>
									<p><?php echo esc_html__('Contact us:', 'tophot'); ?> <a class="mail" href="mailto:<?php echo esc_html(get_theme_mod('tophot_footer_about_us_mail', 'info@tophot.com')); ?>" target="_top"><?php echo esc_html(get_theme_mod('tophot_footer_about_us_mail', 'info@tophot.com')); ?></a></p>
								</div>
								<div class="col-md-5 footer-social">
									<h2><?php echo esc_html__('Follow Us', 'tophot'); ?></h2>
									<?php tophot_socials(); ?>
									<p><?php echo html_entity_decode(get_theme_mod('tophot_footer_follow_us', 'Donec eu tellus convallis, vehicula neque sed')); ?></p>
								</div>
							</div>
							<a href="#" class="footer-scroll-to-top-link"></a>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php if  (!empty($option['footer_bottom'])) { ?>
				<?php if  ($option['footer_bottom'] == '1') { ?>
					<div class="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-md-6 footer-copyright">
									<p><?php echo html_entity_decode(get_theme_mod('tophot_copyright_text', 'Copyright 2016. Powered by WordPress Theme. By Madars Bitenieks')); ?></p>
								</div>
									<div class="col-md-6">
										<?php wp_nav_menu( array('theme_location'  => "footer_menu", 'container' =>false, 'fallback_cb' => false, 'menu_class' => 'footer-nav', 'menu_id' => '','echo' => true, 'before' => '','after' => '', 'link_before' => '','link_after' => '', 'depth' => 1));  ?>
									</div>
								</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	<?php } ?>
	</div>
</div>
<a href="#" class="footer-scroll-to-top"></a>

<?php wp_footer(); ?>

</body>
</html>
