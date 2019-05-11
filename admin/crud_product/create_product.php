<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';
session_start();

if(!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

if(isset($_POST['insert'])) {
    $uploadOk = 0;
    $name_product = $_POST['name_product'];
    $description = $_POST['description'];
    $notes = $_POST['notes'];
    $client_type = $_POST['client_type'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $ground_type = $_POST['ground_type'];
    $image_path = $_POST['image_path'];
 
    if($_FILES['image']['name'] != "") {
        $fileName = strtolower($_FILES['image']['name']);
        $tempFile = $_FILES['image']['tmp_name'];
        $fileNamePath = 'images/' . $fileName;

        if(move_uploaded_file($tempFile, $fileNamePath)) {
            $uploadOk = 1;
        } else {
            echo "Error al cargar el archivo.";
        }
    }
    
    if($uploadOk == 1) {
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
<html>
<body>
    <h1>Producto nuevo</h1>
    <form action='create_product.php' method='post' enctype='multipart/form-data'>

        <input type='hidden' name='insert' value='insert'>

        <label for="name_product">Nombre</label>
        <input id="name_product" type='text' name='name_product' max="">
        <label for="description">Descripción</label>
        <input id="description" type='text' name='description'> <br>
        Notas <input type='text' name='notes'> <br>
        Tipo de Cliente <input type='text' name='notes'> <br>
        Tipo de cliente:
        <input type='radio' name='client_type' id="minorista" value='0'>
        <label for="minorista">Minorista</label>
        <input type='radio' name='client_type' id="mayorista" value='1'>
        <label for="mayorista">Mayorista</label>
        <input type='submit' value='Guardar cliente'>
    </form>
</body>
</html>