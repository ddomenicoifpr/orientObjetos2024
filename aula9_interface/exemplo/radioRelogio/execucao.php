<?php

require_once("modelo/RadioPortatil.php");
require_once("modelo/RadioRelogio.php");

$disp = "RP";

$radio = null;
if($disp == "RP") {
    $radio = new RadioPortatil();
    $radio->setAm(true);
    $radio->setFm(true);
} else if($disp == "RR") {
    $radio = new RadioRelogio();
    $radio->setCorVisor("Vermelho");
}

$radio->ligarRadio();
if($radio instanceof IRelogio)
    $radio->mostrarHora();
$radio->desligarRadio();