<?php
function renderHeader(){
    $headerUser = "
        <li class='fit-content cuenta'><a href='cuenta-informacion.php' target='_self'>Cuenta</a></li>
        <li class='fit-content carrito'><a class='light' href='carrito.php' target='_self'>Carrito</a></li>"; 
    
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