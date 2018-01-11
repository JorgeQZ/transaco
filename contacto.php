<?php
/**
 * Template Name: Contacto Transaco
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
<div id="sustentabilidad">
	<div id="cont-titulo">
		<p id="titulo"> Contacto </p>
	</div>
	<div id="img-portada" class="img-portada-contacto">
	</div>

	<div class="desc-contact-cont">
		<p>
			Queremos resolver tus dudas. Ponte en contacto con nosotros y uno de nuestros representates te contactará a la brevedad.
		</p>
	</div>

	<div class="contenedor-contacto">
		<div class="cont-form-contact">

			<?php
			echo do_shortcode('[contact-form-7 id="85" title="Contacto"]');

			?>

		</div>

		<div class="cont-des-contact">
			<p class="tit-desc-contact" style="margin-top: 0;">Corporativo Transaco </p>
			<p class="subtit-desc-contact">Lorem Ipsum është një tekst shabllon
				i industrisë së dhe shtypshkronjave.
			Lorem Ipsum ka qenë teksti shabllon</p>
			<p class="tit-desc-contact"> Oficinas Administrativas Transaco </p>
			<p class="subtit-desc-contact">Lorem Ipsum është një tekst shabllon
				i industrisë së dhe shtypshkronjave.
			Lorem Ipsum ka qenë teksti shabllon</p>
			<p class="tit-desc-contact">Corporativo Transaco </p>
			<p class="subtit-desc-contact" style="margin-bottom: 1em;">Lorem Ipsum është një tekst shabllon
				i industrisë së dhe shtypshkronjave.
			Lorem Ipsum ka qenë teksti shabllon</p>

			<div class="cont-contact-decoration">
				<p class="transaco-decoration"> TRANSACO </p>
			 </div>


		</div>


	</div>

</div>
