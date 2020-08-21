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

    if (isset($_POST['add'])){
        /// print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

            $item_array_id = array_column($_SESSION['cart'], "product_id");

            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }else{

                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );

                $_SESSION['cart'][$count] = $item_array;
            }

        }else{

            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
        }
    }
}

?>