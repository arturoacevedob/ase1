<?php
function compra()
{
    $boton_active = "
    <div>
    <a class='button red' href='carrito.php' target='_self'>Agregar al carrito</a>
    </div>";

    $boton_disable = "
    <div class='add-cart-register-to-buy'>
    <input type='submit' name='Agregar al carrito' class='button disable unavailable'>
    <a class='note button red fit-content' href='contactanos.php' target='_self'> Regístrate para comprar</a>
    </div>";

    if (isset($_SESSION['user'])) {
        echo $boton_active;
    } else {
        echo $boton_disable;
    }
}

?>