<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Data Certa Logistica Icone.png"; ?>" />
<?php wp_head(); ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-76592607-1', 'auto');
ga('send', 'pageview');
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
			            <img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.png"; ?>" />
			            <span>11 1234-5678</span>
			          </div>
			          <div class="col-md-3">
			            <img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/email.png"; ?>" />
			            <span>contato@euquerocomecar.com.br</span>
			          </div>
					<div class="col-md-3 col-md-offset-4">
						<ul class="redes_sociais_header clearfix">
			              <li class="youtube"><a target="_blank" href="#"></a></li>
			              <li class="instagram"><a target="_blank" href="#"></a></li>
			              <li class="twitter"><a target="_blank" href="#"></a></li>
			              <li class="facebook"><a target="_blank" href="#"></a></li>
			              <li class="linkedin"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.jpg"; ?>" /></a>
					</div>
					<div class="col-md-9">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
							<li><a href="<?php echo home_url( '/' ); ?>">Início</a></li
							><li><a href="<?php echo home_url( '/sobre-mim' ); ?>">Sobre mim</a></li
							><li><a href="<?php echo home_url( '/para-voce' ); ?>">Para você</a></li
							><li><a target="_blank" href="<?php echo home_url( '/coaching' ); ?>">Coaching</a></li
							><li><a href="<?php echo home_url( '/blog' ); ?>">Blog</a></li
							><li><a href="<?php echo home_url( '/contato' ); ?>">Contato</a></li
							><li><a href="<?php echo home_url( '/contato' ); ?>">Preciso de Coaching?</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op"><a class="orcamento" href="<?php echo home_url( '/contato' ); ?>">Preciso de Coaching?</a></div>
							<div class="menu-op"><a target="_blank"  href="<?php echo home_url( '/contato' ); ?>">Contato</a></div>
							<div class="menu-op"><a target="_blank"  href="<?php echo home_url( '/blog' ); ?>">Blog</a></div>
							<div class="menu-op"><a target="_blank"  href="<?php echo home_url( '/coaching' ); ?>">Coaching</a></div>							
							<div class="menu-op"><a href="<?php echo home_url( '/para-voce' ); ?>">Para você</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/sobre-mim' ); ?>">Sobre mim</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Início</a></div>
						</div>
					</div>					
				</div>
			</div>
		</nav>
	</section>
