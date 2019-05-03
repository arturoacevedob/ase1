<?php

?>

<!DOCTYPE html>

<html dir="ltr" lang="es">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta content="Sarah Raquel Quintana Cortés,Arturo Alejandro Acevedo Bravo, Mathias Thomsen Cuéllar" name="author">
    <meta content="Resuelve cualquier duda buscando en las preguntas frecuentes o contactando directamente a Bats'il Maya."
          name="description">
    <meta content="Tseltal, Bats'il Maya, café, miel, jabón, jabones, Chiapas, Orgánico, ayuda, faq, preguntas, contacto, dudas, respuestas, problemas"
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
            <div class="grid-header container">
                <h1>Bats'il Maya: Ayuda</h1>
                <div class="nav-wrapper desktop">
                    <a class="logo" href="index.php" target="_self">
                        <img alt="Bats'il Maya Logo" class="shadow" src="images/logos/batsil_maya_logo.svg">
                    </a>
                    <nav id="menu-desktop">
                        <h2>Menú</h2>
                        <ul class="menu-desktop-content">
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="nosotros.php" target="_self">Nosotros</a></li>
                            <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                            <li><a href="proceso.php" target="_self">Proceso</a></li>
                            <li><a href="productos.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a class="active" href="noticias.php" target="_self">Ayuda</a></li>
                        </ul>
                    </nav>
                    <ul>
                        <?php
                        renderHeader()
                        ?>
                    </ul>
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
                            <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                            <li><a href="proceso.php" target="_self">Proceso</a></li>
                            <li><a href="productos.php" target="_self">Productos</a></li>
                            <li><a href="noticias.php" target="_self">Noticias</a></li>
                            <li><a class="active" href="ayuda.php" target="_self">Ayuda</a></li>
                            <?php
                            renderHeader()
                            ?>
                        </ul>
                    </nav>
                </div>
                <h2 class="h2-header">Ayuda</h2>
            </div>
        </header>
    </div>
    <div class="container grid-ayuda">
        <section class="faq">
            <h2 class="h2-small">FAQ</h2>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Donec mauris tellus, eu, consectetur eu?</h3>
                <p>Mauris. Pellentesque id nisi vel nulla dignissim posuere. Pellentesque tempor vestibulum ex vel
                    tempus. Cras fermentum leo eu massa sollicitudin sagittis. Integer ultrices urna turpis, ac varius
                    lorem aliquet a. Vivamus pellentesque ac purus vel imperdiet.</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Donec mauris tellus, eu, consectetur eu?</h3>
                <p>Mauris. Pellentesque id nisi vel nulla dignissim posuere. Pellentesque tempor vestibulum ex vel
                    tempus. Cras fermentum leo eu massa sollicitudin sagittis. Integer ultrices urna turpis, ac varius
                    lorem aliquet a. Vivamus pellentesque ac purus vel imperdiet.</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Donec mauris tellus, eu, consectetur eu?</h3>
                <p>Mauris. Pellentesque id nisi vel nulla dignissim posuere. Pellentesque tempor vestibulum ex vel
                    tempus. Cras fermentum leo eu massa sollicitudin sagittis. Integer ultrices urna turpis, ac varius
                    lorem aliquet a. Vivamus pellentesque ac purus vel imperdiet.</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Donec mauris tellus, eu, consectetur eu?</h3>
                <p>Mauris. Pellentesque id nisi vel nulla dignissim posuere. Pellentesque tempor vestibulum ex vel
                    tempus. Cras fermentum leo eu massa sollicitudin sagittis. Integer ultrices urna turpis, ac varius
                    lorem aliquet a. Vivamus pellentesque ac purus vel imperdiet.</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Donec mauris tellus, eu, consectetur eu?</h3>
                <p>Mauris. Pellentesque id nisi vel nulla dignissim posuere. Pellentesque tempor vestibulum ex vel
                    tempus. Cras fermentum leo eu massa sollicitudin sagittis. Integer ultrices urna turpis, ac varius
                    lorem aliquet a. Vivamus pellentesque ac purus vel imperdiet.</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Donec mauris tellus, eu, consectetur eu?</h3>
                <p>Mauris. Pellentesque id nisi vel nulla dignissim posuere. Pellentesque tempor vestibulum ex vel
                    tempus. Cras fermentum leo eu massa sollicitudin sagittis. Integer ultrices urna turpis, ac varius
                    lorem aliquet a. Vivamus pellentesque ac purus vel imperdiet.</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Donec mauris tellus, eu, consectetur eu?</h3>
                <p>Mauris. Pellentesque id nisi vel nulla dignissim posuere. Pellentesque tempor vestibulum ex vel
                    tempus. Cras fermentum leo eu massa sollicitudin sagittis. Integer ultrices urna turpis, ac varius
                    lorem aliquet a. Vivamus pellentesque ac purus vel imperdiet.</p>
            </article>
            <article class="margin-bottom">
                <h3 class="h3-small">¿Donec mauris tellus, eu, consectetur eu?</h3>
                <p>Mauris. Pellentesque id nisi vel nulla dignissim posuere. Pellentesque tempor vestibulum ex vel
                    tempus. Cras fermentum leo eu massa sollicitudin sagittis. Integer ultrices urna turpis, ac varius
                    lorem aliquet a. Vivamus pellentesque ac purus vel imperdiet.</p>
            </article>
        </section>
        <div class="grid-contactanos">
        <aside class="chat border-padding margin-thingy">
            <h2 class="h2-small crazy-icon-padding">Chatea con Nosotros</h2>
            <p>Inicia una sesión de chat ahora. <br>Espera estimada: 5 minutos o menos.</p>
            <a class="button red full-width">Chat</a>
        </aside>
        <aside class="call border-padding margin-thingy">
            <h2 class="h2-small crazy-icon-padding">Agenda una llamada</h2>
            <p>Agenda una llamada con Bats’il Maya para que te llamemos cuando te convenga.</p>
            <a class="button red full-width">Agenda una llamada</a>
        </aside>
        <aside class="help-mail border-padding margin-thingy">
            <h2 class="h2-small crazy-icon-padding">Envíanos un correo</h2>
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
                    <li><a href="nuestro-cafe.php" target="_self">Nuestro café</a></li>
                    <li><a href="proceso.php" target="_self">Proceso</a></li>
                    <li><a href="productos.php" target="_self">Productos</a></li>
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
<script charset="UTF-8" src="js/email-autocomplete.js"></script>

<script>
    $(document).ready(function () {
        $(".email").emailautocomplete();
    });
</script>

</body>
</html>
