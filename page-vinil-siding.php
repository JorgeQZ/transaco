<?php
/**
 * Template Name: Productos Vinil Siding
 *
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */

global $post;
$id_page = get_the_ID();
$titulo = get_the_title($id_page);
$img = get_field('img_desc_vs', $id);
$slider = get_field('slider', $id);
if(!slider){
	$slider = "[slide-anything id='198']";
}

$second_slider =  get_field('sa_slider_pc', $id);

?>





<?php get_header(); ?>

<div class="wrapper">

    <!-- menu movil -->
    <!-- <div class="button-menu-mobile" id="bmm">
        <span>
            << /span><span>Productos</span>
    </div> -->
    <!-- menu movil -->


    <!-- contenido -->
    <div class="content">
        <div class="titulo">
            <p><?php echo $titulo; ?></p>
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

        <div class="productos-cont">
            <div class="item-cont"">
				<div class=" titulo">Paneles</div>
            <div class="load">
                <img src="<?php echo get_template_directory_uri().'/img/loading.gif' ?>" alt="" style="margin: 0 auto;">
            </div>
            <div class="slider-cont" id="slider-paneles" style="display: none;">
                <ul>
                    <?php
						$args = array(
							'post_type' => 'viniles',
							'post_status' => 'publish',
							'post_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'categoria_viniles',
									'field' => 'slug',
									'terms' => 'paneles'
								)
							)
						);

						$the_query = new WP_QUERY( $args );
						while( $the_query->have_posts() ):
							$the_query->the_post();
							$current_id = $post->ID;
							$image =  get_field('nombre', $current_id);
							$img_desc =   get_field('img', $current_id);
							$pdf_post =   get_field('pdf', $current_id);
							$descripcion_corta =   get_field('descripcion_corta', $current_id);
							?>
                    <li role="<?php echo $current_id;?>">
                        <div class="img_desc">
                            <img src="<?php echo $img_desc; ?>" onclick="showModal(<?php echo $current_id ?>)">
                        </div>
                        <div class="info">
                            <div>
                                <?php echo $descripcion_corta ?>
                                <div class="file">
                                    <?php if($pdf_post){ ?>
                                    <a href="<?php echo $pdf_post ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </li>
                    <?php
						endwhile;
						?>
                </ul>
                <div class="control paneles-control right">
                    <img src="<?php echo get_template_directory_uri().'/img/right-arrow_light.png' ?>">
                </div>
                <div class="control paneles-control left">
                    <img src="<?php echo get_template_directory_uri().'/img/right-arrow_light.png' ?>">
                </div>
            </div>
        </div>
        <div class="item-cont">
            <div class="titulo">Accesorios</div>

            <div class="load">
                <img src="<?php echo get_template_directory_uri().'/img/loading.gif' ?>" alt="" style="margin: 0 auto;">
            </div>
            <div class="slider-cont" id="slider-accesorios" style="display: none;">
                <ul>
                    <?php
						$args = array(
							'post_type' => 'viniles',
							'post_status' => 'publish',
							'post_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'categoria_viniles',
									'field' => 'slug',
									'terms' => 'accesorios'
								)
							)
						);

						$the_query = new WP_QUERY( $args );
						while( $the_query->have_posts() ):
							$the_query->the_post();
							$current_id = $post->ID;
							$image =  get_field('nombre', $current_id);
							$img_desc =   get_field('img', $current_id);
							$descripcion_corta =   get_field('descripcion_corta', $current_id);
							?>
                    <li role="<?php echo $current_id;?>">
                        <div class="img_desc">
                            <img src="<?php echo $img_desc; ?>" onclick="showModal(<?php echo $current_id ?>)">
                        </div>
                        <div class="info">
                            <div>
                                <?php echo $descripcion_corta; ?>
                                <div class="file">
                                    <?php if($pdf_post){ ?>
                                    <a href="<?php echo $pdf_post ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
						endwhile;
						?>
                </ul>
                <div class="control accesorios-control right">
                    <img src="<?php echo get_template_directory_uri().'/img/right-arrow_light.png' ?>">
                </div>

                <div class="control accesorios-control left">
                    <img src="<?php echo get_template_directory_uri().'/img/right-arrow_light.png' ?>">
                </div>
            </div>
        </div>
        <div class="item-cont" style="background-image: url(<?php echo $img; ?>)">
        </div>
    </div>

    <!-- Slider -->
    <section class="slider-">
        <div class="titulo">
            <p>Colores de Paneles</p>
        </div>
        <div>
            <?php echo do_shortcode($slider); ?>

        </div>
    </section>

    <section class="slider-">
        <div class="titulo">
            <p>Productos Complementarios</p>

        </div>
        <div>
            <?php echo do_shortcode($second_slider) ?>
        </div>
    </section>
</div>

<?php
	$args = array(
		'post_type' => 'viniles',
		'post_status' => 'publish',
		'post_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'categoria_viniles',
				'field' => 'slug',
				'terms' => 'accesorios'
			)
		)
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
		$desc_img  = get_field('desc_img', $current_id);

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
		if(!$desc_img){
			$desc_img = get_template_directory_uri().'/img/ejemplo2.jpg';
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
                    <a href="<?php echo $desc_img ?>" target="_blank">
                        <img src="<?php echo $desc_img ?>">
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



<?php
	$args = array(
		'post_type' => 'viniles',
		'post_status' => 'publish',
		'post_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'categoria_viniles',
				'field' => 'slug',
				'terms' => 'paneles'
			)
		)
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
		$desc_img  = get_field('desc_img', $current_id);
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
		if(!$desc_img){
			$desc_img = get_template_directory_uri().'/img/ejemplo2.jpg';
		}
		?>

<div class="modal-ai-cont" id="<?php echo $current_id; ?>">
    <div class="modal-ai-item">
        <button onclick="hideModal(<?php echo $current_id; ?>)">
            <img src="<?php echo get_template_directory_uri().'/img/close.png'; ?>" alt="">
        </button>
        <p class="titulo"><?php echo $titulo ?></p>
        <div style="color: white;">
            <?php echo $descripcion; ?>
        </div>
        <div class="info">
            <div class="desc">
                <div class="img">
                    <img src="<?php echo $gal_1 ?>" class="desc_img">
                </div>
                <div class="img">
                    <a href="<?php echo $desc_img ?>" target="_blank">
                        <img src="<?php echo $desc_img ?>">
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
    $('#' + id).show();
    $('#' + id).css({
        'display': 'block'
    });
}

function hideModal(id) {
    $('#' + id).fadeOut();
}
$(window).load(function() {
    // Slider Paneles
    var slideWidth = $('.item-cont').width();
    var slideCount = $('#slider-paneles ul li').length;
    var slideHeight = $('#slider-paneles ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    // $('#slider-paneles').css({ width: slideWidth});
    $('#slider-paneles ul').css({
        width: sliderUlWidth,
        height: slideHeight
    });
    $('#slider-paneles ul li').css({
        width: slideWidth
    });
    $('#slider-paneles ul li:last-child').prependTo('#slider ul');


    var slideCount = $('#slider-accesorios ul li').length;
    var slideHeight = $('#slider-accesorios ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    // $('#slider-accesorios').css({ width: slideWidth});
    $('#slider-accesorios ul').css({
        width: sliderUlWidth,
        height: slideHeight
    });
    $('#slider-accesorios ul li').css({
        width: slideWidth
    });
    $('#slider-accesorios ul li:last-child').prependTo('#slider ul');

    // fin de slider de paneles
});
$(window).resize(function() {
    var slideWidth = $('.item-cont').width();
    var slideCount = $('#slider-paneles ul li').length;
    var slideHeight = $('#slider-paneles ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    // $('#slider-paneles').css({ width: slideWidth});
    $('#slider-paneles ul').css({
        width: sliderUlWidth,
        height: slideHeight
    });
    $('#slider-paneles ul li').css({
        width: slideWidth
    });
    $('#slider-paneles ul li:last-child').prependTo('#slider ul');


    var slideCount = $('#slider-accesorios ul li').length;
    var slideHeight = $('#slider-accesorios ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    // $('#slider-accesorios').css({ width: slideWidth});
    $('#slider-accesorios ul').css({
        width: sliderUlWidth,
        height: slideHeight
    });
    $('#slider-accesorios ul li').css({
        width: slideWidth
    });
    $('#slider-accesorios ul li:last-child').prependTo('#slider ul');

    // fin de slider de paneles
});

function moveRight() {
    slideWidth = $('.item-cont').width();
    $('#slider-paneles ul').animate({
        left: -slideWidth
    }, 200, function() {
        $('#slider-paneles ul li:first-child').appendTo('#slider-paneles ul');
        $('#slider-paneles ul').css('left', '');
    });
};



function moveLeft() {
    slideWidth = $('.item-cont').width();
    $('#slider-paneles ul').css('left', -slideWidth);
    var clone = $('#slider-paneles ul li').last().clone();
    clone.prependTo($('#slider-paneles ul'));
    $('#slider-paneles ul li').last().remove();

    $('#slider-paneles ul').animate({
        left: ''
    }, 200, function() {});
}

$('.paneles-control.right').click(function() {
    moveRight();
});

$('.paneles-control.left').click(function() {
    moveLeft();
});


function moveRightA() {
    slideWidth = $('.item-cont').width();
    $('#slider-accesorios ul').animate({
        left: -slideWidth
    }, 200, function() {
        $('#slider-accesorios ul li:first-child').appendTo('#slider-accesorios ul');
        $('#slider-accesorios ul').css('left', '');
    });
};

$('.accesorios-control.right').click(function() {
    moveRightA();
});


function moveLeftA() {
    slideWidth = $('.item-cont').width();
    $('#slider-accesorios ul').css('left', -slideWidth);
    var clone = $('#slider-accesorios ul li').last().clone();
    clone.prependTo($('#slider-accesorios ul'));
    $('#slider-accesorios ul li').last().remove();

    $('#slider-accesorios ul').animate({
        left: ''
    }, 200, function() {});
}


$('.accesorios-control.left').click(function() {
    moveLeftA();
});

setTimeout(function() {
    $(".slider-cont").show();
    $(".load").hide();

    // Slider Paneles
    var slideWidth = $('.item-cont').width();
    var slideCount = $('#slider-paneles ul li').length;
    var slideHeight = $('#slider-paneles ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    // $('#slider-paneles').css({ width: slideWidth});
    $('#slider-paneles ul').css({
        width: sliderUlWidth,
        height: slideHeight
    });
    $('#slider-paneles ul li').css({
        width: slideWidth
    });
    $('#slider-paneles ul li:last-child').prependTo('#slider ul');


    var slideCount = $('#slider-accesorios ul li').length;
    var slideHeight = $('#slider-accesorios ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    // $('#slider-accesorios').css({ width: slideWidth});
    $('#slider-accesorios ul').css({
        width: sliderUlWidth,
        height: slideHeight
    });
    $('#slider-accesorios ul li').css({
        width: slideWidth
    });
    $('#slider-accesorios ul li:last-child').prependTo('#slider ul');

    // fin de slider de paneles
}, 6000);
</script>
<?php
$args = array(
	'post_type' => 'viniles',
	'post_status' => 'publish',
	'post_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'categoria_viniles',
			'field' => 'slug',
			'terms' => 'paneles'
		)
	)
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

<?php
$args = array(
	'post_type' => 'viniles',
	'post_status' => 'publish',
	'post_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'categoria_viniles',
			'field' => 'slug',
			'terms' => 'accesorios'
		)
	)
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

<style>
.load {
    max-width: 70px;
    margin: 0 auto;
}

.load img {
    width: 100%;
}

</style>
<?php get_footer(); ?>
