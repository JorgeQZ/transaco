<?php
/**
 * Template Name: Empresa Transaco
 *
 *
 * @package WordPress
 * @subpackage My Sweet Bracelet
 * @since 1.0
 * @version 1.0
 */
?>
<?php
get_header();
?>
<?php
$titulo_2016 = get_field('titulo_2016');
$descripcion_2016 = get_field('descripcion_2016');
$titulo_2017 = get_field('titulo_2017');
$descripcion_2017 = get_field('descripcion_2017');
$titulo_2018 = get_field('titulo_2018');
$descripcion_2018 = get_field('descripcion_2018');
$titulo_2019 = get_field('titulo_2019');
$descripcion_2019 = get_field('descripcion_2019');
$titulo_2020 = get_field('titulo_2020');
$descripcion_2020 = get_field('descripcion_2020');
$titulo_2021 = get_field('titulo_2021');
$descripcion_2021 = get_field('descripcion_2021');
$titulo_2021 = get_field('titulo_2021');
$descripcion_2021 = get_field('descripcion_2021');
	//titulos y descripciones option
$titulo_option_2016 = get_field('titulo_option_2016');
$descripcion_option_2016 = get_field('descripcion_option_2016');
$titulo_option_2017 = get_field('titulo_option_2017');
$descripcion_option_2017 = get_field('descripcion_option_2017');
$titulo_option_2018 = get_field('titulo_option_2018');
$descripcion_option_2018 = get_field('descripcion_option_2018');
$titulo_option_2019 = get_field('titulo_option_2019');
$descripcion_option_2019 = get_field('descripcion_option_2019');
$titulo_option_2020 = get_field('titulo_option_2020');
$descripcion_option_2020 = get_field('descripcion_option_2020');
$titulo_option_2021 = get_field('titulo_option_2021');
$descripcion_option_2021 = get_field('descripcion_option_2021');

?>

<div id="empresa">
	<div id="cont-titulo">
		<p id="titulo"> Empresa </p>
	</div>
	<div id="img-portada" class="img-portada-empresa">
	</div>


	<section id="line">

		<div class="contenedor-empr">

			<div class="cont-empr-info cont-empr-info-fondo1">

				<div class="cont-general-empr">
					<div class="cont-empr-img">
						<img src="<?php echo get_field('primer_icono')   ?>" alt="">
					</div>

					<div class="cont-empr-desc">
						<p><?php echo $descripcion_2016 ?> </p>
					</div>
				</div>

				<div class="empr-decoration deco-color1">
					<p> <?php echo $titulo_2016   ?> </p>
				</div>

			</div>


			<div class="cont-empr-info cont-empr-info-fondo2">

				<div class="cont-general-empr">
					<div class="cont-empr-img">
						<img src="<?php echo get_field('segundo_icono') ?>" alt="">
					</div>

					<div class="cont-empr-desc">
						<p> <?php echo $descripcion_2017 ?></p>
					</div>
				</div>

				<div class="empr-decoration deco-color2">
					<p> <?php echo $titulo_2017 ?> </p>
				</div>

			</div>


			<div class="cont-empr-info cont-empr-info-fondo3">

				<div class="cont-general-empr">
					<div class="cont-empr-img">
						<img src="<?php echo get_field('tercer_icono') ?>" alt="">
					</div>

					<div class="cont-empr-desc">
						<p> <?php echo $descripcion_2018 ?></p>
					</div>
				</div>

				<div class="empr-decoration deco-color3">
					<p> <?php echo $titulo_2018 ?> </p>
				</div>

			</div>

			<div class="cont-empr-info cont-empr-info-fondo4">

				<div class="cont-general-empr">
					<div class="cont-empr-img">
						<img src="<?php echo get_field('cuarto_icono') ?>" alt="">
					</div>

					<div class="cont-empr-desc">
						<p> <?php echo $descripcion_2019 ?></p>
					</div>
				</div>

				<div class="empr-decoration deco-color4">
					<p> <?php echo $titulo_2019 ?> </p>
				</div>

			</div>

			<div class="cont-empr-info cont-empr-info-fondo5">

				<div class="cont-general-empr">
					<div class="cont-empr-img">
						<img src="<?php echo get_field('quinto_icono') ?>" alt="">
					</div>

					<div class="cont-empr-desc">
						<p> <?php echo $descripcion_2020 ?></p>
					</div>
				</div>

				<div class="empr-decoration deco-color5">
					<p> <?php echo $titulo_2020 ?> </p>
				</div>

			</div>

			<div class="cont-empr-info cont-empr-info-fondo6">

				<div class="cont-general-empr">
					<div class="cont-empr-img">
						<img src="<?php echo get_field('sexto_icono') ?>" alt="">
					</div>

					<div class="cont-empr-desc">
						<p> <?php echo $descripcion_2021 ?></p>
					</div>
				</div>

				<div class="empr-decoration deco-color6">
					<p> <?php  echo $titulo_2021 ?> </p>
				</div>

			</div>


		</div>






		<div class="contenedor-empr2" id="lineaTiempo">

			<div class="cont-linea-empr">
				<div class="cont-linea-comp">
					<div class="year y-color1">
						<p> Year </p>
						<p>  1991 </p>
					</div>
					<div class="barra linea-1">

					</div>
				</div>
			</div>

			<div class="cont-linea-empr">
				<div class="cont-linea-comp">
					<div class="year y-color2">
						<p> Year </p>
						<p>  1994 </p>
					</div>
					<div class="barra linea-2">

					</div>
				</div>
			</div>


			<div class="cont-linea-empr">
				<div class="cont-linea-comp">
					<div class="year y-color3">
						<p> Year </p>
						<p>  1997 </p>
					</div>
					<div class="barra linea-3">

					</div>
				</div>
			</div>

			<div class="cont-linea-empr">
				<div class="cont-linea-comp">
					<div class="year y-color4">
						<p> Year </p>
						<p>  1998 </p>
					</div>
					<div class="barra linea-4">

					</div>
				</div>
			</div>

			<div class="cont-linea-empr">
				<div class="cont-linea-comp">
					<div class="year y-color5">
						<p> Year </p>
						<p>  2000 </p>
					</div>
					<div class="barra linea-5">

					</div>
				</div>
			</div>

			<div class="cont-linea-empr">
				<div class="cont-linea-comp">
					<div class="year y-color6">
						<p> Year </p>
						<p>  2001 </p>
					</div>
					<div class="barra linea-6">

					</div>
				</div>

				<div class="fin-barra"></div>
			</div>

		</div>



		<div class="contenedor-empr3">

			<div class="cont-final-linea">
				<div class="cont-text">
					<p class="linea-tit1">
						<?php echo $titulo_option_2016 ?>
					</p>
					<p>
						<?php echo $descripcion_option_2016 ?>
					</p>
				</div>
			</div>

			<div class="cont-final-linea">
				<div class="cont-text">
					<p class="linea-tit2">
						<?php echo $titulo_option_2017 ?>
					</p>
					<p>
						<?php echo $descripcion_option_2017 ?>
					</p>
				</div>
			</div>

			<div class="cont-final-linea">
				<div class="cont-text">
					<p class="linea-tit3">
						<?php echo $titulo_option_2018 ?>
					</p>
					<p>
						<?php echo $descripcion_option_2018 ?>
					</p>
				</div>
			</div>

			<div class="cont-final-linea">
				<div class="cont-text">
					<p class="linea-tit4">
						<?php echo $titulo_option_2019 ?>
					</p>
					<p>
						<?php echo $descripcion_option_2019 ?>
					</p>
				</div>
			</div>

			<div class="cont-final-linea">
				<div class="cont-text">
					<p class="linea-tit5">
						<?php echo $titulo_option_2020 ?>
					</p>
					<p>
						<?php echo $descripcion_option_2020 ?>
					</p>
				</div>
			</div>

			<div class="cont-final-linea">
				<div class="cont-text">
					<p class="linea-tit6">
						<?php echo $titulo_option_2021 ?>
					</p>
					<p>
						<?php echo $descripcion_option_2021 ?>					
					</p>
				</div>
			</div>

		</div>


	</section>


	<div class="contenedor-mult-sust">
		<?php
		$args = array( 'numberposts' => 1, 'order'=> 'ASC');
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  
			setup_postdata($post); 
			?> 
			<div class="sust-image-cont">
				<p class="mult-tit"> <?php the_title(); ?></p>
				<p class="mult-fecha"><?php the_date(); ?></p>
				<div class="mult-desc" style="color: white;">
					<?php the_excerpt(); ?>
				</div>
				<a href="<?php the_permalink();?>" target="_blank"> VER MÁS </a>
			</div> 
		<?php endforeach; ?>

		<div class="sust-video-cont">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/P31cjNEZNLg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>

	</div>


</div>

<?php get_footer(); ?>
