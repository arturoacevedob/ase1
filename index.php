<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include 'header.php';
include 'contact_pending.php';
?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Dándole el máximo valor agregado que nos permite la construcción de un precio justo y digno al trabajo de quienes los siembran."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico" name="keywords">
    <!-- Scripts de compatibilidad -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/php5shiv/3.7.3/php5shiv.js"></script><![endif]-->
    <!-- Escala de viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Link a CSS -->
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mapa.css" rel="stylesheet">
    <link href="css/datetimepicker.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title>Bats'il Maya</title>
</head>
<body id="homepage">

<header>
    <div class="grid-header container">
        <h1>Bats'il Maya: Inicio</h1>
        <div class="nav-wrapper desktop">
            <a class="logo" href="index.php" target="_self">
                <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
            </a>
            <nav id="menu-desktop">
                <h2>Menú</h2>
                <ul class="menu-desktop-content">
                    <li><a class="active" href="" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="products.php" target="_self">Productos</a></li>
                    <li><a href="noticias.php" target="_self">Noticias</a></li>
                    <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                </ul>
            </nav>
            <?php
            renderHeader()
            ?>
        </div>

        <div class="nav-wrapper mobile">
            <a class="logo" href="index.php" target="_self">
                <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
            </a>
            <nav id="menu-mobile">
                <input id="menu-mobile-toggle" type="checkbox">
                <label for="menu-mobile-toggle"><span id="menu-icon"></span></label>
                <div id="overlay"></div>
                <ul class="menu-mobile-content light-bg">
                    <li><a class="active" href="index.php" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="products.php" target="_self">Productos</a></li>
                    <li><a href="noticias.php" target="_self">Noticias</a></li>
                    <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                    <?php
                    renderHeader()
                    ?>
                </ul>
            </nav>
        </div>
        <h2 class="h2-header">Café tseltal:<br>Producto de un trabajo solidario y digno</h2>
        <p class="h2-subtitle">Una cooperativa que tuesta, muele, y comercializa
            <wbr>
            un producto de calidad a precio justo.
        </p>
        <a class="button red fit-content" href="nosotros.php" target="_self">Sobre nosotros</a>
    </div>
</header>

<div class="dark-bg">
    <aside class="no-padding-top-bottom light-bg">
        <div class="gridbigproduct no-padding-top-bottom container">
            <h2 class="h2-small product-title">Productos</h2>
            <div class="grid-scroll-x">
                <section class="ind-product">
                    <h3 class="title pname h3-small">Premium Orgánico</h3>
                    <p><span class="price red">$80-$100</span></p>
                    <figure class="pimage"><img
                                alt="Granos de café premium orgánico de Bats'il Maya"
                                src="images/productos/cafe/granos_de_cafe_premium_organico_batsil_maya.jpg"></figure>
                    <p class="pdescription">Únicamente granos que cumplen los más altos estándares de calidad.<br> <a
                                class="link" href="products.php" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Gourmet Orgánico</h3>
                    <p><span class="price red">$80-$100</span></p>
                    <figure class="pimage"><img
                                alt="Granos de café gourmet orgánico de Bats'il Maya"
                                src="images/productos/cafe/granos_de_cafe_gourmet_organico_batsil_maya.jpg"></figure>
                    <p class="pdescription">Granos con preparación europea son seleccionados cuidadosamente.<br> <a
                                class="link" href="products.php" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Orgánico</h3>
                    <p><span class="price red">$80-$100</span></p>
                    <figure class="pimage"><img alt="Granos de café orgánico de Bats'il Maya"
                                                src="images/productos/cafe/granos_de_cafe_organico_batsil_maya.jpg">
                    </figure>
                    <p class="pdescription">Un café de preparación americana con excelente calidad.<br> <a
                                class="link" href="products.php" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product margin-product-right">
                    <h3 class="title pname h3-small">Descafeinado</h3>
                    <p><span class="price red">$80-$100</span></p>
                    <figure class="pimage"><img alt="Granos de café descafeinado de Bats'il Maya"
                                                src="images/productos/cafe/granos_de_cafe_descafeinado_batsil_maya.jpg">
                    </figure>
                    <p class="pdescription">Para aquellas personas que desean disfrutar un rico café libre de cafeína.<br>
                        <a class="link" href="products.php" target="_self">Ver más »</a></p>
                </section>
            </div>
            <a class="h2-link right-aligned little-font" href="products.php" target="_self">Todos los productos »</a>
            <a class="button red addbutton1" href="nuestro_cafe.php" target="_self">Nuestro café</a>
            <a class="button red addbutton2" href="proceso.php" target="_self">Proceso</a>
        </div>
    </aside>
</div>
<section class="map dark-bg">
    <h2 class="kill">Información de envio</h2>
    <div class="curvita light-bg"></div>
    <article class="container world-map">
        <h2 class="h2-small yellow center-aligned">Dónde estamos y a dónde llegamos</h2>
        <p class="h3-big light center-aligned">Nuestro café, <span>100% orgánico</span>,
            <wbr>
            es cultivado por familias
            indígenas <span>tseltales</span> en la selva norte de <span>Chiapas</span></p>
        <div class="distribution-map mapa mapa-desktop">
            <figure><img alt="Mapa mundi de Bats'il Maya para concocer Dónde están y a Dónde llegan" class="mapa-mundi"
                         src="images/inicio/mapa_mundi_donde_estamos_donde_llegamos_batsil_maya.svg">
                <button class="map-point boton1 fa fa-map-marker contentm centered-y" aria-hidden="true">
                    <div class="contentm">
                        <div class="centered-y">
                            <h2 class="yellow">Bats'il Maya</h2>
                            <p class="yellow">Chilón,Chiapas</p>
                            <p class="yellow">Aquí tostamos, empaquetamos y comercializamos el producto terminado</p>
                        </div>
                    </div>
                </button>
                <button class="map-point fa fa-map-marker boton2">
                    <div class="contentm">
                        <div class="centered-y">
                            <h2 class="yellow">Japón</h2>
                            <p class="yellow">Primeros compradores desde 1999</p>
                        </div>
                    </div>
                </button>
            </figure>
        </div>

        <div class="mapa-mobil">
            <figure><img alt="Mapa mundi de Bats'il Maya para concocer Dónde están y a Dónde llegan" class="mapa-mundi"
                         src="images/inicio/mapa_mundi_mobil_donde_estamos_donde_llegamos_batsil_maya.svg">
                <div>
                    <div>
                        <h2 class="yellow batsil">Bats'il Maya</h2>
                    </div>
                </div>
                <div>
                    <div>
                        <h2 class="yellow japon">Japón</h2>
                    </div>
                </div>
            </figure>
        </div>
    </article>
    <div class="extra-articles">
        <article class="grid-image-first">
            <h2 class="white">Envíos</h2>
            <div class="icono-envio image-top-first-round"></div>
            <p class="white">Donec mauris tellus, tristique non tincidunt eu, consectetur eu diam.</p>
        </article>
        <article class="grid-image-first">
            <h2 class="white">Envíos</h2>
            <div class="icono-envio image-top-first-round"></div>
            <p class="white">Donec mauris tellus, tristique non tincidunt eu, consectetur eu diam.</p>
        </article>
    </div>
</section>
<section class="clients container">
    <h2 class="h2-small">Nuestros Clientes</h2>
    <div class="grid-scroll-x">
        <article>
            <h3>Benetton</h3>
            <figure><img alt="Logo de Benetton" src="images/inicio/clients/logo_cliente_benetton_batsil_maya.png">
            </figure>
        </article>
        <article>
            <h3>A&W</h3>
            <figure><img alt="Logo de A&W" src="images/inicio/clients/logo_cliente_a&w_batsil_maya.png"></figure>
        </article>
        <article>
            <h3>W hotels</h3>
            <figure><img alt="Logo de W hotels" src="images/inicio/clients/logo_cliente_w_hotels_batsil_maya.png">
            </figure>
        </article>
        <article>
            <h3>Bard</h3>
            <figure><img alt="Logo de Bard" src="images/inicio/clients/logo_cliente_bard_batsil_maya.png"></figure>
        </article>
        <article>
            <h3>Capeltic</h3>
            <figure><img alt="Logo de Capeltic" src="images/inicio/clients/logo_cliente_capeltic_batsil_maya.png.png">
            </figure>
        </article>

    </div>
</section>
<div class="light-bg">
    <section class="certificate container">
        <h2 class="h2-small">Certificados</h2>
        <div class="gridthree2">
            <article>
                <h3 class="kill">Certimex</h3>
                <figure>
                    <img alt="Certificado orgánico CERTIMEX" src="images/certificates/certificado_certimex.svg">
                </figure>
            </article>
            <article>
                <h3 class="kill">Segarpa</h3>
                <figure>
                    <img alt="Certificado orgánico SEGARPA"
                         src="images/certificates/certificado_organico_segarpa.png">
                </figure>
            </article>
            <article>
                <h3 class="kill">USDA</h3>
                <figure>
                    <img alt="Certificado orgánico USDA" src="images/certificates/certificado_usda_organic.png">
                </figure>
            </article>
        </div>
    </section>
</div>
<section class="news container">
    <h2 class="h2-small">Noticias</h2>
    <div class="gridnews">
        <article class="one news-item">
            <h3>Noticia 1</h3>
            <p>fecha</p>
        </article>
        <article class="two news-item">
            <h3>Conoce Nuevo Capeltic</h3>
            <p>fecha</p>
        </article>
        <article class="three news-item">
            <h3>Noticia 3</h3>
            <p>fecha</p>
        </article>
        <article class="four news-item">
            <h3>Noticia 4</h3>
            <p>fecha</p>
        </article>
    </div>
</section>
<div class="light-bg">
    <aside class="more container">
        <h2 class="h2-small">Más sobre nosotros</h2>
        <div class="gridthree2">
            <section class="grid-image-first">
                <h3 class="h3-small">Nosotros</h3>
                <figure class="image-top-first-round">
                    <img src="images/inicio/nosotros_granos_de_cafe_batsil_maya.jpg" alt="Café de Bats'il Maya">
                </figure>
                <p class="set-height-us">Nuestra historia, cultura, visión, misión y organización.</p>
                <a class="button red fit-content" target="_self" href="nosotros.php">Conócenos</a>
            </section>
            <section class="grid-image-first">
                <h3 class="h3-small">Nuestro café</h3>
                <figure class="image-top-first-round">
                    <img src="images/inicio/nuestro_cafe_batsil_maya.jpg" alt="Manos con café">
                </figure>
                <p class="set-height-us">Nuestras condiciones, variedades, tostados, molidos y demás.</p>
                <a class="button red fit-content" target="_self" href="nuestro_cafe.php">Nuestro café</a>
            </section>
            <section class="grid-image-first">
                <h3 class="h3-small">Proceso</h3>
                <figure class="image-top-first-round">
                    <img src="images/inicio/proceso_batsil_maya.jpg" alt="Manos con la cereza de café">
                </figure>
                <p class="set-height-us">Prácticas agroecológicas, restauración de cafetales, beneficio húmedo y
                    seco.</p>
                <a class="button red fit-content" target="_self" href="proceso.php">Nuestras prácticas</a>
            </section>
        </div>
    </aside>
</div>
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
            <ul class="nav footer-nav dark">
                <li><a class="active" href="index.php" target="_self">Inicio</a></li>
                <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
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
                <li class="logo-footer">
                    <a href="index.php" target="_self">
                        <img alt="Bats'il Maya Logo" src="images/logos/batsil_maya_logo.svg">
                    </a>
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
            startDate: new Date()
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