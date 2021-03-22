<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();
include "header.php";
?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Resuelve cualquier duda buscando en las preguntas frecuentes o contactando directamente a Bats'il Maya."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, ayuda, faq, preguntas, contacto, dudas, respuestas, problemas, coffee, cafe organico, organic coffee, capeltic, cafe capeltic, cafeteria capeltic, chiapas, cafe de chiapas, cafe mexicano, tsletales, tseltal, lo mejor de mexico, cafe responsable, sustentabilidad, cafe sustentale, cafe de comercio justo, comercio justo"
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
    <!-- Link a favicon -->
    <link href="images/logos/batsil_maya_logo.svg" rel="icon">

    <title>Ayuda</title>
</head>
<body>
<div id="ayuda">
    <div>
        <header>
            <?php renderHeader(); ?>
            <h2 class='h2-header'>Ayuda</h2>
    </div>
    </header>
        </header>
    </div>
    <div class="container grid-ayuda">
        <section class="faq">
            <h2 class="h2-small">FAQ</h2>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Qué especie y variedad es nuestro café?</h3>
                <p>Especie arábiga. Variedades: Typica, Borbon, Caturra, Oro Azteca</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿El café es orgánico?</h3>
                <p>El café es 100% orgánico como se menciona en el empaque. Para el caso del café Nuestra Mezcla no es 100% orgánico</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿En qué presentación o gramaje se vende el café?</h3>
                <p>Bolsas de 1 kg. y 454 g. (1 lb).</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Venden café soluble?</h3>
                <p>No</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Cuál es la diferencia entre el café Orgánico Gourmet y el Orgánico?</h3>
                <p>Hay una parte del procesamiento, llamada "beneficio seco",
                donde se separan los granos de café por tamaño y peso. Una vez separados, 
                los granos que mantienen un mayor tamaño y mejor cuerpo, son los utilizados para el Café Capeltic Gourmet, 
                mientras que los granos de menor tamaño son para el Café Capeltic Orgánico. </p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Qué sabor o calidad es el café Nuestra Mezcla?</h3>
                <p>Es una mezcla que une diferentes tipos de granos y presenta un sabor afrutado y acidez cítrica ligera</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Hacen envíos a cualquier parte de México?</h3>
                <p>Contamos con el servicio de envío a cualquier área dentro del país (México).</p>
            </article>
        </section>
        <div class="grid-contactanos">
        <!--<aside class="chat border-padding margin-thingy">
            <h2 class="h2-small crazy-icon-padding">Chatea con Nosotros</h2>
            <p>Inicia una sesión de chat ahora. <br>Espera estimada: 5 minutos o menos.</p>
            <a class="button red full-width help-margin-top-button">Chat</a>
        </aside>-->
        <aside class="call border-padding margin-thingy">
            <h2 class="h2-small crazy-icon-padding">Agenda una llamada</h2>
            <p>Agenda una llamada con Bats’il Maya para que te llamemos cuando te convenga.</p>
            <a class="button red full-width help-margin-top-button"href="contactanos.php" target="_self">Agenda una llamada</a>
        </aside>
        <aside class="help-mail border-padding margin-thingy">
            <h2 class="h2-small crazy-icon-padding help-margin-top-button">Envíanos un correo</h2>
            <form>
                <label for="name">Nombre</label>
                <input id="name" name="name" placeholder="Maria Bravo" required type="text">
                <label for="email">Correo</label>
                <input class="email" id="email" name="email" placeholder="mariabravo@gmail.com" required
                       type="email">
                <label>Mensaje</label>
                <textarea name="mensaje" placeholder="Mensaje" required rows="5"></textarea>
                <p class="formbutton">
                    <input class="button dark full-width" type="submit" value="Enviar Correo">
                </p>
            </form>
        </aside>
    </div>
    </div>
    <div class="bigfoot">
        <div class="curvita white-bg"></div>
        <div class="footer container">
            <aside>
                <ul class="nav footer-nav">
                    <li><a href="index.php" target="_self">Inicio</a></li>
                    <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                    <li><a href="nuestro_cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="products.php" target="_self">Productos</a></li>
                    <li><a href="noticias.php" target="_self">Noticias</a></li>
                    <li><a class="active" href="ayuda.php" target="_self">Ayuda</a></li>
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
                    <li class="logo-footer"><a href="index.php" target="_self"><img
                            alt="Bats'il Maya Logo" src="images/logos/batsil_maya_logo.svg"></a></li>
                            <li id="office1"><strong>Oficina</strong><!--<br>
                        lugar ###--><br> Chilón, Chiapas
                    </li>
                    <li id="office2"><strong>Oficina</strong><!--<br>
                        lugar ###--><br> Ciudad de México
                    </li>
                </ul>
            </footer>
        </div>
    </div>
</div>


<script charset="UTF-8" src="js/jquery.js"></script>
<script charset="UTF-8" src="js/email-autocomplete.js"></script>

<script>
    $(document).ready(function () {
        $(".email").emailautocomplete();
    });
</script>

</body>
</html>
