<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';

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
    $id_client = $_POST['id_client'];
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

    $q = "update clients set name_legal = '$name_legal', name_alias = '$name_alias',
            giro = '$giro', client_type = '$client_type' where clients.id_client = '$id_client'";
    execute($q);
    $q = "update contacts set name_contact = '$name_contact', email = '$email', phone_contact='$phone_contact' where contacts.id_client = '$id_client'";
    execute($q);
    $q = "update addresses set name_place = '$name_place', address1 = '$address1', address2 = '$address2', country = '$country', city = '$city', state = '$state', phone_address = '$phone_address', cp = '$cp' where addresses.id_client = '$id_client'";
    execute($q);
    $q = "update billing set payroll = '$payroll', rfc = '$rfc', payment_method = '$payment_method', payment_form = '$payment_form', payment_use = '$payment_use' where billing.id_client = '$id_client'";
    execute($q);

    header("Location: ../clients.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <link href="../main-backend.css" rel="stylesheet">
</head>

<body class="padding-for-all">

<form class="round-red-border" action="update_client.php" method="post" enctype="multipart/form-data">
<div class="grid-1-1-1 padding-for-all-2">
    <input type="hidden" name="update" value="update">
    <input type="hidden" name="id_client" value="<?php echo $id_client; ?>">

    <fieldset>
           <h2>Datos Generales</h2>
        <input type="hidden" name="update" value="update">
        <label for="name_legal">Nombre legal</label>
        <input id="name_legal" type="text" name="name_legal" min="1" maxlength="100" required
               value='<?php echo $name_legal; ?>'> <br>
        <label for="name_alias">Aliasl</label>
        <input id="name_alias" type="text" name="name_alias" min="1" maxlength="100" required
               value='<?php echo $name_alias; ?>'> <br>
        <label for="giro">Giro</label>
        <input id="giro" type="text" name="giro" min="1" maxlength="250" required value='<?php echo $giro; ?>'> <br>
        <label>Tipo de cliente</label>
       <p class="radio-group">
        <input type="radio" name="client_type" id="minorista"
               value="0" <?php if ($client_type == '0') echo 'checked="checked"'; ?> required>
        <label for="minorista">Minorista</label>
        <input type="radio" name="client_type" id="mayorista"
               value="1" <?php if ($client_type == '1') echo 'checked="checked"'; ?> required>
        <label for="mayorista">Mayorista</label>
       </p>
    
        <h2>Contacto</h2>
        <label for="name_contact">Nombre</label>
        <input id="name_contact" type="text" name="name_contact" min="1" maxlength="50" required
               value='<?php echo $name_contact; ?>'> <br>
        <label for="phone_contact">Número telefónico</label>
        <input id="phone_contact" type="tel" name="phone_contact" min="1" maxlength="20" required
               value='<?php echo $phone_contact; ?>'> <br>
        <label for="email">Correo electrónico</label>
        <input id="email" type="email" name="email" min="1" maxlength="20" required value='<?php echo $email; ?>'> <br>
    </fieldset>

    <fieldset>
        <h2>Dirección</h2>
        <label for="name_place">Nombre del lugar</label>
        <input id="name_place" type="text" name="name_place" min="1" maxlength="25" required
               value='<?php echo $name_place; ?>'> <br>
        <label for="country">País</label>
        <input id="country" type="text" name="country" min="1" maxlength="200" required value='<?php echo $country; ?>'>
        <br>
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
   
        <h2>Método de pago</h2>
        <div class="radio-group">
            <input class='radio' type="radio" name="payment_method" id="opcion-one"
                   value="0" <?php if ($payment_method == '0') echo 'checked="checked"'; ?>>
            <label for="opcion-one">PUE una exhib.</label>
            <input class='radio' type="radio" name="payment_method" id="opcion-dos"
                   value="1" <?php if ($payment_method == '1') echo 'checked="checked"'; ?>>
            <label for="opcion-dos">PPD parcialid</label>
        </div>
        <h2>Forma</h2>
        <div class="radio-group">
            <input class='radio' type="radio" name="payment_form" id="forma-one"
                   value="0" <?php if ($payment_form == '0') echo 'checked="checked"'; ?>>
            <label for="forma-one">Efectivo</label>
            <input class='radio' type="radio" name="payment_form" id="forma-dos"
                   value="1" <?php if ($payment_form == '1') echo 'checked="checked"'; ?>>
            <label for="forma-dos">Cheque</label>
            <input class='radio' type="radio" name="payment_form" id="forma-tres"
                   value="2" <?php if ($payment_form == '2') echo 'checked="checked"'; ?>>
            <label for="forma-tres">Transferencia</label>
            <input class='radio' type="radio" name="payment_form" id="forma-cuatro"
                   value="3" <?php if ($payment_form == '3') echo 'checked="checked"'; ?>>
            <label for="forma-cuatro">Tarjeto de crédito</label>
            <input class='radio' type="radio" name="payment_form" id="forma-cinco"
                   value="4" <?php if ($payment_form == '4') echo 'checked="checked"'; ?>>
            <label for="forma-cinco">Monedero</label>
        </div>
        <h2>Uso</h2>
        <div class="radio-group">
            <input class='radio' type="radio" name="payment_use" id="use-one"
                   value="0" <?php if ($payment_use == '0') echo 'checked="checked"'; ?>>
            <label for="use-one">G01 Adquis. Merc.</label>
            <input class='radio' type="radio" name="payment_use" id="use-dos"
                   value="1" <?php if ($payment_use == '1') echo 'checked="checked"'; ?>>
            <label for="use-dos">G03 Gastos Gral.</label>
        </div>
    </fieldset>
</div>
    
    <div class="bottom-thing grid-1-1-1-1 give-me-gap">
    <a class="exterminate" href='delete_client.php?idclient=<?php echo $id_client; ?>'>Eliminar</a>
    <a class="button red-outline limited-width-2 cancel" href='../clients.php'>Cancelar</a>
    <input class="button red limited-width-2 limited-height" type="submit" value="Guardar cambios">
    </div>
</form>
</body>
</html>