<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../connection.php';
session_start();

if(!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

if (isset($_GET['idclient'])) {
    $id_client = $_GET['idclient'];
    $q = "delete from clients where id_client = " . $id_client . "";
    execute($q);
    $q = "delete from contacts where id_client = " . $id_client . "";
    execute($q);
    $q = "delete from addresses where id_client = " . $id_client . "";
    execute($q);
    $q = "delete from billing where id_client = " . $id_client . "";
    execute($q);
    header("Location: ../clients.php");
    die();
}
?>
