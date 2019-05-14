<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

if (isset($_GET['idclient'])) {
    $id_client = $_GET['idclient'];
    $q = "delete from clients_pending where id_client_pending = " . $id_client . "";
    execute($q);

    header("Location: ../clients-pending.php");
    die();
}
?>