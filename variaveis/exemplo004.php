<?php
$nome = $_GET["a"];

//var_dump($nome);

if ($nome == NULL){
    echo "Variável vazia";
    $nome = "a";
    echo $nome;
}