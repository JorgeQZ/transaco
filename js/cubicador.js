$(function () {
    const max_width = 1700;

    let Sistema_Vinyl_Siding = {
        "105099": {
            "sku": "105099",
            "tipo": 'RMC-0.38 Panel D4" Birch White',
            "largo": 3.81,
            "clavosXpieza": 19,
            "totalClavos": 1836,
            "UniXcaja": 24,
            "piezaKg": 1.45,
            "cajaKg": 40,
            "totalProductoKg": 140,
            "rendimientoM": 0.774
        },
        "103701": {
            "sku": "103701",
            "tipo": 'Alero Sólido T4" Blanco',
            "largo": 3.66,
            "clavosXpieza": 37,
            "totalClavos": 3095,
            "UniXcaja": 16,
            "piezaKg": 1.9,
            "cajaKg": 33,
            "totalProductoKg": 161,
            "rendimientoM": 3.66
        },
        "103801": {
            "sku": "103801",
            "tipo": 'Alero Ventilado T4" Blanco',
            "largo": 3.66,
            "clavosXpieza": 37,
            "totalClavos": 244,
            "UniXcaja": 16,
            "piezaKg": 1.9,
            "cajaKg": 33,
            "totalProductoKg": 13,
            "rendimientoM": 3.66
        },
        "105001": {
            "sku": "105001",
            "tipo": 'RMC-Perfil Inicio (3,81 ml.)',
            "largo": 3.81,
            "clavosXpieza": 19,
            "totalClavos": 130,
            "UniXcaja": 40,
            "piezaKg": 0.65,
            "cajaKg": 24,
            "totalProductoKg": 4,
            "rendimientoM": 3.81
        },
        "105005": {
            "sku": "105005",
            "tipo": 'RMC-Perfil Término White (3,81 ml.)',
            "largo": 3.81,
            "clavosXpieza": 19,
            "totalClavos": 260,
            "UniXcaja": 40,
            "piezaKg": 0.56,
            "cajaKg": 19,
            "totalProductoKg": 8,
            "rendimientoM": 3.81
        },
        "105050": {
            "sku": "105050",
            "tipo": 'RMC-Perfil F White (3,81 ml.)',
            "largo": 3.81,
            "clavosXpieza": 19,
            "totalClavos": 130,
            "UniXcaja": 20,
            "piezaKg": 0.56,
            "cajaKg": 11,
            "totalProductoKg": 4,
            "rendimientoM": 3.81
        },
        "105302": {
            "sku": "105302",
            "tipo": 'RMC-Perfil J,5/8"x3/4"White (3,81mts)',
            "largo": 3.81,
            "clavosXpieza": 19,
            "totalClavos": 130,
            "UniXcaja": 20,
            "piezaKg": 0.56,
            "cajaKg": 11,
            "totalProductoKg": 4,
            "rendimientoM": 3.81
        },
        "105401": {
            "sku": "105401",
            "tipo": 'RMC-Tapacán 7,3/4" White (3,05 ml.)',
            "largo": 3.05,
            "clavosXpieza": 0,
            "totalClavos": 0,
            "UniXcaja": 30,
            "piezaKg": 1.32,
            "cajaKg": 36,
            "totalProductoKg": 11,
            "rendimientoM": 3.05
        },
        "105501": {
            "sku": "105501",
            "tipo": 'RMC-Esquinero Interior White (3,05 ml.)',
            "largo": 3.05,
            "clavosXpieza": 31,
            "totalClavos": 61,
            "UniXcaja": 10,
            "piezaKg": 1,
            "cajaKg": 10,
            "totalProductoKg": 2,
            "rendimientoM": 3.05
        },
        "105601": {
            "sku": "105601",
            "tipo": 'RMC-Esquinero Exterior White (3,05 ml.)',
            "largo": 3.05,
            "clavosXpieza": 31,
            "totalClavos": 153,
            "UniXcaja": 10,
            "piezaKg": 2,
            "cajaKg": 19,
            "totalProductoKg": 10,
            "rendimientoM": 3.05
        },
        "800401": {
            "sku": "800401",
            "tipo": 'Bolsa Clavo Teja 1" - 650 unid.',
            "largo": 1,
            "clavosXpieza": '',
            "totalClavos": '',
            "UniXcaja": 650,
            "piezaKg": 0.9,
            "cajaKg": '',
            "totalProductoKg": '',
            "rendimientoM": 26
        },
        "s/c": {
            "sku": "s/c",
            "tipo": 'Ultra Fieltro Rollo 80 gr (1,50x25)',
            "largo": 25,
            "ancho": 1.5,
            "clavosXpieza": '',
            "totalClavos": '',
            "UniXcaja": '',
            "piezaKg": 3,
            "cajaKg": '',
            "totalProductoKg": '',
            "rendimientoM": 37.4
        }
    }

    let mlGeneralAleros = 100;
    let mlUnionesAleros = 28;

    let alerosVentilados = {
        "ancho": 0.304,
        "largo": 3.66,
        "alto": 0.01,
        "areaNetaXAlero": 0.04,
        "tomaAire": 0, /* esto se debe calcular despues*/
        "requerido": 0
    }


    let alerosSolidos = {
        "ancho": 0.304,
        "largo": 3.66,
        "alto": 0.01,
        "piezas": 0
    }


    let alerosSolidosConst = {
        "unidades": 0,
        "anchoEmpalmeM": 0,
        "largo": 0,
        "perimetro": 100,
        "cortesCombinados": 0,
        "piezas": 0,
        "realLargo": 0
    }


    let products = {
        "panel4d": {
            "titulo": "Panel 4D",
            "desc": "Pieza principal del sistema constructivo, cuenta con una gama muy atractiva de colores a disposición, que perduran a través de las décadas.Mantiene el color integrado en todo el espesor de la pieza y posee una resistencia única frente a los dañinos rayos UV. Muy liviano, resistente y excepcionalmente fácil de instalar.",
            "file": [template_dir.dir + "/files/Web_Accesorios_Instalacion_Vinyl_Siding_.pdf"]
        },
        "tapacan": {
            "titulo": "Tapacán",
            "desc": "Principal uso: revestir y dar terminación a  la parte frontal del alero. Se desliza a través del perfil “F” en la parte inferior, y en parte superior se da terminación con el perfil de término. Otro uso: revestir el espacio generado en el interior del vano de una ventana.",
            "file": [template_dir.dir + "/files/Web_Accesorios_Instalacion_Vinyl_Siding_.pdf"]

        },
        "aislamiento": {
            "titulo": "Aislación térmica entre muros",
            "desc": "Producto: Aislhogar: lana de vidrio de media densidad. Presentación en rollo, con un rendimiento de 14,4 m2. Es una lana de vidrio amigable con el usuario ya que prácticamente no pica al contacto físico (de igual forma se recomiendan los artículos de protección y seguridad al momento de la aplicación).",
            "file": [template_dir.dir + "/files/Web_Accesorios_Instalacion_Vinyl_Siding_.pdf"]

        },
        "placaosb": {
            "titulo": "Placa OSB",
            "desc": "Para instalar el sistema Vinyl Siding es requisito indispensable un buen soporte estructural donde poder fijar (clavar) nuestro revestimiento. Por lo anterior se requiere que el espesor mínimo sea de 9,5 mm. Procure adquirir un tablero de la mejor calidad en el mercado.",
            "file": ""
        },
        "perfilinicio": {
            "titulo": "Perfil de inicio",
            "desc": "Como su nombre lo indica, este perfil da inicio a la postura del Panel D4 desde abajo hacia arriba, por lo tanto, debe estar perfectamente nivelada, es el único perfil de color grisáceo ya que queda oculto a la vista.",
            "file": [template_dir.dir + "/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf"]

        },
        "perfilj": {
            "titulo": "Perfil J",
            "desc": "Nuestro sistema Vinyl Siding se termina de fijar con los perfiles adecuados según la arquitectura de su casa. Nuestro perfil J es el más versátil del sistema y se utiliza para fijar en distintos planos la pieza principal: Panel  D4 y se aplica en vanos de puertas y ventanas.",
            "file": [template_dir.dir + "/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf"]

        },
        "perfilesq": {
            "titulo": "Perfil Esquinero Interior",
            "desc": "Nuestro sistema Vinyl Siding se termina de fijar con los perfiles adecuados según la arquitectura de su casa. El perfil Esquinero Interior, permite la unión limpia de dos planos que confluyen en una esquina cerrada, fijándolos y cerrando el sistema.",
            "file": [template_dir.dir + "/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf"]


        },
        "membrana": {
            "titulo": "Membrana hidrófuga: Ultra fieltro / Typar",
            "desc": "Para el éxito de nuestro sistema constructivo, es fundamental proteger la base de madera contra la humedad o la acción directa del agua (OSB o placa terciado). La utilización de una membrana de primera calidad es indispensable, te recomendamos estas dos opciones.",
            "file": [template_dir.dir + "/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf", template_dir.dir + "/files/Web_Typar_Ficha_tecnica_2020.pdf"]

        },
        "perfiltermino": {
            "titulo": "Perfil de término",
            "desc": "Nuestro sistema Vinyl Siding se termina de fijar con los perfiles adecuados según la arquitectura de su casa. Como su nombre lo indica, este perfil genera la terminación de la postura del Panel D4 y Tapacán. Fija la llegada de la pieza y la de una terminación limpia."
        },
        "perfilf": {
            "titulo": "Perfil F",
            "desc": "El perfil F es un perfil complementario que ayuda a sostener por parte doble algunas piezas, tales como: Aleros y Tapacán.",
            "file": [template_dir.dir + "/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf"]

        },
        "aleros": {
            "titulo": "Aleros: Sólidos y Ventilados",
            "desc": "El sistema Vinyl Siding aporta también a completar el sistema de techumbre. Los Aleros se utilizan para cerrar el espacio que se produce entre el término de la cubierta y el muro perimetral (alero) y controla el flujo de aire frío que debe ingresar al entretecho.",
            "file": [template_dir.dir + "/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf"]

        },
        "perfilesqext": {
            "titulo": "Perfil Esquinero Exterior",
            "desc": "El perfil Esquinero Exterior, permite la unión limpia de dos planos que confluyen en una esquina abierta, fijándolos y cerrando el sistema.",
            "file": [template_dir.dir + "/files/ultra_fieltro_Rollo_chico_Ficha_tecnica.pdf"]

        }

    }


    $('.prod').on('click', function (e) {
        $('.guia').hide();
        $('.popup-cont').hide();

        let guia = $(this).siblings('.guia')[0];
        $(guia).fadeIn();

        $('.popup-cont').fadeIn('slow');

        let data_prod = $(this).data('product');
        if (data_prod) {
            // console.log(data_prod);

            $('#data-title').text(products[data_prod]['titulo']);
            $('#data-desc').text(products[data_prod]['desc']);

            if (products[data_prod]['file'] != null || products[data_prod]['file'] != undefined) {
                if (products[data_prod]['file'].length > 1) {
                    $('#data-button').css({ "display": "block" });
                    $('#data-button-2').css({ "display": "block" });
                    $('#data-button').attr("href", products[data_prod]['file'][0]);
                    $('#data-button-2').attr("href", products[data_prod]['file'][1]);
                } else {
                    $('#data-button').css({ "display": "block" });

                    $('#data-button-2').css({ "display": "none" });
                    $('#data-button').attr("href", products[data_prod]['file']);
                }
            } else {
                $('#data-button').css({ "display": "none" });
                $('#data-button-2').css({ "display": "none" });
            }

        }

    });

    

    $('.close-cont').on('click', function (e) {
        $('.popup-cont').hide();
        $('.guia').hide();
    });

    $('.close-cont-email').on('click', function (e) {
        $('.popup-mail-cont').removeClass('active');
    });

    $('#cotizacion').on('click', function (e) {
        $('.popup-mail-cont').addClass('active');

    });


    $(document).ready(function (e) {
        render();


        /**
         * Funciones del cubicador (Cálculos pues, aveda, bien comentador yo un lunes 25 de septiembre, bien innecesario)
         *
         *
         */
        $('#calcular').on("click", function (e) {
            e.preventDefault();
            let elevaciones = [];
            let elevacionesSuma = 0;
            let largoSuma = 0;
            let altoSuma = 0;

            let nEsqEx = parseFloat($("#nEsqEx").val());
            let nEsqInt = parseFloat($("#nEsqInt").val());
            let mLinVenYPuer = parseFloat($("#mLinVenYPuer").val());
            let mLinPerInferCasa = parseFloat($("#mLinPerInferCasa").val());
            let mLinPerSupCasa = parseFloat($("#mLinPerSupCasa").val());
            let mLinPerAlero = parseFloat($("#mLinPerAlero").val());
            let mLinAvanAlero = parseFloat($("#mLinAvanAlero").val());
            let areaHabBajoCubierta = parseFloat($("#areaHabBajoCubierta").val());
            let mVanos = parseFloat($("#mVanos").val());

            for (let index = 1; index <= 17; index++) {
                let currentL = parseFloat($("#largoE" + index).val());
                let currentA = parseFloat($("#altoE" + index).val());

                largoSuma = largoSuma + currentL;
                altoSuma = altoSuma + currentA;
                elevaciones[index] = currentL * currentA;
                elevacionesSuma = elevacionesSuma + (currentL * currentA);

            }

            /**
             * Areas de ventilacion techumbre
             */

            let areaNetaVent = (areaHabBajoCubierta) / 150; //Área Neta de ventilación
            let areaNetaAlerosVent = areaNetaVent / 2; //Área Neta  para  Aleros Ventilados
            let mRealesMuro = Math.round(elevacionesSuma - mVanos);

            alerosSolidosConst['largo'] = mLinAvanAlero;
            alerosSolidosConst['unidades'] = parseFloat((alerosVentilados['largo'] / alerosSolidosConst['largo']).toFixed(1));
            alerosSolidosConst['anchoEmpalmeM'] = parseFloat(alerosVentilados['ancho'] - 0.03);
            alerosSolidosConst['cortesCombinados'] = parseFloat(Math.round(alerosSolidosConst['perimetro'] / alerosSolidosConst['anchoEmpalmeM']));
            alerosSolidosConst['realLargo'] = parseFloat((alerosSolidosConst['largo'] * 4).toFixed(1));
            alerosSolidosConst['piezas'] = Math.ceil(alerosSolidosConst['cortesCombinados'] * alerosSolidosConst['largo'] / alerosSolidosConst['realLargo']);


            alerosVentilados['tomaAire'] = parseFloat(areaNetaAlerosVent.toFixed(3));
            alerosVentilados['requerido'] = parseFloat(Math.round(alerosVentilados['tomaAire'] / alerosVentilados['areaNetaXAlero']));
            alerosSolidos['piezas'] = Math.ceil(alerosSolidosConst['piezas'] - alerosVentilados['requerido']);

            let prod_105099 = Math.floor(mRealesMuro / Sistema_Vinyl_Siding["105099"]['rendimientoM']);
            let prod_103701 = alerosSolidos['piezas'];
            let prod_103801 = alerosVentilados['requerido'];
            let prod_105001 = Math.ceil(mLinPerSupCasa / Sistema_Vinyl_Siding["105001"]['rendimientoM']);
            let prod_105005 = Math.ceil((mLinPerAlero + mLinPerSupCasa) / Sistema_Vinyl_Siding['105005']['rendimientoM']);
            let prod_105050 = Math.ceil(mLinPerAlero / Sistema_Vinyl_Siding['105050']['rendimientoM']);
            let prod_105302 = Math.ceil((mLinPerAlero + mlUnionesAleros + mLinVenYPuer) / Sistema_Vinyl_Siding['105302']['rendimientoM']);
            let prod_105401 = Math.ceil(mLinPerSupCasa / Sistema_Vinyl_Siding['105401']['rendimientoM']);
            let prod_105501 = nEsqInt;
            let prod_105601 = nEsqEx;
            let prod_sc = Math.round(mRealesMuro / Sistema_Vinyl_Siding['s/c']['rendimientoM']);
            let prod_800401_principal = Math.ceil(Sistema_Vinyl_Siding['105099']['totalClavos'] / Sistema_Vinyl_Siding['800401']['UniXcaja']);
            let prod_800401_fijo = Math.ceil((Sistema_Vinyl_Siding['103701']['totalClavos'] + Sistema_Vinyl_Siding['103801']['totalClavos'] + Sistema_Vinyl_Siding['105001']['totalClavos'] + Sistema_Vinyl_Siding['105005']['totalClavos'] + Sistema_Vinyl_Siding['105050']['totalClavos'] + Sistema_Vinyl_Siding['105302']['totalClavos'] + Sistema_Vinyl_Siding['105401']['totalClavos'] + Sistema_Vinyl_Siding['105501']['totalClavos'] + Sistema_Vinyl_Siding['105601']['totalClavos']) / Sistema_Vinyl_Siding['800401']['UniXcaja']);

            $('#prod_105099').text(prod_105099);
            $('#prod_103701').text(prod_103701);
            $('#prod_103801').text(prod_103801);
            $('#prod_105001').text(prod_105001);
            $('#prod_105005').text(prod_105005);
            $('#prod_105050').text(prod_105050);
            $('#prod_105302').text(prod_105302);
            $('#prod_105401').text(prod_105401);
            $('#prod_105501').text(prod_105501);
            $('#prod_105601').text(prod_105601);
            $('#prod_sc').text(prod_sc);
            $('#prod_800401_principal').text(prod_800401_principal);
            $('#prod_800401_fijo').text(prod_800401_fijo);

            $('.cont-table-results').fadeIn();

            const scrollToEl = $('.cont-table-results');
            $('html').animate(
                {
                    scrollTop: scrollToEl.offset().top,
                },
                800
            );
        });


    });

    $(window).on("resize", function () {
        render();
    });

    function render() {
        let width_screen = $(window).width();
        if (width_screen < 1700 && width_screen > 1089) {
            let scale = (width_screen * 100) / max_width;
            $('.render-img-cont').css({
                'transform': 'scale(.' + (parseInt(scale) - 5) + ')'
            })
        }
    }
}, jQuery);