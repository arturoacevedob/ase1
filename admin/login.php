<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';
session_start();

if(isset($_GET['killsession'])) {
    session_destroy();
}

if(isset($_POST['user'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $q = "select * from users where user = '$user' and pass = password('$pass')";
    $recordSet = execute($q);
    
    if($row = mysqli_fetch_array($recordSet)) {
        $_SESSION['user'] = $row['user'];
        $_SESSION['name'] = $row['name'];
        header("Location: admin.php");
    } else {
        session_destroy();
        echo "Verificar usuario y contraseña.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Autenticación del Administrador</h1>
    <form class="form login-wrapper" action='login.php' method='post'>
        <h2 style="text-align: center">Inicia sesion</h2>
        <label for="email">Correo</label>
        <input class="email" id="email" name="user" placeholder="mariabravo@gmail.com" required type="text">
        <div class="label-span">
            <label for="password" name='pass'>Contraseña</label>
        </div>
        <input class="password" id="password" name="pass" placeholder="" required type="password">
        <p class="formbutton"><input class="login button red margin-bottom" id="login" type="submit"
                                     value="Ingresar"></p>
    </form>
</body>
</html>