<?php

require_once("config.php");

session_regenerate_id();//gera um novo ID dentro de uma sessão já iniciada

echo session_id();

echo "\n";

var_dump($_SESSION);