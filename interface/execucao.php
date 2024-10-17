<?php

require_once("modelo/radioPortatil.php");
require_once("modelo/radioRelogio.php");

$tipo = "RP";

$radio = null;

if ($tipo == "RP") 
{
    $radio = new radioPortatil();

    $radio->setCor("Preto");
    $radio->setMarca("Livstar");
}
else if ($tipo == "RR")
{
    $radio = new radioRelogio();
    
    $radio->setCorTela("Vermelho");
}

$radio->ligarRadio();
$radio->desligarRadio();
if($radio instanceof Irelogio)
{
    $radio->mostrarHora();
}