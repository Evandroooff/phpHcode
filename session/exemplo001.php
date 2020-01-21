<?php

require_once("config.php");

//session_start(); exemplo original

//session_unset($_SESSION['nome']); //essa função sem varável alguma apaga todas as sessões;

$_SESSION["nome"] = "Hcode";

//session_destroy(); // ele apaga todas as informações do usuário, diferente do session_unset