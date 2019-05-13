<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';

if (isset($_GET['id_product'])) {
    $id_product = $_GET['id_product'];
    $weight_selected = $_GET['weight_selector'];

    $query = "select * from weight_price where id_product = $id_product";
    $recordSet = execute($query);

    if ($row = mysqli_fetch_array($recordSet)) {
        $weight1 = $row['weight1'];
        $weight2 = $row['weight2'];
        $weight3 = $row['weight3'];
        $price1 = $row['price1'];
        $price2 = $row['price2'];
        $price3 = $row['price3'];
    }

    if ($weight_selected == $weight1) {
        echo $price1;
    } elseif ($weight_selected == $weight2) {
        echo $price2;
    } elseif ($weight_selected == $weight3) {
        echo $price3;
    }
}