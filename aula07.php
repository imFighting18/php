<?php

$nome = "Gabriel Santos";
$a = 1;
$b = 6;
$c = 7;

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

function exibeCidade() {
    global $cidade;
    $cidade = "São Paulo";
}

exibeCidade();
echo $cidade;
echo "<hr>";

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'] . "<hr>";
}

soma();