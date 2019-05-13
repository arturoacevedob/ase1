<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include 'header.php';
?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Conocé las características de nuestro café en todas sus variedas, tuestes, y molidos"
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, molido, tueste, cafetal, taza, variedades"
          name="keywords">
    <!-- Scripts de compatibilidad -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!-- Escala de viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Link a CSS -->
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datetimepicker.css" rel="stylesheet">
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title>Nuestro café</title>
</head>
<body>
<div id="nuestrocafe">
    <div>
        <header>
            <div class="grid-header container">
                <h1>Bats'il Maya: Nuestro café</h1>
                <div class="nav-wrapper desktop">
                    <a class="logo" href="index.php" target="_self">
                        <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
                    </a>
                    <nav id="menu-desktop">
                        <h2>Menú</h2>
                        <ul class="menu-desktop-content">
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                            <li><a class="active" href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                            <li><a href="proceso.php" target="_self">Proceso</a></li>
                            <li><a href="products.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                        </ul>
                    </nav>
                        <?php
                        renderHeader()
                        ?>
                </div>

                <div class="nav-wrapper mobile">
                    <a class="logo" href="index.php" target="_self">
                        <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
                    </a>
                    <nav id="menu-mobile">
                        <input id="menu-mobile-toggle" type="checkbox">
                        <label for="menu-mobile-toggle"><span id="menu-icon"></span></label>
                        <div id="overlay"></div>
                        <ul class="menu-mobile-content light-bg">
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                            <li><a class="active" href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                            <li><a href="proceso.php" target="_self">Proceso</a></li>
                            <li><a href="products.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                            <?php
                            renderHeader()
                            ?>
                        </ul>
                    </nav>
                </div>
                <h2 class="h2-header">Desde el cafetal a la taza</h2>
            </div>
        </header>
    </div>
    <div>
        <article class="grid-2-text-photo">
            <div class="grid-2-left-text container">
                <div class="wrapper-text">
                    <h2>Ubicación</h2><br>
                    <p class="p-big">Nuestra región, la Selva Norte de Chiapas, por su localización geográfica, tiene las
                        condiciones óptimas
                        para el cultivo de café de alta calidad.</p> <br>
                    <p>Todo nuestro café es cultivado bajo prácticas agroecológicas y contamos con café orgánico
                        certificado.</p> <br>
                    <p>Nuestro café proviene de pequeñas parcelas pertenecientes a las 344 familias tseltales que
                        conforman
                        a la cooperativa Ts’umbal Xitalha’.</p>
                </div>
            </div>
            <div class="grid-2-right-image order-2" id="image-ubicacion"></div>
        </article>
    </div>
    <section class="dark-bg condiciones light">
        <div class="container center-text">
            <h2 class="light">Tenemos las condiciones óptimas para el cultivo de café de alta calidad</h2>
            <div class="grid-conditions">
                <article>
                    <div class="altura"></div>
                    <h3>Altura: 900 - 1400 msnm</h3>
                </article>
                <article>
                    <div class="temperatura"></div>
                    <h3>Temperatura</h3>
                </article>
                <article>
                    <div class="suelo"></div>
                    <h3>Suelo con abundante materia orgánica.</h3>
                </article>
                <article>
                    <div class="variedad"></div>
                    <h3>Gran variedad de árboles de sombra.</h3>
                </article>
            </div>
        </div>
    </section>
    <section class="grid-2-text-photo taza-cafe kill-padding-bottom">
        <div class="grid-2-right-text container ">
            <div class="wrapper-text">
                <h2 class="taza-h2">​Características en taza</h2><br>
                <p class="p-big">Quienes lo disfrutan encuentran un balance propio de los cafés de altura caracterizado por un delicado y fino sabor, cuerpo abundante y cremoso, y acidez cítrica.</p><br>
                <p>Sus notas son florales, acarameladas y achocolatadas.</p><br>
                <p>En Yomol A’tel, cuidamos cada uno de los trabajos y pasos que sigue nuestro café, desde el cafetal a
                    la taza.</p>
            </div>
        </div>
        <div class="grid-2-left-image" id="caracteristicas-taza">
        </div>
    </section>
    <section class="more container">
        <h2>Variedades</h2>
        <p class="padding-text-center p-big padding-top-bottom">Trabajamos con café 100% arábigo con variedades typica, borbón y oro azteca.</p>
        <div class="gridthree2">
            <article>
                <h3 class="h3-small">Typica</h3>
                <p>Uno de los cafés más importantes cultural y genéticamente en el mundo, con alta calidad en
                    Centroamérica.</p>
            </article>
            <article>
                <h3 class="h3-small">Borbón</h3>
                <p>Uno de los cafés más importantes cultural y genéticamente en el mundo, conocidos por su excelente
                    calidad de la bebida en las mayores altitudes.</p>
            </article>
            <article>
                <h3 class="h3-small">Oro Azteca</h3>
                <p>Adaptada para las zonas cálidas y suelos ácidos. Variedad de alto producción.</p>
            </article>
        </div>
    </section>
    <div class="light-bg">
        <section class="more container">
            <h2 class="padding-bottom-25">Mezclas de tuestes</h2>
            <div class="gridthree2">
                <article class="grid-image-first">
                    <h3 class="h3-small">Claro</h3>
                    <figure class="circle image-top-first-round"><img alt="Tueste Claro del café"
                                                                      src="images/nuestro_cafe/tueste_claro.jpg">
                    </figure>
                    <p>Los tuestes claros muestran los defectos o cualidades del grano, realza acidez y sabor en el
                        grano, la bebida es ligera de cuerpo y es ideal para la preparación de mezclas.</p>
                </article>
                <article class="grid-image-first">
                    <h3 class="h3-small">Medio</h3>
                    <figure class="circle image-top-first-round"><img alt="Tueste medio del café"
                                                                      src="images/nuestro_cafe/tueste_medio.jpg">
                    </figure>
                    <p>Se tuesta un poco más que el anterior.</p>
                </article>
                <article class="grid-image-first">
                    <h3 class="h3-small">Oscuro</h3>
                    <figure class="circle image-top-first-round"><img alt="Tueste oscuro del café"
                                                                      src="images/nuestro_cafe/tueste_oscuro.jpg">
                    </figure>
                    <p>La superficie de los granos se contempla muy brillosa por el aceite que desprende y la bebida
                        es
                        bastante fuerte y seca la sensación al paladar.</p>
                </article>
            </div>
        </section>
    </div>
    <section class="container center-text">
        <h2>Molidos</h2>
        <p class="p-big padding-text-center padding-top-bottom">El molido lo efectuamos al gusto del cliente o de acuerdo al tipo de cafetera que utilice.</p>
        <p class="padding-text-center padding-bottom-25">Contamos con dos molinos con una capacidad de 3 kg. por minuto, con 9 niveles de molido.</p>
        <div class="gridthree2">
           
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Medio</h3>
                <figure class="image-top-first-round"><img alt="Molido Medio Americano"
                                                           src="images/molidos/americano.svg">
                </figure>
                <p>Americano y cafeteras con filtro metálico</p>
            </article>
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Fino</h3>
                <figure class="image-top-first-round"><img alt="Molido Fino Espresso" src="images/molidos/espresso.svg">
                </figure>
                <p>Espresso y cafeteras con filtro de trapo o de papel</p>
            </article>
            <article class="grid-image-first molidos">
                <h3 class="h3-small">Personalizado</h3>
                <figure class="image-top-first-round"><img alt="Molido Extrafino Turco" src="images/molidos/fino-turco.svg">
                </figure>
                <p>Elige un molido de acuerdo a tus necesidades</p>
            </article>
        </div>
    </section>
    <aside>
        <div class="extra-articles">
            <article class="bnosotros">
                <h3 class="light botones-h3">Nosotros</h3>
                <p class="botones-p">Somos la planta transformadora de café</p>
                <a class="button red" href="nosotros.php" target="_self">Leer más »</a>
            </article>
            <article class="bproductos">
                <h3 class="light botones-h3">Productos</h3>
                <p class="botones-p">Café Tseltal, miel orgánica y jabones artesanales</p>
                <a class="button red" href="products.php" target="_self">Leer más »</a>
            </article>
        </div>
    </aside>
    <div class="green-bg">
        <section class="llamada container light">
            <div class="join">
                <form>
                    <h2>¡Agenda una llamada!</h2>
                    <p>Integer et arcu id nisl mollis lacinia. Sed accumsan ornare metus a tristique. Donec gravida odio
                        lorem, ac aliquet nibh sodales eu.</p>
                    <fieldset>
                        <label for="name">Nombre</label>
                        <input id="name" name="name" placeholder="Maria Bravo" required type="text">
                        <label for="email">Correo</label>
                        <input class="email" id="email" name="email" placeholder="mariabravo@gmail.com" required
                               type="email">
                        <label for="tel">Número telefónico</label>
                        <div class="tel-wrapper">

                            <select class="num-list" name="country-codes">
                                <option data-countryCode="MX" selected value="52">MX (+52)</option>
                                <optgroup label="Otros paises">
                                    <option data-countryCode="DZ" value="213">DZ (+213)</option>
                                    <option data-countryCode="AD" value="376">AD ( +376)</option>
                                    <option data-countryCode="AO" value="244">AO (+244)</option>
                                    <option data-countryCode="AI" value="1264">AI (+1264)</option>
                                    <option data-countryCode="AG" value="1268">AG (+1268)</option>
                                    <option data-countryCode="AR" value="54">AR (+54)</option>
                                    <option data-countryCode="AM" value="374">AM (+374)</option>
                                    <option data-countryCode="AW" value="297">AW (+297)</option>
                                    <option data-countryCode="AU" value="61">AU (+61)</option>
                                    <option data-countryCode="AT" value="43">AT (+43)</option>
                                    <option data-countryCode="AZ" value="994">AZ (+994)</option>
                                    <option data-countryCode="BS" value="1242">BS (+1242)</option>
                                    <option data-countryCode="BH" value="973">BH (+973)</option>
                                    <option data-countryCode="BD" value="880">BD (+880)</option>
                                    <!--
                                                                    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                    <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                    <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                    <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                    <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                    <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                    <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                    <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                    <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                    <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                    <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                    <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                    <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                    <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                    <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                    <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                    <option data-countryCode="CN" value="86">China (+86)</option>
                                                                    <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                    <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                    <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                    <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                    <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                    <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                    <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                    <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                    <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                    <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                    <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                    <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                    <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                    <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                    <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                    <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                    <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                    <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                    <option data-countryCode="FR" value="33">France (+33)</option>
                                                                    <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                    <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                    <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                    <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                    <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                    <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                    <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                    <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                    <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                    <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                    <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                    <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                    <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                    <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                    <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                    <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                    <option data-countryCode="IN" value="91">India (+91)</option>
                                                                    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                    <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                    <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                    <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                    <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                    <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                    <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                    <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                    <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                    <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                    <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                    <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                    <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                    <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                    <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                    <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                    <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                    <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                    <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                    <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                    <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                    <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                    <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                    &lt;!&ndash;<option data-countryCode="MX" value="52">MX (+52)</option>&ndash;&gt;
                                                                    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                    <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                    <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                    <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                    <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                    <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                    <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                    <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                    <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                    <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                    <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                    <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                    <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                    <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                    <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                    <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                    <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                    <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                    <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                    <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                    <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                    <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                    <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                    <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                    <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                    <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                    <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                    <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                    <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                    <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                    <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                    <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                    <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                    <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                    <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                    <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                    <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                    <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                    <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                    <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                    <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                    <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                    <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                    <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                    <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                    <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                    <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                    <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                    <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                    <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                    <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                    <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                    <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                    <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                    <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                    <option data-countryCode="GB" value="44">UK (+44)</option>
                                                                    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                    <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                    <option data-countryCode="US" value="1">USA (+1)</option>
                                                                    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                    <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                    <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                    <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                    <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                    <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                    <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                    <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                    -->
                                </optgroup>
                            </select>
                            <input class="phone_with_ddd dependent-input" id="tel" name="tel" placeholder="(55) 1234-5678" required
                                   type="tel">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><strong>¿Cuándo te llamamos?</strong></legend>
                        <div class="form-group">
                            <label class="control-label" for="dtp_input1">Día</label>
                            <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy"
                                 data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
                                <input class="form-control" readonly size="16" type="text" value="">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input id="dtp_input1" type="hidden" value=""/>
                        </div>
                        <div class="tel-wrapper">
                            <div class="form-group">
                                <label class="control-label" for="dtp_input2">Desde</label>
                                <div class="input-group date form_time" data-date="" data-date-format="hh:ii"
                                     data-link-field="dtp_input2" data-link-format="hh:ii">
                                    <input class="form-control" readonly size="16" type="text" value="">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                </div>
                                <input id="dtp_input2" type="hidden" value=""/>
                            </div>
                            <span>—</span>
                            <div class="form-group">
                                <label class="control-label" for="dtp_input3">Hasta</label>
                                <div class="input-group date form_time" data-date="" data-date-format="hh:ii"
                                     data-link-field="dtp_input3" data-link-format="hh:ii">
                                    <input class="form-control" readonly size="16" type="text" value="">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                </div>
                                <input id="dtp_input3" type="hidden" value=""/>
                            </div>
                        </div>
                    </fieldset>
                    <p class="formbutton">
                        <input class="button dark" type="submit" value="Agendar llamada">
                    </p>
                </form>
            </div>
        <div id="form-ilustracion"></div>
        </section>
    </div>
    <div class="bigfoot">
        <div class="curvita green-bg"></div>
        <div class="footer container">
            <aside>
                <ul class="nav footer-nav">
                    <li><a href="index.php" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a class="active" href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="products.php" target="_self">Productos</a></li>
                    <li><a href="noticias.php" target="_self">Noticias</a></li>
                    <li><a href="ayuda.php" target="_self">Ayuda</a></li>
                </ul>
            </aside>
            <footer>
                <ul class="foot-info p-small">
                    <li><strong>Teléfono</strong><br>
                        01-919-6710172
                    </li>
                    <li><strong>Correo</strong><br>
                        contacto@batsilmaya.org
                    </li>
                    <li class="logo-footer"><a href="index.php" target="_self"><img alt="Bats'il Maya Logo"
                                                                                     src="images/logos/batsil_maya_logo.svg"></a>
                    </li>
                    <li id="office1"><strong>Oficina</strong><br>
                        lugar ###<br> Chilón, Chiapas
                    </li>
                    <li id="office2"><strong>Oficina</strong><br>
                        lugar ###<br> Chilón, Chiapas
                    </li>
                </ul>
            </footer>
        </div>
    </div>
</div>

<script charset="UTF-8" src="js/jquery.js"></script>
<script charset="UTF-8" src="js/datetimepicker.js"></script>
<script charset="UTF-8" src="js/datetimepicker.es.js"></script>
<script charset="UTF-8" src="js/email-autocomplete.js"></script>
<script charset="UTF-8" src="js/mask.js"></script>

<script>
    $(document).ready(function () {
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $(".email").emailautocomplete();
        $('.form_date').datetimepicker({
            language: 'es',
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            startDate: new Date(),
        });
        $('.form_date').datetimepicker('setDaysOfWeekDisabled', [0, 6]);
        $('.form_time').datetimepicker({
            language: 'es',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0,
            showMeridian: 1,
            minuteStep: 15
        });
    });
</script>

</body>
</html>
    