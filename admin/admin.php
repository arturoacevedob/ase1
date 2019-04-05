<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';

function createProductListOptions() {
    $q = "select * from products order by id_product";
    $recordSet = execute($q);

    $tableHtml = "
        <table border='2'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Imagen</th>
                <th>Acciones</th>
            <tr>";
    while ($row = mysqli_fetch_array($recordSet)) {
        $id_product = $row['id_product'];
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $brand = $row['brand'];
        $image = $row['image'];
        $tableHtml .= "
            <tr>
                <td>$id_product</td>
                <td>$name</td>
                <td>$description</td>
                <td>$price</td>
                <td>$brand</td>
                <td>$image</td>
                <td>
                    <!-- a href='update.php?idproduct=$id_product'>Editar</a -->
                    <a href='delete.php?idproduct=$id_product'>Eliminar</a>
                </td>
            <tr>";
    }
    $tableHtml .= "</table>";

    echo $tableHtml;
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Productos</h1>
    <h3>Administrador</h3>
    <a href='create.php'>Registro de productos</a>
    <br><br>
    <?php createProductListOptions(); ?>
</body>
</html>