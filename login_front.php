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
        header("Location: inciar_sesion.php");
    } else {
        session_destroy();
        echo "Verificar usuario y contraseña.";
    }
}
function renderHeader(){
    if( isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        echo "
        <header>
        <div class="grid-header container">
            <h1>Bats'il Maya: Ayuda</h1>
            <div class="nav-wrapper desktop">
                <a class="logo" href="index.php" target="_self">
                    <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
                </a>
                <nav id="menu-desktop">
                    <h2>Menú</h2>
                    <ul class="menu-desktop-content">
                        <li><a href="index.php" target="_self">Inicio</a></li>
                        <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                        <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                        <li><a href="proceso.php" target="_self">Proceso</a></li>
                        <li><a href="productos.php" target="_self">Productos</a></li>
                        <li><a href="noticias.php" target="_self">Noticias</a></li>
                        <li><a class="active" href="noticias.php" target="_self">Ayuda</a></li>
                    </ul>
                </nav>
                <ul>
                    <li class="button outline"><a href="cuenta-informacion.php" target="_self">Cuenta</a></li>
                    <li class="button red carrito"><a class="light" href="carrito.php" target="_self">Carrito</a></li>
                </ul>
            </div>

            <div class="nav-wrapper mobile">
                <a class="logo" href="index.php" target="_self">
                    <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
                </a>
                <nav id="menu-mobile">
                    <input id="menu-mobile-toggle" type="checkbox">
                    <label for="menu-mobile-toggle"><span id="menu-icon"></span></label>
                    <div id="overlay"></div>
                    <ul class="menu-mobile-content light-bg">
                        <li><a href="index.php" target="_self">Inicio</a></li>
                        <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                        <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                        <li><a href="proceso.php" target="_self">Proceso</a></li>
                        <li><a href="productos.php" target="_self">Productos</a></li>
                        <li><a href="noticias.php" target="_self">Noticias</a></li>
                        <li><a class="active" href="ayuda.php" target="_self">Ayuda</a></li>
                        <li class="button outline fit-content"><a href="cuenta-informacion.php" target="_self">Cuenta</a></li>
                        <li class="button red fit-content carrito"><a class="light" href="carrito.php" target="_self">Carrito</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <h2 class="h2-header">Ayuda</h2>
        </div>
    </header>";
    } else {
        echo "
        <header>
    <div class="grid-header container">
        <h1>Bats'il Maya: Inicio</h1>
        <div class="nav-wrapper desktop">
            <a class="logo" href="index.php" target="_self">
                <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
            </a>
            <nav id="menu-desktop">
                <h2>Menú</h2>
                <ul class="menu-desktop-content">
                    <li><a class="active" href="" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="productos.php" target="_self">Productos</a></li>
                    <li><a href="noticias.php" target="_self">Noticias</a></li>
                    <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                </ul>
            </nav>
            <ul>
                <li class="button outline"><a href="iniciar_sesion.php" target="_self">Iniciar sesión</a></li>
                <li class="button red"><a class="light" href="contactanos.php" target="_self">Contáctanos</a></li>
            </ul>
        </div>

        <div class="nav-wrapper mobile">
            <a class="logo" href="index.php" target="_self">
                <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
            </a>
            <nav id="menu-mobile">
                <input id="menu-mobile-toggle" type="checkbox">
                <label for="menu-mobile-toggle"><span id="menu-icon"></span></label>
                <div id="overlay"></div>
                <ul class="menu-mobile-content light-bg">
                    <li><a class="active" href="index.php" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="productos.php" target="_self">Productos</a></li>
                    <li><a href="noticias.php" target="_self">Noticias</a></li>
                    <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                    <li class="button outline fit-content"><a href="iniciar_sesion.php" target="_self">Iniciar
                        sesión</a></li>
                    <li class="button red fit-content"><a class="light" href="contactanos.php" target="_self">Contáctanos</a></li>
                </ul>
            </nav>
        </div>
        <h2 class="h2-header">Café tseltal.<br>Solidario, trabajador, digno</h2>
        <p class="h2-subtitle">Dándole el máximo valor agregado que nos permite la construcción
            <wbr>
            de un precio justo y
            digno al trabajo de quienes los siembran.
        </p>
        <a class="button red fit-content" href="nosotros.php" target="_self">Sobre nosotros</a>
    </div>
</header>
        ";
    }
}


?>