<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include 'header.php';
include 'agregar-producto.php';
?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Únicamente granos que cumplen los más altos estándares de calidad."
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

    <title>Productos</title>
</head>
<body>
<div id="productoorganico">
    <div>
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
                            <li><a class="active" href="productos.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a href="ayuda.php" target="_self">Ayuda</a></li>
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
                            <li><a class="active" href="index.php" target="_self">Inicio</a></li>
                            <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                            <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                            <li><a href="proceso.php" target="_self">Proceso</a></li>
                            <li><a href="productos.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                            <?php
                            renderHeader()
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <section>
        <h2 class="kill">producto</h2>
        <article class="grid-product-view container no-padding-top-bottom">
            <div class="product-description order-0">
                <h2>Premium Orgánico</h2>
                <p>Un café de preparación americana con excelente calidad que pocos cafés en el mercado nacional
                    logran ofrecer.</p>
            </div>

            <form class="grid-product-form">
                <div class="grid-2-left-aligned">
                    <fieldset class="h3-small">
                        <label>Peso</label>
                        <p class="radio-group">
                            <input id="peso-one" name="peso-selector" type="radio">
                            <label for="peso-one">250gr</label>
                            <input id="peso-two" name="peso-selector" type="radio">
                            <label for="peso-two">500gr</label>
                            <input id="peso-three" name="peso-selector" type="radio">
                            <label for="peso-three">1kg</label>
                        </p>
                    </fieldset>
                    <fieldset class="h3-small">
                        <label for="cantidad">Cantidad</label>
                        <p><input id="cantidad" name="cantidad" type="number" max="100" min="0"/></p>
                    </fieldset>
                </div>
                <fieldset class="h3-small">
                    <label>Molido del café</label>
                    <p class="radio-group">
                        <input id="molido-one" class="radio" name="molido-selector" type="radio">
                        <label for="molido-one">Americano</label>
                        <input id="molido-two" class="radio" name="molido-selector" type="radio">
                        <label for="molido-two">Espresso</label>
                        <input id="molido-custom-radio" type="radio" name="molido-selector"
                               class="radio other-input">
                        <label for="molido-custom-radio">Otro</label>
                        <select type="number" id="molido-custom-value" class="dependent-input" disabled>
                            <option value="">#1</option>
                            <option value="">#2</option>
                            <option value="">#3</option>
                            <option value="">#4</option>
                            <option value="">#5</option>
                            <option value="">#6</option>
                            <option value="">#7</option>
                        </select>

                    </p>
                </fieldset>
            </form>

            <div class="product-buy grid-2-space-between">
                <div class="grid-2-space-between align-center bold">
                    <span>Qt. x</span>
                    <p>$1260</p>
                </div>
                <?php
                compra()
                ?>
            </div>
            <div class="center-aligned">
                <p>Pide 11KG para envío nacional gratis</p>
            </div>
            <div class="premium_organico">
            </div>
        </article>
    </section>
    <section class="container">
        <h3>Detalles del café</h3>
        <div class="grid-4">
            <article>
                <h3>Variedad</h3>
            </article>
            <article>
                <h3>Mezclas</h3>
            </article>
            <article>
                <h3>Proceso</h3>
            </article>
            <article>
                <h3>Notas</h3>
            </article>
            <article>
                <h3>Ubicación</h3>
            </article>
            <article>
                <h3>Altura</h3>
                <div class="altura organic-height"></div>
                <p class="center-text">900 - 1400 msnm</p>
            </article>
            <article>
                <h3>Temperatura</h3>
                <div class="temperatura organic-height"></div>
                <p></p>
            </article>
            <article>
                <h3>Tipo de Suelo</h3>
                <div class="suelo organic-height"></div>
                <p class="center-text">Abundante materia orgánica</p>
            </article>
        </div>
    </section>


    <div class="light-bg">
        <aside class="gridbigproduct container">
            <h2 class="h2-small product-title">Más Productos</h2>
            <div class="grid-scroll-x">
                <section class="ind-product">
                    <h3 class="title pname h3-small">Premium Orgánico</h3>
                    <p><span class="pprice">$80-$100</span></p>
                    <figure class="pimage"><img
                                alt="Granos de café premium orgánico de Bats'il Maya"
                                src="images/productos/cafe/granos_de_cafe_premium_organico_batsil_maya.jpg"></figure>
                    <p class="pdescription">Únicamente granos que cumplen los más altos estándares de
                        calidad.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Gourmet Orgánico</h3>
                    <p><span class="pprice">$80-$100</span></p>
                    <figure class="pimage"><img
                                alt="Granos de café gourmet orgánico de Bats'il Maya"
                                src="images/productos/cafe/granos_de_cafe_gourmet_organico_batsil_maya.jpg"></figure>
                    <p class="pdescription">Granos con preparación europea son seleccionados cuidadosamente.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Orgánico</h3>
                    <p><span class="pprice">$80-$100</span></p>
                    <figure class="pimage"><img alt="Granos de café orgánico de Bats'il Maya"
                                                src="images/productos/cafe/granos_de_cafe_organico_batsil_maya.jpg">
                    </figure>
                    <p class="pdescription">Un café de preparación americana con excelente calidad.<br> <a
                                class="link" href="" target="_self">Ver más »</a></p>
                </section>
                <section class="ind-product">
                    <h3 class="title pname h3-small">Descafeinado</h3>
                    <p><span class="pprice">$80-$100</span></p>
                    <figure class="pimage"><img alt="Granos de café descafeinado de Bats'il Maya"
                                                src="images/productos/cafe/granos_de_cafe_descafeinado_batsil_maya.jpg">
                    </figure>
                    <p class="pdescription">Para aquellas personas que desean disfrutar un rico café libre de
                        cafeína.<br>
                        <a class="link" href="" target="_self">Ver más »</a></p>
                </section>
            </div>
            <a class="h2-link right-aligned" href="productos.php" target="_self">Todos los productos »</a>
        </aside>
    </div>


    <div class="bigfoot">
        <div class="curvita light-bg"></div>
        <div class="footer container">
            <aside>
                <ul class="nav footer-nav">
                    <li><a href="index.php" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a class="active" href="productos.php" target="_self">Productos</a></li>
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
                    <li class="logo-footer"><a href="index.php" target="_self"><img alt="Bats'il Maya Logo"
                                                                                    src="images/logos/batsil_maya_logo.svg"></a>
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
</div>

<script charset="UTF-8" src="js/jquery.js"></script>

<script>
    $('.radio').change(function () {
        $('#molido-custom-value').prop('disabled', !$(this).is('.other-input'));
    });
</script>

</body>
</html>
