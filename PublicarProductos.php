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
        <link type="text/css" href="Estilos/EstilosPublicar.css" rel="stylesheet">
        <link href="Estilos/bootstrap.min.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/ScriptsIndex.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script><!--
        <script type="text/javascript" src="js/ScriptsIndex.js"></script>-->
    </head>
    <body>
        <div id="web">
            <header>
                <!--ES EXACTAMENTE LO MISMO QUE EN EL INDEX, EN ESTE CASO ESTA EL CARRITO DE COMPRAS-->
                <a href="#" title="ver Perfil" class="a"><h3>CLIENTE: <?php // echo $_GET['user'];  ?></h3></a>
                <nav class="menu2">
                    <!-- Aqui es donde ustedes deben colocar las funcionalidades que tienen, solo colocan el li a href y colocar su funcion-->
                    <!-- Deben colocar las mismas clases en este caso class="a"-->
                    <menu>
                        <li><a href="Cliente.php?user=" id="inicio" class="a" title="Inicio">Inicio</a></li>
                    </menu>
                </nav>
            </header>
            <div id="catalogo">
                <div class="row">
                    <form  method="post" action="control.php" enctype="multipart/form-data">
                        <div id="subir">
                            <fieldset>
                                <legend><marquee>SUBIR PRODUCTO</marquee></legend>
                                <center><div id="imagen"> <label for="imagen">Seleccione el producto:<span>*</span></label><input type="file" name="imagen"  id="producto" style="margin-left: 36%; margin-bottom: 2%;"/></div></center><br>
                                <div id="nombre"> <label for="Nombre">Nombre del producto:<span>*</span></label><input type="text" id="nombreI" name="nombreI" required style="margin-left:6%; width:200px; margin-bottom:30px;"/></div>   
                                <div id="tipo"> <label for="tIpo">Tipo del producto:<span>*</span></label><input type="text" id="nombreI" name="tipoI" required style="margin-left:3%; width:200px; margin-bottom:30px;"/></div>   
                                <div id="descripcion"> <label for="descrip">Descripcion del producto:<span>*</span></label><textarea rows="4" cols="30" id="nombreI" name="descripcionI" placeholder="Escriba sus especificaciones" style="margin-bottom: 3%;"></textarea></div>  
                                <div id="costo"> <label for="costo">Costo del producto:<span>*</span></label><input type="text" id="nombreI" name="costoI" required style="margin-left:1%; width:200px; margin-bottom:30px;"/></div><br><br><br>
                                <center><input type="submit" name="crearDesing" value="Enviar Producto" id="producto" class="boton"></center>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
