<?php
function compra(){
    $boton_active = "
    <div>
    <a class='button red' href='carrito.php' target='_self'>Agregar al carrito</a>
    </div>";
    
    $boton_disable= "
    <div>
    <a class='button disable unavailable' target='_self'>Agregar al carrito</a>
    <p class='note'> *Regístrate para comprar</p>
    </div>";

	if( isset($_SESSION['user']) ) {
		echo $boton_active;
    } else {
	    echo $boton_disable;
	}
}
?>