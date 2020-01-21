<?php //PHP 7 Declaração de tipos escalares

function soma(int ...$valores){

    return array_sum($valores);

}

echo soma(2, 2);
echo "\n";
echo soma(25, 2);
echo "\n";