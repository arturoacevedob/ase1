<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
include "header.php";
include "contact_pending.php";
?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Conocé las características de nuestro café en todas sus variedas, tuestes, y molidos"
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, molido, tueste, cafetal, taza, variedades, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo"
          name="keywords">
    <!-- Scripts de compatibilidad -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!-- Escala de viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Link a CSS -->
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datetimepicker.css" rel="stylesheet">
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title>Nuestro café</title>
</head>
<body>
<div id="nuestrocafe">
    <div>
        <header>
            <?php renderHeader(); ?>
        </header>
    </div>
    <div>
        <article class="grid-2-text-photo">
            <div class="grid-2-left-text container">
                <div class="wrapper-text">
                    <h2>Ubicación</h2><br>
                    <p class="p-big">Nuestra región, la Selva Norte de Chiapas, por su localización geográfica, tiene las
                        condiciones óptimas
                        para el cultivo de café de alta calidad.</p> <br>
                    <p>Todo nuestro café es cultivado bajo prácticas agroecológicas y contamos con café orgánico
                        certificado.</p> <br>
                    <p>Nuestro café proviene de pequeñas parcelas pertenecientes a las 344 familias tseltales que
                        conforman
                        a la cooperativa Ts’umbal Xitalha’.</p>
                </div>
            </div>
            <div class="grid-2-right-image order-2" id="image-ubicacion"></div>
        </article>
    </div>
    <section class="dark-bg condiciones light">
        <div class="container center-text">
            <h2 class="light">Tenemos las condiciones óptimas para el cultivo de café de alta calidad</h2>
            <div class="grid-conditions">
                <article>
                    <div class="altura"></div>
                    <h3>Altura: 900 - 1400 msnm</h3>
                </article>
                <article>
                    <div class="temperatura"></div>
                    <h3>Temperatura</h3>
                </article>
                <article>
                    <div class="suelo"></div>
                    <h3>Suelo con abundante materia orgánica.</h3>
                </article>
                <article>
                    <div class="variedad"></div>
                    <h3>Gran variedad de árboles de sombra.</h3>
                </article>
            </div>
        </div>
    </section>
    <section class="grid-2-text-photo taza-cafe kill-padding-bottom">
        <div class="grid-2-right-text container ">
            <div class="wrapper-text">
                <h2 class="taza-h2">​Características en taza</h2><br>
                <p class="p-big">Quienes lo disfrutan encuentran un balance propio de los cafés de altura caracterizado por un delicado y fino sabor, cuerpo abundante y cremoso, y acidez cítrica.</p><br>
                <p>Sus notas son florales, acarameladas y achocolatadas.</p><br>
                <p>En Yomol A’tel, cuidamos cada uno de los trabajos y pasos que sigue nuestro café, desde el cafetal a
                    la taza.</p>
            </div>
        </div>
        <div class="grid-2-left-image" id="caracteristicas-taza">
        </div>
    </section>
    <section class="more container">
        <h2>Variedades</h2>
        <p class="padding-text-center p-big padding-top-bottom">Trabajamos con café 100% arábigo con variedades typica, borbón y oro azteca.</p>
        <div class="gridthree2">
            <article>
                <h3 class="h3-small">Typica</h3>
                <p>Uno de los cafés más importantes cultural y genéticamente en el mundo, con alta calidad en
                    Centroamérica.</p>
            </article>
            <article>
                <h3 class="h3-small">Borbón</h3>
                <p>Uno de los cafés más importantes cultural y genéticamente en el mundo, conocidos por su excelente
                    calidad de la bebida en las mayores altitudes.</p>
            </article>
            <article>
                <h3 class="h3-small">Oro Azteca</h3>
                <p>Adaptada para las zonas cálidas y suelos ácidos. Variedad de alto producción.</p>
            </article>
        </div>
    </section>
    <div class="light-bg">
        <section class="more container">
            <h2 class="padding-bottom-25">Mezclas de tuestes</h2>
            <div class="gridthree2">
                <article class="grid-image-first">
                    <h3 class="h3-small">Claro</h3>
                    <figure class="circle image-top-first-round"><img alt="Tueste Claro del café"
                                                                      src="images/nuestro_cafe/tueste_claro.jpg">
                    </figure>
                    <p>Los tuestes claros muestran los defectos o cualidades del grano, realza acidez y sabor en el
                        grano, la bebida es ligera de cuerpo y es ideal para la preparación de mezclas.</p>
                </article>
                <article class="grid-image-first">
                    <h3 class="h3-small">Medio</h3>
                    <figure class="circle image-top-first-round"><img alt="Tueste medio del café"
                                                                      src="images/nuestro_cafe/tueste_medio.jpg">
                    </figure>
                    <p>Se tuesta un poco más que el anterior.</p>
                </article>
                <article class="grid-image-first">
                    <h3 class="h3-small">Oscuro</h3>
                    <figure class="circle image-top-first-round"><img alt="Tueste oscuro del café"
                                                                      src="images/nuestro_cafe/tueste_oscuro.jpg">
                    </figure>
                    <p>La superficie de los granos se contempla muy brillosa por el aceite que desprende y la bebida
                        es
                        bastante fuerte y seca la sensación al paladar.</p>
                </article>
            </div>
        </section>
    </div>
    <section class="container center-text">
        <h2>Molidos</h2>
        <p class="p-big padding-text-center padding-top-bottom">El molido lo efectuamos al gusto del cliente o de acuerdo al tipo de cafetera que utilice.</p>
        <p class="padding-text-center padding-bottom-25">Contamos con dos molinos con una capacidad de 3 kg. por minuto, con 9 niveles de molido.</p>
        <div class="gridthree2">
           
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Medio</h3>
                <figure class="image-top-first-round"><img alt="Molido Medio Americano"
                                                           src="images/molidos/americano.svg">
                </figure>
                <p>Americano y cafeteras con filtro metálico</p>
            </article>
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Fino</h3>
                <figure class="image-top-first-round"><img alt="Molido Fino Espresso" src="images/molidos/espresso.svg">
                </figure>
                <p>Espresso y cafeteras con filtro de trapo o de papel</p>
            </article>
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Personalizado</h3>
                <figure class="image-top-first-round"><img alt="Molido Extrafino Turco" src="images/molidos/fino-turco.svg">
                </figure>
                <p>Elige un molido de acuerdo a tus necesidades</p>
            </article>
        </div>
    </section>
    <aside>
        <div class="extra-articles">
            <article class="bnosotros">
                <h3 class="light botones-h3">Nosotros</h3>
                <p class="botones-p">Somos la planta transformadora de café</p>
                <a class="button red" href="nosotros.php" target="_self">Leer más »</a>
            </article>
            <article class="bproductos">
                <h3 class="light botones-h3">Productos</h3>
                <p class="botones-p">Café Tseltal, miel orgánica y jabones artesanales</p>
                <a class="button red" href="products.php" target="_self">Leer más »</a>
            </article>
        </div>
    </aside>
    <div class="green-bg">
        <section class="llamada container light">
            <div class="join">
                <?php renderContactForm(); ?>
            </div>
        <div id="form-ilustracion"></div>
        </section>
    </div>
    <div class="bigfoot">
        <div class="curvita green-bg"></div>
        <div class="footer container">
            <aside>
                <ul class="nav footer-nav">
                    <li><a href="index.php" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a class="active" href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="products.php" target="_self">Productos</a></li>
                    <li><a href="noticias.php" target="_self">Noticias</a></li>
                    <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                </ul>
            </aside>
            <footer>
                <ul class="foot-info p-small">
                    <li><strong>Teléfono</strong><br>
                        01-919-6710172
                    </li>
                    <li><strong>Correo</strong><br>
                        contacto@batsilmaya.org
                    </li>
                    <li class="logo-footer"><a href="index.php" target="_self"><img alt="Bats'il Maya Logo"
                                                                                     src="images/logos/batsil_maya_logo.svg"></a>
                    </li>
                    <li id="office1"><strong>Oficina</strong><br>
                        lugar ###<br> Chilón, Chiapas
                    </li>
                    <li id="office2"><strong>Oficina</strong><br>
                        lugar ###<br> Chilón, Chiapas
                    </li>
                </ul>
            </footer>
        </div>
    </div>
</div>

<script charset="UTF-8" src="js/jquery.js"></script>
<script charset="UTF-8" src="js/datetimepicker.js"></script>
<script charset="UTF-8" src="js/datetimepicker.es.js"></script>
<script charset="UTF-8" src="js/email-autocomplete.js"></script>
<script charset="UTF-8" src="js/mask.js"></script>

<script>
    $(document).ready(function () {
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $(".email").emailautocomplete();
        $('.form_date').datetimepicker({
            language: 'es',
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            startDate: new Date(),
        });
        $('.form_date').datetimepicker('setDaysOfWeekDisabled', [0, 6]);
        $('.form_time').datetimepicker({
            language: 'es',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0,
            showMeridian: 1,
            minuteStep: 15
        });
    });
</script>

</body>
</html>
    