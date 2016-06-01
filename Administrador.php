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
            <div id="menuIzq">
                <p class="cat"><a href="#" class="a">Categoria</a></p>
                <p class="cat"><a href="#" class="a">Precio</a></p>
                <p class="cat"><a href="#" class="a">Ubicacion</a></p>
                <p class="info">
                    Bici-$tore es una pagina de compra y venta de bicicletas, aquí encontraras la cicla de tus sueños, ingresa al mundo web donde comprar es mas fácil!
                </p>
            </div>
            <div id="catalogo">
                <div class="row">

                    <?php
                    include 'Clases/DataBase.php';
                    $db = new DataBase('bici$tore');
                    $row = "";
                    $db->conectar();
                    $result = $db->consultar("", "producto", "", "");
                    while ($row = mysql_fetch_array($result)) {
                        echo '
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placehold.it/320x150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$' . $row['costo'] . '</h4>
                                    <h4><a href="#">' . $row['nombre'] . '</a>
                                    </h4>
                                    <p><a target="_blank" href="#">Ver Mas</a>.</p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right">15 reviews</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </p>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                    <br><input type="submit" name="guardar" class="btn btn-success btn-sm" value="Siguiente">
                    <input type="submit" name="guardar" class="btn btn-success btn-sm" value="   Atras   ">
                </div>
            </div> 
        </div>
    </body>
</html>
