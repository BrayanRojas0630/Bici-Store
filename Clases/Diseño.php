<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Diseño
 *
 * @author Brayan
 */
class Diseño {
    private $cliente;
    private $nombre;
    private $tipo;
    private $descripcion;
    private $costoEstimado;
    
    function __construct($cliente, $nombre, $tipo, $descripcion, $costoEstimado) {
        $this->cliente = $cliente;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->costoEstimado = $costoEstimado;
    }

    public function crearDiseño(){
        
    }
    
    public function actualizarDiseño(){
        
    }
    
    public function eliminarDiseño(){
        
    }
}
