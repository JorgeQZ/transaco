<?php
/**
 * Template Name: Productos Tejas Asfalticas
 *
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */
global $post;
$id_page = get_the_ID();
$img = get_field('img_desc_vs', $id_page);

$slider = get_field('sa_slider_pc', $id_page);
?>
<?php get_header(); ?>
<div class="wrapper">

    <!-- contenido -->
    <div class="content">
        <div class="titulo">
            <p><?php the_title(); ?></p>
        </div>
        <div class="img-options">
            <div class="img-item act" id="supreme-img">
                <div class="title"><?php echo get_field('titulo_supreme');  ?></div>
                <img src="<?php echo get_field('supreme_img'); ?>" alt="Transaco Supreme">
            </div>
            <div class="img-item" id="oakridge-img">
                <div class="title"><?php echo get_field('titulo_oakridge');  ?></div>
                <img src="<?php echo get_field('oakridge_img'); ?>" alt="Transaco Oakridge">
            </div>
            <div class="img-item" id="duration-img">
                <div class="title"><?php echo get_field('titulo_duration');  ?></div>
                <img src="<?php echo get_field('duration_img'); ?>" alt="Transaco Duration">
            </div>
        </div>
        <!-- botones -->
        <div class="buttons-cont">
            <div class="content-item">
                <div class="button-item act" id="supreme">
                    <div class="text">Supreme</div>
                    <img src="<?php echo get_template_directory_uri().'/img/__supreme.jpg' ?>" alt="">
                </div>

                <?php
				$args = array(
					'post_type' => 'tejas',
					'post_status' => 'publish',
					'posts_per_page' => 1,
					'tax_query' => array(
						array(
							'taxonomy' => 'categoria_de_tejas',
							'field' => 'slug',
							'terms' => 'supreme'
						)
					)
				);
				$the_query = new WP_QUERY ( $args );
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					$current_id = $post->ID;
					$image =  get_field('imagen_descriptiva', $current_id);
					$titulo =   get_field('titulo_descriptivo', $current_id);
					$Rinde =   get_field('Rinde', $current_id);
					$Peso =   get_field('peso', $current_id);
					$file1 =   get_field('instructivo_de_instalacion_1', $current_id);
					$file2 =   get_field('instructivo_de_instalacion_2', $current_id);
					$file3 =   get_field('instructivo_de_instalacion_3', $current_id);
					$file4 =   get_field('instructivo_de_instalacion_4', $current_id);
					?>
                <div class="teja act" id="t1">
                    <p class="titulo"><?php echo $titulo; ?></p>
                    <div class="info">
                        <div class="img">
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="desc">
                            <p>Descripción</p>
                            <p><?php echo $Rinde; ?></p>
                            <p><?php echo $Peso; ?></p>
                            <div class="files">
                                <?php
									if($file1){
										?>
                                Ficha técnica: <a href="<?php echo $file1 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                                <?php
									if($file2){
										?>
                                Garantía: <a href="<?php echo $file2 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                                <?php
									if($file3){
										?>
                                Instalación: <a href="<?php echo $file3 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                                <?php
									if($file4){
										?>
                                Archivo: <a href="<?php echo $file4 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                            </div>
                        </div>
                    </div>

                    <?php
<<<<<<< HEAD
					endwhile;
=======
                    endwhile;
                    wp_reset_query();
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
					?>
                </div>
            </div>
            <div class="content-item">
                <div class="button-item" id="oakridge">
                    <div class="text">Oakridge</div>
                    <img src="<?php echo get_template_directory_uri().'/img/__oakridge.jpg' ?>" alt="">
                </div>
                <?php
				$args = array(
					'post_type' => 'tejas',
					'post_status' => 'publish',
					'posts_per_page' => 1,
					'tax_query' => array(
						array(
							'taxonomy' => 'categoria_de_tejas',
							'field' => 'slug',
							'terms' => 'oakridge'
						)
					)
				);
				$the_query = new WP_QUERY ( $args );
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					$current_id = $post->ID;
					$image =  get_field('imagen_descriptiva', $current_id);
					$titulo =   get_field('titulo_descriptivo', $current_id);
					$Rinde =   get_field('Rinde', $current_id);
					$Peso =   get_field('peso', $current_id);
					$file1 =   get_field('instructivo_de_instalacion_1', $current_id);
					$file2 =   get_field('instructivo_de_instalacion_2', $current_id);
					$file3 =   get_field('instructivo_de_instalacion_3', $current_id);
					$file4 =   get_field('instructivo_de_instalacion_4', $current_id);
					?>
                <div class="teja" id="t2">
                    <p class="titulo"><?php echo $titulo; ?></p>
                    <div class="info">
                        <div class="img">
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="desc">
                            <p>Descripción</p>
                            <p><?php echo $Rinde; ?></p>
                            <p><?php echo $Peso; ?></p>
                            <div class="files">
                                <?php
									if($file1){
										?>
                                Ficha técnica: <a href="<?php echo $file1 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                                <?php
									if($file2){
										?>
                                Garantía: <a href="<?php echo $file2 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                                <?php
									if($file3){
										?>
                                Instalación: <a href="<?php echo $file3 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                                <?php
									if($file4){
										?>
                                Archivo: <a href="<?php echo $file4 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                            </div>
                        </div>
                    </div>

                    <?php
<<<<<<< HEAD
					endwhile;
=======
                    endwhile;
                    wp_reset_query();
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
					?>
                </div>
            </div>
            <div class="content-item">
                <div class="button-item" id="duration">
                    <div class="text">Duration</div>
                    <img src="<?php echo get_template_directory_uri().'/img/__duration.jpg' ?>" alt="">
                </div>

                <?php
				$args = array(
					'post_type' => 'tejas',
					'post_status' => 'publish',
					'posts_per_page' => 1,
					'tax_query' => array(
						array(
							'taxonomy' => 'categoria_de_tejas',
							'field' => 'slug',
							'terms' => 'duration'
						)
					)
				);
				$the_query = new WP_QUERY ( $args );
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					$current_id = $post->ID;
					$image =  get_field('imagen_descriptiva', $current_id);
					$titulo =   get_field('titulo_descriptivo', $current_id);
					$Rinde =   get_field('Rinde', $current_id);
					$Peso =   get_field('peso', $current_id);
					$file1 =   get_field('instructivo_de_instalacion_1', $current_id);
					$file2 =   get_field('instructivo_de_instalacion_2', $current_id);
					$file3 =   get_field('instructivo_de_instalacion_3', $current_id);
					$file4 =   get_field('instructivo_de_instalacion_4', $current_id);
					?>
                <div class="teja" id="t3">
                    <p class="titulo"><?php echo $titulo; ?></p>
                    <div class="info">
                        <div class="img">
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="desc">
                            <p>Descripción</p>
                            <p><?php echo $Rinde; ?></p>
                            <p><?php echo $Peso; ?></p>
                            <div class="files">
                                <?php
									if($file1){
										?>
                                Ficha técnica: <a href="<?php echo $file1 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                                <?php
									if($file2){
										?>
                                Garantía: <a href="<?php echo $file2 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                                <?php
									if($file3){
										?>
                                Instalación: <a href="<?php echo $file3 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?><?php
									if($file4){
										?>
                                Archivo: <a href="<?php echo $file4 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php
									}
									?>
                            </div>
                        </div>

                    </div>
                    <?php
<<<<<<< HEAD
					endwhile;
=======
                    endwhile;
                    wp_reset_query();
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
					?>
                </div>
            </div>
        </div>
        <!-- fin de botones -->
        <!-- contenido de tejas -->

        <div class="slider-cont-tejas act" id="s1">
            <section class="slider-">
                <?php

            $video_mp4 =  get_field('video_supreme', $id_page);

            if(!empty($video_mp4)):

            ?>

                <div class="titulo">
                    <p>Video</p>
                </div>
                <div class="prod-video-cont">
<<<<<<< HEAD
                    <video controls preload autoplay="autoplay" playsinline="playsinline" preload="metadata">
=======
                    <video controls preload true autoplay>
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
                        <source src="<?php echo $video_mp4; ?>" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <?php endif; ?>
            </section>
<<<<<<< HEAD
=======

>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
            <section class="slider-">
                <div class="titulo">
                    <p><?php echo get_field('titulo_slider_supreme', $id_page);  ?></p>
                </div>
                <div>
                    <?php echo do_shortcode(get_field('slider_supreme', $id_page)); ?>
                </div>
            </section>
        </div>


        <div class="slider-cont-tejas " id="s2">
<<<<<<< HEAD
			  <section class="slider-">
=======
            <section class="slider-">
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
                <?php
            $video_mp4_oak =  get_field('video_oakridge', $id_page);

            if(!empty($video_mp4_oak)):
            ?>
                <div class="titulo">
                    <p>Video</p>
                </div>
                <div class="prod-video-cont">
                    <video controls>
                        <source src="<?php echo $video_mp4_oak; ?>" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <?php endif; ?>
            </section>
<<<<<<< HEAD
=======

>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
            <section class="slider-">
                <div class="titulo">
                    <p><?php echo get_field('titulo_slider_oakridge',$id_page);  ?></p>
                </div>
                <div>
                    <?php echo do_shortcode(get_field('slider_oakridge', $id_page)); ?>
                </div>
            </section>
        </div>

        <div class="slider-cont-tejas" id="s3">
<<<<<<< HEAD
			 <section class="slider-">
=======
            <section class="slider-">
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
                <?php
            $video_duration = get_field('video_duration', $id_page);
            if(!empty($video_duration)):
            ?>
                <div class="titulo">
                    <p>Video</p>
                </div>
                <div class="prod-video-cont">
                    <?php
                        echo do_shortcode($video_duration);
                    ?>
                </div>
                <?php endif; ?>
            </section>
            <section class="slider-">
                <div class="titulo">
                    <p><?php echo get_field('titulo_slider_duration', $id_page);  ?></p>
                </div>
                <div>
                    <?php echo do_shortcode(get_field('slider_duration', $id_page)); ?>
                </div>
            </section>
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
    <!-- fin de contenido de tejas -->
    <!-- aqui empiezan los carruseles  -->


    <!-- fin de contenido -->
    <!-- menu principal -->

    <!-- menu principal -->
</div>
<script>
<<<<<<< HEAD

var sup_video = $('#s1 video');
var oak_video = $('#s2 video');
var dur_video = $('#s3 video');

=======
var sup_video = $('#s1 video');
var oak_video = $('#s2 video');
var dur_video = $('#s3 video');
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
$(document).ready(function() {

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };
<<<<<<< HEAD
=======




>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
    var tech = getUrlParameter('modelo');
    if (tech == 'supreme') {
        $('.button-item').removeClass('act');
        $('.slider-cont-tejas').removeClass('act');
        $('.tejas-item').removeClass('act');
        $('.img-item').removeClass('act');
        $('.teja').removeClass('act');
        $('#supreme').addClass('act');

        $('#supreme-img').addClass('act');
        $('#tejas-1 .tejas-item').addClass('act');
        $('#t1').addClass('act');
        $('#s1').addClass('act');
    } else if (tech == 'oakridge') {
        $('.button-item').removeClass('act');
        $('.slider-cont-tejas').removeClass('act');

        $('.tejas-item').removeClass('act');
        $('.img-item').removeClass('act');
        $('.teja').removeClass('act');

        $('#oakridge').addClass('act');

        $('#oakridge-img').addClass('act');
        $('#tejas-2 .tejas-item').addClass('act');
        $('#t2').addClass('act');
        $('#s2').addClass('act');

    } else if (tech == 'duration') {
        $('.button-item').removeClass('act');
        $('.tejas-item').removeClass('act');
        $('.slider-cont-tejas').removeClass('act');

        $('.img-item').removeClass('act');
        $('.teja').removeClass('act');

        $('#duration').addClass('act');
        $('#duration-img').addClass('act');
        $('#tejas-3 .tejas-item').addClass('act');
        $('#t3').addClass('act');
        $('#s3').addClass('act');
    }

<<<<<<< HEAD
	if (sup_video.get(0)) {
			sup_video.get(0).play();
			sup_video.get(0).muted = false;

	}

});
=======
});

>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
$('#supreme').click(function() {
    $('.button-item').removeClass('act');
    $('.slider-cont-tejas').removeClass('act');
    $('.tejas-item').removeClass('act');
    $('.img-item').removeClass('act');
    $('.teja').removeClass('act');
    $(this).addClass('act');
    $('#supreme-img').addClass('act');
    $('#tejas-1 .tejas-item').addClass('act');
    $('#t1').addClass('act');
    $('#s1').addClass('act');

<<<<<<< HEAD
	if (oak_video.get(0)) {
=======
    if (oak_video.get(0)) {
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
        oak_video.get(0).pause();
    }

    if (dur_video.get(0)) {
        dur_video.get(0).pause();
    }

<<<<<<< HEAD
	if (sup_video.get(0)) {
		if (sup_video.get(0).paused) {
			sup_video.get(0).play();
		}
	}
=======
    if (sup_video.get(0).paused) {
        sup_video.get(0).play();
    }
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
});
$('#oakridge').click(function() {
    $('.button-item').removeClass('act');
    $('.slider-cont-tejas').removeClass('act');

    $('.tejas-item').removeClass('act');
    $('.img-item').removeClass('act');
    $('.teja').removeClass('act');

    $(this).addClass('act');
    $('#oakridge-img').addClass('act');
    $('#tejas-2 .tejas-item').addClass('act');
    $('#t2').addClass('act');
    $('#s2').addClass('act');
<<<<<<< HEAD

	if (sup_video.get(0)) {
=======
    console.log(sup_video.get(0), oak_video, dur_video);

    if (sup_video.get(0)) {
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
        sup_video.get(0).pause();
    }

    if (dur_video.get(0)) {
        dur_video.get(0).pause();
    }

<<<<<<< HEAD
	if (oak_video.get(0)) {
    	if (oak_video.get(0).paused) {
        	oak_video.get(0).play();
	    }
 	}
=======
    if (oak_video.get(0).paused) {
        oak_video.get(0).play();
    }

>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
});
$('#duration').click(function() {
    $('.button-item').removeClass('act');
    $('.tejas-item').removeClass('act');
    $('.slider-cont-tejas').removeClass('act');

    $('.img-item').removeClass('act');
    $('.teja').removeClass('act');

    $(this).addClass('act');
    $('#duration-img').addClass('act');
    $('#tejas-3 .tejas-item').addClass('act');
    $('#t3').addClass('act');
    $('#s3').addClass('act');

<<<<<<< HEAD
	 if (oak_video.get(0)) {
=======
    if (oak_video.get(0)) {
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
        oak_video.get(0).pause();
    }

    if (sup_video.get(0)) {
        sup_video.get(0).pause();
    }

<<<<<<< HEAD
	if (dur_video.get(0)) {
		if (dur_video.get(0).paused) {
			dur_video.get(0).play();
		}
	}
=======
    if (dur_video.get(0).paused) {
        dur_video.get(0).play();
    }
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
});
</script>
<?php get_footer(); ?>
