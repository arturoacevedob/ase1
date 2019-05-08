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
    $query = "select 'name', description, notes, client_type from products;
              select images.image_path, products.product_id from images inner join products on images.product_id = products.product_id;
              select weight_price.weight, weight_price.price, products.product_id from weight_price inner join products on weight_price.products.product_id = products.product_id";
    $recordSet = execute($query);

    $products = array();
    $counter = 0;
    while ($d = mysqli_fetch_array($recordSet)) {
        $products[$counter] = array();
        $products[$counter]["name_alias"] = $d["name_alias"];
        $products[$counter]["giro"] = $d["giro"];
        $products[$counter]["client_type"] = $d["client_type"];
        $counter++;
    }

    for ($i = 0; $i < count($products); $i++) {

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
        <div class="product-item grid-1-1">
            <div style="background: transparent url('images/cup_of_coffee.JPG') 50% 50% / cover no-repeat;"></div>
            <div>
                <h3>Orgánico <span>Sólo mayoristas</span><span>edit</span></h3>
                <p>Un café de preparación americana con excelente…</p>
                <table>
                    <thead>
                    <tr>
                        <th>Peso</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>250gr</td>
                        <td>$65</td>
                    </tr>
                    <tr>
                        <td>500gr</td>
                        <td>$105</td>
                    </tr>
                    <tr>
                        <td>1KG</td>
                        <td>$190</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="product-item grid-1-1">
            <div style="background: transparent url('images/cup_of_coffee.JPG') 50% 50% / cover no-repeat;"></div>
            <div>
                <h3>Orgánico <span>Sólo mayoristas</span><span>edit</span></h3>
                <p>Un café de preparación americana con excelente…</p>
                <table>
                    <thead>
                    <tr>
                        <th>Peso</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>250gr</td>
                        <td>$65</td>
                    </tr>
                    <tr>
                        <td>500gr</td>
                        <td>$105</td>
                    </tr>
                    <tr>
                        <td>1KG</td>
                        <td>$190</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="product-item grid-1-1">
            <div style="background: transparent url('images/cup_of_coffee.JPG') 50% 50% / cover no-repeat;"></div>
            <div>
                <h3>Orgánico <span>Sólo mayoristas</span><span>edit</span></h3>
                <p>Un café de preparación americana con excelente…</p>
                <table>
                    <thead>
                    <tr>
                        <th>Peso</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>250gr</td>
                        <td>$65</td>
                    </tr>
                    <tr>
                        <td>500gr</td>
                        <td>$105</td>
                    </tr>
                    <tr>
                        <td>1KG</td>
                        <td>$190</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="product-item grid-1-1">
            <div style="background: transparent url('images/cup_of_coffee.JPG') 50% 50% / cover no-repeat;"></div>
            <div>
                <h3>Orgánico <span>Sólo mayoristas</span><span>edit</span></h3>
                <p>Un café de preparación americana con excelente…</p>
                <table>
                    <thead>
                    <tr>
                        <th>Peso</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>250gr</td>
                        <td>$65</td>
                    </tr>
                    <tr>
                        <td>500gr</td>
                        <td>$105</td>
                    </tr>
                    <tr>
                        <td>1KG</td>
                        <td>$190</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="product-item grid-1-1">
            <div style="background: transparent url('images/cup_of_coffee.JPG') 50% 50% / cover no-repeat;"></div>
            <div>
                <h3>Orgánico <span>Sólo mayoristas</span><span>edit</span></h3>
                <p>Un café de preparación americana con excelente…</p>
                <table>
                    <thead>
                    <tr>
                        <th>Peso</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>250gr</td>
                        <td>$65</td>
                    </tr>
                    <tr>
                        <td>500gr</td>
                        <td>$105</td>
                    </tr>
                    <tr>
                        <td>1KG</td>
                        <td>$190</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <a href='crud_productos/create.php'>Agregar productos</a>
    </div>

</div>

</body>
</html>