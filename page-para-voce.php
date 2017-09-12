<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package site
 */

get_header(); ?>

<div class="container">
	<div class="row fadeInUp wow">
		<div class="col-md-12">
			<h1>Para você</h1>
		</div>
	</div>
</div><br><br>
<section id="para-voce">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fadeInUp wow text-left">
				<h3>Quais são os benefícios do Coaching</h3><br>
				<p>
					O <strong>Coaching</strong> é um processo que visa potencializar o nível de resultados positivos nas diversas áreas da vida de um cliente (coachee), grupo ou empresa, por meio de 
ferramentas, metodologias, e técnicas conduzidas por um profissional (Coach).  Ele permite que você acelere o processo de evolução e antecipe resultados. 
				</p><br><br>
				<h3>Coaching não é ​terapia, aconselhamento, psicologia, consultoria ou mentoring</h3><br>
				<p>O <strong>Coaching</strong> é uma abordagem pragmática com foco na realização de um ou mais objetivos específicos. <br>
					O maior benefício do coaching é o aumento dos ​resultados positivos nas diversas áreas da vida do cliente:  <br>
					- Pessoal; <br> 
					- Profissional;  <br>
					- Relacionamentos;  <br>
					- Qualidade de vida. 
				</p>
				<p>
					O <strong>aumento da ​performance</strong> ​gerado pelo processo de coaching eleva o nível de resultados, gerando mais realização, satisfação pessoal e profissional, equilíbrio 
interno e melhoria de qualidade de vida.   
				</p>
			</div>
		</div>
	</div>
</section>
<section id="home-solucoes" class="para-voce">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left fadeInLeft wow">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/coaching1.png"; ?>" />
				<h3>Vida Pessoal ​</h3>
				<p>Produz mudanças profundas e significativas na qualidade de vida, nível de satisfação, realizações e conquistas do cliente.</p>
			</div>
			<div class="col-md-6 text-left fadeInRight wow">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/coaching2.png"; ?>" />
				<h3>Vida Profissional ​</h3>
				<p>Promove evolução na carreira ou negócio do cliente. 
Essa evolução ocorre como consequência natural do 
trabalho do coaching.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6  text-left fadeInLeft wow">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/coaching3.png"; ?>" />
				<h3>Relacionamento</h3>
				<p>Trabalha questões como insegurança, timidez, baixa 
autoestima e diversas outras questões que podem
estar fixadas no seu inconsciente.</p>
			</div>
			<div class="col-md-6 text-left fadeInRight wow">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/coaching4.png"; ?>" />
				<h3>Qualidade de Vida</h3>
				<p>Indicado para quem está em busca de um
aprimoramento pessoal, ampliando horizontes 
e se dispondo a dar novo rumo a sua vida.</p>
			</div>
		</div><br><br>

		<div class="row fadeInUp wow">
			<div class="col-md-8 col-md-offset-2">
				<a class="btn-rosa" href="<?php echo home_url( '/contato' ); ?>">contato</a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/parceiros'); ?>

<?php get_footer(); ?>
