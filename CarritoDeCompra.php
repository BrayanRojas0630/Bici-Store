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
                <a href="#" title="ver Perfil" class="a"><h3>CLIENTE: <?php// echo $_GET['user']; ?></h3></a>
                <nav class="menu2">
                    <!-- Aqui es donde ustedes deben colocar las funcionalidades que tienen, solo colocan el li a href y colocar su funcion-->
                    <!-- Deben colocar las mismas clases en este caso class="a"-->
                    <menu>
                        <li><a href="#" id="inicio" class="a" title="Inicio">Inicio</a></li>
                    </menu>
                </nav>
            </header>
            <div id="carrito">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead><tr><th>Numero</th><th>Cedula</th><th>Nombre</th><th>Apellido</th><th>Correo</th></tr></thead><tr><td>1</td><td><a href="editar.php?id=1015461009" target="_blank">1015461009</a></td><td>Juan</td><td>gomez</td><td>juan@hotmail.co</td></tr><tr><td>2</td><td><a href="editar.php?id=1019876543" target="_blank">1019876543</a></td><td>Victor hugo</td><td>Prada</td><td>ff@z.net</td></tr><tr><td>3</td><td><a href="editar.php?id=1020369512" target="_blank">1020369512</a></td><td>Gustavo</td><td>Rodriguez</td><td>gustavo@gmail.com</td></tr><tr><td>4</td><td><a href="editar.php?id=1073512998" target="_blank">1073512998</a></td><td>juan</td><td>hernandez</td><td>carlos.hernandez@unicafam.net.co</td></tr><tr><td>5</td><td><a href="editar.php?id=2147483647" target="_blank">2147483647</a></td><td>Dora</td><td>Veltran</td><td>mia@kalifa.porn</td></tr> 
                </table> 
            </div>
        </div>
    </body>
</html>
