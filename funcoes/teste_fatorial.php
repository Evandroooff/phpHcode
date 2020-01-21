<?php
//Função recursiva para calcular fatorial

function calculaFatorial($numFatorial){
    if($numFatorial <= 1){
        $numFatorial = $numFatorial;
    } else {
        $numFatorial *= calculaFatorial($numFatorial-1);
    }
    return $numFatorial;
}

$num = 4;
echo calculaFatorial($num);