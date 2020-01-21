<?php

class Documento {

    private $numero;

    public function getNumero()
    {
        
        return $this->numero;

    }
    
    public function setNumero($n)
    {

        $this->numero = $n;

    }

}

class CPF extends Documento
{
    public function validar():bool{
        //validação do CPF

        return true; 
    }

}

$doc = new CPF();

$doc->setNumero("111222333-44");
$doc->validar();

var_dump($doc->validar());

echo "\n";

echo $doc->getNumero();