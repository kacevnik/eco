<?php get_header(); ?>
<section>
	<img class="aligncenter size-full wp-image-31" src="http://testing.joomlamix.ru/wp-content/uploads/2017/06/bus2.jpg" alt="" width="1984" height="1116" />
	<div class="container">
		<div class="row">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
				<h1><?php the_title(); // заголовок ?></h1>
				<?php the_content(); // контент ?>
			</article>
		<?php endwhile; // конец цикла ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>