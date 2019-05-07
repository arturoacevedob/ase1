<?php
function renderHeader(){
    $headerUser = "
        <div class='cuenta'><li class='fit-content'><a class='kill' href='cuenta-informacion.php' target='_self'>Cuenta</a>
        <ul id='submenu'>
                      <li><a href='#' target='_self'>Información</a></li>
                      <li><a href='#' target='_self'>Dirección de envío</a></li>
                      <li><a href='#' target='_self'>Métodos de pago</a></li>
                      <li><a href='#' target='_self'>Pedidos</a></li>
					  <li><a href='#' target='_self'>Cerrar sesión</a></li>
				  </ul>
        </li></div>
        <div class='carrito'><li class='fit-content'><a class='kill' class='light' href='carrito.php' target='_self'>Carrito</a></li></div>"; 
    
    $header = "
        <li class='button outline fit-content'><a href='iniciar_sesion.php' target='_self'>Iniciar sesión</a></li>
        <li class='button red fit-content'><a class='light' href='contactanos.php' target='_self'>Contáctanos</a></li>";

	if( isset($_SESSION['user']) ) {
		echo $headerUser;
    } else {
	    echo $header;
	}
}
?>