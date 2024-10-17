<?php

require_once("Iradio.php");

class radioPortatil implements Iradio
{
    private $cor;
    private $marca;
    
    public function ligarRadio()
    {
        print "Ligado";
    }
    
    public function desligarRadio()
    {
        print "Desligado";
    }
    
    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }
}