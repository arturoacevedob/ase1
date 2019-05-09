<?php
function renderHeader(){
    $origin = basename($_SERVER['PHP_SELF']);

    $headerUser = "
        <li class='cuenta'><a href='cuenta-informacion.php' target='_self' aria-label='cuenta'></a>
        <ul class='submenu'>
                      <li><a href='cuenta-informacion.php' target='_self'>Información</a></li>
                      <li><a href='direccion-envio.php target='_self'>Dirección de envío</a></li>
                      <li><a href='metodos-de-contacto.php' target='_self'>Métodos de pago</a></li>
                      <li><a href='pedidos.php' target='_self'>Pedidos</a></li>
					  <li><a href='iniciar_sesion.php?killsession=" . $origin . "' target='_self'>Cerrar sesión</a></li>
				  </ul>
        </li>
        <li class='carrito'><a class='light' href='carrito.php' target='_self' aria-label='carrito'></a></li>";

    $header = "
        <li class='button outline fit-content'><a href='iniciar_sesion.php?origin=" . $origin . "' target='_self'>Iniciar sesión</a></li>
        <li class='button red fit-content'><a class='light' href='contactanos.php' target='_self'>Contáctanos</a></li>";

    if (isset($_SESSION['user'])) {
        echo $headerUser;
    } else {
        echo $header;
    }
}
?>