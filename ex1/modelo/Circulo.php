<?php

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica
{
    private $raio;
    
    public function getArea()
    {
        return "A área do círculo é : " . 3.14*($this->raio * $this->raio) . "\n";
    }
    
    public function getDesenho()
    {
        $raio = 3;

        for ($y = -$raio; $y <= $raio; $y++) 
        {
            for ($x = -$raio; $x <= $raio; $x++) 
            {
                if ($x * $x + $y * $y <= $raio * $raio) 
                {
                    echo "* "; 
                } else {
                    echo "  ";  
                }
            }
            echo "\n";
        }
    }
    public function getRaio()
    {
        return $this->raio;
    }

    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}