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
    /*<a class='note button red fit-content' href='contactanos.php' target='_self'> Regístrate para comprar</a>*/
    <a class='note button red fit-content' href='https://www.amazon.com.mx/stores/page/458A7D6B-042B-46E6-AC15-6380E77F8CE0?ingress=2&visitId=65120477-d895-47a2-8a43-ebd0503e16b5&ref_=ast_bln' target='_self'> Compra en Amazon</a>
    </div>";

  if (isset($_SESSION["user"])) {
    echo $boton_active;
  } else {
    echo $boton_disable;
  }
}

?>
