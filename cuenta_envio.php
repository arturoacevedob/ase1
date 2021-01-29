<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
include "header.php";
?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Dándole el máximo valor agregado que nos permite la construcción de un precio justo y digno al trabajo de quienes los siembran."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo" name="keywords">
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
    <?php renderHeader(); ?>
</header>

<div class="container grid-two-thirds-responsive ">
    <aside>
        <ul class="sidebar-nav-responsive">
            <li><a href="cuenta_informacion.php">Información</a></li>
            <li><a class="active" href="cuenta_envio.php">Dirección de envío</a></li>
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