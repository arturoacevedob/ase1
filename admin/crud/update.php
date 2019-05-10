<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';

$id_clients;
$name_legal;
$name_alias;
$giro;
$client_type;
$name_contact;
$email;
$phone_contact;
$name_place;
$address1;
$address2;
$country;
$city;
$state;
$phone_address;
$cp;
$payroll;
$rfc;
$payment_method;
$payment_form;
$payment_use;

// Entra aquí si se manda por URL (GET) el ID de producto.
if (isset($_GET['idclient'])) {
    $id_client = $_GET['idclient'];
    $q = "select * from clients, contacts, addresses, billing where clients.id_client = contacts.id_client AND clients.id_client = addresses.id_client AND clients.id_client = billing.id_client AND clients.id_client = $id_client";
    $recordSet = execute($q);
    if ($row = mysqli_fetch_array($recordSet)) {
        $name_legal = $row['name_legal'];
        $name_alias = $row['name_alias'];
        $giro = $row['giro'];
        $client_type = $row['client_type'];
        $name_contact = $row['name_contact'];
        $email = $row['email'];
        $phone_contact = $row['phone_contact'];
        $name_place = $row['name_place'];
        $address1 = $row['address1'];
        $address2 = $row['address2'];
        $country = $row['country'];
        $city = $row['city'];
        $state = $row['state'];
        $phone_address = $row['phone_address'];
        $cp = $row['cp'];
        $payroll = $row['payroll'];
        $rfc = $row['rfc'];
        $payment_method = $row['payment_method'];
        $payment_form = $row['payment_form'];
        $payment_use = $row['payment_use'];
    }
}

// Entra aquí cuando se envía el formulario a este mismo archivo.
if (isset($_POST['update'])) {
    $name_legal = $_POST['name_legal'];
    $name_alias = $_POST['name_alias'];
    $giro = $_POST['giro'];
    $client_type = $_POST['client_type'];
    $name_contact = $_POST['name_contact'];
    $email = $_POST['email'];
    $phone_contact = $_POST['phone_contact'];
    $name_place = $_POST['name_place'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone_address = $_POST['phone_address'];
    $cp = $_POST['cp'];
    $payroll = $_POST['payroll'];
    $rfc = $_POST['rfc'];
    $payment_method = $_POST['payment_method'];
    $payment_form = $_POST['payment_form'];
    $payment_use = $_POST['payment_use'];

    echo "$visibility<br>";

    $q = "update clients set name = '$name', description = '$description',
            price = '$price', brand = '$brand', visible = '$visible'
            $imageField
            where id_client = '$id_client'";

    execute($q);
    header("Location: clients.php");
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="update.php" method="post" enctype="multipart/form-data">
    <h2>Datos Generales</h2>
    <fieldset>
        <input type="hidden" name="update" value="update">
        <label for="name_legal">Nombre legal</label>
        <input id="name_legal" type="text" name="name_legal" min="1" max="100" require
               value='<?php echo $name_legal; ?>'> <br>
        <label for="name_alias">Aliasl</label>
        <input id="name_alias" type="text" name="name_alias" min="1" max="100" require
               value='<?php echo $name_alias; ?>'> <br>
        <label for="giro">Giro</label>
        <input ide="giro" type="text" name="giro" min="1" max="250" require value='<?php echo $giro; ?>'> <br>
        <label for="client_type">Tipo de cliente</label>
        <input type="radio" name="client_type" id="minorista" value="0" min="1" max="12" require
               value='<?php echo $client_type; ?>'>
        <label for="minorista">Minorista</label>
        <input type="radio" name="client_type" id="mayorista" value="1" value='<?php echo $client_type; ?>'>
        <label for="mayorista">Mayorista</label>
    </fieldset>

    <fieldset>
        <h2>Contacto</h2>
        <label for="name">Nombre</label>
        <input id="name" type="text" name="name" min="1" max="50" require value='<?php echo $name_contact; ?>'> <br>
        <label for="phone_contact">Número telefónico</label>
        <input id="phone_contact" type="tel" name="phone_contact" min="1" max="50" require
               value='<?php echo $phone_contact; ?>'> <br>
        <label for="email">Correo electrónico</label>
        <input id="email" type="mail" name="email" min="1" max="20" require value='<?php echo $email; ?>'> <br>
    </fieldset>

    <fieldset>
        <h2>Dirección</h2>
        <label for="name_place">Nombre del lugar</label>
        <input id="name_place" type="text" name="name_place" min="1" max="25" require
               value='<?php echo $name_place; ?>'> <br>
        <label for="country">País</label>
        <input id="country" type="text" name="country" min="1" max="200" require value='<?php echo $country; ?>'> <br>
        <label for="address1">Calle y número</label>
        <input id="address1" type="text" name="address1" placeholder="Calle y número" value='<?php echo $address1; ?>'>
        <br>
        <input id="address2" type="text" name="address2" placeholder="Depto, piso, etc..(opcional)"
               value='<?php echo $address2; ?>'> <br>
        <label for="city">Ciudad</label>
        <input id="city" type="text" name="city" value='<?php echo $city ?>'> <br>
        <label for="cp">C.P.</label>
        <input id="cp" type="text" name="cp" value='<?php echo $cp; ?>'> <br>
        <label for="state">Estado</label>
        <input id="state" type="text" name="state" value='<?php echo $state; ?>'> <br>
        <label for="phone_address">Teléfono</label>
        <input id="phone_address" type="text" name="phone_address" value='<?php echo $phone_address; ?>'> <br>
    </fieldset>

    <fieldset>
        <h2>Facturación</h2>
        <label for="payroll">Nómina o razón social</label>
        <input id="payroll" type="text" name="payroll" value='<?php echo $payroll; ?>'> <br>
        <!-- <label for="fiscal_address">Domicilio fiscal</label>
        <input id="fiscal_address" type="text" name="fiscal_address"> <br> -->
        <label for="rfc">RFC</label>
        <input id="rfc" type="text" name="rfc" value='<?php echo $rfc; ?>'> <br>
        <label for="payment_method">Método de pago</label>

        <fieldset>
            <h2>Método de pago</h2>
            <div class="radio-group">
                <input class='radio' type="radio" name="payment_method" id="opcion-one" value="0" >
                <label for="opcion-one">PUE una exhib.</label>
                <input type="radio" name="payment_method" id="opcion-dos" value="1">
                <label for="opcion-dos">PPD parcialid</label>
            </div>
        </fieldset>

        <fieldset>
            <h2>Forma</h2>
            <div class="radio-group">
                <input class='radio' type="radio" name="payment_form" id="forma-one" value="0">
                <label for="forman-one">Efectivo</label>
                <input type="radio" name="payment_form" id="forma-dos" value="1">
                <label for="forma-dos">Cheque</label>
                <input type="radio" name="payment_form" id="forma-tres" value="1">
                <label for="forma-tres">Transferencia</label>
                <input type="radio" name="payment_form" id="forma-cuatro" value="1">
                <label for="forma-cuatro">Tarjeto de crédito</label>
                <input type="radio" name="payment_form" id="forma-cinco" value="1">
                <label for="forma-cinco">Monedero</label>
            </div>
        </fieldset>

        <fieldset>
            <h2>Uso</h2>
            <div class="radio-group">
                <input class='radio' type="radio" name="payment_use" id="use-one" value="0">
                <label for="use-one">G01 Adquis. Merc.</label>
                <input type="radio" name="payment_method" id="use-dos" value="1">
                <label for="use-dos">G03 Gastos Gral.</label>
            </div>
        </fieldset>

        <input type="submit" value="Guardar cliente">


</form>
</body>
</html>