<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
include "header.php";
include "contact_pending.php";

function createBlogList() {
    $query = "select * from blog ORDER BY date DESC;";
    $recordSet = execute($query);

    $blogs = array();
    $counter = 0;
    while ($row = mysqli_fetch_array($recordSet)) {
        $blogs[$counter] = array();
        $blogs[$counter]["id"] = $row["id"];
        $blogs[$counter]["title"] = $row["title"];
        $blogs[$counter]["date"] = $row["date"];
        $blogs[$counter]["image_path"] = $row["image_path"];
        $counter++;
    }

    echo "
    <section class='container'>
        <h2 class='red h2-small'>Última noticia</h2>
        <article class='latest-news news-item news-text' style='background: linear-gradient(to top, rgba(61, 40, 10, 1), rgba(255, 255, 255, 0) 50%), url(../" . $blogs[0]["image_path"] . ") 50% 50% / cover no-repeat;'>
            <h3 class='light'>" . $blogs[0]["title"] . "</h3>
            <p class='light'>" . $blogs[0]["date"] . "</p>
        </article>
    </section>
    <section class='container-sequel'>
        <h2 class='h2-small red'>Más noticias</h2>
        <div class='grid-news-page light'>
    ";

    for ($i = 1; $i < count($blogs); $i++) {
        echo "
        <article class='news-item news-text' style='background: linear-gradient(to top, rgba(61, 40, 10, 1), rgba(255, 255, 255, 0) 50%), url(../" . $blogs[$i]["image_path"] . ") 50% 50% / cover no-repeat;'>
            <h3>" . $blogs[$i]["title"] . "</h3>
            <p>" . substr($blogs[$i]["date"], 0, 10) . "</p>
        </article>
        ";
    }
    
    echo "
        </div>
    </section>
    ";
}
?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Lo más actual de Bats'il Maya, sucediendo en el momento. Con novedades y noticias constantes."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, noticias, novedades, blog, actualizaciones, nuevo, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo"
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

    <title>Noticias</title>
</head>
<body>
<div id="noticias">
    <div>
        <header>
            <?php renderHeader(); ?>
        </header>
    </div>

    <?php
    createBlogList()
    ?>

    <aside>
        <div class="extra-articles">
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
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="products.php" target="_self">Productos</a></li>
                    <li><a class="active" href="noticias.php" target="_self">Noticias</a></li>
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
    