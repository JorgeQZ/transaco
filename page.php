<?php get_header(); ?>
<?php 
$id = get_the_ID();
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
						<br>
						<br>
						<br>
					</div>	
						<div class="ContNew">
								<p class="textDate">
									<?php the_date();?>
								</p> 
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
	.contImgNew{
		margin: 0 auto;
		width: 80% !important;
	}
</style>
<?php get_footer(); ?>