<?php

require_once("Midia.php");

class CD extends Midia {

    //Sobreescrita do método getTipo
    public function getTipo() {
        return "CD";        
    }
    
}