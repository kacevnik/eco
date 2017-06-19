<?php get_header(); ?>
<section class="main_slider">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
		<?php the_content(); // контент ?>
	</article>
<?php endwhile; // конец цикла ?>
</section>
<section class="front_page">
	<div class="container">
		<div class="row">
			<h1>HYBRID BATTERIES</h1>
			<div class="main_text">
			<div class="inter_img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/d1.jpg" alt="" style="margin: 0 0 30px 0;">
				<span class="inter_img_arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
			</div>
			<div class="inter_img_hide">
				<img src="<?php echo get_template_directory_uri(); ?>/img/d2.jpg" alt="" style="margin: 0 0 30px 0;">
				<p style="margin: 0 0 30px 0;">GreenTec Auto specializes in rebuilding high voltage (HV) Batteries for most hybrid cars. We offer Toyota Prius replacement hybrid batteries for all generations and models. Honda IMA batteries for Civic, Accord and Insight, Toyota Camry Hybrid, Nissan, Kia, Lexus – we’ve got them all.  We use good, tested cells from newer battery packs, making sure our re-manufactured high voltage batteries work properly and efficiently. From an oil change to a new Hybrid Battery replacement, trans-axle or full rebuild, you can trust our trained hybrid car repair professionals to take care of it for you. We look forward to adding you to our long list of loyal, satisfied customers. Please take a minute and see what some of them are saying about us online.  We have a personal approach to customer service and we guarantee our work.</p>
				<p style="margin: 0 0 30px 0;">GreenTec Auto specializes in rebuilding high voltage (HV) Batteries for most hybrid cars. We offer Toyota Prius replacement hybrid batteries for all generations and models. Honda IMA batteries for Civic, Accord and Insight, Toyota Camry Hybrid, Nissan, Kia, Lexus – we’ve got them all.  We use good, tested cells from newer battery packs, making sure our re-manufactured high voltage batteries work properly and efficiently. From an oil change to a new Hybrid Battery replacement, trans-axle or full rebuild, you can trust our trained hybrid car repair professionals to take care of it for you. We look forward to adding you to our long list of loyal, satisfied customers. Please take a minute and see what some of them are saying about us online.  We have a personal approach to customer service and we guarantee our work.</p>
				<p style="margin: 0 0 30px 0;">GreenTec Auto specializes in rebuilding high voltage (HV) Batteries for most hybrid cars. We offer Toyota Prius replacement hybrid batteries for all generations and models. Honda IMA batteries for Civic, Accord and Insight, Toyota Camry Hybrid, Nissan, Kia, Lexus – we’ve got them all.  We use good, tested cells from newer battery packs, making sure our re-manufactured high voltage batteries work properly and efficiently. From an oil change to a new Hybrid Battery replacement, trans-axle or full rebuild, you can trust our trained hybrid car repair professionals to take care of it for you. We look forward to adding you to our long list of loyal, satisfied customers. Please take a minute and see what some of them are saying about us online.  We have a personal approach to customer service and we guarantee our work.</p>
				<p style="margin: 0 0 30px 0;">GreenTec Auto specializes in rebuilding high voltage (HV) Batteries for most hybrid cars. We offer Toyota Prius replacement hybrid batteries for all generations and models. Honda IMA batteries for Civic, Accord and Insight, Toyota Camry Hybrid, Nissan, Kia, Lexus – we’ve got them all.  We use good, tested cells from newer battery packs, making sure our re-manufactured high voltage batteries work properly and efficiently. From an oil change to a new Hybrid Battery replacement, trans-axle or full rebuild, you can trust our trained hybrid car repair professionals to take care of it for you. We look forward to adding you to our long list of loyal, satisfied customers. Please take a minute and see what some of them are saying about us online.  We have a personal approach to customer service and we guarantee our work.</p>
			</div>
			<div class="inter_img">			
			<img src="<?php echo get_template_directory_uri(); ?>/img/d2.jpg" alt="" style="margin: 0 0 30px 0;">
				<p style="margin: 0 0 30px 0;">GreenTec Auto specializes in rebuilding high voltage (HV) Batteries for most hybrid cars. We offer Toyota Prius replacement hybrid batteries for all generations and models. Honda IMA batteries for Civic, Accord and Insight, Toyota Camry Hybrid, Nissan, Kia, Lexus – we’ve got them all.  We use good, tested cells from newer battery packs, making sure our re-manufactured high voltage batteries work properly and efficiently. From an oil change to a new Hybrid Battery replacement, trans-axle or full rebuild, you can trust our trained hybrid car repair professionals to take care of it for you. We look forward to adding you to our long list of loyal, satisfied customers. Please take a minute and see what some of them are saying about us online.  We have a personal approach to customer service and we guarantee our work.</p>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="phone_back" data-stellar-background-ratio="0.5" style="background: url('http://testing.joomlamix.ru/wp-content/uploads/2017/06/bus2.jpg');">
	<div class="container">
		<div class="row">
			<h1>Send us a message</h1>
			<form>
      			<div class="col-md-4">
					<input type="text" placeholder="Name" name="name">
				</div>
				<div class="col-md-4">
					<input type="text" placeholder="Phone" name="phone">
				</div>
				<div class="col-md-4">
					<input type="submit" value="Send">
				</div>
			</form>
		</div>
	</div>
</section>
<?php get_footer(); ?>