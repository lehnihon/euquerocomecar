<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<section id="banner">
	<div class="container">
		<div class="row">
			<?php
			echo do_shortcode("[metaslider id=28]"); 
			?>
		</div>
	</div>
</section>

<section id="home-solucoes">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fadeInUp wow">
				<h1>Entenda o que é o Coaching e quais <br> são os seus benefícios</h1>
				<h4>O Coaching é uma abordagem pragmática com foco na realização de um ou mais objetivos específicos.<br>
Coaching não é ​terapia, aconselhamento, psicologia, consultoria ou mentoring. </h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-left fadeInLeft wow">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/coaching1.jpg"; ?>" />
				<h3>Vida Pessoal ​</h3>
				<p>Produz mudanças profundas e significativas na qualidade de vida, nível de satisfação, realizações e conquistas do cliente.</p>
			</div>
			<div class="col-md-6 text-left fadeInRight wow">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/coaching2.jpg"; ?>" />
				<h3>Vida Profissional ​</h3>
				<p>Promove evolução na carreira ou negócio do cliente. 
Essa evolução ocorre como consequência natural do 
trabalho do coaching.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6  text-left fadeInLeft wow">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/coaching3.jpg"; ?>" />
				<h3>Relacionamento</h3>
				<p>Trabalha questões como insegurança, timidez, baixa 
autoestima e diversas outras questões que podem
estar fixadas no seu inconsciente.</p>
			</div>
			<div class="col-md-6 text-left fadeInRight wow">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/coaching4.jpg"; ?>" />
				<h3>Qualidade de Vida</h3>
				<p>Indicado para quem está em busca de um
aprimoramento pessoal, ampliando horizontes 
e se dispondo a dar novo rumo a sua vida.</p>
			</div>
		</div>
		<div class="row fadeInUp wow">
			<div class="col-md-8 col-md-offset-2">
				<p>O Coaching é um processo que visa potencializar o nível de resultados positivos nas diversas áreas da 
vida de um cliente (coachee), grupo ou empresa, por meio de ferramentas, metodologias, e técnicas 
conduzidas por um profissional (Coach), ele permite que você acelere o processo de evolução e 
antecipe resultados.   </p>
			</div>
		</div>
		<div class="row fadeInUp wow">
			<div class="col-md-8 col-md-offset-2">
				<a class="btn-rosa" href="<?php echo home_url( '/coaching' ); ?>">saiba mais</a>
			</div>
		</div>
	</div>
</section>

<section id="home-sobre" class="fadeIn wow">
	<div class="container">
		<div class="row fadeInUp wow text-left">
			<div class="col-md-6 col-md-offset-6">
				<h2>Regiane Kiiro <img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/titulo-detalhe.jpg"; ?>" /></h2>
			</div>
		</div>
		<div class="row text-left">
			<div class="col-md-6 col-md-offset-6">
				<p class="fadeInUp wow ">Oi! Sou Regiane Kiiro, mãe da Bruna de 21 anos e do Thiago de 5 anos. 
	Sou Paulistana do bairro da Saúde e cresci na Zona Leste de São Paulo. 
	Me formei em Administração de Empresas com ênfase na área 
	hospitalar, porém, não me sentia realizada e plena em minha profissão 
	e em busca de melhor qualidade de vida decidi mudar para Londres na 
	Inglaterra, onde atuei durante  8 anos anos no mercado europeu.</p>
				<p class="fadeInUp wow ">Neste período ocorreu o meu primeiro contato com o coaching, durante 
	um episódio de depressão ocasionado por conta de um divórcio 
	turbulento. Em busca de ajuda para mudar o meu nível de insatisfação 
	com a fase que vivia, iniciei as sessões de coaching e de cara me 
	apaixonei! </p>
				<p class="fadeInUp wow ">O Coaching me proporcionou autoconhecimento, desenvolvimento 
	pessoal e resultados maiores que o esperado em tempo recorde. 
	E mais, me ajudou a descobrir o meu propósito de vida, a minha 
	missão. Ajudar pessoas! Cooperar com o maior número delas para 
	que assim como eu, conquistem seus objetivos, seus sonhos, e tenham 
	a real noção de seus valores e capacidades.</p>
				<p class="fadeInUp wow ">Hoje atuo como Coach e Analista Comportamental DISC, com 
	Certificação Internacional pela SLAC; para somar a minha atuação como 
	Coach, estou pós graduando em Terapia Familiar Sistêmica pelo CEFATEF. 
	Enfim posso dizer, sem sombra de dúvidas, que sou apaixonada pelo que 
	faço e me sinto completamente realizada com a minha profissão. </p>
			</div>
		</div>
	</div>
</section>

<section id="home-depoimento">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2  fadeInUp wow">
				<h2>Depoimentos de nossos clientes</h2><br>
				<h4>Confira os depoimentos de quem já realizaram suas reformas com a gente!</h4>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-3 col-md-offset-1 text-center">
				<div class="dep-conteudo  fadeInUp wow">
					“Coaching não é ​terapia, 
aconselhamento, 
psicologia, consultoria 
ou mentoring. ”<br>
					<div class="dep-foto imga"></div>
				</div>
				<h4>@maria</h4>
			</div>
			<div class="col-md-4 text-center">
				<div class="dep-conteudo  fadeInUp wow" data-wow-delay="0.25s">
					“Coaching não é ​terapia, 
aconselhamento, 
psicologia, consultoria 
ou mentoring. ”<br>
					<div class="dep-foto imgb"></div>
				</div>
				<h4>@maria</h4>
			</div>
			<div class="col-md-3 text-center">
				<div class="dep-conteudo  fadeInUp wow" data-wow-delay="0.5s">
					“Coaching não é ​terapia, 
aconselhamento, 
psicologia, consultoria 
ou mentoring. ”<br>
					<div class="dep-foto imgc"></div>
				</div>
				<h4>@maria</h4>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/parceiros'); ?>

<?php get_footer(); ?>
