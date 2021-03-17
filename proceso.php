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
    <meta content="El viaje del café desde la planta, cultivo, selección, tueste, y molido. Incluyendo los beneficios y valores agregados del café "
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, proceso, cafetal, agricultura, beneficio, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo"
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

    <title>Proceso</title>
</head>
<body>
<div id="proceso">
    <div>
        <header>
            <?php renderHeader(); ?>
            <h2 class='h2-header'>Proceso desde el cafetal</h2>
    </div>
    </header>
    </header>
</div>
<section>
    <h2 class="kill">Prácticas</h2>
    <article class="grid-2-text-photo">
        <div class="grid-2-right-image image-agroecologicas order-2"></div>
        <div class="grid-2-left-text container">
            <div class="wrapper-text">
                <h3>Prácticas agroecológicas</h3><br>
                <p class="p-big">En el cafetal, nuestro café es cultivado de manera orgánica, por lo que no se
                    utiliza ningún tipo
                    de
                    agroquímico.</p><br>
                <p>En su lugar, y bajo los principios de la agroecología, se mantiene el esquema tradicional de
                    cultivo
                    bajo sombra, lo que asegura una gran biodiversidad en nuestros cafetales.</p><br>
                <p>Las plantas de café son cuidadosamente abonadas con humus de lombriz y compostas</p><br>
                <p>En caso de presencia de plagas,se implementan controles biológicos que no dañan al suelo o a los
                    micro-organismos que habitan en el cafetal.</p><br>
            </div>
        </div>
    </article>
    <article class="grid-2-text-photo">
        <div class="grid-2-left-image order-2" id="image-restauracion"></div>
        <div class="grid-2-right-text container">
            <div class="wrapper-text">
                <h3>Restauración de los cafetales</h3><br>
                <p class="p-big">A través de la renovación de cafetos, se evitan nuevos brotes de la roya.</p><br>
                <p>Existen proyectos de viveros para contraarrestrar el efecto devastador que la roya tuvo sobre los
                    cafetales de la cooperativa en el 2013.</p><br>
            </div>
        </div>
    </article>

</section>
<section class="green-bg">
    <div class="container">
        <h2 class="kill">Beneficios</h2>
        <div class="grid-2-text-photo-2 light ">
            <article class="humedo">
                <h3>¿Cuál es el beneficio húmedo?</h3>
                <p class="p-big">La técnica de secado al sol es minuciosa y requiere un control de tiempo para
                    llegar al secado
                    perfecto de cada grano de café.</p>
                <p>Una vez que es cortado el café cereza se procede a despulpar, lavar y secar al sol, para así
                    obtener
                    el café pergamino.</p>
            </article>
            <article class="seco">
                <h3>¿Cuál es el beneficio seco?</h3>
                <p class="p-big">Es en nuestra planta donde al café pergamino se le despoja de su cascarilla y así
                    surge el grano
                    de
                    color verde.</p>
                <p>Al que se le denomina como café oro y será seleccionado cuidadosamente antes de pasar a la
                    tostadora. </p>
            </article>
        </div>
    </div>
</section>
<section class="container tipo-tueste max-width-909">
    <h2 class="center-aligned">Tipos de tueste</h2>
    <figure class="tipos-tueste"><img alt="Gráfica de Tipos de tueste"
                                      src="images/proceso/proceso_tipos_de_tueste_grafica_batsil_maya.svg"></figure>
    <article class="tueste-claro">
        <h3 class="p-big">Tueste claro</h3>
    </article>
    <article class="tueste-medio">
        <h3 class="p-big">Tueste medio</h3>
    </article>
    <article class="tueste-vienes">
        <h3 class="p-big">Tueste vienés</h3>
    </article>
    <article class="tueste-oscuro">
        <h3 class="p-big">Tueste oscuro</h3>
    </article>
    <article class="tueste-italiano">
        <h3 class="p-big">Tueste italiano</h3>
    </article>
    <p>Temperatura</p>
    <p class="max-width-111">Tiempo</p>
</section>
<div class="light-bg">
    <section class="container center-text">
        <h2 class="kill">Molidos</h2>
        <article>
            <h2>Molido</h2>
            <p class="p-big">Lo efectuamos al gusto del cliente o de acuerdo al tipo de cafetera que utilice</p>
        </article>
        <div class="gridthree2 gimme-padding-2">
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Medio</h3>
                <figure class="image-top-first-round"><img alt="Molido Medio Americano"
                                                           src="images/molidos/americano.svg">
                </figure>
                <p>Americano y cafeteras con filtro metálico</p>
            </article>
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Fino</h3>
                <figure class="image-top-first-round"><img alt="Molido Fino Espresso"
                                                           src="images/molidos/espresso.svg">
                </figure>
                <p>Espresso y cafeteras con filtro de trapo o de papel</p>
            </article>
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Personalizado</h3>
                <figure class="image-top-first-round"><img alt="Molido Extrafino Turco"
                                                           src="images/molidos/fino-turco.svg">
                </figure>
                <p>Elige un molido de acuerdo a tus necesidades</p>
            </article>
        </div>
        <p class="mol6">Contamos con dos molinos con una capacidad</p>
    </section>
</div>

<aside>
    <div class="extra-articles">
        <article class="bnosotros">
            <h3 class="light botones-h3">Nosotros</h3>
            <p class="botones-p">Somos la planta transformadora de café.</p>
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
        <article>
            <h2 class="kill">article</h2>

        </article>
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
                <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                <li><a class="active" href="proceso.php" target="_self">Proceso</a></li>
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
    