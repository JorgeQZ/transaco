<?php
/**
 * Template Name: Home  Transaco
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
$slide1 = get_field('slide-1');
$slide2 = get_field('slide-2');
$slide3 = get_field('slide-3');
$slide4 = get_field('slide-4');
$slide5 = get_field('slide-5');
?>
<section id="section-img-inte">
 <div class="slider">
  <div  class="sliderHomeExt" style="background-image: url('<?php echo $slide1 ?>');">
  </div>
  <div  class="sliderHomeExt" style="background-image: url('<?php echo $slide2 ?>');">
  </div>
  <div  class="sliderHomeExt" style="background-image: url('<?php echo $slide3 ?>');">
  </div>
  <div  class="sliderHomeExt" style="background-image: url('<?php echo $slide4 ?>');">
  </div>
  <div  class="sliderHomeExt" style="background-image: url('<?php echo $slide5 ?>');">
  </div>
</div>
</section>
<section id="section-slider">

  <?php echo do_shortcode('[slide-anything id="226"]'); ?>

</section>

<!-- Sección Disclaimer -->

<style>
	.contenedor-modulo-disclaimer{
		padding: 90px 10px 90px 10px;
		background: white;
	}
	.contenedor-modulo-disclaimer .cont-modulo-disclaimer{
		width: 80%;
		margin: 0 auto;
		display: flex;
		align-items: center;
	}
	.contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-img img{
		width: 155px;
		display: block;
		margin: 0 auto;
	}
	.contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info{
		margin-left: 100px;
	}
	.contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info p.desc{
		font-family: 'Akzid-Reg';		
		color: #5f5f5f;
		line-height: 18px;
		font-size: 15px;
		margin: 10px 0px;
		text-align: justify;
	}
	.contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info p.desc span{
		/*color: #ff001e;*/
		text-decoration: underline;
	}
	
	@media screen and (min-width: 1024px) and (max-width: 1279px){
		.contenedor-modulo-disclaimer .cont-modulo-disclaimer{
			width: 90%;
		}
	}
	@media screen and (min-width: 768px) and (max-width: 1023px){
		.contenedor-modulo-disclaimer .cont-modulo-disclaimer{
			width: 95%;
		}
		.contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info{
			margin-left: 30px;
		}
	}
	@media screen and (max-width: 767px){
		.contenedor-modulo-disclaimer .cont-modulo-disclaimer{
			flex-direction: column;
			width: 90%;
		}
		
		.contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-img{
			width: 100%;
		}
		.contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-img img{
			width: 75%;
			margin: 0 auto;
			display: block;
		}
		.contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info{
			width: 90%;
			margin-left: 0;
			margin: 0 20px;
		}
	}
</style>

<section class="contenedor-modulo-disclaimer">
	<div class="cont-modulo-disclaimer">
		<div class="cont-img">
		<img src="http://transaco.cl/wp-content/uploads/2020/06/icon-disclaimer.png" alt="">
		</div>
		<div class="cont-info">
			<p class="desc">
			“Estimado cliente, para ejercer el derecho de retracto y las garantías legales se estará a lo establecido en la Ley N°19.496 sobre Protección de los Derechos de los Consumidores (la “Ley”). En tal sentido, el derecho a retracto deberá ejercerse dentro del plazo de diez días contados desde la recepción del producto por el cliente, acompañando éste la respectiva boleta, factura o cualquier otro documento que acredite la compra, siempre que el producto se encuentre en perfecto estado y con sus elementos originales del embalaje en buen estado. Por su parte, los derechos establecidos en los artículos 19 y 20 de la Ley deberán ejercerse dentro del plazo de tres meses contados desde la recepción del producto por el cliente, acompañando éste la respectiva boleta, factura o cualquier otro documento que acredite la compra, siempre que el producto se encuentre en perfecto estado. <span> Durante la vigencia del actual Estado de Excepción Constitucional de catástrofe por calamidad pública, y hasta la fecha de su término efectivo, se entenderán suspendidos los plazos señalados para el ejercicio de estos derechos. </span>"
			</p>
		</div>
	</div>
</section>

<!-- Fin Sección Disclaimer -->


<!-- Sección Compromiso -->
<section id="section-compromiso">
  <div class="cont-compro">
    <div class="cont-img-compro">

      <!--      <img  class="img-compro" src="<?php echo get_template_directory_uri() . '/img/index/img-compro.jpg' ?>" alt=""> -->
      <img class="img-compro" src="<?php echo get_field('imagen_nuestro_compromiso'); ?>">
    </div>
    <div class="cont-text-compro">
      <div class="cont-text">
        <p class="tit-compro">Nuestro Compromiso</p>
        <!--
		  <p class="desc-compro">En Owens Corning hemos demostrado nuestro compromiso
          creando productos que contribuyan a generar un entorno sustentable
        a través de la innovación permanente.</p>
      -->
      <div class="desc-compro">
       <?php echo get_field('nuestro_compromiso'); ?>
     </div>
     <p class="btn-compro"><a style="color:white;" href="http://transaco.cl/sustentabilidad/">Conoce más<a></p>
     </div>
   </div>
   <div class="cont-img-compro-xs">
    <img class="img-compro" src="<?php echo get_field('imagen_nuestro_compromiso'); ?>">
  </div>
</div>
</section>

<!-- Fin sección Compromiso -->


<!-- Carrusel de noticias -->
<section id="home-noticias" class="home-noticias" style="overflow: hidden !important;">
  <ul class="home-noticias-cont">
    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 5
    );

    $the_query = new WP_QUERY ( $args );
    while($the_query->have_posts()): 
      $the_query->the_post(); ?>
      <li class="home-noticias-item">
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

          <a class="mas" href="<?php the_permalink();?>" >ver más</a>
        </div>
      </li>
    <?php endwhile; wp_reset_query();?>
  </ul>
</section>
<!-- fin de carrusel de noticias -->



<!-- Inicio de sección de videos -->
<section id="video">
  <div class="cont-video">
    <div class="child-video-1">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/P31cjNEZNLg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="child-video-2">
      <div>
       <iframe width="100%" height="100%" src="https://www.youtube.com/embed/gK1src_Q0DU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     </div>
     <div>
       <iframe width="100%" height="100%" src="https://www.youtube.com/embed/woumCCoeR5Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     </div>
   </div>
 </div>
</section>
<section id="menuItems">  
 <div>
  <p>
    <span class="bold__">Oficinas y Showroom</span><br> 
    Valenzuela Castillo 1078 <br> 
    Providencia, Santiago, Chile <br> 
    Tel.: (56) 227 977 700 <br>

  </p>
  <p></p>
</div>            
<div>
  <p>
    <span class="bold__">Bodega</span><br>
    Av. Vizcaya N. 16.701-3 <br> 
    Parque Industrial Los Espinos - Pudahuel <br>
    Tel.: (56) 227 977 732<br>
  </p>
</div>
</section>

<script>
  $(window).load(function(){
    var $window = $(window);
    windowsize = $window.width();

    if (windowsize >= 320) {


      var slideWidth = $('#home-noticias').width();
      var slideCount = $('#home-noticias ul li').length;
      var sliderUlWidth = slideCount * slideWidth;


      $('#home-noticias ul').css({ width: sliderUlWidth});
      $('#home-noticias ul li').css({ width: slideWidth});
      $('#home-noticias ul li:first-child').appendTo('#home-noticias ul');

      function moveRight() {
        var position = ($('#home-noticias ul').position().left) - (slideWidth);

        $('#home-noticias ul').animate({
          left: position
        }, 2000, function () {
         var clone = $('#home-noticias ul li').first().clone();
         // console.log(clone);
         $('#home-noticias ul').append(clone);
         $('#home-noticias ul li').first().remove();
         $('#home-noticias ul').css('left', '');

       });
      };

      
    }
    if (windowsize >= 768) {

      var slideWidth = $('#home-noticias').width();
      var slideCount = $('#home-noticias ul li').length;
      var sliderUlWidth = slideCount * slideWidth;


      $('#home-noticias ul').css({ width: sliderUlWidth});
      $('#home-noticias ul li').css({ width: slideWidth/2});
      $('#home-noticias ul li:first-child').appendTo('#home-noticias ul');

      function moveRight() {
        var position = ($('#home-noticias ul').position().left) - (slideWidth/2);

        $('#home-noticias ul').animate({
          left: position
        }, 2000, function () {
         var clone = $('#home-noticias ul li').first().clone();
         // console.log(clone);
         $('#home-noticias ul').append(clone);
         $('#home-noticias ul li').first().remove();
         $('#home-noticias ul').css('left', '');

       });
      };

    }
    if (windowsize >= 1024) {

      var slideWidth = $('#home-noticias').width();
      var slideCount = $('#home-noticias ul li').length;
      var sliderUlWidth = slideCount * slideWidth;


      $('#home-noticias ul').css({ width: sliderUlWidth});
      $('#home-noticias ul li').css({ width: slideWidth/3});
      $('#home-noticias ul li:first-child').appendTo('#home-noticias ul');

      function moveRight() {
        var position = ($('#home-noticias ul').position().left) - (slideWidth/3);

        $('#home-noticias ul').animate({
          left: position
        }, 2000, function () {
         var clone = $('#home-noticias ul li').first().clone();
         // console.log(clone);
         $('#home-noticias ul').append(clone);
         $('#home-noticias ul li').first().remove();
         $('#home-noticias ul').css('left', '');

       });
      };

      
    }
    setInterval(function () {
      moveRight();
    }, 8000);
  });

  function MoveSlideHome(){
    $('a.bx-next').click();
  }
  setInterval(function () {
    MoveSlideHome();
  }, 8000);

</script>
<?php
get_footer();
?>
<!-- Fin de sección de videos -->