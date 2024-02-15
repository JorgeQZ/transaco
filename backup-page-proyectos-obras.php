<?php
/**
 * Template Name: backup-Proyectos y Obras
 *
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */
global $post;
$id_page = get_the_ID();
$titulo_page = get_the_title($id_page);
?>


<!-- <li class="home-noticias-item">
            <div class="bg">
			<?php
          if(has_post_thumbnail()){the_post_thumbnail();}
          ?>
            </div>
            <div class="info">
                <p class="titulo">
                    <?php the_title(); ?>
                </p>
                <span class="date">
                    <?php echo get_the_date( 'M d, Y', $post->ID ); ?>
                </span>

                <span class="extracto">
                    <?php the_excerpt();?>
                </span>

                <a class="mas" href="<?php the_permalink();?>">ver más</a>
            </div>
        </li> -->
<?php

$args = array(
	'post_type' => 'proyectos',
	'post_status' => 'publish',
	'posts_per_page' => -1
);

$the_query = new WP_QUERY ( $args );
while ( $the_query->have_posts() ) :
	$the_query->the_post();
	$current_id = $post->ID;
	$titulo = get_the_title($current_id);
	$image = get_the_post_thumbnail($current_id, 'thumbnail');
	$excerpt = get_the_excerpt($current_id);
	?>
<div class="modal-cont" id="<?php echo $current_id; ?>">
    <div class="modal-item">
        <button onclick="hideModal(<?php echo $current_id; ?>)">
            <img src="<?php echo get_template_directory_uri().'/img/close.png'; ?>" alt="">
        </button>
        <p class="titulo"><?php echo $titulo ?></p>
        <div class="info">
            <div class="img_desc">
                <?php echo $image;?>
            </div>
            <div class="content">
                <strong>Descripción</strong><br>
                <?php echo $excerpt; ?>
            </div>
        </div>
    </div>
</div>
<?php
endwhile;
?>


<?php get_header(); ?>
<div class="wrapper">
    <!-- menu movil -->
    <div class="button-menu-mobile" id="bmm">
        <span>
            << /span><span>Productos</span>
    </div>
    <!-- menu movil -->


    <!-- contenido -->
    <div class="content">
        <div class="titulo">
            <p><?php echo $titulo_page; ?></p>
        </div>
        <div class="img-options">
            <div class="img-item act">
                <!-- Imagen destacada de la página -->
                <?php
				$thumbnail = get_post_thumbnail_id($id_page);
				$imgDestacada = wp_get_attachment_url( $thumbnail );
				if(!$thumbnail){
					$imgDestacada = get_template_directory_uri().'/img/ai-bg.jpg';
				}
				?>
                <img src="<?php echo $imgDestacada ?>" alt="<?php echo the_title().' Imagen Destacada'; ?>">
            </div>
        </div>
        <div class="proyectos-cont">
            <?php
			$args = array(
				'post_type' => 'proyectos',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'orderby'           => 'date',
				'order'             => 'ASC'
			);

			$the_query = new WP_QUERY ( $args );
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				$current_id = $post->ID;
				$titulo = get_the_title($current_id);
				$image = get_the_post_thumbnail($current_id, 'thumbnail');
				$excerpt = get_the_excerpt($current_id);
				?>
            <div class="proyecto-item" onclick="showModal(<?php echo $current_id; ?>)">
                <div class="cont">
                    <div class="img">
                        <?php echo $image ?>
                    </div>
                    <div class="info">
                        <p class="titulo"><?php echo $titulo; ?></p>
                        <div class="excerpt">
                            <?php echo $excerpt; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
			endwhile;
			?>
        </div>
    </div>
    <!-- fin de contenido -->

    <!-- menu principal -->
    <div class="prod-nav-cont" id="pnc">
        <?php
		$args = array (
			'theme-location' => 'productos-menu',
			'container'		 => 'nav',
			'container-class' => 'productos-menu'
		);
		wp_nav_menu( array(
			'theme_location' => 'productos-menu',
			'container'		 => 'nav',
			'container-class' => 'productos-menu'
		) );
		?>
    </div>
    <!-- menu principal -->

</div>
<script>
function showModal(id) {
    $('#' + id).fadeIn();
}

function hideModal(id) {
    $('#' + id).fadeOut();
}
</script>
<?php get_footer(); ?>
