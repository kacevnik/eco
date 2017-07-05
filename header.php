<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('/'); ?></title>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<section id="top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_phone"><i class="fa fa-phone"></i>
						<?php if(defined('FW') && fw_get_db_settings_option('kdv_header_phone')){echo  fw_get_db_settings_option('kdv_header_phone'); }
						?>
						</div>
					</div>
					<div class="col-md-6">
						<?php
							$args = array('theme_location' => 'top_social', 'container'=> 'nav', 'menu_class' => 'social-menu', 'menu_id' => 'social-nav');
							wp_nav_menu($args);
							//fw_get_db_settings_option('kdv_gallery_background')["url"]
						?>
					</div>
				</div>
			</div>
		</section>
		<section id="main_top">
			<div class="container">
				<div class="row">
						<?php
							$args = array('theme_location' => 'top', 'container'=> 'nav', 'menu_class' => 'top_main_menu', 'menu_id' => 'top_main_menu');
							wp_nav_menu($args);
						?>
				</div>
			</div>
		</section>
	</header>