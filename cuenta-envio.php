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
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title>Bats'il Maya</title>
</head>
<body id="cuenta">

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
        <h2 class="h2-header">Cuenta</h2>
    </div>
</header>

<div class="container grid-two-thirds-responsive ">
    <aside>
        <ul class="sidebar-nav-responsive">
            <li><a href="cuenta-informacion.php">Información</a></li>
            <li><a class="active" href="cuenta-envio.php">Dirección de envío</a></li>
            <li><a href="">Métodos de pago</a></li>
            <li><a href="">Pedidos</a></li>
        </ul>
    </aside>
    <div>
        <div class="grid-2-space-between align-grid-center gimme-padding">
            <h2 class="h2-small no-padding">Direcciones de envío</h2>
        </div>
        <div class="grid-two-column-auto-row-responsive card">
            <div>
                <div class="grid-2-space-between">
                    <div class="grid-2-space-between">
                        <h3 class="h3-small">Zedec Santa Fe</h3>
                        <div></div>
                    </div>
                    <div></div>
                </div>
                <p>Joaquín Gallo 258
                    Santa Fe, Zedec Sta Fé
                    01219 Santa Fe
                    CDMX
                </p>
                <p>55 1234 5678</p>
            </div>
            <div>
                <div class="grid-2-space-between">
                    <h3 class="h3-small">Zedec Santa Fe</h3>
                    <div></div>
                </div>
                <p>Joaquín Gallo 258
                    Santa Fe, Zedec Sta Fé
                    01219 Santa Fe
                    CDMX
                </p>
                <p>55 1234 5678</p>
            </div>
            <div>
                <div class="grid-2-space-between">
                    <h3 class="h3-small">Zedec Santa Fe</h3>
                    <div></div>
                </div>
                <p>Joaquín Gallo 258
                    Santa Fe, Zedec Sta Fé
                    01219 Santa Fe
                    CDMX
                </p>
                <p>55 1234 5678</p>
            </div>
            <div>
                <div class="grid-2-space-between">
                    <h3 class="h3-small">Zedec Santa Fe</h3>
                    <div></div>
                </div>
                <p>Joaquín Gallo 258
                    Santa Fe, Zedec Sta Fé
                    01219 Santa Fe
                    CDMX
                </p>
                <p>55 1234 5678</p>
            </div>
            <button>
                +
            </button>
        </div>
    </div>
</div>
</body>
</html>