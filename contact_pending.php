<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include "connection.php";

if (isset($_POST["insert"])) {
  $name_client_pending = $_POST["name_client_pending"];
  $email_client_pending = $_POST["email_client_pending"];
  $phone_client_pending = $_POST["phone_client_pending"];
  $day_client_pending = $_POST["day_client_pending"];
  $from_client_pending = $_POST["from_client_pending"];
  $to_client_pending = $_POST["to_client_pending"];

  $query = "insert into clients_pending (name_client_pending, email_client_pending, phone_client_pending, day_client_pending, from_client_pending, to_client_pending) values ('$name_client_pending', '$email_client_pending', '$phone_client_pending', '$day_client_pending', '$from_client_pending', '$to_client_pending')";
  execute($query);

  $content = nl2br($name_client_pending . "\n" . $email_client_pending . "\n" . $phone_client_pending . "\nEl cliente quiere ser contactado el día " . $day_client_pending . ", entre las " . $from_client_pending . " y " . $to_client_pending . " horas.");
  mail($email_client_pending, "Bats'il Maya — Nueva solicitud de contacto", $content);

  header("Location: index.php");
}

function renderContactForm()
{
  echo "
    <form action='contact_pending.php' method='post' enctype='multipart/form-data'>

                <input type='hidden' name='insert' value='insert'>

                <h2> ¡Agenda una llamada!</h2>
                <p> Integer et arcu id nisl mollis lacinia. Sed accumsan ornare metus a tristique. Donec gravida odio
                    lorem, ac aliquet nibh sodales eu.</p>
                <fieldset>
                    <label for='name_client_pending'> Nombre</label>
                    <input id='name_client_pending' name='name_client_pending' placeholder='Maria Bravo' required
                           type='text'>
                    <label for='email_client_pending'> Correo</label>
                    <input class='email_client_pending' id='email_client_pending' name='email_client_pending'
                           placeholder='mariabravo@gmail.com' required
                           type='email'>
                    <label for='phone_client_pending'> Número telefónico </label>
                    <div class='tel-wrapper'>

                        <!--<select class='num-list' name='country-codes'>
                            <option data - countryCode='MX' selected value='52'> MX(+52)</option>
                            <optgroup label='Otros paises'>
                                <option data - countryCode='ES' value='34'> Spain(+34)</option>
                                <option data - countryCode='GB' value='44'> UK(+44)</option>
                                <option data - countryCode='US' value='1'> USA(+1)</option>
                            </optgroup>
                        </select>-->
                        <input class='phone_with_ddd <!--dependent-input-->' id='phone_client_pending'
                               name='phone_client_pending' placeholder='(55) 1234-5678'
                               required
                               type='tel'>
                    </div>
                </fieldset>
                <fieldset>
                    <legend><strong> ¿Cuándo te llamamos?</strong></legend>
                    <div class='form-group'>
                        <label class='control-label' for='dtp_input1'> Día</label>
                        <div class='input-group date form_date' data - date='' data - date - format='dd MM yyyy'
                             data - link - field='dtp_input1' data - link - format='yyyy-mm-dd'>
                            <input class='form-control' readonly size='16' type='text' value=''
                                   name='day_client_pending'>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-remove'></span></span>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span>
                        </div>
                        <input id='dtp_input1' type='hidden' value='' />
                    </div>
                    <div class='tel-wrapper'>
                        <div class='form-group'>
                            <label class='control-label' for='dtp_input2'> Desde</label>
                            <div class='input-group date form_time' data - date='' data - date - format='hh:ii'
                                 data - link - field='dtp_input2' data - link - format='hh:ii'>
                                <input class='form-control' readonly size='16' type='text' value=''
                                       name='from_client_pending'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-remove'></span></span>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-time'></span></span>
                            </div>
                            <input id='dtp_input2' type='hidden' value='' />
                        </div>
                        <span> —</span>
                        <div class='form-group'>
                            <label class='control-label' for='dtp_input3'> Hasta</label>
                            <div class='input-group date form_time' data - date='' data - date - format='hh:ii'
                                 data - link - field='dtp_input3' data - link - format='hh:ii'>
                                <input class='form-control' readonly size='16' type='text' value=''
                                       name='to_client_pending'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-remove'></span></span>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-time'></span></span>
                            </div>
                            <input id='dtp_input3' type='hidden' value='' />
                        </div>
                    </div>
                </fieldset>
                <p class='formbutton'>
                    <input class='button dark' type='submit' value='Agendar llamada'>
                </p>
            </form>";
}

?>
