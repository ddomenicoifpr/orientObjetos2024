<?php

require_once("Midia.php");

class DVD extends Midia {

    //Sobreescrita do método getTipo
    public function getTipo() {
        return "DVD";        
    }
    
}