<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mensaje
 *
 * @author Brayan
 */
class Mensaje {

    private $remitente;
    private $destinatario;
    private $diseño;
    
    function __construct($remitente, $destinatario, $diseño) {
        $this->remitente = $remitente;
        $this->destinatario = $destinatario;
        $this->diseño = $diseño;
    }
    
    public function enviarMensaje(){
        
    }
    
    public function redactarMensaje(){
        
    }


}
