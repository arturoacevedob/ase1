<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';
session_start();

if(!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

if(isset($_GET['idclients'])) {
    $id_clients = $_GET['idclients'];
    $q = "delete from clients where id_client = $id_client";
    $recordSet = execute($q);
    header("Location: clients.php");
    die();
}
?>
