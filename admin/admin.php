<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'crud/connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

function createProductListOptions()
{
    $sql = "select name_alias, giro, client_type from clients";
    $rs = execute($sql);

    $clientes = array();
    $k = 0;
    while ($d = mysqli_fetch_array($rs)) {
        $clientes[$k] = array();
        $clientes[$k]["name_alias"] = $d["name_alias"];
        $clientes[$k]["giro"] = $d["giro"];
        $clientes[$k]["client_type"] = $d["client_type"];
        $k++;
    }

    for ($i = 0; $i < count($clientes); $i++) {
        echo "<strong>Cliente: </strong>" . $clientes[$i]["name_alias"] . "<br>";
        echo "<strong>Giro: </strong>" . $clientes[$i]["giro"] . "<br>";
        echo "<strong>Tipo Cliente: </strong>" . $clientes[$i]["client_type"] . "<br>";
        echo "<br>";
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Email</th><th>Telefono</th></tr>";
        $sql = "select clients.name_alias, contacts.* from clients inner join contacts on clients.id_client = contacts.id_client where clients.name_alias = '" . $clientes[$i]["name_alias"] . "'";
        $rs2 = execute($sql);
        while ($d2 = mysqli_fetch_array($rs2)) {
            echo "<tr>";
            echo "<td>" . $d2["name"] . "</td>";
            echo "<td>" . $d2["email"] . "</td>";
            echo "<td>", $d2["phone"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<hr size='1'>";
    }
}

?>

<!DOCTYPE html>
<html>
<body>
<h1>Productos</h1>
<h3>Administrador</h3>
<a href='login.php?killsession=1'>Terminar Sesión</a>
<br><br>
<a href='crud/create.php'>Registro de productos</a>
<br><br>
<?php createProductListOptions(); ?>
</body>
</html>