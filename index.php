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
        <!-- Los estilos estan ubicados en la Carpeta estilos-->
        <link type="text/css" href="Estilos/EstilosIndex.css" rel="stylesheet">
        <link href="Estilos/bootstrap.min.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <!-- Scrip para funcion insertar y registrarse-->
        <script type="text/javascript" src="js/ScriptsIndex.js"></script>
    </head>
    <body>
        <div id="web">
            <header>
                <!--Imagen ayuda-->
                <a href="#" title="Ayuda" class="ayuda">
                    <img src="Imagenes/ayuda.png">
                </a>
                <h3>BICI-$TORE</h3>
                <!--Opciones iniciar y registrarse-->
                <nav class="menu2">
                    <menu>
                        <li><a href="#" id="botonRegistrarse" class="a" title="Registrarse">Registrarse</a></li>
                        <li><a href="#" id="botonIngresar" class="a" title="Ingresar">Ingresar</a></li>
                    </menu>
                </nav>

            </header>
            <!--  Menu parte izquierda de la pagina-->
            <div id="menuIzq">
                <p class="cat"><a href="#" class="a">Categoria</a></p>
                <p class="cat"><a href="#" class="a">Precio</a></p>
                <p class="cat"><a href="#" class="a">Ubicacion</a></p>
                <p class="info">
                    Bici-$tore es una pagina de compra y venta de bicicletas, aquí encontraras la cicla de tus sueños, ingresa al mundo web donde comprar es mas fácil!
                </p>
            </div>
            <!-- Aca esta el catalogo de los servicios, me falta completarlo para que relacione con verProductos de jeison-->
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
                                    <h4 class="pull-right">$'.$row['costo'].'</h4>
                                    <h4><a href="VerProducto.php?id='.$row['id'].'">'.$row['nombre'].'</a>
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
                    } ?>
                </div>
                <div id="contenedor"></div>
                <!-- formulario ingresar-->
                <div id="contenedorFormIniciar">
                    <p class="ingresar">INGRESAR</p>
                    <form method="post" action="Control.php" enctype="multipart/form-data" >
                        Usuario: <br>
                        <input type="text" id="usuario" name="usuario" required placeholder="Ingrese nombre de usuario"><br>
                        Contraseña: <br>
                        <input type="password" id="pass" name="pass" required placeholder="*****"><br>
                        <br>
                        <input type="submit" name="Ingresar" value=" Ingresar ">
                    </form>
                </div>
                <!-- Formulario registrarse-->
                <div id="contenedorFormRegistrarse">
                    <form method="post" action="Control.php" enctype="multipart/form-data" >
                        <p class="ingresar">REGISTRARSE</p>
                        <table>
                            Nombre: <span>*</span> <br>
                            <input type="tex" id="nombre" name="nombre" required placeholder="Nombre">
                            <br> Apellido: <span>*</span> <br>
                            <input type="tex" id="apellido" name="apellido" required placeholder="Apellido">
                            <br> Usuario: <span>*</span> <br>
                            <input type="tex" id="usuario" name="usuario" required placeholder="Nombre usuario"><br>
                            Correo: <span>*</span> <br>
                            <input type="email" id="correo" name="correo" required placeholder="correo"><br>
                            Contraseña: <span>*</span> <br>
                            <input type="password" id="pass" name="pass" required placeholder="************"><br>
                            Direccion: <span>*</span> <br>
                            <input type="text" id="direccion" name="direccion" required required placeholder="Direccion"><br>
                            Telefono: <span>*</span> <br>
                            <input type="tex" id="telefono" name="telefono" required><br>
                        </table  >
                        <br>
                        <input type="submit" name="registrarse" value=" Registrarse ">
                    </form>
                </div>
            </div>
    </body>
</html>
<!--=======
<!DOCTYPE html>
<<!doctype html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8" /> 
<title>Document</title> 
</head> 
<body> 

<?php
//echo "<a href='form.php?id=10'>Diana</a>"; 
?> 


</body> 
</html> 
>>>>>>> origin/master-->
