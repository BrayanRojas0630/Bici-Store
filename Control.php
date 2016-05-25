<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'DataBase.php';
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
    $db->insertar1($datosUsuario, "usuario");
    $db->insertar1($datosCliente, "cliente");
    header('location: index.php');
}