<?php
ini_set('display_errorecordSet', 1);
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
    $query = "select * from clients";
    $recordSet = execute($query);

    $clients = array();
    $counter = 0;
    while ($d = mysqli_fetch_array($recordSet)) {
        $clients[$counter] = array();
        $clients[$counter]["id_client"] = $d["id_client"];
        $clients[$counter]["name_alias"] = $d["name_alias"];
        $clients[$counter]["giro"] = $d["giro"];
        $clients[$counter]["client_type"] = $d["client_type"];
        $counter++;
    }

    for ($i = 0; $i < count($clients); $i++) {

        echo "
        <table class='expandable-table client wrapper'>
        <tbody>
        <tr class='collapsed-view'>
            <td class='padding-for-all radius-left'>" .
            $clients[$i]["name_alias"] . "<span class='tag'>" . $clients[$i]["client_type"] . "</span><br>" .
            $clients[$i]["giro"] .
            "</td>
            <td><a href='crud/update.php?idclient=" . $clients[$i]["id_client"] . "'>Editar</a><a href='crud/delete.php'>Eliminar</a></td>
            <td class='radius-right'></td>
        </tr>
        <div class='padding-for-all-2'>
        <tr class='expanded-view'>
                <td colspan='3'>
                    <div class='grid-1-1-1-1 expanded-view-content padding-for-all'>";

        $query2 = "select clients.name_alias, contacts.* from clients inner join contacts on clients.id_client = contacts.id_client where clients.name_alias = '" . $clients[$i]["name_alias"] . "'";
        $recordSet2 = execute($query2);
        while ($contact = mysqli_fetch_array($recordSet2)) {
            echo "

                        <table class='contact-multiple-table hide-all-headers'>
                            <caption>Contactos</caption>
                            <tbody>
                            <tr>
                                <th>Nombre</th>
                                <td>" . $contact["name_contact"] . "</td>
                            </tr>
                            <tr>
                                <th>Título</th>
                                <td>Administradora</td>
                            </tr>
                            <tr>
                                <th>Correo</th>
                                <td class='email'>" . $contact["email"] . "</td>
                            </tr>
                            <tr>
                                <th>Teléfono</th>
                                <td class='tel'>" . $contact["phone_contact"] . "</td>
                            </tr>
                            </tbody>
                        </table>";
        }

        $query3 = "select clients.name_alias, addresses.* from clients inner join addresses on clients.id_client = addresses.id_client where clients.name_alias = '" . $clients[$i]["name_alias"] . "'";
        $recordSet3 = execute($query3);
        while ($address = mysqli_fetch_array($recordSet3)) {
            echo "
                        
                        <table class='address-multiple-table hide-all-headers'>
                            <caption>Direcciones</caption>
        
                            <tbody>
                            <tr>
                                <th>Nombre del lugar</th>
                                <td>" . $address["name_place"] . "</td>
                            </tr>
                            <tr>
                                <th>Calle y número</th>
                                <td>" . $address["address1"] . "</td>
                            </tr>
                            <tr>
                                <th>Depto, piso, suite, etc.</th>
                                <td>" . $address["address2"] . "</td>
                            </tr>
                            <tr>
                                <th>Ciudad y CP</th>
                                <td>" . $address["city"] . ", " . $address["cp"] . "</td>
                            </tr>
                            <tr>
                                <th>Estado y país</th>
                                <td>" . $address["state"] . ", " . $address["country"] . "</td>
                            </tr>
                            <tr>
                                <th>Teléfono</th>
                                <td class='tel'>" . $address["phone_address"] . "</td>
                            </tr>
                        </table>";
        }

        $query4 = "select clients.name_alias, billing.* from clients inner join billing on clients.id_client = billing.id_client where clients.name_alias = '" . $clients[$i]["name_alias"] . "'";
        $recordSet4 = execute($query4);
        while ($billing = mysqli_fetch_array($recordSet4)) {
            echo "
                        
                        <table class='address-multiple-table hide-all-headers'>
                            <caption>Facturación</caption>
        
                            <tbody>
                            <tr>
                                <th>Nómina o razón social</th>
                                <td>" . $billing["payroll"] . "</td>
                            </tr>
                            <tr>
                                <th>Dirección fiscal</th>
                                <td>" . $billing["fiscal_address"] . "</td>
                            </tr>
                            <tr>
                                <th>RFC</th>
                                <td>" . $billing["rfc"] . "</td>
                            </tr>
                            <tr>
                                <th>Método de pago</th>
                                <td>" . $billing["payment_method"] . "</td>
                            </tr>
                            <tr>
                                <th>Forma y uso de pago</th>
                                <td>" . $billing["payment_form"] . ", " . $billing["payment_use"] . "</td>
                            </tr>
                        </table>";
        }

        echo "
                    <form class='notes-table' action='update.php' method='post' enctype='multipart/form-data'>
                        <label for='notes'>Notas</label>
                        <textarea id='notes' name='notes'></textarea>
                        <input type='submit' value='Guardar cambios'>
                    </form>
                </div>
                        <div class='grid-2-space-between padding-for-all'>
                            <div>Últimos pedidos</div>
                            <div><a href=''>Todos los pedidos</a></div>
                        </div>
                        <div class='grid-column last-orders-table padding-for-all'>
                            <div>
                                <div>
                                    <div>Hoy - 03/03/19</div>
                                    <div>#236 »</div>
                                </div>
                                <table class='order-table'>
                                    <caption>Pendiente</caption>
                                    <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Orgánico</td>
                                        <td class='quantity'>10</td>
                                        <td class='currency'>180</td>
                                    </tr>
                                    <tr>
                                        <td>Gourmet</td>
                                        <td class='quantity'>8</td>
                                        <td class='currency'>220</td>
                                    </tr>
                                    <tr>
                                        <td>Especialidad</td>
                                        <td class='quantity'>6</td>
                                        <td class='currency'>250</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Descuento del <span class='percentage'>15</span></th>
                                        <td class='units'>30</td>
                                        <td class='discount'>759</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td class='units'>30</td>
                                        <td class='currency'>4320</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div>
                                <div>
                                    <div>Hoy - 03/03/19</div>
                                    <div>#236 »</div>
                                </div>
                                <table class='order-table'>
                                    <caption>Pendiente</caption>
                                    <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Orgánico</td>
                                        <td class='quantity'>10</td>
                                        <td class='currency'>180</td>
                                    </tr>
                                    <tr>
                                        <td>Gourmet</td>
                                        <td class='quantity'>8</td>
                                        <td class='currency'>220</td>
                                    </tr>
                                    <tr>
                                        <td>Especialidad</td>
                                        <td class='quantity'>6</td>
                                        <td class='currency'>250</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Descuento del <span class='percentage'>15</span></th>
                                        <td class='units'>30</td>
                                        <td class='discount'>759</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td class='units'>30</td>
                                        <td class='currency'>4320</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div>
                                <div>
                                    <div>Hoy - 03/03/19</div>
                                    <div>#236 »</div>
                                </div>
                                <table class='order-table'>
                                    <caption>Pendiente</caption>
                                    <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Orgánico</td>
                                        <td class='quantity'>10</td>
                                        <td class='currency'>180</td>
                                    </tr>
                                    <tr>
                                        <td>Gourmet</td>
                                        <td class='quantity'>8</td>
                                        <td class='currency'>220</td>
                                    </tr>
                                    <tr>
                                        <td>Especialidad</td>
                                        <td class='quantity'>6</td>
                                        <td class='currency'>250</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Descuento del <span class='percentage'>15</span></th>
                                        <td class='units'>30</td>
                                        <td class='discount'>759</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td class='units'>30</td>
                                        <td class='currency'>4320</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div>
                                <div>
                                    <div>Hoy - 03/03/19</div>
                                    <div>#236 »</div>
                                </div>
                                <table class='order-table'>
                                    <caption>Pendiente</caption>
                                    <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Orgánico</td>
                                        <td class='quantity'>10</td>
                                        <td class='currency'>180</td>
                                    </tr>
                                    <tr>
                                        <td>Gourmet</td>
                                        <td class='quantity'>8</td>
                                        <td class='currency'>220</td>
                                    </tr>
                                    <tr>
                                        <td>Especialidad</td>
                                        <td class='quantity'>6</td>
                                        <td class='currency'>250</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Descuento del <span class='percentage'>15</span></th>
                                        <td class='units'>30</td>
                                        <td class='discount'>759</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td class='units'>30</td>
                                        <td class='currency'>4320</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
                </div>
                </tbody>
            </table>";
    }
}

?>

<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Arturo Acevedo Bravo" name="author">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Scripts de compatibilidad -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!-- Escala de viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Link a CSS -->
    <link href="main-backend.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <title>Clientes</title>
</head>

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a class="active" href="clients.php" target="_self">Clientes</a></li>
        <li><a href="orders-pending-backend.php" target="_self">Pedidos</a></li>
        <li><a href="products-coffee.php" target="_self">Productos</a></li>
</ul>
<ul>
        <li><a href='login.php?killsession=1'>Cerrar Sesión</a></li>
    </ul>
</nav>

<div class="padding-thing big-margin">

    <div class="global-toolbar grid-2-space-between">
        <h1>Clientes</h1>
        <div class="grid-column">
            <div>
                <label class="kill" for="search"></label>
                <input id="search" placeholder="Buscar" type="search">
            </div>
            <a href='crud/create.php'>Agregar cliente</a>
        </div>
    </div>

    <?php createProductListOptions(); ?>

</div>

<script>
    $(function () {
        $(".expandable-table tr.collapsed-view").on("click", function () {
            $(this).toggleClass("open").next(".expanded-view").toggleClass("open");
        });
        $(".expandable-table.client.wrapper").on("click", function () {
            $(this).toggleClass("open");
        });
    });
</script>

</body>
</html>