<?php /** @noinspection ALL */
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Initialize shopping cart class
require_once 'cart_class.php';
$cart = new Cart;
$origin = basename($_SERVER['PHP_SELF']);

// Include the database config file
require_once 'connection.php';

// Default redirect page
$redirectLoc = 'index.php';

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart'){

        // Recieve form data
        $id_product = $_POST['id_product'];
        $weight_selector = $_POST['weight_selector'];
        $quantity = $_POST['quantity'];
        $molido_selector = $_POST['molido_selector'];

        // Get product details
        $query = ("select * from products where id_product = $id_product");
        $recordSet = execute($query);
        $row = $recordSet->fetch_assoc();
        $itemData = array(
            $id_product => $row['id_product'],
            'name_product' => $row['name_product'],
            $weight_selector => $row['weight_selector'],
            $molido_selector => $row['molido_selector'],
            $quantity => $row['quantity']
        );

        // Insert item to cart
        $insertItem = $cart->insert($itemData);

        // Redirect to cart page
        $redirectLoc = $insertItem?'carrito.php':'index.php';
    }elseif($_REQUEST['action'] == 'updateCartItem'){
        // Update item data in cart
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);

        // Return status
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem'){
        // Remove item from cart
        $deleteItem = $cart->remove($_REQUEST['id']);

        // Redirect to cart page
        $redirectLoc = 'carrito.php';
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0){
        $redirectLoc = 'checkout.php';
        // ¿?
    }
}

// Redirect to the specific page
header("Location: $redirectLoc");
exit();