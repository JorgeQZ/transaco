<?php
/**
 * Template Name: Backup Documentos
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */

?>

<?php get_header(); ?>
<div class="wrapper">
    <!-- menu movil -->
    <!-- <div class="button-menu-mobile" id="bmm">
        <span>
        </span><span>Productos</span>
    </div> -->
    <!-- menu movil -->


    <!-- Sección Disclaimer -->

    <style>
    .wrapper {
        flex-wrap: wrap;
    }

    .contenedor-modulo-disclaimer {
        padding: 90px 10px 90px 10px;
        background: white;
    }

    .contenedor-modulo-disclaimer .cont-modulo-disclaimer {
        width: 80%;
        margin: 0 auto;
        display: flex;
        align-items: center;
    }

    .contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-img img {
        width: 155px;
        display: block;
        margin: 0 auto;
    }

    .contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info {
        margin-left: 100px;
    }

    .contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info p.desc {
        font-family: 'Akzid-Reg';
        color: #5f5f5f;
        line-height: 18px;
        font-size: 15px;
        margin: 10px 0px;
        text-align: justify;
    }

    .contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info p.desc span {
        /*color: #ff001e;*/
        text-decoration: underline;
    }

    @media screen and (min-width: 1024px) and (max-width: 1279px) {
        .contenedor-modulo-disclaimer .cont-modulo-disclaimer {
            width: 90%;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 1023px) {
        .contenedor-modulo-disclaimer .cont-modulo-disclaimer {
            width: 95%;
        }

        .contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info {
            margin-left: 30px;
        }
    }

    @media screen and (max-width: 767px) {
        .contenedor-modulo-disclaimer .cont-modulo-disclaimer {
            flex-direction: column;
            width: 90%;
        }

        .contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-img {
            width: 100%;
        }

        .contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-img img {
            width: 75%;
            margin: 0 auto;
            display: block;
        }

        .contenedor-modulo-disclaimer .cont-modulo-disclaimer .cont-info {
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

    <!-- contenido -->
    <div class="content">
        <div class="titulo">
            <p><?php the_title(); ?></p>
            <small>Garantías y fichas técnicas</small>
        </div>


        <div class="fichas-cont">
            <div class="cabecera">
                <!-- <div>Productos</div>
                <div>Fichas técnicas</div>
                <div>Garantías</div>
                <div>Leed</div>
                <div>Complementos</div> -->
                <div>Productos</div>
                <div>Fichas <br>Técnicas</div>
                <div>Folletos</div>
                <div>Garantías</div>
                <div>Certificado <br>Leed</div>
            </div>

            <?php
			$args = array(
				'post_type' => 'docs',
				'post_status' => 'publish',
				'post_per_page' => -1,
				'post_parent' => 0 ,
				'orderby' => 'date',
				'order' => 'ASC'
			);

			$the_query = new WP_Query($args);
			$parents_ID = array();
			while( $the_query->have_posts()):
				$poste = $the_query->the_post();
				$current_id = $post->ID;
				array_push($parents_ID, $current_id);
			endwhile;

			foreach ($parents_ID as $parent_ID)
			{
				$ficha_nombre = get_the_title($parent_ID);
				$ficha_tecnica = get_field('ficha_tecnica', $parent_ID);
				?>
            <div class="ficha-item">
                <div class="titulo">
                    <?php echo get_the_title($parent_ID)?>
                </div>

                <?php

					$new_arg = array(
						'post_type' => 'docs',
						'post_status' => 'publish',
						'post_per_page' => -1,
						'post_parent' => $parent_ID,
						'orderby' => 'date',
						'order' => 'ASC'
					);
					$new_query = new WP_Query($new_arg);
					while( $new_query->have_posts()):
						$new_query->the_post();
						$current_id = $post->ID;
						$ficha_nombre = get_the_title($current_id);
						$ficha_tecnica = get_field('ficha_tecnica', $current_id);
						$garantia = get_field('garantia', $current_id);
						$leed = get_field('leed', $current_id);
						$complementos = get_field('complementos', $current_id);
						?>
                <div class="outer-row">
                    <div class="inner-row">
                        <div class="subtitle">
                            <ul>
                                <li><?php echo $ficha_nombre;?></li>
                            </ul>
                        </div>
                        <div class="ficha">
                            <?php if($ficha_tecnica){ ?>
                            <a href="<?php echo $ficha_tecnica ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Ficha técnica</p>
                            </a>
                            <?php } ?>
                            <div></div>
                        </div>
                        <div class="ficha">
                            <?php if($ficha_tecnica){ ?>
                            <a href="<?php echo $ficha_tecnica ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Ficha técnica</p>
                            </a>
                            <?php } ?>
                            <div></div>
                        </div>
                        <div class="folleto">
                            <?php if($folleto){ ?>
                            <a href="<?php echo $folleto ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Folleto</p>
                            </a>
                            <?php } ?>
                            <div></div>
                        </div>
                        <div class="garantia">
                            <?php if($garantia){ ?>
                            <a href="<?php echo $garantia ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Garantía</p>
                            </a>
                            <?php } ?>

                        </div>
                        <div class="leed">
                            <?php if($leed){ ?>
                            <a href="<?php echo $leed ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Leed</p>
                            </a>
                            <?php } ?>

                        </div>
                    </div>

                    <?php
                    $new_sub_arg = array(
                        'post_type' => 'docs',
                        'post_status' => 'publish',
                        'post_per_page' => -1,
                        'post_parent' => $current_id,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    );
                    $new_sub_query = new WP_Query($new_sub_arg);
                    while( $new_sub_query->have_posts()):
                        $new_sub_query->the_post();
                        $current_sub_id = $post->ID;
                        $ficha_nombre = get_the_title($current_sub_id);
                        $ficha_tecnica = get_field('ficha_tecnica', $current_sub_id);
                        $garantia = get_field('garantia', $current_sub_id);
                        $leed = get_field('leed', $current_sub_id);
                    ?>
                    <div class="sub-inner-row">
                        <div class="subtitle">
                            <ul>
                                <li><?php echo $ficha_nombre;?></li>
                            </ul>
                        </div>
                        <div class="ficha">
                            <?php if($ficha_tecnica){ ?>
                            <a href="<?php echo $ficha_tecnica ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Ficha técnica</p>
                            </a>
                            <?php } ?>
                            <div></div>
                        </div>
                        <div class="ficha">
                            <?php if($ficha_tecnica){ ?>
                            <a href="<?php echo $ficha_tecnica ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Ficha técnica</p>
                            </a>
                            <?php } ?>
                            <div></div>
                        </div>

                        <div class="garantia">
                            <?php if($garantia){ ?>
                            <a href="<?php echo $garantia ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Garantía</p>
                            </a>
                            <?php } ?>

                        </div>
                        <div class="leed">
                            <?php if($leed){ ?>
                            <a href="<?php echo $leed ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                                <p>Leed</p>
                            </a>
                            <?php } ?>

                        </div>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
                <?php
                    endwhile;
                    wp_reset_query() ;
					?>

            </div>
            <?php
			}
			?>
        </div>
    </div>
    <!-- fin de contenido -->
</div>
<?php get_footer(); ?>
