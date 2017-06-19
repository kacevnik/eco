	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></div>
				<div class="col-md-4"><h3>About GreenTec Auto</h3>
GreenTec Auto specializes in rebuilding high voltage (HV) Batteries for most hybrid cars. We use good, tested cells from newer battery packs, making sure our re-manufactured high voltage batteries work properly and efficiently. We know your hybrid vehicle FROM END TO END.</div>
				<div class="col-md-4">3282 Luyung Drive<br>
									Rancho Cordova, CA 95742<br>
									800-773-6614
									</div>
			</div>
		</div>
	</footer>
	<section class="end">
		<div class="container">
			<div class="row">
				<div class="col-md-6">© <?php echo date("Y"); ?> - <a href = "<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></div>
				<div class="col-md-6">
					<?php
							$args = array('theme_location' => 'top_social_bottom', 'container'=> 'nav', 'menu_class' => 'social-menu', 'menu_id' => 'social-nav-bottom');
							wp_nav_menu($args);
						?>
				</div>
			</div>
		</div>
	</section>
	<span class="inter_img_arrow_back"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
<?php wp_footer(); ?>
</body>
</html>