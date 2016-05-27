<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Brayan
 */
class Usuario {
    private $usuario;
    private $nombre;
    private $apellido;
    private $pass;
    
    function __construct($usuario, $nombre, $apellido, $pass) {
        $this->usuario = $usuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->pass = $pass;
    }
    
    public function iniciarSesion(){
        
    }
    
    public function cerrarSesion(){
        
    }
    
    public function actualizarInfoPersonal(){
        
    }

}
