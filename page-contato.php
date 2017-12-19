<?php
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Contato</h1>
		</div>
	</div>
</div><br><br>

<section id="contato">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h3>Entre em contato comigo, responderei o mais breve</h3><br>
				<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; // End of the loop. ?>
			</div>
			<div class="col-md-5 col-md-offset-1 text-left">
				<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/whats.jpg"; ?>" />
			    <span>11 94245-7275</span><br><br>
			    <img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/email2.jpg"; ?>" />
			    <span>regiane@euquerorecomecar.com.br</span>
			</div>
		</div>
	</div>
</section> 

<?php get_template_part( 'template-parts/parceiros' ); ?>

<?php get_footer(); ?>
