<?php
/**
 * Template Name: Productos Tejas Asfalticas 2023
 *
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */
get_header();
$supreme = get_field('supreme_contenido');
$oakridge = get_field('oakridge_contenido');
$slider = get_field('sa_slider_pc');
?>

<style>
	.teja-cont__options-cont{
		transform: unset;
		padding: 30px 0;
	}
</style>

<div class="wrapper">
    <div class="content">
        <!-- Contenedor cabecera -->
        <div class="teja-cont">
            <div class="teja-cont__banner">
                <img src="<?php echo get_field('banner_inicial'); ?>" alt="" id="main_banner">
                <div class="teja-cont__banner-buttons-cont">
                    <div class="teja-cont__banner-buttons-cont-button active" data-button="supreme">Supreme</div>
                    <div class="teja-cont__banner-buttons-cont-button" data-button="oakridge">Oakridge</div>
                </div>
            </div>


            <div class="teja-cont__options-cont active" data-model="supreme">
                <div class="teja-cont__options-cont-items">
                    <?php
					$aux=0;
                    foreach($supreme['variaciones']['variante'] as $item):
                        $option = wp_get_attachment_image_url( $item['opcion'] );
                        $banner = wp_get_attachment_image_url( $item['banner'], 'full' );
                        $name = $item['nombre'];
                        $sku = $item['sku'];
					$aux ++;

                        ?>
                        <div class="teja-cont__options-cont-items-item <?php if($aux == 1){ echo 'active';} ?>" data-banner_option="<?php echo  $banner; ?>">
                            <div class="teja-cont__options-cont-items-item-img" style="background-image: url(<?php echo $option; ?>)">
                        </div>
                        <div class="teja-cont__options-cont-items-item-text">
                            <?php echo $name; ?>
                            <div class="small"><?php echo $sku; ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="teja-cont__options-cont" data-model="oakridge">
                <div class="teja-cont__options-cont-items">
                    <?php
					$oak_aux = 0;
                        foreach($oakridge['variaciones']['variante'] as $item):
							$oak_aux ++;
                            $option = wp_get_attachment_image_url( $item['opcion'] );
                            $banner = wp_get_attachment_image_url( $item['banner'], 'full' );
                            $name = $item['nombre'];
                            $sku = $item['sku'];
                        ?>
                        <div class="teja-cont__options-cont-items-item  <?php if($oak_aux==1){echo 'active';} ?>" data-banner_option="<?php echo  $banner; ?>">
                            <div class="teja-cont__options-cont-items-item-img" style="background-image: url(<?php echo $option; ?>)">
                            </div>
                            <div class="teja-cont__options-cont-items-item-text">
                                <?php echo $name; ?>
                                <div class="small"><?php echo $sku; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Contenedor cabecera -->

        <!-- Supreme -->
        <div class="teja_content act" data-model="supreme">
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
                <div class="teja">
                    <div class="titulo"><p class="subtitulo"><?php echo $titulo; ?></p></div>
                    <div class="info">
                        <div class="img">
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="desc">
                            <p>Descripción</p>
                            <br>
                            <p><?php echo $Rinde; ?></p>
                            <p><?php echo $Peso; ?></p>
                            <div class="files">
                                <?php if($file1): ?>
                                    Ficha técnica:
                                    <a href="<?php echo $file1 ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt="">
                                    </a>
                                <?php endif; ?>

                                <?php if($file2): ?>
                                Garantía:
                                <a href="<?php echo $file2 ?>" target="_blank">
                                    <img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt="">
                                </a>
                                <?php endif; ?>

                                <?php if($file3): ?>
                                    Instalación:
                                    <a href="<?php echo $file3 ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt="">
                                    </a>
                                <?php endif; ?>

                                <?php if($file4): ?>
                                    Archivo:
                                    <a href="<?php echo $file4 ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt="">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_query(  );

            $video_mp4 =  $supreme['video_supreme'];
            if(!empty($video_mp4)):
            ?>
            <div class="titulo">
                <p>Video</p>
            </div>
            <div class="prod-video-cont" data-video="supreme">
                <video controls preload="none">
                    <source src="<?php echo $video_mp4; ?>" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
            <?php endif; ?>
        </div>
        <!-- Supreme -->

        <!-- Oakridge -->
        <div class="teja_content" data-model="oakridge">
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
                <div class="teja">
                    <div class="titulo"><p class="subtitulo"><?php echo $titulo; ?></p></div>
                    <div class="info">
                        <div class="img">
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="desc">
                            <p>Descripción</p>
                            <br>
                            <p><?php echo $Rinde; ?></p>
                            <p><?php echo $Peso; ?></p>
                            <div class="files">
                                <?php if($file1): ?>
                                    Ficha técnica:
                                    <a href="<?php echo $file1 ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt="">
                                    </a>
                                <?php endif; ?>

                                <?php if($file2): ?>
                                Garantía: <a href="<?php echo $file2 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php endif; ?>

                                <?php if($file3): ?>
                                    Instalación: <a href="<?php echo $file3 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php endif; ?>

                                <?php if($file4): ?>
                                Archivo: <a href="<?php echo $file4 ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/file-save.png' ?>" alt=""></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_query(  );

            $video_mp4_oak =  $oakridge['video_oakridge'];
            if(!empty($video_mp4_oak)):
            ?>
				<div class="titulo">
					<p>Video</p>
				</div>
				<div class="prod-video-cont" data-video="oakridge">
					<video controls preload="none">
						<source src="<?php echo $video_mp4_oak; ?>" type="video/mp4">
						Your browser does not support HTML video.
					</video>
				</div>
            <?php endif; ?>
        </div>

        <!-- Oakridge -->
        <section class="slider-">
            <div class="titulo">
                <p>Productos Complementarios</p>
            </div>
            <div>
                <?php echo do_shortcode($slider) ?>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
