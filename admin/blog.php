<?php
ini_set('display_errorecordSet', 1);
error_reporting(E_ALL);

include '../admin/connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

function createNoticia()
{
    /*$query = "select products.id_product, images.image_path from images inner join products on products.id_product = images.id_product;";
    execute($query);*/
    $query = "select * from blogs;";
    $recordSet = execute($query);

    $blogs = array();
    $counter = 0;
    while ($d = mysqli_fetch_array($recordSet)) {
        $blogs[$counter] = array();
        $blogs[$counter]["id_blog"] = $d["id_blog"];
        $blogs[$counter]["name_blog"] = $d["name_blog"];
        $blogs[$counter]["date_blog"] = $d["date_blog"];

        $counter++;
    }

    for ($i = 0; $i < count($blogs); $i++) {

        $q = "select image_path from blogs where blogs.id_blog  = " . $blogs[$i]['id_blog'] . " limit 1";
        $rs_image = execute($q);
        $image_row = mysqli_fetch_array($rs_image);
        $image_path = $image_row['image_path'];

        echo "
        <div class='product-item grid-1-1'>
            <div class='radius-left' style='background: transparent url(\"$image_path\") 50% 50% / cover no-repeat;'></div>
            <div class='product-info radius-right'>
                <h3>" . $blogs[$i]["name_blog"] . "<span><a href='crud_blog/update_blog.php?idblog=" . $blogs[$i]["id_blog"] . "'>Editar</a></span><span><a href='crud_blog/delete_blog.php?idblog=" . $blogs[$i]["id_blog"] . "'>Eliminar</a></span></h3>
                <p>" . $blogs[$i]["date_blog"] . "</p>";
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

    <title>Noticias</title>
</head>

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a href="clients.php" target="_self">Clientes</a></li>
        <li><a href="orders-pending-backend.php" target="_self">Pedidos</a></li>
        <li><a href="products-coffee.php" target="_self">Productos</a></li>
        <li><a class="active pro" href="blog.php" target="_self">Blog</a></li>

        <li><a href='login.php?killsession=1'>Cerrar sesión</a></li>
    </ul>
</nav>

<div class="padding-thing big-margin">

    <div class="global-toolbar">
        <h1>Noticias</h1>
    </div>
    <a class="button red limited-width" href='crud_blog/create_blog.php'>Nueva noticia</a>
    <div class="grid-1-1 give-me-gap">
        <?php
        createNoticia()
        ?>
    </div>

</div>

</body>
</html>