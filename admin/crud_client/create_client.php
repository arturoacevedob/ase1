<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    header("Location: ../login.php");
    die();
}

function renderCreateClient()
{

    if (isset($_POST['insert'])) {
        $uploadOk = 1;
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


        if ($uploadOk == 1) {
            $q = "insert into clients (name_legal, name_alias, giro, client_type) values ('$name_legal', '$name_alias', '$giro', '$client_type');";
            $id_client = execute($q);
            $q = "insert into contacts (name_contact, email, phone_contact, id_client) values ('$name_contact', '$email', '$phone_contact', '$id_client');";
            execute($q);
            $q = "insert into addresses (name_place, address1, address2, country, city, state, phone_address, cp, id_client) values ('$name_place','$address1','$address2','$country','$city','$state','$phone_address','$cp', '$id_client');";
            execute($q);
            $q = "insert into billing (payroll, rfc, payment_method, payment_form, payment_use, id_client) values ('$payroll', '$rfc', '$payment_method', '$payment_form', '$payment_use', '$id_client');";
            execute($q);
            header("Location: ../clients.php");
        }
    }

    echo "
<form class=\"round-red-border\" action=\"create_client.php\" method=\"post\" enctype=\"multipart/form-data\">
<div class=\"grid-1-1-1 padding-for-all-2\">

    <input type=\"hidden\" name=\"insert\" value=\"insert\">
    
    <fieldset>
    <h2>Datos Generales</h2>
        <label for=\"name_legal\">Nombre legal</label>
        <input id=\"name_legal\" type=\"text\" name=\"name_legal\" min=\"1\" max=\"100\" required>
        <label for=\"name_alias\">Aliasl</label>
        <input id=\"name_alias\" type=\"text\" name=\"name_alias\" min=\"1\" max=\"100\" required>
        <label for=\"giro\">Giro</label>
        <input id=\"giro\" type=\"text\" name=\"giro\" min=\"1\" max=\"250\" required>
        <label>Tipo de cliente</label>
        <p class=\"radio-group\">
            <input type=\"radio\" name=\"client_type\" id=\"minorista\" value=\"0\" required>
            <label for=\"minorista\">Minorista</label>
            <input type=\"radio\" name=\"client_type\" id=\"mayorista\" value=\"1\" required>
            <label for=\"mayorista\">Mayorista</label>
        </p>
        <h2>Contacto</h2>
        <label for=\"name_contact\">Nombre</label>
        <input id=\"name_contact\" type=\"text\" name=\"name_contact\" min=\"1\" max=\"50\" required>
        <label for=\"phone_contact\">Número telefónico</label>
        <input id=\"phone_contact\" type=\"tel\" name=\"phone_contact\" min=\"1\" max=\"20\" required>
        <label for=\"email\">Correo electrónico</label>
        <input id=\"email\" type=\"email\" name=\"email\" min=\"1\" max=\"20\" required>
    </fieldset>

    <fieldset>
        <h2>Dirección</h2>
        <label for=\"name_place\">Nombre del lugar</label>
        <input id=\"name_place\" type=\"text\" name=\"name_place\" min=\"1\" max=\"25\" required>
        <label for=\"country\">País</label>
        <input id=\"country\" type=\"text\" name=\"country\" min=\"1\" max=\"200\" required>
        <label for=\"address1\">Calle y número</label>
        <input id=\"address1\" type=\"text\" name=\"address1\" placeholder=\"Calle y número\">
        <input id=\"address2\" type=\"text\" name=\"address2\" placeholder=\"Depto, piso, etc. (opcional)\">
        <label for=\"city\">Ciudad</label>
        <input id=\"city\" type=\"text\" name=\"city\">
        <label for=\"cp\">C.P.</label>
        <input id=\"cp\" type=\"number\" name=\"cp\" maxlength=\"5\">
        <label for=\"state\">Estado</label>
        <input id=\"state\" type=\"text\" name=\"state\">
        <label for=\"phone_address\">Teléfono</label>
        <input id=\"phone_address\" type=\"text\" name=\"phone_address\">
    </fieldset>

    <fieldset>
        <h2>Facturación</h2>
        <label for=\"payroll\">Nómina o razón social</label>
        <input id=\"payroll\" type=\"text\" name=\"payroll\">
        <!-- <label for=\"fiscal_address\">Domicilio fiscal</label>
        <input id=\"fiscal_address\" type=\"text\" name=\"fiscal_address\"> -->
        <label for=\"rfc\">RFC</label>
        <input id=\"rfc\" type=\"text\" name=\"rfc\">
    
        <h2>Método de pago</h2>
        <div class=\"radio-group\">
            <input class='radio' type=\"radio\" name=\"payment_method\" id=\"opcion-one\" value=\"0\">
            <label for=\"opcion-one\">PUE una exhib.</label>
            <input type=\"radio\" name=\"payment_method\" id=\"opcion-dos\" value=\"1\">
            <label for=\"opcion-dos\">PPD parcialid</label>
        </div>
        <h2>Forma</h2>
        <div class=\"radio-group\">
            <input class='radio' type=\"radio\" name=\"payment_form\" id=\"forma-one\" value=\"0\">
            <label for=\"forma-one\">Efectivo</label>
            <input class='radio' type=\"radio\" name=\"payment_form\" id=\"forma-dos\" value=\"1\">
            <label for=\"forma-dos\">Cheque</label>
            <input class='radio' type=\"radio\" name=\"payment_form\" id=\"forma-tres\" value=\"2\">
            <label for=\"forma-tres\">Transferencia</label>
            <input class='radio' type=\"radio\" name=\"payment_form\" id=\"forma-cuatro\" value=\"3\">
            <label for=\"forma-cuatro\">Tarjeto de crédito</label>
            <input class='radio' type=\"radio\" name=\"payment_form\" id=\"forma-cinco\" value=\"4\">
            <label for=\"forma-cinco\">Monedero</label>
        </div>
        <h2>Uso</h2>
        <div class=\"radio-group\">
            <input class='radio' type=\"radio\" name=\"payment_use\" id=\"use-one\" value=\"0\">
            <label for=\"use-one\">G01 Adquis. Merc.</label>
            <input class='radio' type=\"radio\" name=\"payment_use\" id=\"use-dos\" value=\"1\">
            <label for=\"use-dos\">G03 Gastos Gral.</label>
        </div>
    </fieldset>
</div>
<div class=\"bottom-thing grid-1-1-1\">
    <a class= \"button red-outline limited-width-2 cancel\" href=''>Cancelar</a>
    <input class=\"button red limited-width-2 limited-height\" type=\"submit\" value=\"Guardar cliente\">
    </div>
</form>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../main-backend.css" rel="stylesheet">
</head>

<body class="padding-for-all">

<?php renderCreateClient(); ?>

</body>
</html>