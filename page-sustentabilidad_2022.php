<?php
/**
 * Template Name: Sustentabilidad Transaco 2022
 *
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */
?>
<?php
get_header();
?>

<div id="sustentabilidad">
    <div class="wrapper">
        <div class="content contentPage">
            <div>
                <p class="banner_title animate__animated" id="titulo">
                    <?php the_title();?>
                </p>
            </div>
            <?php 
            $imgDestacada = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (!$imgDestacada) {
                $imgDestacada = get_template_directory_uri() . '/img/ai-bg.jpg';
            }
            ?>
            <img src="<?php echo $imgDestacada ?>" class="banner banner_title animate__animated">

            <div class="inner-wrapper">
                <!-- <hr class="animate__animated"> -->
                
                <?php if(have_rows('secciones')): ?>
                    <?php while(have_rows('secciones')): the_row(); ?>
                    <div class="inner-item animate__animated">
                        <div class="column">
                            <div class="blue-title">
                                <span>
                                    <img src="<?php the_sub_field('icono'); ?>" alt="">
                                </span>
                                <?php the_sub_field('titulo'); ?>
                            </div>
    
                            <div class="desc">
                                <?php the_sub_field('descripcion'); ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="desc-img animate__animated">
                                <img src="<?php the_sub_field('imagen'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <hr class="animate__animated">
                    <?php endwhile; ?>
                <?php endif; ?>
                
                <!-- Item 1
                <div class="inner-item animate__animated">
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
                        <div class="desc-img animate__animated">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_1.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 1
                <hr class="animate__animated">
                <!-- Item 2
                <div class="inner-item animate__animated">
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
                        <div class="desc-img animate__animated">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_2.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 2
                <hr class="animate__animated">
                <!-- Item 3
                <div class="inner-item animate__animated">
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
                        <div class="desc-img animate__animated">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_3.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 3
                <hr class="animate__animated">
                <!-- Item 4
                <div class="inner-item animate__animated">
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
                        <div class="desc-img animate__animated">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_4.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Item 4
                <hr class="animate__animated">
                <!-- Item 5
                <div class="inner-item animate__animated">
                    <div class="column">
                        <div class="blue-title">
                            <span>
                                <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/sust-icon5.png' ?>" alt="">
                            </span>
                            operaciones ecológicas
                        </div>

                        <div class="desc">
                            Reducir el impacto de nuestras operaciones manufactureras alrededor del mundo. Como objetivo 2020, queremos dar al mundo más de lo que obtenemos de él.
                            <br><br>
                            Lo estamos logrando al usar nuestros activos fijos con mayor eficiencia
                            y aumentando la influencia positiva en el ambiente.
                        </div>
                    </div>
                    <div class="column">
                        <div class="desc-img animate__animated">
                            <img src="<?php echo get_template_directory_uri() . '/img/sustentabilidad/imagen_5.jpg' ?>" alt="">
                        </div>
                    </div>
                </div><!-- Notas
                <hr class="animate__animated"> -->
                <div class="contenedor-general-noticias">
                    <div class="contenedor-noticias">
                        <?php
                        $args = array(
                          'post_type' => 'noticias',
                          'post_status' => 'publish',
                          'posts_per_page' => 2
                        );
                    
                        $query = new WP_QUERY ( $args );
                    
                        while($query->have_posts()):
                          $query->the_post(); ?>
                          
                              <div class="contenedor-noticia">
                                <h2><?php the_title(); ?></h2>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>">
                                    Leer más
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                    
                        <?php
                        endwhile;
                        wp_reset_query();?>
                        <!--
                        <div class="contenedor-noticia">
                            <h2>Titulo</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere repellat exercitationem sapiente 
                                quo consequatur magni eligendi tenetur doloremque! Illum deserunt debitis quasi quos rerum ad perspiciatis. 
                                Consectetur, repellat error.
                            </p>
                            <a href="#">
                                Leer más
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                        <div class="contenedor-noticia">
                            <h2>Titulo</h2>
                             <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere repellat exercitationem sapiente 
                                quo consequatur magni eligendi tenetur doloremque! Illum deserunt debitis quasi quos rerum ad perspiciatis. 
                                Consectetur, repellat error.
                            </p>
                            <a href="#">
                                Leer más
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                        -->
                    </div>
                </div>
                <!-- Notas -->
                <!--
                <?php if(have_rows('videos')): ?>
                <hr class="animate__animated">
                <div class="inner-videos animate__animated">
                    <div class="blue-title">videos</div>
                    <div class="grid">
                        <?php while(have_rows('videos')): the_row(); ?>
                            <?php if(get_sub_field('tipo') == "Youtube"){
                                the_sub_field('video_youtube');
                            }else{
                                the_sub_field('video_libreria');
                            }
                            ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
                -->
                <hr class="animate__animated">
                <div class="inner-videos animate__animated">
                    <div class="blue-title">videos</div>
                    <div class="grid">
                        
                        <video class="wp-video-shortcode animate__animated video-item" id="video-234-1" preload="metadata" controls="controls" poster="<?php echo get_template_directory_uri() . '/img/poster.png' ?>">
                            <source type="video/mp4" src="http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4?_=1" />
                            <a href="http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4">http://transaco.cl/wp-content/uploads/2018/08/SUSTAINABILITY-VV-Larger-Spanish-subtitles.mp4</a>
                        </video>

                        <iframe class="animate__animated video-item" src="https://www.youtube.com/embed/z0cIy413KzQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                    </div>
                </div>
            </div>

            <div class="cont-div-exp animate__animated footer-image">
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
