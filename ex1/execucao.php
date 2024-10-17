<?php

require_once("modelo/Circulo.php");
require_once("modelo/Quadrado.php");
require_once("modelo/Retangulo.php");

print "1-Circulo\n2-Retangulo\n3-Quadrado\n";
$tipo = readline("Insira a forma geométrica pelo índice: ");

$forma = null;

if ($tipo == 1) 
{
    $forma = new Circulo();
    $forma->setRaio(readline("Insira o raio do círculo: "));
}else if($tipo == 2)
{
    $forma = new Retangulo();
    $forma->setAltura(readline("Insira a altura do retangulo: "));
    $forma->setBase(readline("Insira a base do retangulo: ")); 
}else if($tipo == 3)
{
    $forma = new Quadrado();
    $forma->setLado(readline("Insira o lado do quadrado: "));
}
else
{
    print "Opção inválida\n";
    die;
}

print $forma->getArea();
print $forma->getDesenho();