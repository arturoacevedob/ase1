<?php
ini_set('display_errorecordSet', 1);
error_reporting(E_ALL);

include '../admin/connection.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    header("Location: login.php");
    die();
}

function createPendingClientList()
{
    $query = "select * from clients_pending";
    $recordSet = execute($query);

    $clients_pending = array();
    $counter = 0;
    while ($row = mysqli_fetch_array($recordSet)) {
        $clients_pending[$counter] = array();
        $clients_pending[$counter]["name_client_pending"] = $row["name_client_pending"];
        $clients_pending[$counter]["email_client_pending"] = $row["email_client_pending"];
        $clients_pending[$counter]["phone_client_pending"] = $row["phone_client_pending"];
        $clients_pending[$counter]["day_client_pending"] = $row["day_client_pending"];
        $clients_pending[$counter]["from_client_pending"] = $row["from_client_pending"];
        $clients_pending[$counter]["to_client_pending"] = $row["to_client_pending"];
        $counter++;
    }

    for ($i = 0; $i < count($clients_pending); $i++) {

        echo "
        <table class='expandable-table wrapper'>
        <tbody>
        <tr class='collapsed-view'>
            <td><span>Nombre</span><br>" . $clients_pending[$i][name_client_pending] . "</td>
            <td><span>Correo</span><br>" . $clients_pending[$i][email_client_pending] . "</td>
            <td><span>Teléfono</span><br>" . $clients_pending[$i][phone_client_pending] . "</td>
            <td><span>Día</span><br>" . $clients_pending[$i][day_client_pending] . "</td>
            <td><span>Desde</span><br>" . $clients_pending[$i][from_client_pending] . "</td>
            <td><span>Hasta</span><br>" . $clients_pending[$i][to_client_pending] . "</td>
            <td><a href='crud_client/register_client.php?idclient=" . $clients[$i]["id_client"] . "'>Registrar</a><a href='crud_client/delete_client.php?idclient=" . $clients[$i]["id_client"] . "'>Eliminar</a></td>
            <td class='radius-right'></td>
        </tr>
        <div class='padding-for-all-2'>
        <tr class='expanded-view'>
                <td colspan='8'>
                    <div class='grid-1-1-1-1 expanded-view-content padding-for-all border-thing'>";

        $query2 = "select clients.name_alias, contacts.* from clients inner join contacts on clients.id_client = contacts.id_client where clients.name_alias = '" . $clients[$i]["name_alias"] . "'";
        $recordSet2 = execute($query2);
        while ($contact = mysqli_fetch_array($recordSet2)) {
            echo "

                        <table class='contact-multiple-table hide-all-headers'>
                            <caption>Contactos</caption>
                            <tbody>
                            <tr>
                                <th>Nombre</th>
                                <td class='bold'>" . $contact["name_contact"] . "</td>
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
                                <td class='bold'>" . $address["name_place"] . "</td>
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
                    <form class='notes-table' action='update_client.php' method='post' enctype='multipart/form-data'>
                        <label for='notes'>Notas</label>
                        <textarea id='notes' name='notes'></textarea>
                        <input type='submit' value='Guardar cambios'>
                    </form>
                </div>
                        <div class='grid-2-space-between padding-for-all'>
                            <div>Últimos pedidos</div>
                            <div><a href=''>Todos los pedidos >></a></div>
                        </div>
                        <div class='grid-column last-orders-table padding-for-all'>
                            <div>
                                <div>
                                    <div>Hoy - 03/03/19</div>
                                    <div>#236 »</div>
                                </div>
                                <table class='order-table'>
                                    <caption class='bold'>Pendiente</caption>
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
                                    <tr class='bold'>
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
                                    <caption class='bold'>Pendiente</caption>
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
                                    <tr class='bold'>
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
                                    <caption class='bold'>Pendiente</caption>
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
                                    <tr class='bold'>
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
                                    <caption class='bold'>Pendiente</caption>
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
                                    <tr class='bold'>
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

    <style>
        label, input {
            display: block;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <title>Clientes</title>
</head>

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a href="clients.php" target="_self">Clientes</a></li>
        <li><a href="orders-pending-backend.php" target="_self">Pedidos</a></li>
        <li><a href="products_coffee.php" target="_self">Productos</a></li>
        <li><a href="blog.php" target="_self">Blog</a></li>

    </ul>
    <ul>
        <li><a href='login.php?killsession=1'>Cerrar Sesión</a></li>
    </ul>
</nav>

<div class="padding-thing big-margin">

    <div class="global-toolbar">
        <h1>Clientes</h1>
    </div>

    <ul class="grid-tabs">
        <li><a class="active" href="clients-pending.php" id="clients-pending" target="_self">Pendientes</a></li>
        <li><a href="clients.php" id="clients" target="_self">Todos los clientes</a></li>
    </ul>

    <div class="grid-2-space-between give-me-gap">
        <div>
            <label class="kill" for="search"></label>
            <input id="search" placeholder="Buscar" type="search">
        </div>
        <a class="button red-outline" href='crud_client/create_client.php'>Agregar cliente</a>
    </div>

    <?php createPendingClientList(); ?>

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