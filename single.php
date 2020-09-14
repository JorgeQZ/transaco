<?php get_header(); ?>

<section id="main">			
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="wrapper">
			<div class="content-not contentPage">
				<div>
					<p id="titulo">
						<?php the_title(); ?>
					</p>
				</div>


				<!-- header hero -->
				<?php
				$thumbnail = get_post_thumbnail_id($post->ID);
				$imgDestacada = wp_get_attachment_url( $thumbnail );
				if(!$thumbnail){
					$imgDestacada = get_template_directory_uri().'/img/ai-bg.jpg';
				}
				?>
				<div class="hero" style="background-image: url(<?php echo $imgDestacada; ?>);"></div>
				<div class="content-page">
					<div class="date"><?php the_date(); ?></div>
					<div class="content-article"><?php the_content();?></div>
				</div>
			</div>
		</div>

	<?php endwhile; else: ?>
	<h1>No se encontraron Articulos</h1>
<?php endif; ?>
</section>

<?php get_footer(); ?>