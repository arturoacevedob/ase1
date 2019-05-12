<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';
define('SITE_ROOT', realpath(dirname(__FILE__)));
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

if (isset($_POST['insert'])) {
    $uploadOk = 0;
    $name_blog = $_POST['name_blog'];
    $date_blog = $_POST['date_blog'];
    

    if ($_FILES['image_path']['name'] != "") {
        $fileName = strtolower($_FILES['image_path']['name']);
        $tempFile = $_FILES['image_path']['tmp_name'];
        $fileNamePath = '../images/' . $fileName;
        $relativePath = 'images/' . $fileName;
        if (move_uploaded_file($tempFile, $fileNamePath)) {
            $uploadOk = 1;
        } else {
            echo "Error al cargar el archivo.";
        }
    }

    if ($uploadOk == 1) {
        $q = "insert into blogs (name_blog, date_blog,image_path,id_blog) values ('$name_blog','$date_blog','$relativePath', '$id_blog')";
        $id_blog = execute($q);

        
/*         $q = "insert into blogs (image_path, id_blog) values ('$relativePath', '$id_blog')";
        execute($q);
 */        header("Location: ../blog.php");
    }
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <style>
        .thumb {
            margin: 10px 5px 0 0;
            width: 100px;
        }
    </style>
</head>

<body>
<h1>Nueva Noticia</h1>
<form action='create_blog.php' method='post' enctype='multipart/form-data'>

    <input type='hidden' name='insert' value='insert'>

    <label for="name_blog">Nombre de la Noticia</label>
    <input id="name_blog" type='text' name='name_blog' max=""> <br>
    <label for="date_blog">Fecha</label>
    <input id="date_blog" type='date' name='date_blog' max=""> <br>


    <!--<input type="file" id="file-input" name="image_path" multiple/>
    <div id="thumb-output"></div>-->
    <input type='file' name='image_path'>

    <input type="submit" value="Guardar noticias">

</form>


</body>
</html>