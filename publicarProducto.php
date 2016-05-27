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
                        <li><a href="Proveedor.php" id="cerrarSesion" class="a" title="Cerrar Sesion">Cerrar Sesion</a></li>
                        <li><a href="publicarProducto.php" id="crearDiseño" class="a" title="Registrarse">Publicar Producto</a></li>
                        <li><a href="ofertasClientes.php" id="verOfertas" class="a" title="diseños">Diseños Clientes</a></li>
                        <a href="index.php" title="ver Perfil" class="a"><h3>Ver perfil</h3></a>
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
                    <form  method="post" action="control.php" enctype="multipart/form-data">
                        <div id="subir">
                            <h4>Para subir sus productos seleccione el archivo dandole click al soguiente botón</h4>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
