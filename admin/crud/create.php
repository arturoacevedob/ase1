<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../crud/connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

if (isset($_POST['insert'])) {
    $uploadOk = 1;
    $name_legal = $_POST['name_legal'];
    $name_alias = $_POST['name_alias'];
    $giro = $_POST['giro'];
    $client_type = $_POST['client_type'];
    $name_contact = $_POST['name_contact'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $name_place = $_POST['name_place'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $cp = $_POST['cp'];
    $payroll = $_POST['payroll'];
    $rfc = $_POST['rfc'];
    $payment_method = $_POST['payment_method'];
    $payment_form = $_POST['payment_form'];
    $payment_use = $_POST['payment_use'];


    if ($uploadOk == 1) {
        $q = "insert into clients (name_legal, name_alias, giro, client_type) values ('$name_legal', '$name_alias', '$giro', '$client_type');";
        $id_client = execute($q);
        $q = "insert into contacts(name_contact, email, phone, id_client) values ('$name', '$email', '$phone', '$id_client');";
        execute($q);
        $q = "insert into addresses (name_place, address1, address2, country, city, state, phone, cp, id_client) values ('$name_place','$address1','$address2','$country','$city','$state','$phone','$cp', '$id_client');";
        execute($q);
        $q = "insert into billing (payroll, rfc, payment_method, payment_form, payment_use, id_client) values ('$payroll', '$rfc', '$payment_method', '$payment_form', '$payment_use', '$id_client');";
        execute($q);
        header("Location: ../clients.php");
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="create.php" method="post" enctype="multipart/form-data">
    <h2>Datos Generales</h2>
    <fieldset>
        <input type="hidden" name="insert" value="insert">
        <label for="name_legal">Nombre legal</label>
        <input id="name_legal" type="text" name="name_legal" min="1" max="100" require> <br>
        <label for="name_alias">Aliasl</label>
        <input id="name_alias" type="text" name="name_alias" min="1" max="100" require> <br>
        <label for="giro">Giro</label>
        <input ide="giro" type="text" name="giro" min="1" max="250" require> <br>
        <label for="client_type">Tipo de cliente</label>
        <input type="radio" name="client_type" id="minorista" value="0" min="1" max="12" require>
        <label for="minorista">Minorista</label>
        <input type="radio" name="client_type" id="mayorista" value="1">
        <label for="mayorista">Mayorista</label>
    </fieldset>

    <fieldset>
        <h2>Contacto</h2>
        <label for="name">Nombre</label>
        <input id="name" type="text" name="name" min="1" max="50" require> <br>
        <label for="phone">Número telefónico</label>
        <input id="phone" type="tel" name="phone" min="1" max="50" require> <br>
        <label for="email">Correo electrónico</label>
        <input id="email" type="mail" name="email" min="1" max="20" require> <br>
    </fieldset>

    <fieldset>
        <h2>Dirección</h2>
        <label for="name_place">Nombre del lugar</label>
        <input id="name_place" type="text" name="name_place" min="1" max="25" require> <br>
        <label for="country">País</label>
        <input id="country" type="text" name="country" min="1" max="200" require> <br>
        <label for="address1">Calle y número</label>
        <input id="address1" type="text" name="address1" placeholder="Calle y número"> <br>
        <input id="address2" type="text" name="address2" placeholder="Depto, piso, etc..(opcional)"> <br>
        <label for="city">Ciudad</label>
        <input id="city" type="text" name="city"> <br>
        <label for="cp">C.P.</label>
        <input id="cp" type="text" name="cp"> <br>
        <label for="state">Estado</label>
        <input id="state" type="text" name="state"> <br>
        <label for="phone">Teléfono</label>
        <input id="phone" type="text" name="phone"> <br>
    </fieldset>

    <fieldset>
        <h2>Facturación</h2>
        <label for="payroll">Nómina o razón social</label>
        <input id="payroll" type="text" name="payroll"> <br>
        <!-- <label for="fiscal_address">Domicilio fiscal</label>
        <input id="fiscal_address" type="text" name="fiscal_address"> <br> -->
        <label for="rfc">RFC</label>
        <input id="rfc" type="text" name="rfc"> <br>
        <label for="payment_method">Método de pago</label>

        <fieldset>
            <h2>Método de pago</h2>
            <div class="radio-group">
                <input class='radio' type="radio" name="payment_method" id="opcion-one" value="0">
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