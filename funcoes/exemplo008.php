<?php //PHP 7 Função por retorno

function soma(int ...$valores):string{

    return array_sum($valores);

}

echo soma(2, 2);
echo "\n";
echo soma(25, 2);
echo "\n";
echo var_dump(soma(12, 22));