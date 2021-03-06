<?php
/**
 * Template Name: Sistemas de Ventilación
 *
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */
global $post;
$id = get_the_ID();
$titulo_page = get_the_title($id);
$slider = get_field('sa_slider_pc', $id);

?>




<?php get_header(); ?>
<div class="wrapper">

    <!-- contenido -->
    <div class="content">
        <div class="titulo">
            <p><?php echo $titulo_page;?></p>
        </div>
        <div class="img-options">
            <div class="img-item act">
                <!-- Imagen destacada de la página -->
                <?php
			$imgDestacada = get_the_post_thumbnail_url($post->ID, 'page_banner');

            if(!$imgDestacada){
                $imgDestacada = get_template_directory_uri().'/img/ai-bg.jpg';
            }
            ?>
                <img src="<?php echo $imgDestacada ?>" alt="<?php echo the_title().' Imagen Destacada'; ?>">
            </div>
        </div>

        <div class="prod-sv-cont">
            <?php
			$args = array(
				'post_type' => 'sistemas_vent',
				'post_status' => 'publish',
				'posts_per_page' => -1
			);

			$the_query = new WP_QUERY ( $args );
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				$current_id = $post->ID;
				$image =  get_field('img', $current_id);
				$titulo =   get_field('nombre', $current_id);
				$descripcion_corta =   get_field('descripcion_corta', $current_id);
				$pdf =  get_field('pdf', $current_id);
				?>
            <div class="prod-sv-item">
                <div class="cont">
                    <div class="img">
                        <img src="<?php echo $image ?>" alt="" onclick="showModal(<?php echo $current_id; ?>)">
                    </div>
                    <div class="info">
                        <p><?php echo $titulo; ?></p>
                        <?php echo $descripcion_corta; ?>
                    </div>
                </div>
                <div class="file">
                    <?php
						if($pdf){
							?>
                    <a href="<?php echo $pdf ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?> " alt="">
                    </a>
                    <?php
						}
						?>
                </div>
            </div>
            <?php
			endwhile;
			?>
        </div>


        <section class="slider-">
            <div class="titulo">
                <p>Productos Complementarios</p>

            </div>
            <div>
                <?php echo do_shortcode($slider) ?>
            </div>
        </section>
    </div>


    <?php
$args = array(
	'post_type' => 'sistemas_vent',
	'post_status' => 'publish',
	'post_per_page' => -1
);

$the_query = new WP_QUERY( $args );
while( $the_query->have_posts() ):
	$the_query->the_post();
	$current_id = $post->ID;

	$nombre =   get_field('nombre', $current_id);
	$img_desc =   get_field('img', $current_id);
	$descripcion =   get_field('descripcion', $current_id);
	$pdf =   get_field('pdf', $current_id);
	$gal_1 = get_field('imagen_de_galeria_1', $current_id);
	$gal_2 = get_field('imagen_de_galeria_2', $current_id);
	$gal_3 = get_field('imagen_de_galeria_3', $current_id);
	$gal_4 = get_field('imagen_de_galeria_4', $current_id);
	$gal_5 = get_field('imagen_de_galeria_5', $current_id);
	$desc  = get_field('desc', $current_id);
	if(!$gal_1){
		$gal_1 = get_template_directory_uri().'/img/ejemplo1.jpg';
	}
	if(!$gal_2){
		$gal_2 = get_template_directory_uri().'/img/ejemplo1.jpg';
	}
	if(!$gal_3){
		$gal_3 = get_template_directory_uri().'/img/ejemplo1.jpg';
	}
	if(!$gal_4){
		$gal_4 = get_template_directory_uri().'/img/ejemplo1.jpg';
	}
	if(!$gal_4){
		$gal_4 = get_template_directory_uri().'/img/ejemplo1.jpg';
	}
	if(!$gal_5){
		$gal_5 = get_template_directory_uri().'/img/ejemplo1.jpg';
	}
	if(!$desc){
		$desc = get_template_directory_uri().'/img/ejemplo2.jpg';
	}
	?>

    <div class="modal-ai-cont" id="<?php echo $current_id; ?>">
        <div class="modal-ai-item">
            <button onclick="hideModal(<?php echo $current_id; ?>)">
                <img src="<?php echo get_template_directory_uri().'/img/close.png'; ?>" alt="">
            </button>
            <p class="titulo"><?php echo $nombre ?></p>
            <div style="color: white;">
                <?php echo $descripcion; ?>
            </div>
            <div class="info">
                <div class="desc">
                    <div class="img">
                        <img src="<?php echo $gal_1 ?>" class="desc_img">
                    </div>
                    <div class="img">
                        <a href="<?php echo $desc ?>" target="_blank">
                            <img src="<?php echo $desc ?>">
                        </a>
                    </div>
                </div>
                <div class="galery">
                    <div class="img img_popup">
                        <img src="<?php echo $gal_1 ?>">
                    </div>
                    <div class="img img_popup">
                        <img src="<?php echo $gal_2 ?>">
                    </div>
                    <div class="img img_popup">
                        <img src="<?php echo $gal_3 ?>">
                    </div>
                    <div class="img img_popup">
                        <img src="<?php echo $gal_4 ?>">
                    </div>
                    <div class="img img_popup">
                        <img src="<?php echo $gal_5 ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
endwhile;
?>

    <!-- fin de contenido -->


</div>
<script>
function showModal(id) {
    $('#' + id).fadeIn();
}

function hideModal(id) {
    $('#' + id).fadeOut();
}
</script>
<?php
$args = array(
	'post_type' => 'sistemas_vent',
	'post_status' => 'publish',
	'posts_per_page' => -1
);
$the_query = new WP_QUERY ( $args );
while ( $the_query->have_posts() ) :
	$the_query->the_post();
	$current_id = $post->ID;
	echo
	"<script>
	jQuery('#".$current_id." .galery .img_popup img').click(function(){
		$('#".$current_id." .desc_img').attr('src', $(this).attr('src'));
	});
	</script>";
endwhile;
?>
<?php get_footer(); ?>
