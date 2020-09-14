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

	

<div id="contacto">
  <div class="wrapper">
    <div class="content contentPage">
      <div>
        <p id="titulo">
          <?php the_title(); ?>
        </p>
      </div>

      <article>
        <div class="img-options contImgNew">
          <div class="img-item act">
            <!-- Imagen destacada de la página -->
            <?php
            $thumbnail = get_post_thumbnail_id($id);
            $imgDestacada = wp_get_attachment_url( $thumbnail );

            if(!$thumbnail){
              $imgDestacada = get_template_directory_uri().'/img/ai-bg.jpg';
            }
            ?>
            <img src="<?php echo $imgDestacada ?>" alt="<?php echo the_title().' Imagen Destacada'; ?>">
          </div>
        </div>  
      </article>
    </div>
  </div>
	<?php 
    if ( have_posts() ) :  
        while ( have_posts() ) :  the_post(); ?>
            <div class="desc-contact-cont">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
            <?php
        endwhile;
    endif;
	?>
	
	<div class="contenedor-contacto" style="padding-bottom: 75px;">
		<div class="cont-form-contact">
			<?php
			echo do_shortcode('[contact-form-7 id="131" title="Contact form 1"]');
			?>
		</div>
		<div class="cont-des-contact">
			<p class="tit-desc-contact" style="margin-top: 0;"><?php echo get_field('titulo_1');?></p>
			<div class="subtit-desc-contact">
				<?php echo get_field('texto_1'); ?>
			</div>
			<p class="tit-desc-contact"><?php echo get_field('titulo_2');?></p>
			<div class="subtit-desc-contact">
				<?php echo get_field('texto_2'); ?>
			</div>
			<p class="tit-desc-contact"><?php echo get_field('titulo_3');?></p>
			<div class="subtit-desc-contact" style="margin-bottom: 1em;">
				<?php echo get_field('texto_3');?>
			</div>
			<div class="cont-contact-decoration">
				<p class="transaco-decoration"> TRANSACO </p>
			</div>
		</div>
	</div>
</div>
<style>
.contNew{
	display: flex;
	width: 80%;
}
.contentPage{
	width:100% !important;
}
.textDate{
	font-size:20px;
	font-family: 'Akzid-Bol';
}
.textContent{
	font-size: 16px;
	font-family: 'Akzid-Reg';
}

</style>
<?php get_footer(); ?>
