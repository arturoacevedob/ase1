<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

// Entra aquí si se manda por URL (GET) el ID de producto.
if (isset($_GET['idproduct'])) {
    $id_product = $_GET['idproduct'];
    $q = "select * from products, weight_price, images where products.id_product = $id_product AND products.id_product = weight_price.id_product AND products.id_product = images.id_product";
    $recordSet = execute($q);
    if ($row = mysqli_fetch_array($recordSet)) {
        $name_product = $row['name_product'];
        $description = $row['description'];
        $notes = $row['notes'];
        $client_type = $row['client_type'];
        if (!is_null($row['weight1'])) {
            $weight1 = $row['weight1'];
        } else {
            $weight1 = null;
        }
        if (!is_null($row['weight2'])) {
            $weight2 = $row['weight2'];
        } else {
            $weight2 = null;
        }
        if (!is_null($row['weight3'])) {
            $weight3 = $row['weight3'];
        } else {
            $weight3 = null;
        }
        if (!is_null($row['price1'])) {
            $price1 = $row['price1'];
        } else {
            $price1 = null;
        }
        if (!is_null($row['price2'])) {
            $price2 = $row['price2'];
        } else {
            $price2 = null;
        }
        if (!is_null($row['price3'])) {
            $price3 = $row['price3'];
        } else {
            $price3 = null;
        }

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

    if (isset($_POST['$weight1']) AND isset($_POST['price1'])) {
        $weight1 = $_POST['weight1'];
        $price1 = $_POST['price1'];
    }
    if (isset($_POST['$weight2']) AND isset($_POST['price2'])) {
        $weight1 = $_POST['weight2'];
        $price1 = $_POST['price2'];
    }
    if (isset($_POST['$weight3']) AND isset($_POST['price3'])) {
        $weight3 = $_POST['weight3'];
        $price3 = $_POST['price3'];
    }

    if (isset($_POST['image_path'])) {
        $image_path = $_POST['image_path'];
    }

    $fileName = "";
    $tempFile = "";
    $fileNamePath = "";

    if ($_FILES['image_path']['name'] != "") {
        $uploadOk = 1;
        $fileName = strtolower($_FILES['image_path']['name']);
        $tempFile = $_FILES['image_path']['tmp_name'];
        $fileNamePath = '../images/' . $fileName;
        $relativePath = 'images/' . $fileName;

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

    if (isset($_POST['weight1'])) {
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
<body>
<h1>Productos</h1>

<form action='update_product.php' method='post' enctype='multipart/form-data'>

    <input type='hidden' name='update' value='update'>
    <input type="hidden" name="id_product" value="<?php echo $id_product; ?>">

    <label for="name_product">Nombre</label>
    <input id="name_product" type='text' name='name_product' value="<?php echo $name_product; ?>" maxlength=""> <br>
    <label for="description">Descripción</label>
    <input id="description" type='text' name='description' value="<?php echo $description; ?>" maxlength=""> <br>
    <label for="notes">Notas</label>
    <input id="notes" type='text' name='notes' value="<?php echo $notes; ?>" maxlength=""> <br>
    <label for="client_type">¿Disponible para mayoristas?</label>
    <input type='hidden' name='client_type' value='0'>
    <input type='checkbox' name='client_type' id="client_type"
           value='1' <?php if ($client_type == '1') echo 'checked="checked"'; ?>>

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
            <td><label for="weight2">500gr</label><input id="weight2" class="checkbox" type="checkbox" name="weight2"
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

    <img src="<?php echo "../$image_path"; ?>" height="100px">

    <label for="image_path">Carga una imagen</label>
    <input type='file' name='image_path' id="image_path">

    <input type="submit" value="Guardar cambios">

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