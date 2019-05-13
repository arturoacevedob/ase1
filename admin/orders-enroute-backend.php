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

    <title>Products</title>
</head>

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a href="clients.php" target="_self">Clientes</a></li>
        <li><a class="active bold" href="orders-pending-backend.html" target="_self">Pedidos</a></li>
        <li><a href="products-backend.html" target="_self">Productos</a></li>
        <li><a href="blog.php" target="_self">Blog</a></li>

    </ul>
</nav>

<div>

    <div class="global-toolbar">
        <h1>Pedidos</h1>
    </div>

    <ul class="grid-tabs">
        <li><a href="orders-pending-backend.html" id="pending" target="_self">Pendiente</a></li>
        <li><a class="active" href="orders-enroute-backend.html" id="enroute" target="_self">En Ruta</a></li>
        <li><a href="orders-delivered-backend.html" id="delivered" target="_self">Entregado</a></li>
    </ul>

    <div>
        <label for="search"></label>
        <input id="search" placeholder="Buscar" type="search">
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
        <tbody class="wrapper">
        <tr class="collapsed-view">
            <td>#236</td>
            <td>Capeltic <span>»</span></td>
            <td>30u, 24KG, $4320 <span>»</span></td>
            <td>Zedec Santa Fe</td>
            <td>26/02/18</td>
            <td>0823783459209</td>
            <td>
                <button>Enviar a <strong>Entregado</strong></button>
            </td>
            <td>• • •</td>
            <td></td>
        </tr>
        <tr class="expanded-view">
            <td colspan="9">
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
                            <td>10 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">180</td>
                        </tr>
                        <tr>
                            <td>Gourmet</td>
                            <td>Americano</td>
                            <td>8 x</td>
                            <td class="weight">1/2</td>
                            <td class="currency">220</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Espresso</td>
                            <td>6 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">250</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Americano</td>
                            <td>6 x</td>
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
        <tbody>
        <tr class="collapsed-view">
            <td>#236</td>
            <td>Capeltic <span>»</span></td>
            <td>30u, 24KG, $4320 <span>»</span></td>
            <td>Zedec Santa Fe</td>
            <td>26/02/18</td>
            <td>0823783459209</td>
            <td>
                <button>Enviar a <strong>Entregado</strong></button>
            </td>
            <td>• • •</td>
            <td></td>
        </tr>
        <tr class="expanded-view">
            <td colspan="9">
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
                            <td>10 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">180</td>
                        </tr>
                        <tr>
                            <td>Gourmet</td>
                            <td>Americano</td>
                            <td>8 x</td>
                            <td class="weight">1/2</td>
                            <td class="currency">220</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Espresso</td>
                            <td>6 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">250</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Americano</td>
                            <td>6 x</td>
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
        <tbody>
        <tr class="collapsed-view">
            <td>#236</td>
            <td>Capeltic <span>»</span></td>
            <td>30u, 24KG, $4320 <span>»</span></td>
            <td>Zedec Santa Fe</td>
            <td>26/02/18</td>
            <td>0823783459209</td>
            <td>
                <button>Enviar a <strong>Entregado</strong></button>
            </td>
            <td>• • •</td>
            <td></td>
        </tr>
        <tr class="expanded-view">
            <td colspan="9">
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
                            <td>10 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">180</td>
                        </tr>
                        <tr>
                            <td>Gourmet</td>
                            <td>Americano</td>
                            <td>8 x</td>
                            <td class="weight">1/2</td>
                            <td class="currency">220</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Espresso</td>
                            <td>6 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">250</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Americano</td>
                            <td>6 x</td>
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
        <tbody>
        <tr class="collapsed-view">
            <td>#236</td>
            <td>Capeltic <span>»</span></td>
            <td>30u, 24KG, $4320 <span>»</span></td>
            <td>Zedec Santa Fe</td>
            <td>26/02/18</td>
            <td>0823783459209</td>
            <td>
                <button>Enviar a <strong>Entregado</strong></button>
            </td>
            <td>• • •</td>
            <td></td>
        </tr>
        <tr class="expanded-view">
            <td colspan="9">
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
                            <td>10 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">180</td>
                        </tr>
                        <tr>
                            <td>Gourmet</td>
                            <td>Americano</td>
                            <td>8 x</td>
                            <td class="weight">1/2</td>
                            <td class="currency">220</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Espresso</td>
                            <td>6 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">250</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Americano</td>
                            <td>6 x</td>
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
        <tbody>
        <tr class="collapsed-view">
            <td>#236</td>
            <td>Capeltic <span>»</span></td>
            <td>30u, 24KG, $4320 <span>»</span></td>
            <td>Zedec Santa Fe</td>
            <td>26/02/18</td>
            <td>0823783459209</td>
            <td>
                <button>Enviar a <strong>Entregado</strong></button>
            </td>
            <td>• • •</td>
            <td></td>
        </tr>
        <tr class="expanded-view">
            <td colspan="9">
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
                            <td>10 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">180</td>
                        </tr>
                        <tr>
                            <td>Gourmet</td>
                            <td>Americano</td>
                            <td>8 x</td>
                            <td class="weight">1/2</td>
                            <td class="currency">220</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Espresso</td>
                            <td>6 x</td>
                            <td class="weight">1/4</td>
                            <td class="currency">250</td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>Americano</td>
                            <td>6 x</td>
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
</script>

</body>
</html>