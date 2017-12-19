<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>

	<section id="footer">
		<div class="container">
			<div class="row fadeInUp wow">
				<div class="col-md-8 col-md-offset-2">
					<h2>Eu Quero Recomeçar</h2>
					<h4>Potencialize o nível de resultados positivos nas diversas áreas da sua vida</h4>
				</div>
			</div><!-- .row -->
			<div class="row fadeInUp wow"><br>
				<div class="col-md-8 col-md-offset-2">
					<a class="btn-bot" href="<?php echo esc_url( home_url( '/coaching' ) ); ?>">Saiba um pouco mais sobre Coaching</a>
				</div>
			</div>
			<div class="row fadeInUp wow">
				<div class="col-md-8 col-md-offset-2">
					<ul class="menu-footer clearfix">
						<li><a href="<?php echo home_url( '/' ); ?>">Início</a></li
						><li><a href="<?php echo home_url( '/sobre-mim' ); ?>">Sobre mim</a></li
						><li><a href="<?php echo home_url( '/para-voce' ); ?>">Para você</a></li
						><li><a href="<?php echo home_url( '/coaching' ); ?>">Coaching</a></li
						><li><a target="_blank" href="<?php echo home_url( '/blog' ); ?>">Blog</a></li
						><li><a href="<?php echo home_url( '/contato' ); ?>">Contato</a></li>
					</ul>
				</div>
			</div>
			<div class="row fadeInUp wow">
				<div class="col-md-3 col-md-offset-5">
					<ul class="redes_sociais_header">
			              <li class="youtube"><a target="_blank" href="https://www.facebook.com/euquerorecomecar/"></a></li>
			              <li class="instagram"><a target="_blank" href="#"></a></li>
			              <li class="twitter"><a target="_blank" href="https://www.instagram.com/coachregianekiiro"></a></li>
			              <li class="facebook"><a target="_blank" href="#"></a></li>
			              <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/regiane-kiiro-7940265b/"></a></li>
					</ul>
				</div>
			</div>
		</div><!-- .container -->
	</section><!-- #footer -->
	<section id="copyright">
		<div class="container">
			<div class="row fadeInUp wow">
				<div class="col-md-11 text-center copy-text">
					&copy; Copyright <?php echo date('Y') ?> - Todos os direitos reservados - Eu Quero Recomeçar
				</div>
				<div class="col-md-1 copy-text text-right">
					<a target="_blank" href="http://seimidigital.com.br/">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
					</a>
				</div>				
			</div>
		</div>
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
