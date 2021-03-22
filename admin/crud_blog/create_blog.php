<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';
define('SITE_ROOT', realpath(dirname(__FILE__)));
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    header("Location: ../login.php");
    die();
}

if (isset($_POST['insert'])) {
    $uploadOk = 0;
    $title = $_POST['title'];
    $body = $_POST['body'];
    $bodySanitized = filter_var($body, FILTER_SANITIZE_STRING);

    if ($_FILES['image_path']['name'] != "") {
        $fileName = strtolower($_FILES['image_path']['name']);
        $tempFile = $_FILES['image_path']['tmp_name'];
        $fileNamePath = '../../images/blog/' . $fileName;
        $relativePath = 'images/blog/' . $fileName;
        if (move_uploaded_file($tempFile, $fileNamePath)) {
            $uploadOk = 1;
        } else {
            echo "Error al cargar el archivo.";
        }
    }

    if ($uploadOk == 1) {
        $q = "insert into blog (title, body, image_path) values ('$title', '$bodySanitized', '$relativePath')";
        $id = execute($q);
    }

    header("Location: ../blog.php");
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
    <link href="../main-backend.css" rel="stylesheet">
</head>

<body class="padding-for-all">
<h1>Nueva publicación</h1>
<form class="round-red-border" action='create_blog.php' method='post' enctype='multipart/form-data'>
    <div class="padding-for-all-2">
        <fieldset>
            <input type='hidden' name='insert' value='insert'>

            <label for="title">Título</label>
            <input id="title" type='text' name='title' max="100" required> <br>
            <label for="body">Cuerpo</label>
            <textarea id="body" name='body' rows="25" required></textarea> <br>
            <label class="padding-left">Imagen</label>
            <input class="button limited-height grey-font" type='file' name='image_path' id="image_path" required>
        </fieldset>
    </div>
    <div class="bottom-thing grid-1-1-1-1 give-me-gap">
        <!--<input type="file" id="file-input" name="image_path" multiple/>
        <div id="thumb-output"></div>-->
        <a class="button red-outline limited-width-2 cancel" href='../blog.php'>Cancelar</a>
        <input class="button red limited-width-2 limited-height" type="submit" value="Guardar producto">
    </div>
</form>

<!--<script>
    $(document).ready(function () {
        $('#file-input').on('change', function () { //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {

                var data = $(this)[0].files; //this file data

                $.each(data, function (index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function (file) { //trigger function on successful read
                            return function (e) {
                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                                $('#thumb-output').append(img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });
</script>-->

</body>
</html>