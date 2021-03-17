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

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = "delete from blog where id = " . $id . "";
    execute($q);
    header("Location: ../blog.php");
    die();
}
?>
