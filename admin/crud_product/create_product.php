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
    if (isset($_POST['client_type'])) {
        $client_type = $_POST['client_type'];
    }

    if (isset($_POST['weight1']) AND isset($_POST['price1'])) {
        $weight1 = $_POST['weight1'];
        $price1 = $_POST['price1'];
    }

    if (isset($_POST['weight2']) AND isset($_POST['price2'])) {
        $weight2 = $_POST['weight2'];
        $price2 = $_POST['price2'];
    }

    if (isset($_POST['weight3']) AND isset($_POST['price3'])) {
        $weight3 = $_POST['weight3'];
        $price3 = $_POST['price3'];
    }

    if ($_FILES['image_path']['name'] != "") {
        $fileName = strtolower($_FILES['image_path']['name']);
        $fileName = preg_replace('/\s*/', '', $fileName);
        $tempFile = $_FILES['image_path']['tmp_name'];
        $fileNamePath = '../../images/productos/cafe/' . $fileName;
        $relativePath = 'images/productos/cafe/' . $fileName;
        if (move_uploaded_file($tempFile, $fileNamePath)) {
            $uploadOk = 1;
        } else {
            echo "Error al cargar el archivo.";
        }
    }

    $q = "insert into products (name_product, description, notes) values ('$name_product','$description','$notes')";
    $id_product = execute($q);

    if (isset($_POST['client_type'])) {
        $q = "update products set client_type = '$client_type' where id_product = '$id_product'";
        execute($q);
    }

    if (isset($_POST['weight1']) AND isset($_POST['price1'])) {
        $q = "insert into weight_price (weight1, price1, id_product) values ('$weight1', '$price1', '$id_product')";
        execute($q);
    }

    if (isset($_POST['weight2']) AND isset($_POST['price2'])) {
        $q = "insert into weight_price (weight2, price2, id_product) values ('$weight2', '$price2', '$id_product')";
        execute($q);
    }

    if (isset($_POST['weight3']) AND isset($_POST['price3'])) {
        $q = "insert into weight_price (weight3, price3, id_product) values ('$weight3', '$price3', '$id_product')";
        execute($q);
    }

    if ($uploadOk == 1) {
        $q = "insert into images (image_path, id_product) values ('$relativePath', '$id_product')";
        execute($q);
    }
    header("Location: ../products_coffee.php");

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
<h1>Producto nuevo</h1>
<form class="round-red-border" action='create_product.php' method='post' enctype='multipart/form-data'>
    <div class="grid-1-1-1 padding-for-all-2">
        <fieldset>
            <input type='hidden' name='insert' value='insert'>

            <label for="name_product">Nombre</label>
            <input id="name_product" type='text' name='name_product' max="" required> <br>
            <label for="description">Descripción</label>
            <input id="description" type='text' name='description' max="" required> <br>
            <label for="notes">Notas</label>
            <input id="notes" type='text' name='notes' max="" required> <br>
            <p class="radio-group">
                <label for="mayoristas">¿Disponible para mayoristas?</label>
                <input type='checkbox' name='client_type' id="mayoristas" value='1'>
            </p>
        </fieldset>

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
                <td><label for="weight2">500gr</label><input id="weight2" class="checkbox" type="checkbox"
                                                             name="weight2"
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
    </div>
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
</div>
<div class="botton-thing-sequel grid-1-1-1">
    <!--<input type="file" id="file-input" name="image_path" multiple/>
    <div id="thumb-output"></div>-->
    <input class="button red limited-width-2 limited-height" type='file' name='image_path'>

    <input class="button red limited-width-2 limited-height that-s-a-two" type="submit" value="Guardar producto">
    </div>
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