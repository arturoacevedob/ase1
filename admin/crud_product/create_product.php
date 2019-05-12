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
    $name_product = $_POST['name_product'];
    $description = $_POST['description'];
    $notes = $_POST['notes'];
    $client_type = $_POST['client_type'];
    $weight1 = $_POST['weight1'];
    $weight2 = $_POST['weight2'];
    $weight3 = $_POST['weight3'];
    $price1 = $_POST['price1'];
    $price2 = $_POST['price2'];
    $price3 = $_POST['price3'];

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
        $q = "insert into products (name_product, description, notes, client_type) values ('$name_product','$description','$notes','$client_type')";
        $id_product = execute($q);

        $q = "insert into weight_price (weight1, weight2, weight3, price1, price2, price3, id_product) values ('$weight1', '$weight2', '$weight3', '$price1',  '$price2',  '$price3', '$id_product')";
        execute($q);

        $q = "insert into images (image_path, id_product) values ('$relativePath', '$id_product')";
        execute($q);
        header("Location: ../products-coffee.php");
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
            <td><label for="weight1">250gr<input id="weight1" class="checkbox" type="checkbox" name="weight1"
                                                 value="250"></label></td>
            <td><input id="price1" type="number" name="price1" maxlength="3" disabled="disabled"></td>
        </tr>
        <tr>
            <td><label for="weight2">500gr</label><input id="weight2" class="checkbox" type="checkbox" name="weight2"
                                                         value="500"></td>
            <td><input id="price2" type="number" name="price2" maxlength="3" disabled="disabled"></td>
        </tr>
        <tr>
            <td><label for="weight3">1kg</label><input id="weight3" class="checkbox" type="checkbox" name="weight3"
                                                       value="1000"></td>
            <td><input id="price3" type="number" name="price3" maxlength="3" disabled="disabled"></td>
        </tr>
        </tbody>
    </table>

    <!--<input type="file" id="file-input" name="image_path" multiple/>
    <div id="thumb-output"></div>-->
    <input type='file' name='image_path'>

    <input type="submit" value="Guardar producto">

</form>

<script charset="UTF-8" src="../../js/jquery.js"></script>

<script>
    $(function () {
        $("#weight1").click(function () {
            if ($(this).is(":checked")) {
                $("#price1").removeAttr("disabled");
                $("#price1").focus();
            } else {
                $("#price1").attr("disabled", "disabled");
            }
        });
    });
    $(function () {
        $("#weight2").click(function () {
            if ($(this).is(":checked")) {
                $("#price2").removeAttr("disabled");
                $("#price2").focus();
            } else {
                $("#price2").attr("disabled", "disabled");
            }
        });
    });
    $(function () {
        $("#weight3").click(function () {
            if ($(this).is(":checked")) {
                $("#price3").removeAttr("disabled");
                $("#price3").focus();
            } else {
                $("#price3").attr("disabled", "disabled");
            }
        });
    });
</script>

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