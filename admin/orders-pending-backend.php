
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

    <title>Pedidos: Pendientes</title>
</head>

<body class="main-grid pending-orders">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a class="cliente-disactive"href="clients.php" target="_self">Clientes</a></li>
       <!-- <li><a class="active bold pedidos-active" href="orders-pending-backend.php" target="_self">Pedidos</a></li>-->
        <li><a class="productos-disactive"href="products_coffee.php" target="_self">Productos</a></li>
        <li><a class="blog-disactive" href="blog.php" target="_self">Blog</a></li></ul>
    <ul class="lonely-ul">
        <li><a class="ayuda-disactive" href="user_manual.pdf" target="_black" download="">Manual de uso</a></li>
        <li><a class="cerrar-disactive"href='login.php?killsession=1'>Cerrar Sesión</a></li>
    </ul>
</nav>

<div class="big-margin padding-thing">

    <div class="global-toolbar">
        <h1>Pedidos</h1>
    </div>
    </div>

    <ul class="grid-tabs">
        <li class="tab3 pending-tab"><a class="active bold tab-active" href="orders-pending-backend.php" id="pending" target="_self">Pendiente <span
                class="tab-counter"></span></a></li>
        <li class="tab4"><a class="tab-disactive" href="orders-enroute-backend.php" id="enroute" target="_self">En Ruta <span class="tab-counter"></span></a>
        </li>
        <li class="tab5"><a class="tab-disactive" href="orders-delivered-backend.php" id="delivered" target="_self">Entregado <span
                class="tab-counter"></span></a></li>
    </ul>

    <div class="b-grey">
    <div class="grid-2-space-between give-me-gap">
        <div>
            <label for="search"></label>
            <input id="search" placeholder="Buscar" type="search">
        </div>
        <button class="button red kill-that-border">Agregar pedido</button>
    </div>

    <div class="wrapper pending-item margin-top-thing">
        <div class="padding-for-all-2">
        <div class="header">
            <h3>#236</h3>
            <p>Hoy - 26/02/19</p>
            <p class="client">Capeltic <a href="">»</a></p>
        </div>
        <div class="grid-2-1-1 give-me-gap pending-order-tables-thing">
            <table class="order-table">
                <caption class="kill-me">Orden</caption>
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
        </div>

        <div class="bottom-thing grid-end padding-for-all-2 give-me-gap">
            <label class="label-left" for="tracking-number">Número de rastreo</label>
            <input class="input-right" id="tracking-number" required type="text">
            <button class="button red limited-width-2 limited-height kill-that-border" type="submit">Enviar a <strong>En Ruta</strong></button>
        </div>
    </div>

</div>

</body>
</html>