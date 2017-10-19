<?php
/**
 * Template part for displaying single posts.
 *
 * @package site
 */

?>

<article id="post-<?php the_ID(); ?>" class="text-left article-single row">
	<header class="entry-header col-md-6">
		<?php if ( has_post_thumbnail() && !is_search() ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
				<?php the_post_thumbnail('', array(
					'class' => "img-responsive",
				)); ?>
			</a>
		<?php } ?>
	</header><!-- .entry-header -->

	<div class="entry-content col-md-6">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'site' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->

