<?php
$nome1 = "João";
echo $nome1;
echo "\n";
unset($nome1);

if(isset($nome1)){
    echo $nome1;
} else {
    echo "Variável vazia!";
}