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
        <link type="text/css" href="Estilos/EstilosCliente.css" rel="stylesheet">
        <link href="Estilos/bootstrap.min.css" rel="stylesheet" />
        <link href="Estilos/dataTables.bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script><!--
        <script type="text/javascript" src="js/ScriptsIndex.js"></script>-->
    </head>
    <body>
        <div id="web">
            <header>
                <!--ES EXACTAMENTE LO MISMO QUE EN EL INDEX, EN ESTE CASO ESTA EL CARRITO DE COMPRAS-->
                <a href="#" title="ver Perfil" class="a"><h3>CLIENTE: <?php // echo $_GET['user'];   ?></h3></a>
                <nav class="menu2">
                    <!-- Aqui es donde ustedes deben colocar las funcionalidades que tienen, solo colocan el li a href y colocar su funcion-->
                    <!-- Deben colocar las mismas clases en este caso class="a"-->
                    <menu>
                        <?php
                        if(isset($_GET['userC'])){
                            echo '<li><a href="Cliente.php?user='.$_GET['userC'].'" id="inicio" class="a" title="Inicio">Inicio</a></li>';
                        }else if(isset ($_GET['userP'])){
                            echo '<li><a href="Proveedor.php?user='.$_GET['userP'].'" id="inicio" class="a" title="Inicio">Inicio</a></li>';
                        }else if(isset ($_GET['userA'])){
                            echo '<li><a href="Administrador.php?user='.$_GET['userA'].'" id="inicio" class="a" title="Inicio">Inicio</a></li>';
                        }else if(isset ($_GET['userM'])){
                            echo '<li><a href="Mensajero.php?user='.$_GET['userM'].'" id="inicio" class="a" title="Inicio">Inicio</a></li>';
                        }else{
                            echo '<li><a href="index.php" id="inicio" class="a" title="Inicio">Inicio</a></li>';
                        }
                        ?>
                    </menu>
                </nav>
            </header>
        </div>
    </body>
</html>
