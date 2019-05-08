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

<body class="main-grid">

<nav>
    <h2 style="display: none">Menú</h2>
    <div><img alt="Logo de Bats'il Maya" src="../images/logos/batsil_maya_logo.svg"></div>
    <ul>
        <li><a class="active" href="clients.php" target="_self">Clientes</a></li>
        <li><a href="orders-pending-backend.php" target="_self">Pedidos</a></li>
        <li><a href="products-coffee-backend.php" target="_self">Productos</a></li>
        <li><a href='login.php?killsession=1'>Terminar Sesión</a></li>
        <li><a href='crud_productos/create.php'>Registro de productos</a></li>
    </ul>
</nav>

<div>

    <div class="global-toolbar">
        <h1>Pedidos</h1>
    </div>

    <ul class="grid-tabs">
        <li><a class="active" href="orders-pending-backend.html" id="pending" target="_self">Pendiente <span
                class="tab-counter">#</span></a></li>
        <li><a href="orders-enroute-backend.html" id="enroute" target="_self">En Ruta <span class="tab-counter">#</span></a>
        </li>
        <li><a href="orders-delivered-backend.html" id="delivered" target="_self">Entregado <span
                class="tab-counter">#</span></a></li>
    </ul>

    <div class="grid-2-space-between">
        <div>
            <label for="search"></label>
            <input id="search" placeholder="Buscar" type="search">
        </div>
        <button>Agregar pedido</button>
    </div>

    <div class="wrapper pending-item">
        <div class="header">
            <h3>#236</h3>
            <p>Hoy - 26/02/19</p>
            <p class="client">Capeltic <a href="">»</a></p>
        </div>
        <div class="grid-2-1-1">
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
        <div class="grid-end">
            <label class="label-left" for="tracking-number">Número de rastreo</label>
            <input class="input-right" id="tracking-number" required type="text">
            <button type="submit">Enviar a <strong>En Ruta</strong></button>
        </div>
    </div>

</div>

</body>
</html>