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
    <meta content="La historia de Bats'il Maya, su misión, su visión, su historia, y su comunidad."
          name="description">
    <meta content="Tseltal, Bats'il Maya, Chilón, Chiapas, historia, Mayas, Yomol A'tel, Ts'umbal Xilaha’, Xapontic, chabnichim,capeltic, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo"
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

    <title>Nosotros</title>
</head>
<body>
<div id="nosotros">
    <div style="position:relative;">
        <header>
            <?php renderHeader(); ?>
            <h2 class='h2-header'>Somos la planta transformadora de café</h2>
            </div>
            </header>
</div>
<section>
    <div>
        <h2 class="kill">Nuestra historia</h2>
        <article class="grid-2-text-photo mapa-mobil-cafe">
            <div class="grid-2-left-image" id="image-nuestra-historia">
            </div>
            <div class="grid-2-right-text container">
                <div class="wrapper-text">
                    <h3>Nuestra historia inicia en septiembre de 1993 en Chilón, Chiapas</h3><br>
                    <p class="p-big">Surge como una respuesta a la marginación en las que se encuentran
                        las comunidades
                        indígenas tseltales, que las hace presas del abuso por parte de intermediarios en el acopio
                        y precio
                        pagado por su café.</p><br>
                    <p>Dentro de la cooperativa Ts’umbal Xilaha’,</p>
                    <p>nuestros productores se organizaron en el 2001, iniciando con solo 12 comunidades.</p>
                </div>
            </div>
        </article>
    </div>
</section>
<section>
    <div>
        <h2 class="center-aligned">Cultura tseltal</h2>
        <article class="grid-2-text-photo">
            <div class="grid-2-right-image" id="image-el-pueblo-tseltal"></div>
            <div class="grid-2-left-text container">
                <div class="wrapper-text">
                    <h3>El pueblo tseltal pertenece a la familia maya</h3><br>
                    <p class="p-big">Actualmente son el grupo indígena más numeroso en
                        Chiapas, 34% de los habitantes del estado piensan la vida en tseltal.</p><br>
                    <p>Los tseltales se definen a sí mismos como los “Bats’il Winiquetic”, los hombres verdaderos, o
                        bien “Pas C’altic Winiquetic”, los hombres que hacen milpa ya que la vida comunitaria y
                        familiar
                        está organizada alrededor de la siembra del maíz.</p>
                </div>
            </div>
        </article>
        <div class="light-bg">
            <article class="grid-2-text-photo no-padding">
                <div class="grid-2-right-text container order-1">
                    <div class="wrapper-text">
                        <h3>Corazón tseltal</h3><br>
                        <p class="p-big">La manera de ser de los tseltales ha sido determinada por el lugar
                            histórico que
                            configuró
                            sus
                            formas
                            de resistencia y sobrevivencia.</p> <br>
                        <p>Al igual que muchos de los pueblos indígenas de México, y del mundo, las comunidades
                            tseltales
                            han
                            sido históricamente sometidas a estructuras de dominación y empobrecimiento por lo que,
                            a lo
                            largo
                            de los años, han tenido que organizarse para resistir y recuperar la propiedad y destino
                            de
                            su
                            territorio.</p>
                    </div>
                </div>
                <div class="grid-2-left-image" id="image-corazon-tseltal"></div>
            </article>
        </div>
        <article class="grid-2-text-photo">
            <div class="grid-2-right-image   " id="image-la-actividad-mas-importante"></div>
            <div class="grid-2-left-text container">
                <div class="wrapper-text">
                    <h3>La actividad más importante</h3><br>
                    <p>para estas comunidades es la pequeña agricultura familiar diversificada: producen maíz,
                        frijol,
                        calabaza, chile e incluyen cultivos comerciales como el café.</p><br>
                    <h4>Autoconsumo</h4><br>
                    <p>Al igual que muchas familias campesinas, los esquemas de producción son para el autoconsumo,
                        por
                        lo
                        que la diversidad de cultivos es fundamental para asegurar la riqueza en el alimento y
                        evitar
                        depender de un solo producto.</p>
                </div>
            </div>
        </article>
    </div>
</section>
<section class="dark-bg m-and-v">
    <h2 class="kill">Misión y Visión</h2>
    <div class="container extra-articles">
        <!-- TODO: Add span or div between articles to place dividing line because limiting width of the text breaks symmetry.-->
        <article class="mision">
            <h3 class="yellow">Misión</h3><br>
            <p class="white">Tener un <strong>producto de calidad</strong> que se pueda poner al alcance de todos
                aquellos que
                apuestan por un <strong>consumo responsable</strong> y con conciencia de apoyo por una <strong>economía
                    más justa y solidaria.</strong></p>
        </article>
        <article class="vision">
            <h3 class="yellow">Visión</h3><br>
            <p class="white">Ser un <strong>movimiento</strong> de personas, familias, comunidades y empresas de
                economía social y
                solidaria que basados en nuestros principios y valores seamos una <strong>alternativa
                    sustentable</strong> a la actual lógica económica y empresarial, generando <strong>inclusión
                    social, autonomía, dignidad y lequil cuxlejalil</strong> (buen vivir) para mantener un <strong>balance
                    entre trabajo, vida social y naturaleza.</strong></p>
        </article>
    </div>
</section>
<section id="family">
    <div class="container center-aligned">
        <h2>Nuestra familia</h2>
        <div class="mobile-family grid-scroll-x">
            <article class="yomol grid-image-first">
                <h3 class="h3-small">Yomol A'tel</h3>
                <figure class="image-top-first-round">
                    <img alt="Logo de Yomol A'tel" src="images/nosotros/logo_yomol_a_tel_batsil_maya.svg">
                </figure>
            </article>
            <article class="grid-image-first">
                <h3 class="h3-small">Ts'umbal Xitalha</h3>
                <figure class="image-top-first-round">
                    <img class="tsumbal" alt="Logo de TS'umbal Xitalha" src="images/nosotros/logo-tsumbal_xitala.svg">
                </figure>
            </article>
            <article class="grid-image-first">
                <h3 class="h3-small">Bats'il Maya</h3>
                <figure class="image-top-first-round">
                    <img class="batsil-maya" alt="Logo Bats'il Maya" src="images/nosotros/logo_bats_il_maya.svg">
                </figure>
            </article>
            <article class="grid-image-first">
                <h3 class="h3-small">Xapontic</h3>
                <figure class="image-top-first-round">
                    <img alt="Logo Xapontic" src="images/nosotros/xapontic_nuestro_jabon_batsil_maya.svg">
                </figure>
            </article>
            <article class="grid-image-first">
                <h3 class="h3-small">Chabnichim</h3>
                <figure class="image-top-first-round">
                    <img alt="Logo Chabtic" src="images/nosotros/logo_chabtic.svg">
                </figure>
            </article>
            <article class="grid-image-first">
                <h3 class="h3-small">Capeltic</h3>
                <figure class="image-top-first-round">
                    <img alt="Logo Capeltic" src="images/nosotros/logo_capeltic_batsil_maya.svg">
                </figure>
            </article>
        </div>
        <div class="desktop-family">
            <article class="yomol grid-image-first">
                <h3>Yomol A'tel</h3>
                <figure class="image-top-first-round  yomol">
                    <img alt="Logo de Yomol A'tel" src="images/nosotros/logo_yomol_a_tel_batsil_maya.svg">
                </figure>
                <p>Cooperativa de producción conformada por 250 familias de productores tseltales de café y
                    miel.</p>
            </article>
            <div class="grid-conditions">
                <article class="shorter-text-space grid-image-first">
                    <h3>Ts'umbal Xitalha</h3>
                    <figure class="image-top-first-round tsumbal">
                        <img alt="Logo de TS'umbal Xitalha" src="images/nosotros/logo-tsumbal_xitala.svg">
                    </figure>
                    <p>Cooperativa de producción conformada por 250 familias de productores tseltales de café y
                        miel.</p>
                </article>
                <article class="shorter-text-space batsil-maya grid-image-first">
                    <h3>Bats'il Maya</h3>
                    <figure class="batsil-maya image-top-first-round">
                        <img alt="Logo Bats'il Maya" src="images/nosotros/logo_bats_il_maya.svg">
                    </figure>
                    <p>Se encarga del proceso del tostado y la comercialización de café como producto terminado.</p>
                </article>
            </div>
            <div class="gridthree2">
                <article class="not-so-short-text grid-image-first">
                    <h3>Xapontic</h3>
                    <figure class="xapontic image-top-first-round">
                        <img alt="Logo Xapontic" src="images/nosotros/xapontic_nuestro_jabon_batsil_maya.svg">
                    </figure>

                    <p>Cooperativa de mujeres productoras de jabones, productos cosméticos y de higiene elaborados a
                        base de miel e ingredientes naturales.</p>
                </article>
                <article class="not-so-short-text grid-image-first">
                    <h3>Chabnichim</h3>
                    <figure class="image-top-first-round chabnichim">
                        <img alt="Logo Chabtic" src="images/nosotros/logo_chabtic.svg">
                    </figure>
                    <p>Empresa solidaria comercializadora de miel orgánica.</p>
                </article>
                <article class="not-so-short-text grid-image-first">
                    <h3>Capeltic</h3>
                    <figure class="capeltic image-top-first-round">
                        <img alt="Logo Capeltic" src="images/nosotros/logo_capeltic_batsil_maya.svg">
                    </figure>
                    <p>Grupo de cafeterías que generan el máximo valor agregado del café al tiempo que funciona como
                        puente intercultural entre dos culturas: la indígena tseltal y la occidental.</p>
                </article>
            </div>
        </div>
    </div>
</section>
<aside>
    <div class="extra-articles no-padding">
        <article class="bnuestrocafe">
            <h3 class="light botones-h3">Nuestro café</h3>
            <p class="botones-p">Desde el cafetal a la taza</p>
            <a class="button red" href="nuestro_cafe.php" target="_self">Leer más »</a>
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
                <li><a class="active" href="nosotros.php" target="_self">Nosotros</a></li>
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
                <li id="ofice1"><strong>Oficina</strong><br>
                    lugar ###<br> Chilón, Chiapas
                </li>
                <li id="ofice2"><strong>Oficina</strong><br>
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
