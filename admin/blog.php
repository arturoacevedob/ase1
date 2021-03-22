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

function createBlogList()
{
    /*$query = "select products.id_product, images.image_path from images inner join products on products.id_product = images.id_product;";
    execute($query);*/
    $query = "select * from blog";
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

    for ($i = 0; $i < count($blogs); $i++) {

        echo "
        <div class='product-item grid-1-1'>
            <div class='radius-left' style='background: transparent url(../" . $blogs[$i]["image_path"] . ") 50% 50% / cover no-repeat;'></div>
            <div class='product-info radius-right'>
            <div class='grid-ind-product'>
                <h3>" . $blogs[$i]["title"] . "<h3>
                <span>
                <p class='edit-pencil'><a href='crud_blog/update_blog.php?id=" . $blogs[$i]["id"] . "' aria-label='Editar'></a></p>
                </span>
                </div>
                <p>" . $blogs[$i]["date"] . "</p>
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

    <title>Blog</title>
</head>

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a class="cliente-disactive"href="clients.php" target="_self">Clientes</a></li>
        <!--<li><a class="pedidos-disactive"href="orders-pending-backend.php" target="_self">Pedidos</a></li>-->
        <li><a class="productos-disactive" href="products_coffee.php" target="_self">Productos</a></li>
        <li><a class="active bold blog-active" href="blog.php" target="_self">Blog</a></li>
    <ul class="lonely-ul">
        <li><a class="ayuda-disactive" href="user_manual.pdf" target="_black" download="">Manual de uso</a></li>
        <li><a class="cerrar-disactive"href='login.php?killsession=1'>Cerrar Sesión</a></li>
    </ul>
</nav>

<div class="padding-thing big-margin">

    <div class="global-toolbar">
        <h1>Blog</h1>
    </div>
</div>

<div class="b-grey">
    <div class="grid-2-space-between give-me-gap">
        <!--<div>
            <label class="kill" for="search"></label>
            <input id="search" placeholder="Buscar" type="search">
        </div>-->
        <a class="button red limited-width" href='crud_blog/create_blog.php'>Agregar publicación</a></div>
    <div class="grid-1-1 give-me-gap margin-top-thing">
        <?php
        createBlogList()
        ?>
    </div>
</div>

</body>
</html>