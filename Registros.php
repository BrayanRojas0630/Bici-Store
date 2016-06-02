<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" href="Estilos/EstilosAdmin.css" rel="stylesheet">
        <link href="Estilos/bootstrap.min.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/ScriptsIndex.js"></script>
        <!--<script type="text/javascript" src="js/bootstrap.min.js" ></script>-->
    </head>
    <body>
        <div id="web">
            <header>
                <!--<img src="./imagenes/cliente.jpg" id="logo">-->
                <a href="#" title="ver Perfil" class="a"><h3>ADMIN: <?php echo $_GET['user']; ?></h3></a>
                <nav class="menu2">
                    <!-- Aqui es donde ustedes deben colocar las funcionalidades que tienen, solo colocan el li a href y colocar su funcion-->
                    <!-- Deben colocar las mismas clases en este caso class="a"-->
                    <menu>
                        <li><a href="index.php" id="cerrarSesion" class="a" title="Cerrar Sesion">Cerrar Sesion</a></li>
                        <li><a href="ValidarDesing.php" id="validarDiseño" class="a" title="Validar">Validar Diseño</a></li>
                    </menu>
                </nav>
            </header>
        </div>
    </body>
</html>
