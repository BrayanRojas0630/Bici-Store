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
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    </head>
    <body>
        <div id="web">
            <header>
                <!--<img src="./imagenes/cliente.jpg" id="logo">-->
                <a href="index.php" title="ver Perfil" class="a"><h3>PROVEEDOR</h3></a>
                <nav class="menu2">
                    <!-- Aqui es donde ustedes deben colocar las funcionalidades que tienen, solo colocan el li a href y colocar su funcion-->
                    <!-- Deben colocar las mismas clases en este caso class="a"-->
                    <menu>
                        <li><a href="Proveedor.php?user=" id="cerrarSesion" class="a" title="Inicio">Inicio</a></li>
                    </menu>
                </nav>
            </header>
            <div id="catalogo">
                <div class="row">
                    <form  method="post" action="control.php" enctype="multipart/form-data">
                        <div id="subir">
                            <fieldset>
                                <legend><marquee>SUBIR PRODUCTOS</marquee></legend>
                                <center><div id="imagen"> <label for="imagen">Seleccione el producto:<span>*</span></label><input type="submit" name="imagen" value="subir imagen" id="producto" class="boton" required style="margin-left:1%; width:150px; margin-bottom:30px;"/></div></center><br>
                                <div id="id"> <label for="idI">Codigo del Producto:<span>*</span></label><input type="text" id="nombreI" name="codigoI" required style="margin-left:8%; width:200px; margin-bottom:30px;"/></div>   
                                <div id="nick"> <label for="nIck">NickName:<span>*</span></label><input type="text" id="nombreI" name="nickI" required style="margin-left:14%; width:200px; margin-bottom:30px;"/></div>   
                                <div id="nombre"> <label for="Nombre">Nombre del producto:<span>*</span></label><input type="text" id="nombreI" name="nombreI" required style="margin-left:6%; width:200px; margin-bottom:30px;"/></div>   
                                <div id="tipo"> <label for="tIpo">Tipo del producto:<span>*</span></label><input type="text" id="nombreI" name="tipoI" required style="margin-left:3%; width:200px; margin-bottom:30px;"/></div>   
                                <div id="descripcion"> <label for="descrip">Descripcion del producto:<span>*</span></label><input type="text" id="nombreI" name="descipcionI" required style="margin-left:1%; width:200px; margin-bottom:30px;"/></div>   
                                <div id="costo"> <label for="costo">Costo del producto:<span>*</span></label><input type="text" id="nombreI" name="costoI" required style="margin-left:1%; width:200px; margin-bottom:30px;"/></div><br><br><br>
                                <center><input type="submit" name="enviar" value="Enviar Producto" id="producto" class="boton"></center>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
