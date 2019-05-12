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
        $price = $row['price'];
        $notes = $row['	notes'];
        $client_type = $row['client_type'];
        $weight = $row['weight'];
        $price = $row['price'];
        $image_path = $row['image_path'];
    }
}

// Entra aquí cuando se envía el formulario a este mismo archivo.
if (isset($_POST['update'])) {
    $name_product = $_POST['name_product'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $notes = $_POST['	notes'];
    $client_type = $_POST['client_type'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $image_path = $_POST['image_path'];

    $fileName = "";
    $tempFile = "";
    $fileNamePath = "";

    if ($_FILES['image_path']['name'] != "") {
        $fileName = strtolower($_FILES['image_path']['name']);
        $tempFile = $_FILES['image_path']['tmp_name'];
        $fileNamePath = '../images/' . $fileName;
        $relativePath = 'images/' . $fileName;

        if (!move_uploaded_file($tempFile, $fileNamePath)) {
            echo "Error al cargar el archivo.";
        }
    }

    $imageField = "";
    if ($_FILES['image_path']['name'] != "") {
        $imageField = ", image_path = '$fileNamePath'";
    }

    $q = "update products set name = '$name', description = '$description',
            price = '$price', brand = '$brand', visible = '$visible'
            $imageField
            where id_product = '$id_product'";

    execute($q);
    header("Location: clients.php");
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>Productos</h1>
<form action='update_product.php' method='post' enctype='multipart/form-data'>
    <input type='hidden' name='update' value='update'>
    <input type='hidden' name='id_product' value='<?php echo $id_product; ?>'>

    Nombre: <input type='text' name='name' value='<?php echo $name; ?>'> <br>
    Descripción: <input type='text' name='description' value='<?php echo $description; ?>'> <br>
    Precio: <input type='number' name='price' value='<?php echo $price; ?>' step='any'> <br>
    Marca: <input type='text' name='brand' value='<?php echo $brand; ?>'> <br>
    Foto: <img src='<?php echo $image; ?>' height='100px'> <br>
    Nueva foto: <input type='file' name='image'> <br>
    Visible:
    <input type='radio' name='visible' value='1' <?php if ($visible == '1') echo 'checked'; ?> >Si
    <input type='radio' name='visible' value='0' <?php if ($visible == '0') echo 'checked'; ?> >No <br><br>

    <input type='submit' value='Modificar producto'>
</form>
</body>
</html>