<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include 'header.php';
?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Resuelve cualquier duda buscando en las preguntas frecuentes o contactando directamente a Bats'il Maya."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, ayuda, faq, preguntas, contacto, dudas, respuestas, problemas, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo"
          name="keywords">
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

    <title>Proceso de Pago</title>
</head>
<body>
<div id="confirmardireccion">
        <header>
                <div class="grid-header container">
                    <h1>Bats'il Maya: Proceso de Pago</h1>
                    <div class="nav-wrapper">
                        <a class="logo" href="index.php" target="_self">
                            <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
                        </a>
                        
                    </div>
                    <h2 class="h2-header kill">Proceso de Pago</h2>
                </div>
            </header>
<div class="container-threequel">
    <section>
        <h2 class="gimme-padding">Elige una dirección de envío</h2>
        <div class="card grid-two-column-auto-row-responsive">
        <article class="border">
            <h3>Dirección 1</h3>
            <p>
                name <br>
                Avenida Something 32321<br>
                colonia <br>
                Delegación <br>
                Ciudad <br>
                telefono <br>
            </p>
            <a class="button red fit-content">Entregar a esta dirección</a>
        </article>
        <article class="border">
                <h3>Dirección 2</h3>
                <p>
                    idk <br>
                    Random Street 27273<br>
                    colonia <br>
                    Delegación <br>
                    Ciudad <br>
                    telefono <br>
                </p>
                <a class="button red fit-content">Entregar a esta dirección</a>
            </article>
            <article class="border">
                    <h3>Dirección 3</h3>
                    <p>
                        Something Something <br>
                        made up street name 2984<br>
                        colonia <br>
                        Delegación <br>
                        Ciudad <br>
                        telefono <br>
                    </p>
                    <a class="button red fit-content">Entregar a esta dirección</a>
                </article>
            <article class="border">
                    <h3>Agregar dirección</h3>
                    <p>
                        +
                    </p>
                    <button>Agregar dirección</button>
                </article>
            </div>
    </section>
    <section>
            <h2 class="gimme-padding">Elige tu Método de Pago</h2>
            <div class="card">
            <article class="border grid-methods">
                <h3 class="h3-small">Pago con tarjeta</h3>
                <div class="grid-auto-flow">
                    <div class="visa"></div>
                    <div class="mastercard"></div>
                    <div class="americanexpress"></div>
                </div>
            </article>
            <article class="border">
                    <h3 class="h3-small margin-right">Pago en Efectivo</h3>
                
                </article>
                <article class="border">
                        <h3 class="h3-small margin-right">Transferencia Bancaria</h3>
                
                    </article>
                </div>
        </section>
<section>
        <h2>Orden</h2>
        <div class="border big-height">
        <article>
        <div class="grid-2-space-between">
            <div>
            <h3>Gourmet Orgánico</h3>
            <p class="p-big">1/2 kg - Americano</p>
        </div>
        <div>
            <span>$180</span>
        </div>
    </div>
    <div class="grid-2-space-between">
            <div>
            <h3>Prmium Orgánico</h3>
            <p class="p-big">1/2 kg - Espresso</p>
        </div>
        <div>
            <span>$150</span>
        </div>
    </div>
</article>
        <article  class="grid-2-space-between">
            <h3 class="h3-small">Total</h3>
            <span>$64043</span>
        </article>
        
        <a class="light button red fit-content" href="" target="_self">Continuar al Pago</a>
    </div>
</section>
</div>
</div>
</body>
</html>
