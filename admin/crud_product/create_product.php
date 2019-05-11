<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

if (isset($_POST['insert'])) {
    $uploadOk = 0;
    $name_product = $_POST['name_product'];
    $description = $_POST['description'];
    $notes = $_POST['notes'];
    $client_type = $_POST['client_type'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $ground_type = $_POST['ground_type'];
    $image_path = $_POST['image_path'];

    if ($_FILES['image']['name'] != "") {
        $fileName = strtolower($_FILES['image']['name']);
        $tempFile = $_FILES['image']['tmp_name'];
        $fileNamePath = 'images/' . $fileName;

        if (move_uploaded_file($tempFile, $fileNamePath)) {
            $uploadOk = 1;
        } else {
            echo "Error al cargar el archivo.";
        }
    }

    if ($uploadOk == 1) {
        $q = "insert into products (name_product, description, notes, client_type) values ('$name_product','$description','$notes','$client_type')";
        execute($q);
        $q = "insert into weight_price (weight, price) values ('$weight','$price')";
        execute($q);
        $q = "insert into ground_type (ground_type) values ('$ground_type')";
        execute($q);
        header("Location: products-coffee.php");
    }
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="es">
<body>
<h1>Producto nuevo</h1>
<form action='create_product.php' method='post' enctype='multipart/form-data'>

    <input type='hidden' name='insert' value='insert'>

    <label for="name_product">Nombre</label>
    <input id="name_product" type='text' name='name_product' max=""> <br>
    <label for="description">Descripción</label>
    <input id="description" type='text' name='description' max=""> <br>
    <label for="notes">Notas</label>
    <input id="notes" type='text' name='notes' max=""> <br>
    <label for="mayoristas">¿Disponible para mayoristas?</label>
    <input type='checkbox' name='client_type' id="mayoristas" value='1'>

    <table>
        <thead>
        <tr>
            <th>Peso</th>
            <th>Precio</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><label for="weight1">250gr</label><input id="weight1" class="checkbox" type="checkbox" value="1"></td>
            <td><input type="number" maxlength="3"></td>
        </tr>
        <tr>
            <td><label for="weight2">500gr</label><input id="weight2" class="checkbox" type="checkbox" value="1"></td>
            <td><input type="number" maxlength="3"></td>
        </tr>
        <tr>
            <td><label for="weight3">1kg</label><input id="weight3" class="checkbox" type="checkbox" value="1"></td>
            <td><input type="number" maxlength="3"></td>
        </tr>
        </tbody>
    </table>

</form>

<script>
    $('.checkbox').change(function () {
        $('#molido-custom-value').prop('disabled', !$(this).is('.other-input'));
    });
</script>

</body>
</html>