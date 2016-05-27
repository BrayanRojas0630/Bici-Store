<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author Brayan
 */
class Producto {
    private $proveedor;
    private $nombre;
    private $tipo;
    private $descripcion;
    private $costo;
    
    function __construct($proveedor, $nombre, $tipo, $descripcion, $costo) {
        $this->proveedor = $proveedor;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->costo = $costo;
    }
    
    public function crearProducto(){
        
    }
    
    public function actualizarProducto(){
        
    }
    
    public function eliminarProducto() {
        
    }

}
