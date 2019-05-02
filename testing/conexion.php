<?php
global $conexion;

function conectar()
{
    global $conexion;
    $servidor = "localhost";
    $un = "root";
    $pw = "root";
    $db = "pruebaCapeltic";

    $conexion = mysqli_connect($servidor, $un, $pw, $db) or die("no se puede conectar");
}

function desconectar()
{
    global $conexion;
    mysqli_close($conexion);
}

function ejecutar($sql)
{
    global $conexion;
    conectar();
    $rs = mysqli_query($conexion, $sql) or die("error en el query<br>" . $sql);
    desconectar();
    return $rs;
}

?>