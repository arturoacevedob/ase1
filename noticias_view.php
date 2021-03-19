<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
include "header.php";
include "contact_pending.php";


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "select * from blog where id = $id";
    $recordSet = execute($query);
    if ($row = mysqli_fetch_array($recordSet)) {
        $title = $row["title"];
        $body = $row["body"];
        $date = $row["date"];
        $image_path = $row["image_path"];
    }
}

?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Únicamente granos que cumplen los más altos estándares de calidad."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo"
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
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title><?php echo "BM - $title"; ?></title>
</head>
<body>
<div id="noticias">
    <div>
        <header>
            <?php renderHeader(); ?>
        </header>
    </div>

    <div class="offset-to-top">
        <section class="container no-padding-top">
            <article class="blog-view">
                <?php
                echo "
            <img src='" . $image_path . "'>
            <h2>" . $title . "</h2>
            <p>" . $body . "</p>
            ";
                ?>
            </article>
        </section>

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
        <div class="bigfoot">
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
                        <li id="office1"><strong>Oficina</strong><!--<br>
                        lugar ###--><br> Chilón, Chiapas
                    </li>
                    <li id="office2"><strong>Oficina</strong><!--<br>
                        lugar ###--><br> Ciudad de México
                    </li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>
</div>

</body>
</html>