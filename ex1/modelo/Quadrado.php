<?php

require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica
{
    private $lado;
    
    public function getArea()
    {
        return "A área do quadrado é : " . $this->lado * $this->lado;
    }
    
    public function getDesenho()
    {
        return "\n┌────┐\n│    │\n└────┘\n";
    }
    
    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}