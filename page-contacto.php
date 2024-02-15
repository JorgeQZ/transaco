<?php
/**
 * Template Name: Contacto Transaco
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



<div id="contacto">
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
                        $id = get_the_ID();
            $thumbnail = get_post_thumbnail_id($id);
            $imgDestacada = wp_get_attachment_url( $thumbnail,  'page-banner');

            if(!$thumbnail){
              $imgDestacada = get_template_directory_uri().'/img/ai-bg.jpg';
            }
            ?>
                        <img src="<?php echo $imgDestacada ?>" alt="<?php echo the_title().' Imagen Destacada'; ?>">
                    </div>
                </div>
            </article>
        </div>
    </div>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :  the_post(); ?>
    <div class="desc-contact-cont">
        <p>
            <?php the_content(); ?>
        </p>
    </div>
    <?php
        endwhile;
    endif;
	?>

    <div class="contenedor-contacto">
        <div class="cont-form-contact">
            <table class="table-data">
                <thead>
                    <th>Zona</th>
                    <th>Ejecutivos de ventas</th>
                    <th>Canal de ventas</th>
                    <th>Teléfono o (Whatsapp)</th>
                    <th>Correo de eléctronico</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <strong>Zona Norte</strong>: XV Región de Arica y Parinacota, I Región de Tarapacá, II Región de Antofagasta, III Región de Atacama, IV Región de Coquimbo
                        </td>
                        <td>
                            Cristian Santibañez
                        </td>
                        <td>
                            Venta general (particulares, ferreterías, distribuidores y constructoras)
                        </td>
                        <td>
                            <a href="tel_+56994820734">+56994820734</a>
                        </td>
                        <td>
                            <a href="mailto:cristian.santibanez@owenscorning.com">cristian.santibanez@owenscorning.com</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Zona Centro</strong>: V Región de Valparaíso, VI Región del Libertador General Bernardo O'Higgins
                        </td>

                        <td>
                            <table>
                                <tr>
                                    <td>Cristian Romo</td>
                                </tr>
                                <tr>
                                    <td>Daniel Saldías</td>
                                </tr>
                            </table>

                        </td>
                        <td>
                            Ventas para ferreterías y distribuidores
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td><a href="tel:+56998188009">+56998188009</a></td>
                                </tr>
                                <tr>
                                    <td><a href="tel:+56976598649">+56976598649</a></td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td><a href="mailto:cristian.romo@owenscorning.com">cristian.romo@owenscorning.com</a></td>
                                </tr>
                                <tr>
                                    <td><a href="mailto:daniel.saldias@owenscorning.com">daniel.saldias@owenscorning.com</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Región Metropolitana</strong>: Santiago
                        </td>
                        <td>
                            Ariel Díaz
                        </td>
                        <td>
                            Venta general (particulares, distribuidores y constructoras)
                        </td>
                        <td>
                            <a href="tel:+56942568689">+56942568689</a>
                        </td>
                        <td>
                            <a href="mailto:ariel.diaz@owenscorning.com">ariel.diaz@owenscorning.com</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Zona Sur</strong>: VII Región del Maule, XVI Región de Ñuble, VIII Región del Bío-Bío, IX Región de La Araucanía, XIV Región de Los Ríos, X Región de Los Lagos, XI Región de Aysén, XII Región de Magallanes
                        </td>
                        <td>
                            Ariel Díaz
                        </td>
                        <td>
                            Venta general (particulares, distribuidores y constructoras)
                        </td>
                        <td>
                            <a href="tel:+56942568689">+56942568689</a>
                        </td>
                        <td>
                            <a href="mailto:ariel.diaz@owenscorning.com">ariel.diaz@owenscorning.com</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>


        <div class="cont-des-contact">
            <p class="tit-desc-contact" style="margin-top: 0;"><?php echo get_field('titulo_1');?></p>
            <div class="subtit-desc-contact">
                <?php echo get_field('texto_1'); ?>
            </div>
            <p class="tit-desc-contact"><?php echo get_field('titulo_2');?></p>
            <div class="subtit-desc-contact">
                <?php echo get_field('texto_2'); ?>
            </div>
            <p class="tit-desc-contact"><?php echo get_field('titulo_3');?></p>
            <div class="subtit-desc-contact" style="margin-bottom: 1em;">
                <?php echo get_field('texto_3');?>
            </div>
            <div class="cont-contact-decoration">
                <p class="transaco-decoration"> TRANSACO </p>
            </div>
        </div>
    </div>
</div>
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
