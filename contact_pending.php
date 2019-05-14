<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';
session_start();

if (isset($_POST['insert'])) {
    $name_client_pending = $_POST['name_client_pending'];
    $email_client_pending = $_POST['email_client_pending'];
    $phone_client_pending = $_POST['phone_client_pending'];
    $day_client_pending = $_POST['day_client_pending'];
    $from_client_pending = $_POST['from_client_pending'];
    $to_client_pending = $_POST['to_client_pending'];

    $query = "insert into clients_pending (name_client_pending, email_client_pending, phone_client_pending, day_client_pending, from_client_pending, to_client_pending) values ('$name_client_pending', '$email_client_pending', '$phone_client_pending', '$day_client_pending', '$from_client_pending', '$to_client_pending')";
    execute($query);

    header("Location: index.php");
}

?>
