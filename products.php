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
    <meta content="Dándole el máximo valor agregado que nos permite la construcción de un precio justo y digno al trabajo de quienes los siembran."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Chilón, Orgánico, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo"
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

    <title>Productos</title>
</head>
<body>
<div id="productos">
    <div>
        <header>
            <?php renderHeader(); ?>
            <h2 class='h2-header'>Productos</h2>
    </div>
    </header>
        </header>
    </div>
    <aside class="product dark-bg light">
        <div class="container-sequel">
            <h2 class="product-title yellow">Café Tseltal</h2>
            <p>Quienes lo disfrutan, encuentran un balance propio de los cafés de altura, caracterizado por un delicado
                y
                fino sabor, cuerpo abundante y cremoso, y acidez cítrica. Sus notas son florales, acarameladas y
                achocolatadas</p>
        </div>
        <div class="gridbigproduct container">
            <div class="grid-scroll-x">
                <?php
                $query = "select * from products where id_category = 1";
                $recordSet = execute($query);

                $products = [];
                $counter = 0;
                while ($row = mysqli_fetch_array($recordSet)) {
                    $products[$counter] = [];
                    $products[$counter]["id_product"] = $row["id_product"];
                    $products[$counter]["name_product"] = $row["name_product"];
                    $products[$counter]["description"] = $row["description"];
                    $products[$counter]["notes"] = $row["notes"];
                    $products[$counter]["client_type"] = $row["client_type"];
                    $counter++;
                }

                for ($i = 0; $i < count($products); $i++) {
                    $q = "select image_path from images where images.id_product = " . $products[$i]["id_product"] . " limit 1";
                    $recordSetImage = execute($q);
                    $image_row = mysqli_fetch_array($recordSetImage);
                    $image_path = $image_row["image_path"];

                    echo "
                    <section class='ind-product'>
                        <h3 class='title pname h3-small'>" . $products[$i]["name_product"] . "</h3>
                        <div style='height: 250px; background: transparent url(" .
                        $image_path .
                        ") 50% 50% / cover no-repeat;'></div>
                        <p class='pdescription'>" . $products[$i]["description"] . "<br>
                            <a class='link ' href='product_view.php?idproduct=" . $products[$i]["id_product"] . "' target='_self'>Ver más »</a>
                        </p>
                    </section>";
                }
                ?>
            </div>
        </div>
    </aside>

    <!--<aside class="product dark-bg light">
        <div class="container-sequel">
            <h2 class="product-title">Extras</h2>
        </div>
        <div class="gridbigproduct container">
            <div class="grid-scroll-x">
                <section class="ind-product">
                    <h3 class="title pname h3-small">Bolsa bordada artesanal para tú café</h3>
                    <figure class="pimage"><img
                                alt="Bolsa bordada artesanal para tú café"
                                src="images/productos/extras/bolsa_artesanal_con_etiqueta_batsil_maya.jpg"></figure>
                    <p class="pdescription">Nuestra bolsa artesanal es bordada a mano por tseltales.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Granos de Café con Chocolate</h3>
                    <figure class="pimage"><img
                                alt="Granos de café con chocolate de Bats'il Maya"
                                src="images/productos/extras/granos_de_cafe_con_chocolate_batsil_maya.jpg"></figure>
                    <p class="pdescription">Nuestros deliciosos granos de café cubiertos con chocolate.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Orgánico</h3>
                    <figure class="pimage"><img alt="Granos de café orgánico de Bats'il Maya"
                                                src="images/productos/cafe/granos_de_cafe_descafeinado_batsil_maya.jpg">
                    </figure>
                    <p class="pdescription">Un café de preparación americana con excelente calidad.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
            </div>
        </div>
    </aside>--->

    <!--    Considerar oolocar un 3er producto para demostrar scroll-X-->
    <aside class="product yellow-bg dark padding-top">
        <div class="container-sequel">
            <h2 class="product-title">Miel orgánica</h2>
            <p>
                La miel orgánica Chabtic es producto del trabajo de la Cooperativa Ts’umbal Xitalha’, conformada por
                familias
                tseltales de la Selva Norte de Chiapas. Nuestra miel es orgánica certificada, cultivada entre la
                diversidad de
                la flora local y en armonía con la Madre Tierra.
            </p>
        </div>
        <div class="gridbigproduct container">
            <div class="grid-scroll-x">
                <?php
                $query = "select * from products where id_category = 2";
                $recordSet = execute($query);

                $products = [];
                $counter = 0;
                while ($row = mysqli_fetch_array($recordSet)) {
                    $products[$counter] = [];
                    $products[$counter]["id_product"] = $row["id_product"];
                    $products[$counter]["name_product"] = $row["name_product"];
                    $products[$counter]["description"] = $row["description"];
                    $products[$counter]["notes"] = $row["notes"];
                    $products[$counter]["client_type"] = $row["client_type"];
                    $counter++;
                }

                for ($i = 0; $i < count($products); $i++) {
                    $q = "select image_path from images where images.id_product = " . $products[$i]["id_product"] . " limit 1";
                    $recordSetImage = execute($q);
                    $image_row = mysqli_fetch_array($recordSetImage);
                    $image_path = $image_row["image_path"];

                    echo "
                    <section class='ind-product'>
                        <h3 class='title pname h3-small'>" . $products[$i]["name_product"] . "</h3>
                        <div style='height: 250px; background: transparent url(" .
<<<<<<< HEAD
                    $image_path .
                    ") 50% 50% / cover no-repeat;'></div>
                        <p class='pdescription'>" .
                    $products[$i]["description"] .
                    "<br> <a
                                class='link ' href='product_view_2.php?idproduct=" .
                    $products[$i]["id_product"] .
                    "' target='_self'>Ver más »</a></p>
=======
                        $image_path .
                        ") 50% 50% / cover no-repeat;'></div>
                        <p class='pdescription'>" . $products[$i]["description"] . "<br>
                            <a class='link' href='product_view.php?idproduct=" . $products[$i]["id_product"] . "' target='_self'>Ver más »</a>
                        </p>
>>>>>>> e054badb110386ae34910a42f0f06064f8e0e1ec
                    </section>";
                }
                ?>
            </div>
            <!--  <div class="grid-scroll-x">
                <section class="ind-product">
                    <h3 class="title pname h3-small ">Miel envasada</h3>
                    <figure class="pimage"><img
                                alt="Miel envasada de Bats'il Maya"
                                src="images/productos/miel/miel_envasada_batsil_maya.jpg"></figure>
                    <p class="pdescription">jhbiujogdjiskofjngoi<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Caja de sobres (16gr)</h3>
                    <figure class="pimage"><img
                                alt="Caja de sobres de Bats'il Maya"
                                src="images/productos/miel/caja_con_sobres_batsil_maya.jpg"></figure>
                    <p class="pdescription">Granos con preparación europea son seleccionados cuidadosamente.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
            </div>-->
        </div>
        <div class="container-sequel center-aligned">
            <aside>
                <h3 class="h3-small product-title gimme-padding">Sabores</h3>
                <ul class="inline grid-six">
                    <li>Natural</li>
                    <li>Cardamomo</li>
                    <li>Jengibre</li>
                    <li>Tamarindo</li>
                    <li>Chamoy</li>
                    <li>Manzana verde</li>
                </ul>
            </aside>
        </div>
    </aside>

    <aside class="product light-bg dark padding-top" id="jabon">
        <div class="container-sequel">
            <h2 class="product-title red padding-top">Jabones Artesanales</h2>
            <p>Nuestros jabones artesanales Xapontic son fruto del trabajo de la Cooperativa de mujeres tseltales Yip
                Antsetic
                (fuerza de las mujeres), quienes desde el 2010 se han organizado para comercializar sus jabones, hechos
                con miel
                de abeja orgánica producida en su región.</p>
        </div>
        <div class="gridbigproduct container">
            <div class="grid-scroll-x">
                <?php
                $query = "select * from products where id_category = 3";
                $recordSet = execute($query);

                $products = [];
                $counter = 0;
                while ($row = mysqli_fetch_array($recordSet)) {
                    $products[$counter] = [];
                    $products[$counter]["id_product"] = $row["id_product"];
                    $products[$counter]["name_product"] = $row["name_product"];
                    $products[$counter]["description"] = $row["description"];
                    $products[$counter]["notes"] = $row["notes"];
                    $products[$counter]["client_type"] = $row["client_type"];
                    $counter++;
                }

                for ($i = 0; $i < count($products); $i++) {
                    $q =
                        "select image_path from images where images.id_product = " .
                        $products[$i]["id_product"] .
                        " limit 1";
                    $recordSetImage = execute($q);
                    $image_row = mysqli_fetch_array($recordSetImage);
                    $image_path = $image_row["image_path"];

                    echo "
                    <section class='ind-product'>
                        <h3 class='title pname h3-small'>" .
                        $products[$i]["name_product"] .
                        "</h3>
                        <div style='height: 250px; background: transparent url(" .
                        $image_path .
                        ") 50% 50% / cover no-repeat;'></div>
                        <p class='pdescription'>" .
                        $products[$i]["description"] .
                        "<br> <a
                                class='link ' href='product_view.php?idproduct=" .
                        $products[$i]["id_product"] .
                        "' target='_self'>Ver más »</a></p>
                    </section>";
                }
                ?>
                <!--<section class="ind-product">
                    <h3 class="title pname h3-small">Jabón hotelero</h3>
                    <figure class="pimage"><img
                                alt="Jabón hotelero de Bats'il Maya"
                                src="images/productos/jabones/jabon_hotelero_batsil_maya.jpg"></figure>
                    <p class="pdescription">Únicamente granos que cumplen los más altos estándares de calidad.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Jabón de tocador</h3>
                    <figure class="pimage"><img
                                alt="Jabon de tocador de Bats'il Maya"
                                src="images/productos/jabones/jabon_de_tocador_batsil_maya.jpg"></figure>
                    <p class="pdescription">Granos con preparación europea son seleccionados cuidadosamente.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Jabón individual</h3>
                    <figure class="pimage"><img alt="Jabón individual de Bats'il Maya"
                                                src="images/productos/jabones/jabon_individual_batsil_maya.jpg">
                    </figure>
                    <p class="pdescription">Un café de preparación americana con excelente calidad.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Kit artesanal</h3>
                    <figure class="pimage"><img alt="Kit artesanañ de Bats'il Maya"
                                                src="images/productos/jabones/kit_artesanal_batsil_maya.jpg">
                    </figure>
                    <p class="pdescription">Para aquellas personas que desean disfrutar un rico café libre de cafeína.<br>
                        <a class="link" href="" target="_self">Ver más »</a></p>
                </section>-->
            </div>
        </div>
        <div class="center-aligned container-sequel">
            <aside>
                <h3 class="h3-small product-title red gimme-padding">Personaliza tu jabón para eventos</h3>
                <p class="padding-text-center">La fajilla del jabón personalizada con nombre, fecha y mensaje a elegir
                    por $2 extra por jabón.</p>
            </aside>
        </div>
    </aside>
    <aside>
        <div class="extra-articles">
            <article class="bnuestrocafe">
                <h3 class="light botones-h3">Nuestro café</h3>
                <p class="botones-p">Desde el cafetal a la taza</p>
                <a class="button red" href="nuestro_cafe.php" target="_self">Leer más »</a>
            </article>
            <article class="bproceso">
                <h3 class="light botones-h3">Proceso</h3>
                <p class="botones-p">Proceso desde el cafetal</p>
                <a class="button red" href="proceso.php" target="_self">Leer más »</a>
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
                    <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a class="active" href="products.php" target="_self">Productos</a></li>
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
