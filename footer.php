	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<?php if(defined('FW') && fw_get_db_settings_option('kdv_footer_logo')){ ?>
				<a href="<?php echo fw_get_db_settings_option('kdv_footer_link_for_logo'); ?>" target="blank"><img src="<?php if(is_ssl()){echo 'https:';}else{echo 'http:';} echo fw_get_db_settings_option('kdv_footer_logo')['url']; ?>" alt=""></a>
				<?php }?>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
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