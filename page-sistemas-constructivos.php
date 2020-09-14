<?php
/**
 * Template Name: Sistemas Constructivos
 *
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */

global $post;
$id = get_the_ID();

$slider = get_field('sa_slider_pc', $id);
$order = get_field('organizacion', $id);

?>
<?php
get_header();
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
                $thumbnail = get_post_thumbnail_id($id_page);
                $imgDestacada = wp_get_attachment_url( $thumbnail );
                if(!$thumbnail){
                    $imgDestacada = get_template_directory_uri().'/img/ai-bg.jpg';
                }
                ?>
                <img src="<?php echo $imgDestacada ?>" alt="<?php echo the_title().' Imagen Destacada'; ?>">
            </div>
        </div>
        <!-- contenido sistemas constructivos -->
        <section class="sist-cont">
            <div class="titulo">Fachadas</div>
            <div>
                <?php
                $args = array(
                    'post_type' => 'sistemas_const',
                    'post_status' => 'publish',
                    'orderby' => 'title',
                    'order' => $order,
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categoria_sist_conts',
                            'field' => 'slug',
                            'terms' => 'fachadas'
                        )
                    )
                );

                $the_query = new WP_QUERY ( $args );
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $current_id = $post->ID;
                    $nombre = get_field('nombre', $current_id);
                    $img = get_field('img_desc', $current_id);
                    $descripcion = get_field('descripcion', $current_id);
                    $ficha_tecnica = get_field('ficha_tecnica', $current_id);
                    $garantia = get_field('garantia', $current_id);
                    $instalacion = get_field('instalacion', $current_id);
                    $archivo = get_field('archivo_de_imagenes', $current_id);
                    ?>
                <div class="sist-item">
                    <div class="cont">
                        <div class="titulo">
                            <p><?php echo $nombre; ?></p>
                            <img src="<?php echo $img ?>">
                        </div>
                        <div class="info">
                            <div class="text"><?php echo $descripcion; ?></div>
                            <div class="file">
                                <?php if($ficha_tecnica){ ?>
                                <div>
                                    Ficha Técnica
                                    <a href="<?php echo $ficha_tecnica; ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>">
                                    </a>
                                </div>
                                <?php } ?>

                                <?php if($garantia){ ?>
                                <div>
                                    Garantía
                                    <a href="<?php echo $garantia; ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>">
                                    </a>
                                </div>
                                <?php } ?>

                                <?php if($instalacion){ ?>
                                <div>
                                    Instalación
                                    <a href="<?php echo $instalacion; ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>">
                                    </a>
                                </div>
                                <?php } ?>

                                <?php if($archivo){ ?>
                                <div>
                                    Archivo de imagenes
                                    <a href="<?php echo $archivo; ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                ?>
            </div>
        </section>
        <section class="sist-cont">
            <div class="titulo">Tabiques</div>
            <div>
                <?php
                $args = array(
                    'post_type' => 'sistemas_const',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categoria_sist_conts',
                            'field' => 'slug',
                            'terms' => 'tabiques'
                        )
                    )
                );

                $the_query = new WP_QUERY ( $args );
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $current_id = $post->ID;
                    $nombre = get_field('nombre', $current_id);
                    $img = get_field('img_desc', $current_id);
                    $descripcion = get_field('descripcion', $current_id);
                    $ficha_tecnica = get_field('ficha_tecnica', $current_id);
                    $garantia = get_field('garantia', $current_id);
                    $instalacion = get_field('instalacion', $current_id);
                    $archivo = get_field('archivo_de_imagenes', $current_id);
                    ?>
                <div class="sist-item">
                    <div class="cont">
                        <div class="titulo">
                            <p><?php echo $nombre; ?></p>
                            <img src="<?php echo $img ?>">
                        </div>
                        <div class="info">
                            <div class="text"><?php echo $descripcion; ?></div>
                            <div class="file">
                                <?php if($ficha_tecnica){ ?>
                                <div>
                                    Ficha Técnica
                                    <a href="<?php echo $ficha_tecnica; ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>">
                                    </a>
                                </div>
                                <?php } ?>

                                <?php if($garantia){ ?>
                                <div>
                                    Garantía
                                    <a href="<?php echo $garantia; ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>">
                                    </a>
                                </div>
                                <?php } ?>

                                <?php if($instalacion){ ?>
                                <div>
                                    Instalación
                                    <a href="<?php echo $instalacion; ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>">
                                    </a>
                                </div>
                                <?php } ?>

                                <?php if($archivo){ ?>
                                <div>
                                    Archivo de imagenes
                                    <a href="<?php echo $archivo; ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                ?>
            </div>
        </section>
        <section class="slider-">
            <div class="titulo">
                <p>Productos Complementarios</p>
            </div>
            <div>
                <?php echo do_shortcode($slider); ?>
            </div>
        </section>
        <!-- contenido sistemas constructivos -->
    </div>
    <!-- fin de contenido -->
</div>
<?php
get_footer();
?>
