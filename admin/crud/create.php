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
    $name_legal = $_POST['name_legal'];
    $name_alias = $_POST['name_alias'];
    $giro= $_POST['giro'];
    $client_type = $_POST['client_type'];
    

    
    if($uploadOk == 1) {
        $q = "insert into clients (name_legal, name_alias, giro, client_type) values ('$name_legal','$name_alias','$giro','$client_type')";
        execute($q);
        header("Location: clients.php");
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
        Tipo de cliente: <input type='radio' name='client_type'> <br>
        <input type='submit' value='Guardar cliente'>
    </form>
</body>
</html>