<?php

require_once("Iradio.php");
require_once("Irelogio.php");

class radioRelogio implements Iradio, Irelogio
{
    private $corTela;
    
    public function ligarRadio()
    {
        print "Rádio relógio ligado";
    }
    
    public function desligarRadio()
    {
        print "Rádio relógio desligado";
    }
    
    public function mostrarHora()
    {
        print date("H:m:s") . "\n";
    }
    
    public function getCorTela()
    {
        return $this->corTela;
    }

    public function setCorTela($corTela): self
    {
        $this->corTela = $corTela;

        return $this;
    }
}