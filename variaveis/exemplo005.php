<?php
$nome = "Glaucio";

function teste(){
    global $nome;
    echo $nome;
}

echo "\n";

function teste2(){
    $nome = "joão";
    echo $nome . "agora no teste 2";
}

teste();

teste2();