<?php
function renderHeader()
{
  // Header for users
  $header =
    "
    <div class='grid-header container'>
        <h1>Bats'il Maya: Inicio</h1>
        <div class='nav-wrapper desktop'>
            <a class='logo' href='index.php' target='_self'>
                <img alt='Bats'il Maya Logo' class='shadow' src='images/logos/batsil_maya_logo.svg'>
            </a>
            <nav id='menu-desktop'>
                <h2>Menú</h2>
                <ul class='menu-desktop-content'>
                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/index.php" ? "active" : "") .
    "' href='index.php' target='_self'>Inicio</a></li>
                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/nosotros.php" ? "active" : "") .
    "' href='nosotros.php' target='_self'>Nosotros</a></li>
                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/nuestro_cafe.php" ? "active" : "") .
    "' href='nuestro_cafe.php' target='_self'>Nuestro café</a></li>
                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/proceso.php" ? "active" : "") .
    "' href='proceso.php' target='_self'>Proceso</a></li>
                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/products.php" ? "active" : "") .
    "' href='products.php' target='_self'>Productos</a></li>
                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/noticias.php" ? "active" : "") .
    "' href='noticias.php' target='_self'>Noticias</a></li>
                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/ayuda.php" ? "active" : "") .
    "' href='ayuda.php' target='_self'>Ayuda</a></li>
                </ul>
            </nav>
            <ul class='grid-nav-1'>
                <li class='button red fit-content'><a class='light' href='contactanos.php' target='_self'>Contáctanos</a></li>
            </ul>
        </div>
    
        <div class='nav-wrapper mobile'>
            <a class='logo' href='index.php' target='_self'>
                <img alt='Bats'il Maya Logo' class='shadow' src='images/logos/batsil_maya_logo.svg'>
            </a>
            <nav id='menu-mobile'>
                <input id='menu-mobile-toggle' type='checkbox'>
                <label for='menu-mobile-toggle'><span id='menu-icon'></span></label>
                <div id='overlay'></div>
                <ul class='menu-mobile-content light-bg'>
                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/index.php" ? "active" : "") .
    "' href='index.php' target='_self'>Inicio</a></li>
                                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/nosotros.php" ? "active" : "") .
    "' href='nosotros.php' target='_self'>Nosotros</a></li>
                                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/nuestro_cafe.php" ? "active" : "") .
    "' href='nuestro_cafe.php' target='_self'>Nuestro café</a></li>
                                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/proceso.php" ? "active" : "") .
    "' href='proceso.php' target='_self'>Proceso</a></li>
                                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/products.php" ? "active" : "") .
    "' href='products.php' target='_self'>Productos</a></li>
                                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/noticias.php" ? "active" : "") .
    "' href='noticias.php' target='_self'>Noticias</a></li>
                                    <li><a class='" .
    ($_SERVER["PHP_SELF"] == "/ayuda.php" ? "active" : "") .
    "' href='ayuda.php' target='_self'>Ayuda</a></li>
                    <li class='button red fit-content'><a class='light' href='contactanos.php' target='_self'>Contáctanos</a></li>
                </ul>
            </nav>
        </div>
        <h2 class='h2-header'>Café tseltal:<br>Producto de un trabajo solidario y digno</h2>
        <p class='h2-subtitle'>Una cooperativa que tuesta, muele, y comercializa
            <wbr>
            un producto de calidad a precio justo.
        </p>
        <a class='button red fit-content' href='nosotros.php' target='_self'>Sobre nosotros</a>
    </div>";

  echo $header;
}
?>
