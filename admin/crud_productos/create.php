<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';
session_start();

if(!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

if(isset($_POST['insert'])) {
    $uploadOk = 0;
    $name = $_POST['name'];
    $description = $_POST['description'];
    $notes = $_POST['notes'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $ground_type = $_POST['ground_type'];
    $notes = $_POST['notes'];
 

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
        $q = "insert into products (name, description, price, brand, image) values ('$name','$description','$price','$brand','$fileNamePath')";
        execute($q);
        header("Location: admin.php");
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Datos Generales</h1>
    <form action='create.php' method='post' enctype='multipart/form-data'>
        <input type='hidden' name='insert' value='insert'>
        Nombre Legal: <input type='text' name='name_legal'> <br>
        Alias: <input type='text' name='name_alias'> <br>
        Giro: <input type='text' name='giro'> <br>
        Tipo de cliente:
        <input type='radio' name='client_type' id="minorista" value='0'>
        <label for="minorista">Minorista</label>
        <input type='radio' name='client_type' id="mayorista" value='1'>
        <label for="mayorista">Mayorista</label>
        <input type='submit' value='Guardar cliente'>
    </form>
</body>
</html>