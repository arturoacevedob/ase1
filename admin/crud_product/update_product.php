<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

// Entra aquí si se manda por URL (GET) el ID de producto.
if (isset($_GET['idproduct'])) {
    $id_product = $_GET['idproduct'];
    $query = "select * from products, weight_price, images where products.id_product = $id_product AND weight_price.id_product = $id_product AND images.id_product = $id_product";
    $recordSet = execute($query);
    if ($row = mysqli_fetch_array($recordSet)) {
        $name_product = $row['name_product'];
        $description = $row['description'];
        $notes = $row['notes'];
        $client_type = $row['client_type'];
        $weight1 = $row['weight1'];
        $weight2 = $row['weight2'];
        $weight3 = $row['weight3'];
        $price1 = $row['price1'];
        $price2 = $row['price2'];
        $price3 = $row['price3'];
        $image_path = $row['image_path'];
    }
}

// Entra aquí cuando se envía el formulario a este mismo archivo.
if (isset($_POST['update'])) {
    $uploadOk = 0;
    $id_product = $_POST['id_product'];
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
    if (isset($_POST['image_path'])) {
        $image_path = $_POST['image_path'];
    }

    $fileName = "";
    $tempFile = "";
    $fileNamePath = "";

    if ($_FILES['image_path']['name'] != "") {
        $uploadOk = 1;
        $fileName = strtolower($_FILES['image_path']['name']);
        $fileName = preg_replace('/\s*/', '', $fileName);
        $tempFile = $_FILES['image_path']['tmp_name'];
        $fileNamePath = '../../images/productos/cafe/' . $fileName;
        $relativePath = 'images/productos/cafe/' . $fileName;

        if (!move_uploaded_file($tempFile, $fileNamePath)) {
            echo "Error al cargar el archivo.";
        }
    }

    $q = "update products set name_product = '$name_product', description = '$description', notes = '$notes' where id_product = '$id_product'";
    execute($q);

    if (isset($_POST['client_type'])) {
        $q = "update products set client_type = '$client_type' where id_product = '$id_product'";
        execute($q);
    }

    if (isset($_POST['weight1']) AND isset($_POST['price1'])) {
        $q = "update weight_price set weight1 = '$weight1', price1 = '$price1' where id_product = '$id_product'";
        execute($q);
    } else {
        $q = "update weight_price set weight1 = null, price1 = null where id_product = '$id_product'";
        execute($q);
    }

    if (isset($_POST['weight2']) AND isset($_POST['price2'])) {
        $q = "update weight_price set weight2 = '$weight2', price2 = '$price2' where id_product = '$id_product'";
        execute($q);
    } else {
        $q = "update weight_price set weight2 = null, price2 = null where id_product = '$id_product'";
        execute($q);
    }

    if (isset($_POST['weight3']) AND isset($_POST['price3'])) {
        $q = "update weight_price set weight3 = '$weight3', price3 = '$price3' where id_product = '$id_product'";
        execute($q);
    } else {
        $q = "update weight_price set weight3 = null, price3 = null where id_product = '$id_product'";
        execute($q);
    }

    if ($uploadOk == 1) {
        $q = "update images set image_path = '$relativePath' where id_product = '$id_product'";
        execute($q);
    }

    header("Location: ../products_coffee.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="../main-backend.css" rel="stylesheet">
</head>

<body class="padding-for-all">
<h1>Productos</h1>

<form class="round-red-border" action='update_product.php' method='post' enctype='multipart/form-data'>
    <div class="grid-1-1-1 padding-for-all-2 give-me-gap">
        <fieldset>
            <input type='hidden' name='update' value='update'>
            <input type="hidden" name="id_product" value="<?php echo $id_product; ?>">

            <label for="name_product">Nombre</label>
            <input id="name_product" type='text' name='name_product' value="<?php echo $name_product; ?>" maxlength="">
            <br>
            <label for="description">Descripción</label>
            <input id="description" type='text' name='description' value="<?php echo $description; ?>" maxlength="">
            <br>
            <label for="notes">Notas</label>
            <input id="notes" type='text' name='notes' value="<?php echo $notes; ?>" maxlength=""> <br>
            <label for="client_type">¿Disponible para mayoristas?</label>
            <input type='hidden' name='client_type' value='0'>
            <input type='checkbox' name='client_type' id="client_type"
                   value='1' <?php if ($client_type == '1') echo 'checked="checked"'; ?>>
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
                                                     value="250" <?php if ($weight1 == '250') echo 'checked="checked"'; ?>></label>
                </td>
                <td><input id="price1" type="number" name="price1" maxlength="3" value="<?php echo $price1; ?>"></td>
            </tr>
            <tr>
                <td><label for="weight2">500gr</label><input id="weight2" class="checkbox" type="checkbox"
                                                             name="weight2"
                                                             value="500" <?php if ($weight2 == '500') echo 'checked="checked"'; ?>>
                </td>
                <td><input id="price2" type="number" name="price2" maxlength="3" value="<?php echo $price2; ?>"></td>
            </tr>
            <tr>
                <td><label for="weight3">1kg</label><input id="weight3" class="checkbox" type="checkbox" name="weight3"
                                                           value="1000" <?php if ($weight3 == '1000') echo 'checked="checked"'; ?>>
                </td>
                <td><input id="price3" type="number" name="price3" maxlength="3" value="<?php echo $price3; ?>"></td>
            </tr>
            </tbody>
        </table>


    <div>
        <h3 class="padding-left">Imagen</h3>
        <img src="<?php echo "../../$image_path"; ?>" height="100px">
        <label for="image_path">Carga una imagen</label>
        <input class="button limited-height grey-font" type='file' name='image_path' id="image_path" required>
    </div>
    </div>
    <div class="bottom-thing grid-1-1-1-1 give-me-gap">
        <a class="exterminate" href='delete_product.php?idproduct=<?php echo $id_product; ?>'>Eliminar</a>
        <a class="button red-outline limited-width-2 cancel" href='../products_coffee.php'>Cancelar</a>
        <input class="button red limited-width-2 limited-height" type="submit" value="Guardar cambios">
    </div>
</form>

<script charset="UTF-8" src="../../js/jquery.js"></script>

<script>
    $('#client_type').on('change', function () {
        this.value = this.checked ? 1 : 0;
        // alert(this.value);
    }).change();
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

</body>
</html>