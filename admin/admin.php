<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connection.php';
session_start();

if(!isset($_SESSION['user'])) {
    http_response_code(401);
    echo "Acceso no autorizado.";
    die();
}

function createProductListOptions() {
    $q = "select * except name_legal, id_client from clients order by id_client";
    $recordSet = execute($q);


	while ($row = mysqli_fetch_array($recordSet)) {
        $name_alias = $row['name_alias'];
        $giro = $row['giro'];
        $client_type = $row['client_type'];
        $tableHtml = "
	    <table class="expandable-table client wrapper">
	        <tbody>
	        <tr class="collapsed-view">
	            <td>
	                $name_alias <span class="tag">$client_type</span><br>
	                $giro
	            </td>
	            <td>Editar</td>
	            <td></td>
	        </tr>
	        <tr class="expanded-view">
	            <td colspan="3">
	                <div class="grid-1-1-2 expanded-view-content">
	                    <table class="contact-multiple-table hide-all-headers">
	                        <caption>Contactos</caption>
	                        <tbody>
	                        <tr>
	                            <th>Nombre</th>
	                            <td>Maria Bravo</td>
	                        </tr>
	                        <tr>
	                            <th>Título</th>
	                            <td>Administradora</td>
	                        </tr>
	                        <tr>
	                            <th>Correo</th>
	                            <td class="email">admin@capeltic.org</td>
	                        </tr>
	                        <tr>
	                            <th>Teléfono</th>
	                            <td class="tel">+52 55 1234 5678</td>
	                        </tr>
	                        </tbody>
	                    </table>
	                    <table class="address-multiple-table hide-all-headers">
	                        <caption>Direcciones</caption>
	
	                        <tbody>
	                        <tr>
	                            <th>Nombre del lugar</th>
	                            <td>Capeltic Santa Fe</td>
	                        </tr>
	                        <tr>
	                            <th>Calle y número</th>
	                            <td>Prolongacion Paseo de la Reforma 880</td>
	                        </tr>
	                        <tr>
	                            <th>Depto, piso, suite, etc.</th>
	                            <td>Edificio K-PB</td>
	                        </tr>
	                        <tr>
	                            <th>Ciudad y CP</th>
	                            <td>CDMX, 01219</td>
	                        </tr>
	                        <tr>
	                            <th>Estado y país</th>
	                            <td>Ciudad de México, México</td>
	                        </tr>
	                        <tr>
	                            <th>Teléfono</th>
	                            <td class="tel">+52 55 1234 5678</td>
	                        </tr>
	                    </table>
	                    <div class="notes-table">
	                        <label for="notes">Notas</label>
	                        <textarea id="notes"></textarea>
	                    </div>
	                </div>
	                <div class="grid-2-space-between">
	                    <div>Últimos pedidos</div>
	                    <div><a href="">Todos los pedidos</a></div>
	                </div>
	                <div class="grid-column last-orders-table">
	                    <div>
	                        <div>
	                            <div>Hoy - 03/03/19</div>
	                            <div>#236 »</div>
	                        </div>
	                        <table class="order-table">
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
	                                <td class="quantity">10</td>
	                                <td class="currency">180</td>
	                            </tr>
	                            <tr>
	                                <td>Gourmet</td>
	                                <td class="quantity">8</td>
	                                <td class="currency">220</td>
	                            </tr>
	                            <tr>
	                                <td>Especialidad</td>
	                                <td class="quantity">6</td>
	                                <td class="currency">250</td>
	                            </tr>
	                            </tbody>
	                            <tfoot>
	                            <tr>
	                                <th>Descuento del <span class="percentage">15</span></th>
	                                <td class="units">30</td>
	                                <td class="discount">759</td>
	                            </tr>
	                            <tr>
	                                <th>Total</th>
	                                <td class="units">30</td>
	                                <td class="currency">4320</td>
	                            </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                    <div>
	                        <div>
	                            <div>Hoy - 03/03/19</div>
	                            <div>#236 »</div>
	                        </div>
	                        <table class="order-table">
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
	                                <td class="quantity">10</td>
	                                <td class="currency">180</td>
	                            </tr>
	                            <tr>
	                                <td>Gourmet</td>
	                                <td class="quantity">8</td>
	                                <td class="currency">220</td>
	                            </tr>
	                            <tr>
	                                <td>Especialidad</td>
	                                <td class="quantity">6</td>
	                                <td class="currency">250</td>
	                            </tr>
	                            </tbody>
	                            <tfoot>
	                            <tr>
	                                <th>Descuento del <span class="percentage">15</span></th>
	                                <td class="units">30</td>
	                                <td class="discount">759</td>
	                            </tr>
	                            <tr>
	                                <th>Total</th>
	                                <td class="units">30</td>
	                                <td class="currency">4320</td>
	                            </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                    <div>
	                        <div>
	                            <div>Hoy - 03/03/19</div>
	                            <div>#236 »</div>
	                        </div>
	                        <table class="order-table">
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
	                                <td class="quantity">10</td>
	                                <td class="currency">180</td>
	                            </tr>
	                            <tr>
	                                <td>Gourmet</td>
	                                <td class="quantity">8</td>
	                                <td class="currency">220</td>
	                            </tr>
	                            <tr>
	                                <td>Especialidad</td>
	                                <td class="quantity">6</td>
	                                <td class="currency">250</td>
	                            </tr>
	                            </tbody>
	                            <tfoot>
	                            <tr>
	                                <th>Descuento del <span class="percentage">15</span></th>
	                                <td class="units">30</td>
	                                <td class="discount">759</td>
	                            </tr>
	                            <tr>
	                                <th>Total</th>
	                                <td class="units">30</td>
	                                <td class="currency">4320</td>
	                            </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                    <div>
	                        <div>
	                            <div>Hoy - 03/03/19</div>
	                            <div>#236 »</div>
	                        </div>
	                        <table class="order-table">
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
	                                <td class="quantity">10</td>
	                                <td class="currency">180</td>
	                            </tr>
	                            <tr>
	                                <td>Gourmet</td>
	                                <td class="quantity">8</td>
	                                <td class="currency">220</td>
	                            </tr>
	                            <tr>
	                                <td>Especialidad</td>
	                                <td class="quantity">6</td>
	                                <td class="currency">250</td>
	                            </tr>
	                            </tbody>
	                            <tfoot>
	                            <tr>
	                                <th>Descuento del <span class="percentage">15</span></th>
	                                <td class="units">30</td>
	                                <td class="discount">759</td>
	                            </tr>
	                            <tr>
	                                <th>Total</th>
	                                <td class="units">30</td>
	                                <td class="currency">4320</td>
	                            </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </td>
	        </tr>
	        </tbody>
	    </table>";
    }

    echo $tableHtml;
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Productos</h1>
    <h3>Administrador</h3>
    <a href='login.php?killsession=1'>Terminar Sesión</a>
    <br><br>
    <a href='create.php'>Registro de productos</a>
    <br><br>
    <?php createProductListOptions(); ?>
</body>
</html>