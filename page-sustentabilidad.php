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
