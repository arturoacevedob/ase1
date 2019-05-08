<?php
ini_set('display_errorecordSet', 1);
error_reporting(E_ALL);

include 'crud/connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

function createCoffeeListOptions()
{
    $query = "select name_product, description, notes, client_type from products;";
    $recordSet = execute($query);

    $products = array();
    $counter = 0;
    while ($d = mysqli_fetch_array($recordSet)) {
        $products[$counter] = array();
        $products[$counter]["name_product"] = $d["name_product"];
        $products[$counter]["description"] = $d["description"];
        $products[$counter]["notes"] = $d["notes"];
        $products[$counter]["client_type"] = $d["client_type"];
        $counter++;
    }

    for ($i = 0; $i < count($products); $i++) {

        echo "
        <div class='product-item grid-1-1'>
            <div style='background: transparent url(\"images/cup_of_coffee.jpg\") 50% 50% / cover no-repeat;'></div>
            <div>
                <h3>" . $products[$i]["name_product"] . "<span>" . $products[$i]["client_type"] . "</span><span>edit</span></h3>
                <p>" . $products[$i]["description"] . "</p>
                <table>
                    <thead>
                    <tr>
                        <th>Peso</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>";

        $query2 = "select products.id_product, weight_price.weight, weight_price.price from weight_price inner join products on weight_price.id_product = products.id_product;";
        $recordSet2 = execute($query2);
        while ($weight_price = mysqli_fetch_array($recordSet2)) {
            echo "
                    <tr>
                        <td>" . $weight_price["weight"] . "</td>
                        <td>" . $weight_price["price"] . "</td>
                    </tr>";
        }
        echo "
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

    <title>Clientes</title>
</head>

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a class="active" href="clients.php" target="_self">Clientes</a></li>
        <li><a href="orders-pending-backend.php" target="_self">Pedidos</a></li>
        <li><a href="products-coffee.php" target="_self">Productos</a></li>
        <li><a href='login.php?killsession=1'>Terminar Sesión</a></li>
        <li><a href='crud_productos/create.php'>Registro de productos</a></li>
    </ul>
</nav>

<div>

    <div class="global-toolbar">
        <h1>Productos</h1>
    </div>

    <ul class="grid-tabs">
        <li><a class="active" href="products-coffee-backend.html" id="coffee" target="_self">Café</a></li>
        <li><a href="products-honey-backend.html" id="honey" target="_self">Miel</a></li>
        <li><a href="products-soap-backend.html" id="soap" target="_self">Jabón</a></li>
    </ul>

    <div class="grid-1-1">
        <?php
        createCoffeeListOptions()
        ?>
        <a href='crud_productos/create.php'>Agregar productos</a>
    </div>

</div>

</body>
</html>