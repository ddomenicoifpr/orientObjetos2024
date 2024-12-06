<?php

require_once("modelo/Ingresso.php");
require_once("modelo/IngressoVIP.php");
require_once("modelo/IngressoCamarote.php");

//Ingresso
$ingresso = new Ingresso();
$ingresso->setValor(50);
echo "Valor do ingresso: " . $ingresso->getValorTotal() . "\n";

//Ingresso VIP
$ingressoVip = new IngressoVIP();
$ingressoVip->setValor(50);
$ingressoVip->setValorAdicional(15);
echo "Valor do ingresso VIP: " . $ingressoVip->getValorTotal() . "\n";

//Ingresso Camarote
$ingressoCamarote = new IngressoCamarote();
$ingressoCamarote->setValor(50);
$ingressoCamarote->setValorAdicional(15);
$ingressoCamarote->setValorAdicionalCamarote(20);
echo "Valor do ingresso camarote: " . $ingressoCamarote->getValorTotal() . "\n";