<?php

?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Dándole el máximo valor agregado que nos permite la construcción de un precio justo y digno al trabajo de quienes los siembran."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico" name="keywords">
    <!-- Scripts de compatibilidad -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!-- Escala de viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Link a CSS -->
    <link href="grid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title>Iniciar sesión</title>
</head>
<body>
<div id="iniciar_sesion">
    <div>
        <header>
            <div class="grid-header container">
                <h1>Bats'il Maya: Inicio</h1>
                <div class="nav-wrapper desktop">
                    <a class="logo" href="index.php" target="_self" >
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
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                            <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                            <li><a href="proceso.php" target="_self">Proceso</a></li>
                            <li><a href="productos.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                            <li class="active" class="button outline fit-content"><a href="iniciar_sesion.php" target="_self">Iniciar
                                sesión</a></li>
                            <li class="button red fit-content"><a class="light" href="contactanos.php" target="_self">Contáctanos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <form class="form login-wrapper" action='login_front.php' method='post'>
        <h2 style="text-align: center">Inicia sesion</h2>
        <label for="email">Correo</label>
        <input class="email" id="email" name="mail" placeholder="mariabravo@gmail.com" required type="email">
        <div class="label-span">
            <label for="password">Contraseña</label>
            <span class="p-small right-aligned"><a>¿Olvidaste tu contraseña?</a></span>
        </div>
        <input class="password" id="password" name="pass" placeholder="" required type="password">
        <p class="formbutton"><input class="login button red margin-bottom" id="login" type="submit"
                                     value="Iniciar sesión"></p>
        <p class="p-small center-aligned"><span>¿No eres miembro? <a>Agenda un llamada</a></span></p>
    </form>

</div>

<script charset="UTF-8" src="js/jquery.js"></script>
<script charset="UTF-8" src="js/email-autocomplete.js"></script>

<script>
    $(document).ready(function () {
        $(".email").emailautocomplete();
    });
</script>

</body>
</html>
