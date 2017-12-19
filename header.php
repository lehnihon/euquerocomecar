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
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Regiane-Kiiro.png"; ?>" />

<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
			            <img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.png"; ?>" />
			            <span>11 94245-7275</span>
			          </div>
			          <div class="col-md-4">
			            <img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/email.png"; ?>" />
			            <span>regiane@euquerorecomecar.com.br</span>
			          </div>
					<div class="col-md-3 col-md-offset-3">
						<ul class="redes_sociais_header clearfix">
			              <li class="youtube"><a target="_blank" href="https://www.linkedin.com/in/regiane-kiiro-7940265b/"></a></li>
			              <li class="instagram"><a target="_blank" href="https://www.instagram.com/coachregianekiiro"></a></li>
			              <li class="twitter"><a target="_blank" href="#"></a></li>
			              <li class="facebook"><a target="_blank" href="#"></a></li>
			              <li class="linkedin"><a target="_blank" href="https://www.facebook.com/euquerorecomecar/"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.jpg"; ?>" /></a>
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
							><li><a href="<?php echo home_url( '/coaching' ); ?>">Coaching</a></li
							><li><a target="_blank"  href="<?php echo home_url( '/blog' ); ?>">Blog</a></li
							><li><a href="<?php echo home_url( '/contato' ); ?>">Contato</a></li
							><li><a href="<?php echo home_url( '/contato' ); ?>">Precisa de Coaching?</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op"><a class="orcamento" href="<?php echo home_url( '/contato' ); ?>">Precisa de Coaching?</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/contato' ); ?>">Contato</a></div>
							<div class="menu-op"><a target="_blank"  href="<?php echo home_url( '/blog' ); ?>">Blog</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/coaching' ); ?>">Coaching</a></div>							
							<div class="menu-op"><a href="<?php echo home_url( '/para-voce' ); ?>">Para você</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/sobre-mim' ); ?>">Sobre mim</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Início</a></div>
						</div>
					</div>					
				</div>
			</div>
		</nav>
	</section>
