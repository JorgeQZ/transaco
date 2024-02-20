<?php
/**
 * Template Name: Cubicador
 */

 get_header();

 echo do_shortcode('[rev_slider alias="home"][/rev_slider]');

?>

<div class="popup-mail-cont">
    <div class="email-form">
        <div class="close-cont-email">
            <?php
            echo file_get_contents(get_template_directory_uri(  ).'/img/svg/close.svg');
            ?>
        </div>
        <div class="title">Solicita tu cotización</div>
<!--
        <?php echo do_shortcode('[contact-form-7 id="babaa7e" title="Contacto"]'); ?>
-->

        <form id="formularioCotizacion" action="post">
            <div class="row">
                <label for="nombre">
                    Nombre
                    <input type="text" id="nombre" name="Nombre" required>
                </label>
                <label for="apellido">
                    Apellido
                    <input type="text" id="apellido" name="Apellido" required>
                </label>
            </div>
            <div class="row">
                <label for="correo">
                    Correo
                    <input type="email" name="Correo" id="correo" required>
                </label>
                <label for="telefono">
                    Teléfono
                    <input type="tel" name="Telefono" id="telefono" required>
                </label>
            </div>
            <input type="submit" value="Enviar">
            <p>
            Enviaremos un correo con los resultados del cotizador y tus datos, y pronto recibirás respuesta.
            </p>
        </form>

    </div>
</div>

<div class="cont-render" id="render">
    <div class="popup-cont">
        <div class="close-cont">
            <?php
            echo file_get_contents(get_template_directory_uri(  ).'/img/svg/close.svg');
            ?>
        </div>
        <div class="text">
            <div class="title" id="data-title">TESTO</div>
            <div class="desc" id="data-desc">
            Sed at eros augue. Nullam laoreet vehicula felis nec tempor. Cras non dolor mauris. Aliquam congue varius lectus, non condimentum quam placerat nec. Nulla vulputate vulputate dictum. Mauris vel tortor ligula. Aliquam erat volutpat. Aenean ac bibendum sapien. Proin ac eros suscipit, venenatis odio vitae, malesuada lectus. Ut posuere et turpis ut varius. Sed luctus vitae metus et viverra. Etiam mattis turpis at ornare porta. Vivamus ipsum odio, placerat sit amet suscipit vel, consequat blandit risus. Curabitur sollicitudin felis at lectus ornare, eu scelerisque risus mattis.
            </div>
        </div>
        <a href="" class="boton" id="data-button" target="_blank" download>Conoce más</a>
        <a href="" class="boton" style="display:none;" id="data-button-2" target="_blank" download>Conoce más</a>
    </div>
    <div class="render-img-cont" style="transform: scale(.9);">
        <img class="render" src="<?php echo get_template_directory_uri(  ).'/img/2023/render.png' ?>" alt="">

        <div class="items-cont">
            <div class="item-prod" id="item-prod-1">
                <img id="prod-1" data-product="perfilesqext" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/vinyl-siding.png'; ?>" alt="">
                <img id="guia-1" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-superior-1.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-2">
                <img id="prod-2" data-product="aleros" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/vinyl-siding-horizontal.png'; ?>" alt="">
                <img id="guia-2" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-2.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-3" >
                <img id="prod-3" data-product="panel4d" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/vinyl-siding-horiszontal.png'; ?>" alt="">
                <img id="guia-3" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-3.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-4">
                <img id="prod-4" data-product="tapacan" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/accesorio-tapacan.png'; ?>" alt="">
                <img id="guia-4" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-4.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-5">
                <img id="prod-5" data-product="aislamiento" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/OC-PAQ-AISLHOGAR.png'; ?>" alt="">
                <img id="guia-5" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-5.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-6">
                <img id="prod-6" data-product="placaosb" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/TABLERO-DE-OSB.png'; ?>" alt="">
                <img id="guia-6" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-6.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-7">
                <img id="prod-7"  data-product="membrana" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/ELEMENTOS-+-BARRERA-DE-VAPOR-+-ULTRAFIELTRO.png'; ?>" alt="">
                <img id="guia-7" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-7.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-8">
                <img id="prod-8" data-product="perfilesq" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/GUIA-+-VINYL-SIDING-+-DETALLES-+-ACCESORIOS-+-ESQUINERO-INTERIOR.png'; ?>" alt="">
                <img id="guia-8" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-8.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-9">
                <img id="prod-9" data-product="perfilj"  class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/GUIA-+-VINYL-SIDING-+-DETALLES-+-ACCESORIOS-+-PERFIL-J.png'; ?>" alt="">
                <img id="guia-9" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-9.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-10">
                <img id="prod-10" data-product="perfilinicio" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/GUIA-+-VINYL-SIDING-+-DETALLES-+-ACCESORIOS-+-PERFIL-INICIO.png'; ?>" alt="">
                <img id="guia-10" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-10.png'; ?>" alt="">
            </div>


            <div class="item-prod" id="item-prod-11">
                <img id="prod-11" data-product="perfiltermino" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/GUIA-+-VINYL-SIDING-+-DETALLES-+-ACCESORIOS-+-PERFIL-TERMINO.png'; ?>" alt="">
                <img id="guia-11" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-11.png'; ?>" alt="">
            </div>

            <div class="item-prod" id="item-prod-12">
                <img id="prod-12" data-product="perfilf" class="prod" src="<?php echo get_template_directory_uri(  ).'/img/2023/GUIA-+-VINYL-SIDING-+-DETALLES-+-ACCESORIOS-+-PERFIL-F.png'; ?>" alt="">
                <img id="guia-12" class="guia" src="<?php echo get_template_directory_uri(  ).'/img/2023/guia-12.png'; ?>" alt="">
            </div>
        </div>

    </div>
</div>


<div class="cont-table-measures">
    <div class="title">Cubicador de Vinyl Siding</div>
    <div class="desc">
        Calcula cuánto material necesita tu proyecto
    </div>


    <div class="container_table">

        <div class="table-measures">
            <div class="row">
                <div class="cell tar fit"></div>
                <div class="cell tac">Elevación 1</div>
                <div class="cell tac">Elevación 2</div>
                <div class="cell tac">Elevación 3</div>
                <div class="cell tac">Elevación 4</div>
                <div class="cell tac">Elevación 5</div>
                <div class="cell tac">Elevación 6</div>
                <div class="cell tac">Elevación 7</div>
                <div class="cell tac">Elevación 8</div>
                <div class="cell tac">Fronton(x2)</div>
            </div>
            <div class="row">
                <div class="cell tar fit">Largo</div>
                <div class="cell"><input type="number" value="10" step=".1" id="largoE1" name="largoE1"></div>
                <div class="cell"><input type="number" value="3.80" step=".1" id="largoE2" name="largoE2"></div>
                <div class="cell"><input type="number" value="2.50" step=".1" id="largoE3" name="largoE3"></div>
                <div class="cell"><input type="number" value="10" step=".1" id="largoE4" name="largoE4"></div>
                <div class="cell"><input type="number" value="5" step=".1" id="largoE5" name="largoE5"></div>
                <div class="cell"><input type="number" value="8" step=".1" id="largoE6" name="largoE6"></div>
                <div class="cell"><input type="number" value="3" step=".1" id="largoE7" name="largoE7"></div>
                <div class="cell"><input type="number" value="2" step=".1" id="largoE8" name="largoE8"></div>
                <div class="cell"><input type="number" value="0" step=".1" id="largoFronton" name="largoFronton"></div>
            </div>
            <div class="row">
                <div class="cell tar fit">Alto</div>
                <div class="cell"><input type="number" value="2.70" step=".1" id="altoE1" name="altoE1"></div>
                <div class="cell"><input type="number" value="2.70" step=".1" id="altoE2" name="altoE2"></div>
                <div class="cell"><input type="number" value="2.70" step=".1" id="altoE3" name="altoE3"></div>
                <div class="cell"><input type="number" value="2.70" step=".1" id="altoE4" name="altoE4"></div>
                <div class="cell"><input type="number" value="2.70" step=".1" id="altoE5" name="altoE5"></div>
                <div class="cell"><input type="number" value="2.70" step=".1" id="altoE6" name="altoE6"></div>
                <div class="cell"><input type="number" value="2.70" step=".1" id="altoE7" name="altoE7"></div>
                <div class="cell"><input type="number" value="2.70" step=".1" id="altoE8" name="altoE8"></div>
                <div class="cell"><input type="number" value="0" step=".1" id="altoFronton" name="altoFronton"></div>
            </div>
        </div>






        <div class="table-final">
            <div class="text">
            Completar los m<sup>2</sup> de ventanas y puertas
            (largo x alto)
            </div>
            <input type="number" id="mVanos" name="mVanos" step=".1" value="45.00">
        </div>

        <div class="table-measures">
            <div class="row">
                <div class="cell tar fit"></div>
                <div class="cell tac">Perfiles</div>
            </div>
            <div class="row">
                <div class="cell wide">N° esquinas exteriores</div>
                <div class="cell wide"><input type="number" value="5" step=".1" class="wide-input" id="nEsqEx" name="nEsqEx"></div>
            </div>
            <div class="row">
                <div class="cell wide">N° esquinas interiores</div>
                <div class="cell wide"><input type="number" value="2" step=".1" class="wide-input" id="nEsqInt" name="nEsqInt"></div>
            </div>
            <div class="row">
                <div class="cell wide">Metros lineales de ventanas y puertas</div>
                <div class="cell wide"><input type="number" value="60" step=".1" class="wide-input" id="mLinVenYPuer" name="mLinVenYPuer"></div>
            </div>
            <div class="row">
                <div class="cell wide">Metros lineales perímetro inferior de la casa</div>
                <div class="cell wide"><input type="number" value="26" step=".1" class="wide-input" id="mLinPerInferCasa" name="mLinPerInferCasa"></div>
            </div>
            <div class="row">
                <div class="cell wide">Metros lineales perímetro superior de la casa</div>
                <div class="cell wide"><input type="number" value="26" step=".1" class="wide-input" id="mLinPerSupCasa" name="mLinPerSupCasa"></div>
            </div>
            <div class="row">
                <div class="cell wide">Metros lineales perímetro alero (*)</div>
                <div class="cell wide"><input type="number" value="26" step=".1" class="wide-input" id="mLinPerAlero" name="mLinPerAlero"></div>
            </div>
            <div class="row">
                <div class="cell wide">Metros lineales avance del alero (*)</div>
                <div class="cell wide"><input type="number" value="0.4" step=".1" class="wide-input" id="mLinAvanAlero" name="mLinAvanAlero"></div>
            </div>
            <div class="row">
                <div class="cell wide">Área habitable bajo cubierta (m2)</div>
                <div class="cell wide"><input type="number" value="80" step=".1" class="wide-input" id="areaHabBajoCubierta" name="areaHabBajoCubierta"></div>
            </div>
        </div>

        <button id="calcular" class="calcular">Calcular</button>
    </div>
</div>

<div class="cont-table-results" style="display: none;">
    <div class="title">Resultados</div>
    <div id="tablaResultados" style="overflow-x:auto;">
        <table>
            <thead>
                <th colspan="2"><span style="font-size:30px">RMC</span></th>
                <th>Tipo</th>
                <th>Largo</th>
                <th>Unidad</th>
                <th width="150">Requerido Unidad Sol Const</th>
                <th></th>
            </thead>

            <tr>
                <td rowspan="19">
                    <span>Sistema Vinyl Siding</span>
                </td>
            </tr>

            <tr>
                <td rowspan="11" width="120">
                    <span>Modelo D4 tradicional + perfiles de sujeción</span>
                </td>
            </tr>
            <tr>
                <td>RMC-0.38 Panel D4" Vinyl Siding</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_105099">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/Web_Accesorios_Instalacion_Vinyl_Siding_.pdf' ?>" class="ver_prod">VER</a></td>
            </tr>
            <tr>
                <td>Alero Sólido T4 Blanco</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_103701">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>

            </tr>
            <tr>
                <td>Alero Ventilado T4" Blanco</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_103801">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>

            </tr>
            <tr>
                <td>RMC-Perfil Inicio (3,81 ml.)</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_105001">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>


            </tr>
            <tr>
                <td>RMC-Perfil Término White (3,81 ml.)</td>

                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_105005">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>

            </tr>
            <tr>
                <td>RMC-Perfil F White (3,81 ml.)</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_105050">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>
            </tr>
            <tr>
                <td>RMC-Perfil J,5/8"x3/4"White (3,81mts)</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_105302">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>


            </tr>
            <tr>
                <td>RMC-Tapacán 7,3/4" White (3,05 ml.)</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_105401">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/Web Accesorios Instalación Vinyl Siding (2).pdf' ?>" class="ver_prod">VER</a></td>



            </tr>
            <tr>
                <td>RMC-Esquinero Interior White (3,05 ml.)</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_105501">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>
            </tr>
            <tr>
                <td>RMC-Esquinero Exterior White (3,05 ml.)</td>
                <td>3.81</td>
                <td>Pieza</td>
                <td><span id="prod_105601">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>
            </tr>
            <tr>
                <td rowspan="" colspan="5">
                    &nbsp
                </td>
            </tr>
            <tr>
                <td rowspan="6">
                    <span>Adicionales requeridos</span>
                </td>
            </tr>
            <tr>
                <td>Ultra Fieltro Rollo 80 gr (1,50x25)</td>
                <td>3.81</td>
                <td>Rollo</td>
                <td><span id="prod_sc">1</span></td>
                <td><a download href="<?php echo get_template_directory_uri(  ).'/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf' ?>" class="ver_prod">VER</a></td>


            </tr>
            <tr>
                <td>Clavos para pieza principal</td>
                <td></td>

                <td></td>
                <td><span></span></td>

            </tr>
            <tr>
                <td>Bolsa Clavo Teja 1" - 650 unid.</td>
                <td>3.81</td>

                <td>Bolsa</td>
                <td><span id="prod_800401_principal">1</span></td>
                <td></td>
            </tr>
            <tr>
                <td>Clavos para perfiles de fijación</td>
                <td></td>

                <td></td>
                <td><span></span></td>
            </tr>
            <tr>
                <td>Bolsa Clavo Teja 1" - 650 unid.</td>
                <td>3.81</td>

                <td>Bolsa</td>
                <td><span id="prod_800401_fijo">1</span></td>
                <td></td>

            </tr>
        </table>
    </div>

    <button id="cotizacion" class="cotizacion">Solicitar unar cotización</button>

</div>

<?php
get_footer();
?>

<script src="<?php echo get_template_directory_uri() ?>/js/screenshots.js"></script>

<script type="text/javascript">
        $(document).ready(function (){

            $("#formularioCotizacion").submit(function(e){
                e.preventDefault();


                html2canvas(document.querySelector("#tablaResultados")).then(canvas => {

                    var dataURL = canvas.toDataURL();
                    var formulario = $(this);


                    $.ajax({
                        type: "POST",
                        url: "<?php echo get_template_directory_uri() ?>/script.php",
                        data: {
                            imgBase64: dataURL
                        }
                    }).done(function(o) {
                        console.log('Cotizacion guardada: '+o);
                        var urlImg = o;

                        formulario.find(".msg").remove();
                        var nombre = formulario.find("input[name='Nombre']").val();
                        var apellido = formulario.find("input[name='Apellido']").val();
                        var correo = formulario.find("input[name='Correo']").val();
                        var telefono = formulario.find("input[name='Telefono']").val();

                        formulario.find("input[name='Nombre']").val("");
                        formulario.find("input[name='Apellido']").val("");
                        formulario.find("input[name='Correo']").val("");
                        formulario.find("input[name='Telefono']").val("");

                        $.post("<?php echo get_template_directory_uri() ?>/correo.php",{
                            nombre_ : nombre,
                            apellido_ : apellido,
                            correo_ : correo,
                            telefono_ : telefono,
                            cotizacion_ : urlImg,
                        },
                        function(data){
                            if(data="Exito"){
                                $("<p class='msg'>Mensaje enviado correctamente.</p>").insertAfter(".popup-mail-cont .email-form form input[type=submit]");
                                //hoy.append("<p class='msg'>Mensaje enviado correctamente.</p>");
                            }
                            else{
                                formulario.append("<p class='msg'>Hubo un error con el envío.</p>");
                            }
                        });


                    });

                });


            });


        });
</script>