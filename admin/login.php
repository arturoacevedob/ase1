<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';

if (isset($_POST['user'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $q = "select * from users where user='$user' and pass=password('$pass')";
    $recordSet = execute($q);
    if (mysqli_fetch_array($recordSet)) {

    }
}

?>

<!DOCTYPE html>
<html lang="es">
<body>
<h1>Login de administrador</h1>
<form action="login.php">
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user">
    <label for="pass">Usuario</label>
    <input type="password" name="pass" id="pass">
    <input type="submit" value="Ingresar">
</form>
</body>
</html>