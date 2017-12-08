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
			<h1>Sobre mim</h1>
		</div>
	</div>
</div><br><br>
<section id="home-sobre" class="fadeIn wow">
	<div class="container">
		<div class="row fadeInUp wow text-left">
			<div class="col-md-6 col-md-offset-6">
				<h2>Regiane Kiiro <img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/titulo_detalhe.png"; ?>" /></h2>
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

<?php get_template_part( 'template-parts/parceiros'); ?>

<?php get_footer(); ?>
