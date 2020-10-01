<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include 'header.php';
include 'contact_pending.php';
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
    <link href="css/datetimepicker.css" rel="stylesheet">
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title>Contáctanos</title>
</head>
<body>
<div id="Contáctanos">
    <div>
        <header class="green-bg">
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
                            <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                            <li><a href="proceso.php" target="_self">Proceso</a></li>
                            <li><a href="products.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                        </ul>
                    </nav>
                    <ul>
                        <li class="button outline"><a href="iniciar_sesion.php" target="_self">Iniciar sesión</a></li>
                        <li class="button red"><a class="light" href="" target="_self">Contáctanos</a></li>
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
                            <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                            <li><a href="proceso.php" target="_self">Proceso</a></li>
                            <li><a href="products.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                            <li class="button outline fit-content"><a href="iniciar_sesion.php" target="_self">Iniciar
                                sesión</a></li>
                            <li class="active button red fit-content"><a class="light" href="" target="_self">Contáctanos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <div class="green-bg">
        <section class="llamada container light">
            <div class="join">
                <?php renderContactForm(); ?>
            </div>
        <div id="form-ilustracion"></div>
        </section>
    </div>
    <div class="bigfoot">
        <div class="curvita green-bg"></div>
        <div class="footer container">
            <aside>
                <ul class="nav footer-nav dark">
                    <li><a href="index.php" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="products.php" target="_self">Productos</a></li>
                    <li><a href="noticias.php" target="_self">Noticias</a></li>
                    <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                </ul>
            </aside>
            <footer>
                <ul class="foot-info p-small">
                    <li><strong>Teléfono</strong><br>
                        01-919-6710172
                    </li>
                    <li><strong>Correo</strong><br>
                        contacto@batsilmaya.org
                    </li>
                    <li class="logo-footer">
                        <a href="index.php" target="_self">
                            <img alt="Bats'il Maya Logo" src="images/logos/batsil_maya_logo.svg">
                        </a>
                    </li>
                    <li id="office1"><strong>Oficina</strong><br>
                        lugar ###<br> Chilón, Chiapas
                    </li>
                    <li id="office2"><strong>Oficina</strong><br>
                        lugar ###<br> Chilón, Chiapas
                    </li>
                </ul>
            </footer>
        </div>
    </div>
    
    <script charset="UTF-8" src="js/jquery.js"></script>
    <script charset="UTF-8" src="js/datetimepicker.js"></script>
    <script charset="UTF-8" src="js/datetimepicker.es.js"></script>
    <script charset="UTF-8" src="js/email-autocomplete.js"></script>
    <script charset="UTF-8" src="js/mask.js"></script>
    
    <script>
        $(document).ready(function () {
            $('.phone_with_ddd').mask('(00) 0000-0000');
            $(".email").emailautocomplete();
            $('.form_date').datetimepicker({
                language: 'es',
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0,
                startDate: new Date(),
            });
            $('.form_date').datetimepicker('setDaysOfWeekDisabled', [0, 6]);
            $('.form_time').datetimepicker({
                language: 'es',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 1,
                minView: 0,
                maxView: 1,
                forceParse: 0,
                showMeridian: 1,
                minuteStep: 15
            });
        });
    </script>
    
    </body>
    </html>