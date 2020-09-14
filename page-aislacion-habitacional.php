<?php
/**
 * Template Name: Productos Aislación Habitacional
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

$linkVideo = get_field('link_1') ;
$linkBiblioteca = get_field('link_2');
$linkProducto = get_field('link_3') ;
?>


<?php get_header(); ?>

<?
?>
<div class="wrapper">



    <!-- contenido -->
    <div class="content">
        <div class="titulo">
            <p><?php the_title(); ?></p>
        </div>
        <div class="img-options">
            <div class="img-item act">
                <!-- Imagen destacada de la página -->
                <?php
				$thumbnail = get_post_thumbnail_id($post->ID);
				$imgDestacada = wp_get_attachment_url( $thumbnail );
				if(!$thumbnail){
					$imgDestacada = get_template_directory_uri().'/img/ai-bg.jpg';
				}
				?>
                <img src="<?php echo $imgDestacada ?>" alt="<?php echo the_title().' Imagen Destacada'; ?>">
            </div>
        </div>
        <section class="productos">
            <div class="prod-cont">
                <p class="titulo">Aislante Libre</p>
                <div class="slider-cont" id="slider">
                    <a class="control left" id="left-fs">
                        <img src="<?php echo get_template_directory_uri().'/img/left-arrow-grey.png' ?>" alt="">
                    </a>
                    <a class="control right" id="right-fs">
                        <img src="<?php echo get_template_directory_uri().'/img/right-arrow-grey.png' ?>" alt="">
                    </a>
                    <ul id="aislante-libre">
                        <?php
						$args_2  = array (
							'post_type' => 'aislantes',
							'post_per_page' => -1,
							'post_status' => 'publish',
							'tax_query' => array(
								array(
									'taxonomy' => 'categoria_aislantes',
									'field' => 'slug',
									'terms' => 'aislantes-sin-papel	'
								)
							)
						);
						$the_query = new WP_QUERY($args_2);
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							$current_id = $post->ID;
							$image =  get_field('img_desc', $current_id);
							$titulo =   get_field('nombre', $current_id);
							$des 	= get_field('descripcion', $current_id);
							$pdf =  get_field('archivo_pdf', $current_id);
							$pdf2 =  get_field('ficha_de_instalacion', $current_id);
							$pdf3 =  get_field('archivo_de_imagenes', $current_id);
							$pdf4 =  get_field('garantia', $current_id);

							?>
                        <li>
                            <div class="img_desc">
                                <img src="<?php echo $image ?>" alt="">
                            </div>
                            <div class="cont-info">
                                <div class="info">
                                    <p class="titulo"><?php echo $titulo ?></p>
                                    <?php echo $des; ?>
                                </div>
                                <div class="cont-files">
                                    <?php if($pdf){ ?>
                                    <div class="file">
                                        Ficha técnica
                                        <a href="<?php echo $pdf ?>" target="_bla">
                                            <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php if($pdf2){ ?>
                                    <div class="file">
                                        Ficha de instalación
                                        <a href="<?php echo $pdf2 ?>" target="_bla">
                                            <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php if($pdf3){ ?>
                                    <div class="file">
                                        Archivo de imagenes
                                        <a href="<?php echo $pdf3 ?>" target="_bla">
                                            <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php if($pdf4){ ?>
                                    <div class="file">
                                        Garantía
                                        <a href="<?php echo $pdf4 ?>" target="_bla">
                                            <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </li>
                        <?php
						endwhile;
						?>
                    </ul>

                </div>
            </div>
            <div class="prod-cont">
                <p class="titulo">Aislante con papel</p>
                <div class="slider-cont">
                    <a class="control left" id="left-ss">
                        <img src="<?php echo get_template_directory_uri().'/img/left-arrow-grey.png' ?>" alt="">
                    </a>
                    <a class="control right" id="right-ss">
                        <img src="<?php echo get_template_directory_uri().'/img/right-arrow-grey.png' ?>" alt="">
                    </a>
                    <ul id="aislante-papel">
                        <?php
						$args_2  = array (
							'post_type' => 'aislantes',
							'post_per_page' => -1,
							'post_status' => 'publish',
							'tax_query' => array(
								array(
									'taxonomy' => 'categoria_aislantes',
									'field' => 'slug',
									'terms' => 'aislantes-con-papel	'
								)
							)
						);
						$the_query = new WP_QUERY($args_2);
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							$current_id = $post->ID;
							$image =  get_field('img_desc', $current_id);
							$titulo =   get_field('nombre', $current_id);
							$des 	= get_field('descripcion', $current_id);
							$pdf =  get_field('archivo_pdf', $current_id);
							$pdf2 =  get_field('ficha_de_instalacion', $current_id);
							?>
                        <li>
                            <div class="img_desc">
                                <img src="<?php echo $image ?>" alt="">
                            </div>
                            <div class="cont-info">
                                <div class="info">
                                    <p class="titulo"><?php echo $titulo ?></p>
                                    <?php echo $des; ?>
                                </div>
                                <div class="cont-files">
                                    <?php if($pdf){ ?>
                                    <div class="file">
                                        Ficha técnica
                                        <a href="<?php echo $pdf ?>" target="_bla">
                                            <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php if($pdf2){ ?>
                                    <div class="file">
                                        Ficha de instalación
                                        <a href="<?php echo $pdf2 ?>" target="_bla">
                                            <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </li>
                        <?php
						endwhile;
						?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="lands">

            <div onclick="ShowModal('video_1')">

                <img src="<?php echo get_template_directory_uri().'/img/__primer.png' ?>">

            </div>

            <div onclick="ShowModal('video_2')">

                <img src="<?php echo get_template_directory_uri().'/img/__second.png' ?>">

            </div>

            <div onclick="ShowModal('video_3')">

                <img src="<?php echo get_template_directory_uri().'/img/__tercer.png'; ?>">

            </div>

        </section>
        <section class="slider-">
            <div class="titulo">
                <p>Productos Complementarios</p>

            </div>
            <div>
                <?php echo do_shortcode($slider) ?>
            </div>
        </section>
    </div>
    <!-- fin de contenido -->


</div>


<div class="video-cont" id="c-video_1">
    <div class="close_video" onclick="HideModal('video_1')">X</div>
    <iframe id="video_1" src="https://www.youtube-nocookie.com/embed/<?php echo $linkVideo ?>?version=3&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>

<div class="video-cont" id="c-video_2">
    <div class="close_video" onclick="HideModal('video_2')">X</div>

    <iframe id="video_2" src="https://www.youtube-nocookie.com/embed/<?php echo $linkBiblioteca ?>?version=3&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>

<div class="video-cont" id="c-video_3">
    <div class="close_video" onclick="HideModal('video_3')">X</div>

    <iframe id="video_3" src="https://www.youtube-nocookie.com/embed/<?php echo $linkProducto ?>?version=3&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<script>
function ShowModal(id) {
    $("#c-" + id).addClass('act');
}

function HideModal(id) {
    $("#c-" + id).removeClass('act');
    $('#' + id).each(function() {
        var frame = document.getElementById(id);
        frame.contentWindow.postMessage(
            '{"event":"command","func":"pauseVideo","args":""}',
            '*');
    });
}

$(window).load(function() {
    var $window = $(window);
    windowsize = $window.width();


    var slideWidth = $('.slider-cont').width();
    var slideCount = $('.slider-cont ul li').length;
    var sliderUlWidth = slideCount * slideWidth;
    // Aislante Libre
    $('.slider-cont #aislante-libre').css({
        width: sliderUlWidth
    });
    $('.slider-cont #aislante-libre li').css({
        width: slideWidth
    });
    $('.slider-cont #aislante-libre li:last-child').prependTo('.slider-cont #aislante-libre');


    $('#right-fs').unbind().click(function() {
        moveRight();
    });
    $('#left-fs').unbind().click(function() {
        moveLeft();
    });


    function moveLeft() {
        slideWidth = $('.slider-cont').width();

        $('.slider-cont #aislante-libre').css('left', -slideWidth);

        var clone = $('.slider-cont #aislante-libre li').last().clone();
        clone.prependTo($('.slider-cont #aislante-libre'));
        $('.slider-cont #aislante-libre li').last().remove();
        $('.slider-cont #aislante-libre').animate({
            left: ''
        }, 500, function() {});
    }


    function moveRight() {
        slideWidth = $('.slider-cont').width();
        console.log(slideWidth);
        $('.slider-cont #aislante-libre').animate({
            left: -slideWidth
        }, 500, function() {
            $('.slider-cont #aislante-libre li:first-child').appendTo('.slider-cont #aislante-libre');
            $('.slider-cont #aislante-libre').css('left', '');
        });
    };

    // Aislante Con papel
    $('.slider-cont #aislante-papel').css({
        width: sliderUlWidth
    });
    $('.slider-cont #aislante-papel li').css({
        width: slideWidth
    });
    $('.slider-cont #aislante-papel li:last-child').prependTo('.slider-cont #aislante-papel');

    $('#right-ss').unbind().click(function() {
        moveRight2();
    });
    $('#left-ss').unbind().click(function() {
        moveLeft2();
    });

    function moveLeft2() {
        slideWidth = $('.slider-cont').width();

        $('.slider-cont #aislante-papel').css('left', -slideWidth);

        var clone = $('.slider-cont #aislante-papel li').last().clone();
        clone.prependTo($('.slider-cont #aislante-papel'));
        $('.slider-cont #aislante-papel li').last().remove();
        $('.slider-cont #aislante-papel').animate({
            left: ''
        }, 500, function() {});
    }

    function moveRight2() {
        $('#aislante-papel').animate({
            left: -slideWidth
        }, 500, function() {
            $('.slider-cont #aislante-papel li:first-child').appendTo('.slider-cont #aislante-papel');
            $('.slider-cont #aislante-papel').css('left', '');
        });
    };
});

$(window).resize(function() {
    var $window = $(window);
    windowsize = $window.width();


    var slideWidth = $('.slider-cont').width();
    var slideCount = $('.slider-cont ul li').length;
    var sliderUlWidth = slideCount * slideWidth;
    // Aislante Libre
    $('.slider-cont #aislante-libre').css({
        width: sliderUlWidth
    });
    $('.slider-cont #aislante-libre li').css({
        width: slideWidth
    });
    $('.slider-cont #aislante-libre li:last-child').prependTo('.slider-cont #aislante-libre');


    $('#right-fs').unbind().click(function() {
        moveRight();
    });
    $('#left-fs').unbind().click(function() {
        moveLeft();
    });

    function moveLeft() {
        slideWidth = $('.slider-cont').width();

        $('.slider-cont #aislante-libre').css('left', -slideWidth);

        var clone = $('.slider-cont #aislante-libre li').last().clone();
        clone.prependTo($('.slider-cont #aislante-libre'));
        $('.slider-cont #aislante-libre li').last().remove();
        $('.slider-cont #aislante-libre').animate({
            left: ''
        }, 500, function() {});
    }

    function moveRight() {
        slideWidth = $('.slider-cont').width();
        console.log(slideWidth);
        $('.slider-cont #aislante-libre').animate({
            left: -slideWidth
        }, 500, function() {
            $('.slider-cont #aislante-libre li:first-child').appendTo('.slider-cont #aislante-libre');
            $('.slider-cont #aislante-libre').css('left', '');
        });
    };

    // Aislante Con papel
    $('.slider-cont #aislante-papel').css({
        width: sliderUlWidth
    });
    $('.slider-cont #aislante-papel li').css({
        width: slideWidth
    });
    $('.slider-cont #aislante-papel li:last-child').prependTo('.slider-cont #aislante-papel');

    $('#right-ss').unbind().click(function() {
        moveRight2();
    });
    $('#left-ss').unbind().click(function() {
        moveLeft2();
    });

    function moveLeft2() {
        slideWidth = $('.slider-cont').width();

        $('.slider-cont #aislante-papel').css('left', -slideWidth);

        var clone = $('.slider-cont #aislante-papel li').last().clone();
        clone.prependTo($('.slider-cont #aislante-papel'));
        $('.slider-cont #aislante-papel li').last().remove();
        $('.slider-cont #aislante-papel').animate({
            left: ''
        }, 500, function() {});
    }

    function moveRight2() {
        $('#aislante-papel').animate({
            left: -slideWidth
        }, 500, function() {
            $('.slider-cont #aislante-papel li:first-child').appendTo('.slider-cont #aislante-papel');
            $('.slider-cont #aislante-papel').css('left', '');
        });
    };
});
</script>
<?php get_footer(); ?>
