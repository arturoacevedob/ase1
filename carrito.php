<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include 'header.php';
include_once 'cart_class.php';
$cart = new Cart;

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
    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
    <script>
        function updateCartItem(obj, id) {
            $.get("cartAction.php", {action: "updateCartItem", id: id, qty: obj.value}, function (data) {
                if (data == 'ok') {
                    location.reload();
                } else {
                    alert('Cart update failed, please try again.');
                }
            });
        }
    </script>
    <!-- Escala de viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Link a CSS -->
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title>Carrito</title>
</head>
<body>
<div id="carrito">
    <header style="background-color: grey;">
        <div class="grid-header container">
            <h1>Bats'il Maya: Carrito</h1>
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
                        <li><a class="active" href="noticias.php" target="_self">Ayuda</a></li>
                    </ul>
                </nav>
                <?php
                renderHeader()
                ?>
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
                        <?php
                        renderHeader()
                        ?>
                    </ul>
                </nav>
            </div>
            <h2 class="h2-header">Carrito</h2>
        </div>
    </header>
    <div class="container">
        <section class="grid-cart-list card">
        <?php

        if ($cart->total_items() > 0) {
            // Get cart items from session
            $cartItems = $cart->contents();
            foreach ($cartItems as $item) {

                echo "
            <article class='grid-cart-item'>
                    <div>
                        <h3 class='h3-small'>" . $item["name_product"] . "</h3>
                        <p>" . $item["weight_selector"] . " • " . $item["molido_selector"] . "</p>
                    </div>
                        <div class='premium_organico premium_position'>
                            </div>
                            <p><input id='" . $item["quantity"] . "' name='" . $item["quantity"] . "' type='number' max='100' min='0'/></p>
                        <span class='right-text'>$351</span>
                        <button class='i-be-four-too'>Quitar</button>   
    
            </article>";
            }
        }

        echo "
        </section>
    
        <section class='grid-2-space-between crazy-margin'>
            <div>
            <p>Subtotal</p>
            <p>Envio</p>
        </div>
        <div>
            <span>$34343</span><br>
            <span>$34043</span>
        </div>
    
        </section>
        <section  class='grid-2-space-between crazy-margin'>
            <p>Total</p>
            <span>$64043</span>
        </section>
        <aside class='right-text'>
            <p class='button red fit-content'><a class='light' href='confirmardireccion.php' target='_self'>Checkout</a></p>
        </aside>";
        ?>
    </div>

    <div class="bigfoot">
        <div class="curvita white-bg"></div>
        <div class="footer container">
            <aside>
                <ul class="nav footer-nav">
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
                    <li class="logo-footer"><a href="index.php" target="_self"><img
                                    alt="Bats'il Maya Logo" src="images/logos/batsil_maya_logo.svg"></a></li>
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
</div>
</body>
</html>
