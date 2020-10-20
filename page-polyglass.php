<?php
/**
 * Template Name: Polyglass
 *
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */
?>





<?php
get_header();
$texto = get_field('texto');
$productos = get_field('productos');
$slider = get_field('sa_slider_pc');
?>
<div class="wrapper">
    <div class="content">
        <div class="hero-banner">
            <div class="title">
                <?php the_title(); ?>
            </div>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'page_banner');?>">
        </div>
        <div class="content-poly">
            <div class="grid-cont">
                <div class="col">
                    <div class="logo">
                        <img src="<?php echo $texto['imagen']?>" alt="asociacion-chilena">
                    </div>
                </div>
                <div class="col">
                    <div class="desc">
                        <?php echo $texto['descripcion']?>
                    </div>
                </div>
            </div>
        </div>

        <div class="cont-prod">
            <div class="item-prod">
                <div class="img-cont">
                    <?php if($productos['producto_1']['imagen']):?>
                    <img src="<?php echo $productos['producto_1']['imagen'] ?>" alt="">
                    <?php endif; ?>
                </div>

                <?php if($productos['producto_1']['archivo']):?>
                <div class="text">
                    Ver ficha técnica
                </div>
                <a download href="<?php echo $productos['producto_1']['archivo']?>" class="button">
                    <img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt="">
                </a>
                <?php endif; ?>
            </div>
            <div class="item-prod">
                <div class="img-cont">
                    <?php if($productos['producto_2']['imagen']):?>
                    <img src="<?php echo $productos['producto_2']['imagen'] ?>" alt="">
                    <?php endif; ?>
                </div>
                <?php if($productos['producto_2']['archivo']):?>
                <div class="text">
                    Ver ficha técnica
                </div>
                <a download href="<?php echo $productos['producto_2']['archivo']?>" class="button">
                    <img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt="">
                </a>
                <?php endif; ?>
            </div>
        </div>


        <section class="slider-">
            <div class="titulo">
                <p>Productos Complementarios</p>
            </div>
            <div>
                <?php echo do_shortcode($slider); ?>
            </div>
        </section>
    </div>

</div>
<?php get_footer(); ?>
