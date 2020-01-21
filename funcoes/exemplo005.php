<?php //Parâmetro por valor

$a = 10;

function trocaValor($a){

    $a += 50; //são duas variáveis diferentes, pois, é devido ao fato do escopo de variável

    return $a;

}

echo trocaValor($a);

echo "\n";

echo $a; 