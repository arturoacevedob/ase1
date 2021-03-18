<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
include "connection.php";
include "header.php";
include "agregar_producto.php";

if (isset($_GET["idproduct"])) {
    $id_product = $_GET["idproduct"];
    $query = "select * from products, weight_price, images where products.id_product = $id_product AND weight_price.id_product = $id_product AND images.id_product = $id_product";
    $recordSet = execute($query);
    if ($row = mysqli_fetch_array($recordSet)) {
        $name_product = $row["name_product"];
        $description = $row["description"];
        $notes = $row["notes"];
        $client_type = $row["client_type"];
        $weight1 = $row["weight1"];
        $weight2 = $row["weight2"];
        $weight3 = $row["weight3"];
        $price1 = $row["price1"];
        $price2 = $row["price2"];
        $price3 = $row["price3"];
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

    <title><?php echo "BM - $name_product"; ?></title>
</head>
<body>
<div id="productoorganico">
    <div>
        <header>
            <?php renderHeader(); ?>
        </header>
    </div>
    <section>
        <h2 class="kill">producto</h2>

        <?php
        echo "
        <article class='grid-product-view container no-padding-top-bottom'>
            <div class='product-description order-0'>
                <h2>$name_product</h2>
          <p>$description</p>
          <h4>Olores</h4>
          <p>$notes</p>
            </div>
            <form method='post' class='product-form' action='product_view.php?idproduct=$id_product' class='grid-product-form'>
            
                <input type='hidden' name='insert' value='insert'>
                <input type='hidden' name='id_product' value='$id_product'>
                
                <div class='grid-2-left-aligned'>
                    <fieldset class='h3-small'>
                        <label>Peso</label>
                        <p class='radio-group'>
                        
                        
                        <article class='grid-products-price'> 
                        <label for='$weight1'>290gr</label>
                        <label value='$price1'>$$price1.00</label>
                        <label for='$weight2'>500gr</label>
                        <label value='$price2'>$$price2.00</label>
                        <label for='$weight3'>1kg</label>
                        <label value='$price3'>$$price3.00</label>
                        </article> ";

      /*  if (!is_null($weight1)) {
            echo "
            <input id='$weight1' name='weight_selector' type='radio' value='290' onclick='calculatePrice()'>
            <label for='$weight1'>290gr</label>";
        } else {
            echo "
            <input id='$weight1' name='weight_selector' type='radio' value='290' disabled>
            <label for='$weight1' class='unavailable'>290gr</label>";
        }

        if (!is_null($weight2)) {
            echo "
          <input id='$weight2' name='weight_selector' type='radio' value='600' onclick='calculatePrice()'>
          <label for='$weight2'>600gr</label>";
        } else {
            echo "
          <input id='$weight2' name='weight_selector' type='radio' value='600' disabled>
          <label for='$weight2' class='unavailable'>600gr</label>";
        }

        echo "
                        </p>
                    </fieldset>
                    <fieldset class='h3-small'>
                        <label for='quantity'>Cantidad</label>
                        <p><input id='quantity' name='quantity' type='number' max='100' min='0' value='1' onchange='calculatePrice()'/></p>
                    </fieldset>
                </div>

                <div class='product-buy grid-2-space-between'>
                    <div class='grid-2-space-between align-center bold'>
                        <span id='quantity'>Qt. x</span>
                        <p id='calculated-total' class='currency'></p>
                    </div>";*/
        compra();
        // test

        echo "
                </div>
            </form>
            <div class='center-aligned'>
                <p>Pide 11KG para envío nacional gratis</p>
            </div>
            <div style='background: url($image_path) 50% 50% / cover no-repeat;' class='premium_organico'>
            </div>
        </article>";
        ?>

    </section>
    <section class="container">
        <h3>Detalles del Jabón</h3> <br>
        <div class="grid-4">
            <article>
                <h3>Variedad</h3> <br>
                <p class="p-big">Typica</p>
                <p>Uno de los cafés más importantes cultural y genéticamente en el mundo, con alta calidad en
                    Centroamérica.</p>
            </article>
            <article>
                <h3>Mezclas</h3> <br>
            </article>
            <article>
                <h3>Proceso</h3> <br>
            </article>
            <article>
                <h3>Notas</h3> <br>
                <p>En su sabor se distinguen notas de avellana, caramelo, frutos rojos y cítricos.</p>
            </article>
            <article>
                <h3>Ubicación</h3> <br>
                <p>Chilón, Chiapas.</p>
            </article>
            <article>
                <h3>Altura</h3> <br>
                <p>900 - 1400 msnm</p>
            </article>
            <article>
                <h3>Temperatura</h3> <br>
                <p>17ºC - 24ºC</p>
            </article>
            <article>
                <h3>Tipo de Suelo</h3> <br>
                <p>Nuestros cafetales se concentran en la parte de la Selva Norte de Chiapas, en bosques de niebla,
                    teniendo variación en tipos de suelo.</p>
            </article>
        </div>
    </section>


    <div class="light-bg">
        <aside class="gridbigproduct container">
            <h2 class="h2-small product-title">Más Productos</h2>
            <div class="grid-scroll-x">
                <?php
                $query = "select * from products";
                $recordSet = execute($query);

                $products = [];
                $counter = 0;
                while (
                    ($row = mysqli_fetch_array($recordSet)) and
                    $counter < 4
                ) {
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
            </div>
            <a class="h2-link right-aligned" href="products.php" target="_self">Todos los productos »</a>
        </aside>
    </div>


    <div class="bigfoot">
        <div class="curvita light-bg"></div>
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

</body>
</html>
