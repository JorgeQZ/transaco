<?php
/**
 * Template Name: Sustentabilidad Transaco
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
<<<<<<< HEAD
<?php
$texto1 = get_field('compromiso');
$texto2 = get_field('productos_sustentables');
$texto3 = get_field('footprint');
$texto4 = get_field('sustentabilidad');
$texto5 = get_field('operaciones_ecologicas');
?>
<div id="sustentabilidad">
    <!-- <div id="cont-titulo">
    <p id="titulo"> Sustentabilidad</p>
  </div>
  <div id="img-portada">
  </div> -->
=======

<div id="sustentabilidad">
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
    <div class="wrapper">
        <div class="content contentPage">
            <div>
                <p id="titulo">
<<<<<<< HEAD
                    <?php the_title(); ?>
                </p>
            </div>

            <article>
                <div class="img-options contImgNew">
                    <div class="img-item act">
                        <!-- Imagen destacada de la página -->
                        <?php

            $imgDestacada = get_the_post_thumbnail_url( get_the_ID(), 'page_banner' );

            if(!$imgDestacada){
              $imgDestacada = get_template_directory_uri().'/img/ai-bg.jpg';
            }
            ?>
                        <img src="<?php echo $imgDestacada ?>" alt="<?php echo the_title().' Imagen Destacada'; ?>">
                    </div>
                </div>
            </article>
            <div style="width: 100%; text-align: center; ">
            <iframe style="margin: 60px auto; max-width: 1000px" width="90%" height="480" src="https://www.youtube.com/embed/z0cIy413KzQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="div-cont-img" title="Compromiso">
        <div class="divs-childs-btn active-child-sust" destino="sust-compromiso">
            <img class="img-btn" src="<?php echo get_template_directory_uri() . '/img/sust-icon1.png' ?>" alt="">
            <div class="item-seleccionado"></div>
        </div>
        <div class="divs-childs-btn" destino="sust-productos" title="Productos sustentables">
            <img class="img-btn" src="<?php echo get_template_directory_uri() . '/img/sust-icon2.png' ?>" alt="">
            <div class="item-seleccionado"></div>
        </div>
        <div class="divs-childs-btn" destino="sust-footprint" title="Footprint">
            <img class="img-btn" src="<?php echo get_template_directory_uri() . '/img/sust-icon3.png' ?>" alt="">
            <div class="item-seleccionado"></div>
        </div>
        <div class="divs-childs-btn" destino="sust-sustentabilidad" title="Sustentabilidad">
            <img class="img-btn" src="<?php echo get_template_directory_uri() . '/img/sust-icon4.png' ?>" alt="">
            <div class="item-seleccionado"></div>
        </div>
        <div class="divs-childs-btn" destino="sust-operaciones" title="Operaciones ecológicas">
            <img class="img-btn" src="<?php echo get_template_directory_uri() . '/img/sust-icon5.png' ?>" alt="">
            <div class="item-seleccionado"></div>
        </div>
    </div>
    <div class="div-cont-desc-pan">

        <div id="sust-compromiso" class="div-active-sust cont-sust-info ">
            <p class="sust-tit">
                Compromiso <br>
                <span class="sust-desc">
                    <?php echo $texto1 ?>
                </span>
            </p>
        </div>

        <div id="sust-productos" class="cont-sust-info">
            <p class="sust-tit">
                Productos sustentables <br>
                <span class="sust-desc">
                    <?php echo $texto2 ?>
                </span>
            </p>
        </div>

        <div id="sust-footprint" class="cont-sust-info">
            <p class="sust-tit">
                Footprint <br>
                <span class="sust-desc">
                    <?php  echo $texto3 ?>
                </span>
            </p>
        </div>

        <div id="sust-sustentabilidad" class="cont-sust-info">
            <p class="sust-tit">
                Sustentabilidad <br>
                <span class="sust-desc">
                    <?php  echo $texto4 ?>
                </span>
            </p>
        </div>

        <div id="sust-operaciones" class="cont-sust-info">
            <p class="sust-tit">
                Operaciones ecológicas <br>
                <span class="sust-desc">
                    <?php  echo $texto5 ?>
                </span>
            </p>
        </div>

        <div class="div-cont-desc">
        </div>
    </div>
    <div class="wp-video" style="max-width: 1280px; margin: 0 auto; margin-bottom: 90px; width: 80%;">
        <video class="wp-video-shortcode" id="video-234-1" preload="metadata" controls="controls" style="width: 100%; max-width: 1280px; margin: 0 auto" poster="<?php echo get_template_directory_uri() . '/img/poster.png' ?>">
            <source type="video/mp4" src="http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4?_=1" />
            <a href="http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4">http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4</a>
        </video>
    </div>

    <div class="cont-div-exp">

        <div class="cont-foot">
            <div class="cont-foot-desc">
                <!-- <p class="tit-cont-foot">Todo Panel Pink Project</p> -->
                <div class="tit-cont-foot">
                    <?php
      	echo get_field('titulo_inferior');
      	?>
                </div>
                <!--<p class="desc-cont-foot">Todo Panel, empresa contratista y especificadora <br>
        de aislamiento térmico de Owens Corning, desarrolló el <br> Salón de Usos Múltiples en el Country Club de <br> Guadalajara.</p>-->
                <div class="desc-cont-foot">
                    <?php
	echo get_field('texto_pink_roof');
		?>
                </div>
            </div>
            <div class="cont-foot-img">
                <?php
	$img_pink_roof = get_field('imagen_pink_roof');
		   if($img_pink_roof){
			   ?>
                <img src="<?php echo $img_pink_roof; ?>" alt="">
                <?php
		   }else{
			   ?>
                <img src="<?php echo get_template_directory_uri() . '/img/index/fondo-1.jpg' ?>" alt="">
                <?php
		   }
		  ?>

            </div>
        </div>

    </div>
</div>

<script>
$(document).ready(function() {



    $(".divs-childs-btn").click(function() {

        $('.divs-childs-btn').each(function() {
            $(this).removeClass('active-child-sust');
        });

        $(this).addClass('active-child-sust');

        var divInfo = $(this).attr('destino');

        $('.cont-sust-info').each(function() {
            $(this).removeClass('div-active-sust');
        });

        $('#' + divInfo).addClass('div-active-sust');

    });



});
</script>
</section>

<style>
.contNew {
    display: flex;
    width: 80%;
}

.contentPage {
    width: 100% !important;
}

.textDate {
    font-size: 20px;
    font-family: 'Akzid-Bol';
}

.textContent {
    font-size: 16px;
    font-family: 'Akzid-Reg';
}

</style>
<?php get_footer(); ?>
=======
                    <?php the_title();?>
                </p>
            </div>
            <?php $imgDestacada = get_the_post_thumbnail_url(get_the_ID(), 'full');if (!$imgDestacada) {$imgDestacada = get_template_directory_uri() . '/img/ai-bg.jpg';}?>
            <img src="<?php echo $imgDestacada ?>" class="banner">

            <div class="inner-wrapper">
                <hr>
                <!-- Item 1 -->
                <div class="inner-item">
                    <div class="column">
                        <div class="blue-title">
                            <span>
                                <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/sust-icon1.png' ?>" alt="">
                            </span>
                            compromiso
                        </div>

                        <div class="desc">
                            Nuestro compromiso está en desarrollar productos que contribuyan a generar un entorno más sustentable a través de la innovación permanente, la conservación de los recursos y programas sólidos de reciclado para reducir los impactos ambientales y mejorar la eficiencia energética.
                            <br><br>
                            La sustentabilidad en Owens Corning es la estrategia central de nuestro negocio, y así mejorar la eficiencia energética, disminuyendo el uso de recursos naturales a través de tecnología e innovación.
                        </div>
                    </div>
                    <div class="column">
                        <div class="desc-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_1.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 1 -->
                <hr>
                <!-- Item 2 -->
                <div class="inner-item">
                    <div class="column">
                        <div class="blue-title">
                            <span>
                                <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/sust-icon2.png' ?>" alt="">
                            </span>
                            productos sustentables
                        </div>

                        <div class="desc">
                            OWENS CORNING es considerado uno de los mayores consumidores de vidrio reciclado en el mundo, para producir aislamiento térmico de fibra de vidrio, el cual está certificado por organismos internacionales.
                            <br><br>
                            FOAMULAR ® XPS se fabrica con un agente espumante que no daña la capa de ozono, lo que lo convierte en “Zero-Ozone Depleting.
                        </div>
                    </div>
                    <div class="column">
                        <div class="desc-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_2.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 2 -->
                <hr>
                <!-- Item 3 -->
                <div class="inner-item">
                    <div class="column">
                        <div class="blue-title">
                            <span>
                                <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/sust-icon3.png' ?>" alt="">
                            </span>
                            footprint
                        </div>

                        <div class="desc">
                            Owens Corning ha hecho progresos significativos en el impacto ambiental y seguimos buscando oportunidades para reducir nuestra huella ambiental, a través de una continua reducción del uso de recursos y en las emisiones ambientales de nuestras operaciones.
                        </div>
                    </div>
                    <div class="column">
                        <div class="desc-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_3.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 3 -->
                <hr>
                <!-- Item 4 -->
                <div class="inner-item">
                    <div class="column">
                        <div class="blue-title">
                            <span>
                                <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/sust-icon4.png' ?>" alt="">
                            </span>
                            sustentabilidad
                        </div>

                        <div class="desc">
                            Trabajamos para hacer al mundo un mejor lugar para vivir. Conceptos, personas, procesos y soluciones se encuentran alineados bajo este alero.
                        </div>
                    </div>
                    <div class="column">
                        <div class="desc-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_4.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 4 -->
                <hr>
                <!-- Item 5 -->
                <div class="inner-item">
                    <div class="column">
                        <div class="blue-title">
                            <span>
                                <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/sust-icon5.png' ?>" alt="">
                            </span>
                            operaciones ecologicas
                        </div>

                        <div class="desc">
                            Reducir el impacto de nuestras operaciones manufactureras alrededor del mundo. Como objetivo 2020, queremos dar al mundo más de lo que obtenemos de él.
                            <br><br>
                            Lo estamos logrando al usar nuestros activos fijos con mayor eficiencia
                            y aumentando la influencia positiva en el ambiente.
                        </div>
                    </div>
                    <div class="column">
                        <div class="desc-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_5.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 5 -->
                <hr>
                <div class="inner-videos">
                    <div class="blue-title">videos</div>
                    <div class="grid">
                        <video class="wp-video-shortcode" id="video-234-1" preload="metadata" controls="controls" poster="<?php echo get_template_directory_uri() . '/img/poster.png' ?>">
                            <source type="video/mp4" src="http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4?_=1" />
                            <a href="http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4">http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4</a>
                        </video>

                        <iframe src="https://www.youtube.com/embed/z0cIy413KzQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="cont-div-exp">
                <div class="cont-foot">
                    <div class="cont-foot-desc">

                        <div class="tit-cont-foot">
                        </div>

                        <div class="desc-cont-foot">
                            <h3 style="text-align: center;">Owens Corning es considerado uno de los mayores consumidores de vidrio reciclado en el mundo.&nbsp; Aprovechamos el vidrio reciclado para producir aislamiento térmico de fibra de vidrio.</h3>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="cont-foot-img">
                        <img src="https://transaco.cl/wp-content/uploads/2018/05/PANTHER-SITTING-WEB-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php get_footer();?>
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
