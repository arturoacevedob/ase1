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

    <script src="../js/jquery.js"></script>
    <script src="js/moment.js" type="text/javascript"></script>
    <script src="js/daterangepicker.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>

    <title>Products</title>
</head>

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a class=" cliente-disactive"href="clients.php" target="_self">Clientes</a></li>
        <li><a class="active bold pedidos-active" href="orders-pending-backend.html" target="_self">Pedidos</a></li>
        <li><a class="productos-disactive"href="products-backend.html " target="_self">Productos</a></li>
        <li><a  href="blog.php" target="_self">Blog</a></li>

    </ul>
    <ul class="lonely-ul">
        <li><a href="" target="_self">Ayuda</a></li>
        <li><a href='login.php?killsession=1'>Cerrar Sesión</a></li>
    </ul>
</nav>

<div>

    <div class="global-toolbar">
        <h1>Pedidos</h1>
    </div>

    <ul class="grid-tabs">
        <li><a href="orders-pending-backend.html" id="pending" target="_self">Pendiente</a></li>
        <li><a href="orders-enroute-backend.html" id="enroute" target="_self">En Ruta</a></li>
        <li><a class="active" href="orders-delivered-backend.html" id="delivered" target="_self">Entregado</a></li>
    </ul>

    <div>
        <div>
            <label class="kill" for="search">Buscar</label>
            <input id="search" placeholder="Buscar" type="search">
        </div>
        <div class="grid-column">
            <div>
                <label for="client-selection">Seleccionar cliente</label>
                <select id="client-selection" name="client-selection"></select>
            </div>
            <div class="grid-column">
                <div id="reportrange">
                    <span></span>
                </div>
                <button>Exportar Excel<span class="save-icon"></span></button>
            </div>
        </div>
    </div>

    <table class="expandable-table">
        <thead>
        <tr>
            <th>Pedido</th>
            <th>Cliente</th>
            <th>Orden</th>
            <th>Dirección</th>
            <th>Fecha de entrega</th>
            <th>No. de rastreo</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr class="collapsed-view">
            <td>#236</td>
            <td>Capeltic <span>»</span></td>
            <td>30u, 24KG, $4320 <span>»</span></td>
            <td>Zedec Santa Fe</td>
            <td>26/02/18</td>
            <td>0823783459209</td>
            <td>• • •</td>
            <td></td>
        </tr>
        <tr class="expanded-view">
            <td colspan="8">
                <div class="grid-2-1-1 expanded-view-content">
                    <table class="order-table">
                        <caption>Orden</caption>
                        <thead>
                        <tr>
                            <th>Artículo</th>
                            <th>Molido</th>
                            <th>Cantidad</th>
                            <th>Peso</th>
                            <th>Precio</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Orgánico</td>
                            <td>Espresso</td>
                            <td> class="quantity" 10</td>
                            <td class="weight">1/4</td>
                            <td class="currency">180</td>
                        </tr>
                        <tr>
                            <td>Gourmet</td>
                            <td>Americano</td>
                            <td class="quantity">8</td>
                            <td class="weight">1/2</td>
                            <td class="currency">220</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Espresso</td>
                            <td class="quantity">6</td>
                            <td class="weight">1/4</td>
                            <td class="currency">250</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Americano</td>
                            <td class="quantity">6</td>
                            <td class="weight">1</td>
                            <td class="currency">250</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Descuento del <span class="percentage">15</span></th>
                            <td colspan="3"></td>
                            <td class="discount">759</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td></td>
                            <td class="units">30</td>
                            <td class="weight">24</td>
                            <td class="currency">4320</td>
                        </tr>
                        </tfoot>
                    </table>
                    <table>
                        <caption>Dirección</caption>
                        <thead>
                        <tr>
                            <th>Capeltic Santa Fe</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Joaquín Gallo 258</td>
                        </tr>
                        <tr>
                            <td>CDMX, 01219</td>
                        </tr>
                        <tr>
                            <td>Ciudad de México, México</td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <caption>Fechas</caption>
                        <thead>
                        <tr>
                            <th>Estatus</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Pendiente</td>
                            <td>26/02/19</td>
                        </tr>
                        <tr>
                            <td>En Ruta</td>
                            <td>26/02/19</td>
                        </tr>
                        <tr>
                            <td>Entregado</td>
                            <td>26/02/19</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        </tbody>
    </table>

</div>

<script>
    $(function () {
        $(".expandable-table tr.collapsed-view").on("click", function () {
            $(this).toggleClass("open").next(".expanded-view").toggleClass("open");
        });
    });

    $(function () {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Hoy': [moment(), moment()],
                'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Últimos 7 días': [moment().subtract(6, 'days'), moment()],
                'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
                'Este mes': [moment().startOf('month'), moment().endOf('month')],
                'Último mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });
</script>

</body>
</html>