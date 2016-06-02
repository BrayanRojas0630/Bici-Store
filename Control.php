<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* ESTA CLASE ES LA QUE UNE EL HTML CON EL PHP */
include 'Clases/DataBase.php';
if (isset($_POST['Ingresar'])) {
    $db = new DataBase('bici$tore');
    $db->conectar();
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $vuser = true;
    $vpass = true;
    $result = $db->consultar("", "usuario", "", "");
    while ($row = mysql_fetch_array($result)) {
        if ($row['usuario'] == $usuario) {
            if ($row['password'] == $pass) {
                echo '<script>alert("Bienvenido ' . $row['usuario'] . '")</script>';
                if ($row['tipo'] == 'Cliente') {
                    echo '<script language="javascript">window.location = "Cliente.php?user=' . $_POST['usuario'] . '";</script>';
                } else if ($row['tipo'] == 'Proveedor') {
                    echo '<script language="javascript">window.location = "Proveedor.php?user=' . $_POST['usuario'] . '";</script>';
                } else if ($row['tipo'] == 'Administrador') {
                    echo '<script language="javascript">window.location = "Administrador.php?user=' . $_POST['usuario'] . '";</script>';
                } else if ($row['tipo'] == 'Mensajero') {
                    echo '<script language="javascript">window.location = "Mensajero.php?user=' . $_POST['usuario'] . '";</script>';
                }
            } else {
                $vpass = false;
            }
        } else {
            $vuser = false;
        }
    }
    if (!$vpass) {
        echo '<script>alert("ERROR, Contraseña incorrecta")</script>';
        echo '<script language="javascript">window.location = "index.php";</script>';
    } else if (!$vuser) {
        echo '<script>alert("ERROR, Nombre de usuario incorrecto")</script>';
        echo '<script language="javascript">window.location = "index.php";</script>';
    }
} else if (isset($_POST['registrarse'])) {
    $db = new DataBase('bici$tore');
    $db->conectar();
    $datosUsuario = array($_POST['usuario'], $_POST['pass'], "Cliente");
    $datosCliente = array($_POST['usuario'], $_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['pass'], $_POST['direccion'], $_POST['telefono']);
    $db->insertar($datosUsuario, "usuario");
    $db->insertar($datosCliente, "cliente");
    header('location: index.php');
} else if (isset($_POST['publicarProducto'])) {
//    $nombre = $_FILES['imagen']['name']; //este es el nombre del archivo que acabas de subir
//    $tipo = $_FILES['imagen']['type']; //este es el tipo de archivo que acabas de subir
//    $_FILES['imagen']['tmp_name']; //este es donde esta almacenado el archivo que acabas de subir.
//
//    $_FILES['imagen']['size']; //este es el tamaño en bytes que tiene el archivo que acabas de subir.
//    $_FILES['imagen']['error']; //este almacena el codigo de error que resultaría en la subida.
////imagen es el nombre del input tipo file del formulario.
//    if ($_FILES["imagen"]["error"] > 0) {
//        echo "ha ocurrido un error";
//    } else {
//        //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
//        //y que el tamano del archivo no exceda los 100kb
////         ""
//        $permitidos = array("image/jpg", "image/jpeg", "image/jpeg", "image/gif", "image/png");
//        $limite_kb = 1000;
//
//        if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024) {
//            //esta es la ruta donde copiaremos la imagen
//            //recuerden que deben crear un directorio con este mismo nombre
//            //en el mismo lugar donde se encuentra el archivo subir.php
//            $num = rand(0, 1000);
//            $ruta = "imagenesServicio/" . $_POST['idS'] . "ID" . $num . ".jpg";
//            //comprovamos si este archivo existe para no volverlo a copiar.
//            //pero si quieren pueden obviar esto si no es necesario.
//            //o pueden darle otro nombre para que no sobreescriba el actual.
//            if (!file_exists($ruta)) {
//                //aqui movemos el archivo desde la ruta temporal a nuestra ruta
//                //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
//                //almacenara true o false
//                $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
//            }
//        }
//}
}