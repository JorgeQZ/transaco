<?php
/**
 * Template Name: Empresa Provisional
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


<section id="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="wrapper">
			<div class="content contentPage">
				<div>
					<p id="titulo">
						<?php the_title(); ?>
					</p>
				</div>

				<article>
				
					<div class="ContNew">
						<p>
							<?php the_content();?>
						</p>
					</div>	
				</article>
			</div>
		</div>
		
	<?php endwhile; else: ?>
	<h1>No se encontraron Articulos</h1>
<?php endif; ?>

</section>


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
