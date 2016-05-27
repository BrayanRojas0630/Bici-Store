<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compra
 *
 * @author Brayan
 */
class Compra {
    private $producto;
    private $cliente;
    private $proveedor;
    
    function __construct($producto, $cliente, $proveedor) {
        $this->producto = $producto;
        $this->cliente = $cliente;
        $this->proveedor = $proveedor;
    }
    
    public function realizarTransaccion(){
        
    }
    
    public function validarCompra(){
        
    }
    
    public function guardarCompra(){
        
    }

}
