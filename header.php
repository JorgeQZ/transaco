<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/index.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,300,700' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/menu.js"></script>

	<!-- LIBRERIAS DEL MAPEO INTERACTIVO -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"><script src="//mattstow.com/experiment/responsive-image-maps/jquery.rwdImageMaps.min.js"></script>
	<!-- Script de Mapeo y rezcalado -->
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('img[usemap]').rwdImageMaps();
		});
	</script>


	<?php wp_head();?>
</head>
<body>
	<header>
		<div id="logo">
			<img class="logo-owens" src="<?php echo get_template_directory_uri() . '/img/logo-owens.png' ?>" alt="">
			<img class="logo-trans" src="<?php echo get_template_directory_uri() . '/img/logo-transaco.png' ?>" alt="">
		</div>
		<button style="display: none;" id="boton-menu" class="glyphicon glyphicon-list icono-menu"> </button>
		<nav>
			<div class="div-child-list">
				<?php wp_nav_menu(
					array(
						'container' => false,
						'items_wrap' => '<ul id="menu-top">%3$s</ul>',
						'theme_location' => 'menu',
						));?>
					</div>
					<div class="div-child-cont-logo">
						<img src="<?php echo get_template_directory_uri() . '/img/logo-transaco.png' ?>" alt="">
					</div>
				</nav>


			</header>
			<div class="menu-drop-down">
				<?php wp_nav_menu(
					array(
						'container' => false,
						'items_wrap' => '<ul id="menu-top">%3$s</ul>',
						'theme_location' => 'menu',
						));?>
					</div>
