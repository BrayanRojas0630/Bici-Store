<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" href="Estilos/EstilosIndex.css" rel="stylesheet">
        <link href="Estilos/bootstrap.min.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/ScriptsIndex.js"></script>
        <!--<script type="text/javascript" src="js/bootstrap.min.js" ></script>-->
    </head>
    <body>
        <div id="web">
            <header>
                <!--<img src="./imagenes/cliente.jpg" id="logo">-->
                <a href="#" title="Ayuda" class="ayuda">
                    <img src="./Imagenes/ayuda.png">
                </a>
                <h3>administrador</h3>
                <nav class="menu2">
                    <menu>
                        <li><a href="#" id="botonRegistrar proveedor" class="a" title="Registrarse">Registrarse</a></li>
                        <li><a href="#" id="botonRegistrar mensajero" class="a" title="Registrarse">Registrarse</a></li>
                        
                        <li><a href="#" id="botonIngresa" class="a" title="Ingresar">Ingresar</a></li>
                    </menu>
                </nav>
                <form method="post" action="index.php">
                    <input type="search" id="search" name="search" placeholder="Escribe Tu Busqueda" size="40" style="HEIGHT: 40px; width: 35%; margin-left: 25%; margin-top: 1%;">
                    <input type="image" id="i" name="buscar" src="Imagenes/buscador.png" width="35" height="30" style="HEIGHT: 40px; margin-top: 1%; position: absolute">
                </form>
            </header>
          
            <div id="catalogo">
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
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
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#">Fourth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
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
                        <br><input type="submit" name="guardar" class="btn btn-success btn-sm" value="Siguiente">
                        <input type="submit" name="guardar" class="btn btn-success btn-sm" value="   Atras   ">
                    </div>
                </div>
                <div id="contenedor"></div>
                <div id="contenedorFormIniciar">
                    <p class="ingresar">INGRESAR</p>
                    <form method="post" action="Control.php" enctype="multipart/form-data" >
                        Usuario: <br>
                        <input type="text" id="usuario" name="usuario" required placeholder="Ingrese nombre de usuario"><br>
                        Contraseña: <br>
                        <input type="password" id="contraseña" name="contraseña" required placeholder="*****"><br>
                        <br>
                        <input type="submit" name="Ingresar" value=" Ingresar ">
                    </form>
                </div>
                <div id="contenedorFormRegistrarse">
                    <form method="post" action="Control.php" enctype="multipart/form-data" >
                        <p class="registro">nombre administrador</p>
                        <table>
                            Nombre: <span>*</span> <br>
                            <input type="tex" id="nombre" name="nombre" required placeholder="Nombre">
                            <br> Apellido: <span>*</span> <br>
                            <input type="tex" id="apellido" name="apellido" required placeholder="Apellido"><br>
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
                       
                    </form>
                </div>
            </div>
    </body>
    
</html>
  