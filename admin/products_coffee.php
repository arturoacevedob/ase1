<?php
ini_set('display_errorecordSet', 1);
error_reporting(E_ALL);

include '../admin/connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    header("Location: login.php");
    die();
}

function createCoffeeListOptions()
{
    /*$query = "select products.id_product, images.image_path from images inner join products on products.id_product = images.id_product;";
    execute($query);*/
    $query = "select * from products where id_category = 1";
    $recordSet = execute($query);

    $products = array();
    $counter = 0;
    while ($row = mysqli_fetch_array($recordSet)) {
        $products[$counter] = array();
        $products[$counter]["id_product"] = $row["id_product"];
        $products[$counter]["name_product"] = $row["name_product"];
        $products[$counter]["description"] = $row["description"];
        $products[$counter]["notes"] = $row["notes"];
        $products[$counter]["client_type"] = $row["client_type"];
        $counter++;
    }

    for ($i = 0; $i < count($products); $i++) {

        $q = "select image_path from images where images.id_product = " . $products[$i]['id_product'] . " limit 1";
        $rs_image = execute($q);
        $image_row = mysqli_fetch_array($rs_image);
        $image_path = $image_row['image_path'];

        echo "
        <div class='product-item grid-1-1'>
            <div class='radius-left' style='background: transparent url(\"../$image_path\") 50% 50% / cover no-repeat;'></div>
            <div class='product-info radius-right'>
            <div class='grid-ind-product'>
                <h3>" . $products[$i]["name_product"] . "<span>" . $products[$i]["client_type"] . "</span><h3>
                <span>
                <p class='edit-pencil'><a href='crud_product/update_product.php?idproduct=" . $products[$i]["id_product"] . "' aria-label='Editar'></a></p>
                </span>
                </div>
                <p>" . $products[$i]["description"] . "</p>
                <table>
                    <thead>
                    <tr>
                        <th>Peso</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>";

        $query2 = "select *, products.id_product from weight_price inner join products on weight_price.id_product = products.id_product where weight_price.id_product = '" . $products[$i]["id_product"] . "'";
        $recordSet2 = execute($query2);
        while ($weight_price = mysqli_fetch_array($recordSet2)) {
            if (!is_null($weight_price["weight1"])) {
                echo "
                    <tr>
                        <td class='weight-gr'>" . $weight_price["weight1"] . "</td>
                        <td class='currency'>" . $weight_price["price1"] . "</td>
                    </tr>";
            }

            if (!is_null($weight_price["weight2"])) {
                echo "
                    <tr>
                        <td class='weight-gr'>" . $weight_price["weight2"] . "</td>
                        <td class='currency'>" . $weight_price["price2"] . "</td>
                    </tr>";
            }

            if (!is_null($weight_price["weight3"])) {
                echo "
                    <tr>
                        <td class='weight-gr'>" . $weight_price["weight3"] . "</td>
                        <td class='currency'>" . $weight_price["price3"] . "</td>
                    </tr>";
            }
        }

        echo "      
                    </tbody>
                </table>
            </div>
        </div>";
    }
}
?>

<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Arturo Acevedo Bravo" name="author">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Scripts de compatibilidad -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!-- Escala de viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Link a CSS -->
    <link href="main-backend.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <title>Productos</title>
</head>

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a class="cliente-disactive"href="clients.php" target="_self">Clientes</a></li>
        <li><a class="pedidos-disactive"href="orders-pending-backend.php" target="_self">Pedidos</a></li>
        <li><a class="active bold productos-active" href="products_coffee.php" target="_self">Productos</a></li>
        <!-- <li><a href="blog.php" target="_self">Blog</a></li> -->
    </ul>
    <ul class="lonely-ul">
        <li><a class="ayuda-disactive" href="user_manual.pdf" target="_black" download="">Manual de uso</a></li>
        <li><a class="cerrar-disactive"href='login.php?killsession=1'>Cerrar Sesión</a></li>
    </ul>
</nav>

<div class="padding-thing big-margin">

    <div class="global-toolbar">
        <h1>Productos</h1>
    </div>
    </div>
    <ul class="grid-tabs">
        <li class="tab6"><a class="active tab-active" href="products_coffee.php" id="coffee" target="_self">Café</a></li>
        <li class="tab7"><a class="tab-disactive"href="products_honey.php" id="honey" target="_self">Miel</a></li>
        <li class="tab8"><a class="tab-disactive"href="products_soap.php" id="soap" target="_self">Jabón</a></li>
    </ul>

    <div class="b-grey">
    <div class="grid-2-space-between give-me-gap">
        <!--<div>
            <label class="kill" for="search"></label>
            <input id="search" placeholder="Buscar" type="search">
        </div>-->
        <a class="button red limited-width" href='crud_product/create_product.php'>Agregar productos</a></div>
    <div class="grid-1-1 give-me-gap margin-top-thing">
        <?php
        createCoffeeListOptions()
        ?>
    </div>
    </div>


</body>
</html>