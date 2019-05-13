<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';

if (isset($_GET['id_product'])) {
    $id_product = $_GET['id_product'];
    $peso = $_GET['peso-selector'];

    $query = "select * from weight_precio where ";
}