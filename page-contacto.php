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

    <div class="wrapper">
        <div class="content">
            <div class="title-desc">Queremos resolver tus dudas, comunícate con el ejecutivo de ventas más cercano a la zona donde necesitas adquirir nuestros materiales y recibirás respuesta a la brevedad.</div>
        </div>
    </div>

    <div class="wrapper">
        <div class="content">
            <div class="title">Ejecutivos de venta</div>
        </div>
    </div>
    <div class="wrapper">
        <div class="content">
            <table class="table-data">
                <thead>
                    <th>Zona</th>
                    <th>Contacto</th>
                    <th>Canal de ventas</th>
                    <th>Teléfono (o Whatsapp)</th>
                    <th>Correo eléctronico</th>
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
                            <a href="https://api.whatsapp.com/send?phone=56994820734&text=Hola%2C%20buen%20día.%20Me%20gustaría%20recibir%20información">+56994820734</a>
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
                                    <td><a href="https://api.whatsapp.com/send?phone=56998188009&text=Hola%2C%20buen%20día.%20Me%20gustaría%20recibir%20información">+56998188009</a></td>
                                </tr>
                                <tr>
                                    <td><a href="https://api.whatsapp.com/send?phone=56976598649&text=Hola%2C%20buen%20día.%20Me%20gustaría%20recibir%20información">+56976598649</a></td>
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
                            <a href="https://api.whatsapp.com/send?phone=56942568689&text=Hola%2C%20buen%20día.%20Me%20gustaría%20recibir%20información">+56942568689</a>
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
                            Hugo Gonzáles
                        </td>
                        <td>
                            Venta general (particulares, ferreterías, distribuidores y constructoras)
                        </td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=56968549593&text=Hola%2C%20buen%20día.%20Me%20gustaría%20recibir%20información">+56968549593</a>
                        </td>
                        <td>
                            <a href="mailto:hugo.gonzalez@owenscorning.com">hugo.gonzalez@owenscorning.com</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="cont-des-contact">
            <!-- Texto 1 -->
            <p class="tit-desc-contact" style="margin-top: 0;">SHOWROOM</p>
            <div class="subtit-desc-contact">
                <blockquote>
                    <p style="font-size: 14px">San Crescente 81, piso 7, Las Condes. Horario de atención: Lunes a viernes de 12:00 a 16:00 h <span style="color: #000;"><strong>(CERRADO TEMPORALMENTE).</strong></span></p>
                </blockquote>
                <p>
                    <strong><span style="color: #ff0000;">Mesa Central:</span> <a href="tel:+22 797 7700">+22 797 7700</a></strong>
                </p>
            </div>
            <!-- texto 1 -->
            <p class="tit-desc-contact">CENTRO DE DISTRIBUCIÓN</p>
            <div class="subtit-desc-contact">
                <blockquote>
                    <p style="font-size: 14px">Vizcaya 16.701-3, Parque Industrial Los Espinos, Pudahuel. Horario de atención: Lunes a viernes de 12:00 a 16:00 h.</p>
                </blockquote>
                <p>
                    <strong>INFORMATIVO: ¿Qué debe traer para hacer un retiro?</strong> <br>
                        - Orden de compra o de retiro. <br>
                        - Rol de la empresa. <br>
                        - Cédula de identidad. <br>
                </p>
            </div>
            <!--  tabla -->
            <hr>
            <p><strong>Atención al cliente (comentarios, sugerencias y servicio postventa)</strong></p>

            <p><strong><i>Jonathan Cabrera</i></strong></p>
            <p>Teléfono: <a href="tel:+56963170779">+56963170779</a></p>
            <p>Correo electrónico: <a href="mailto:jonathan.cabrera@owenscorning.com">jonathan.cabrera@owenscorning.com</a></p>

            <hr>
            <p><strong>Especificador Técnico (proyectos, obras, materiales)</strong></p>
            <p><strong><i>Felipe Rojas</i></strong></p>
            <p>
                Teléfono: <a href="tel:+56989865548">+56989865548</a><br>
                Correo electrónico: <a href="mailto:felipe.rojas@owenscorning.com">felipe.rojas@owenscorning.com</a>
            </p>
        </div>
    </div>
</div>
<?php get_footer(); ?>
