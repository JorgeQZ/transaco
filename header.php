<!doctype html>
<html lang="es">
<head>
	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N9S7K3L');</script>
    <!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<title>Transaco</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/fonts.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/index.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,300,700' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/menu.js"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<!-- <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    -->

	<!-- LIBRERIAS DEL MAPEO INTERACTIVO -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="//mattstow.com/experiment/responsive-image-maps/jquery.rwdImageMaps.min.js"></script> -->
	<!-- Script de Mapeo y rezcalado -->
<!-- 	<script type="text/javascript">
		$(document).ready(function(e) {
			$('img[usemap]').rwdImageMaps();
		});
	</script> -->
	<script>
		$(document).ready(function(){
			$('.slider').bxSlider();
		});
	</script>

	<?php wp_head();?>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9S7K3L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<<<<<<< HEAD
	<header>
		<div class="logo-owens">
			<a href="<?php echo esc_url(home_url('/'));  ?>">
=======

	<?php if(is_front_page()): ?>
	<div class="modal-anuncio-membrana" id="polyglass-anuncio">

		<div class="box">
		<div class="close-anuncio" id="close-anuncio">x</div>
			<div class="title">
				Membranas Asfálticas Polyglass
				<br>
				<small>Contacto</small>
			</div>
			<?php
			echo do_shortcode('[contact-form-7 id="2120" title="Membranas asfalticas"]');
			?>
		</div>
	</div>
	<?php endif ?>

	<header>
		<div class="logo-owens">
			<a href="<?php echo esc_url(home_url('/home'));  ?>">
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
				<img class="logo-owens" src="<?php echo get_template_directory_uri() . '/img/logo-owens.png' ?>" alt="">
			</a>
		</div>
		<div>

<<<<<<< HEAD
			<?php 
			$args = array (
				'theme-location' => 'menu',
				'container'		 => 'nav',
				'container-class'=> 'menu' 
=======
			<?php
			$args = array (
				'theme-location' => 'menu',
				'container'		 => 'nav',
				'container-class'=> 'menu'
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
			);

			wp_nav_menu($args);
			?>

			<div class="logo-transaco">
				<img  src="<?php echo get_template_directory_uri().'/img/logo-transaco.png' ?>" alt="">
			</div>
			<div class="logo-transaco web-pay">
				<a href="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=18471699" target="_blank">
					<img  src="<?php echo get_template_directory_uri().'/img/web-pay.png' ?>" alt="" >
				</a>
			</div>
			<button id="boton-menu" class="glyphicon glyphicon-list icono-menu"> </button>

		</div>
		<div id="mobile-menu">
			<?php wp_nav_menu($args); ?>
		</div>
	</header>
