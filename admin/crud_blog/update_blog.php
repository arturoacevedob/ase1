<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

// Entra aquí si se manda por URL (GET) el ID de producto.
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "select * from blog where id = $id";
    $recordSet = execute($query);
    if ($row = mysqli_fetch_array($recordSet)) {
        $title = $row['title'];
        $body = $row['body'];
        $image_path = $row['image_path'];
    }
}

// Entra aquí cuando se envía el formulario a este mismo archivo.
if (isset($_POST['update'])) {
    $uploadOk = 0;
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
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
        $fileNamePath = '../../images/blog/' . $fileName;
        $relativePath = 'images/blog/' . $fileName;

        if (!move_uploaded_file($tempFile, $fileNamePath)) {
            echo "Error al cargar el archivo.";
        }
    }

    $q = "update blog set title = '$title', body = '$body' where id = '$id'";
    execute($q);

    if ($uploadOk == 1) {
        $q = "update blog set image_path = '$relativePath' where id = '$id'";
        execute($q);
    }

    header("Location: ../blog.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="../main-backend.css" rel="stylesheet">
</head>

<body class="padding-for-all">
<h1>Publicación</h1>

<form class="round-red-border" action='update_blog.php' method='post' enctype='multipart/form-data'>
    <div class="grid-1-1-1 padding-for-all-2 give-me-gap">
        <fieldset>
            <input type='hidden' name='update' value='update'>
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="title">Título</label>
            <input id="title" type='text' name='title' value="<?php echo $title; ?>" max="100" required> <br>
            <label for="body">Cuerpo</label>
            <textarea id="body" name='body' rows="25" required><?php echo $body; ?></textarea> <br>
            <label class="padding-left">Imagen</label>
            <img src="<?php echo "../../$image_path"; ?>" height="100px">
            <label for="image_path">Carga una imagen</label>
            <input class="button limited-height grey-font" type='file' name='image_path' id="image_path">
        </fieldset>
    </div>
    <div class="bottom-thing grid-1-1-1-1 give-me-gap">
        <a class="exterminate" href='delete_blog.php?id=<?php echo $id; ?>'>Eliminar</a>
        <a class="button red-outline limited-width-2 cancel" href='../blog.php'>Cancelar</a>
        <input class="button red limited-width-2 limited-height" type="submit" value="Guardar cambios">
    </div>
</form>

</body>
</html>