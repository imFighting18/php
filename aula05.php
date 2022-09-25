<?php

$nome = "Gabriel";
var_dump($nome);

if (is_string($nome)) {
    echo "<br> É uma string! <hr>";
} else {
    echo "<br> Não é uma string! <hr>";
}

$idade = 18;
var_dump($idade);

if (is_int($idade)) {
    echo "<br> É um número! <hr>";
} else {
    echo "<br> Não é um número! <hr>";
}

$altura = 1.65;
var_dump($altura);

if (is_float($altura)) {
    echo "<br> É um float! <hr>";
} else {
    echo "<br> Não é um float! <hr>";
}

$admin = false;
var_dump($admin);

if (is_bool($admin)) {
    echo "<br> É um booleano! <hr>";
} else {
    echo "<br> Não é um booleano! <hr>";
}

$carros = array("Gol", "Ford", "Uno", "Camaro",20,20.5,true);
var_dump($carros);
echo "<hr>";

class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this -> $nome = $nome;
    }
}

$cliente = new Cliente();
$cliente -> atribuirNome("Gabriel");
var_dump($cliente);

if (is_object($cliente)) {
    echo "<br> É um objeto! <hr>";
} else {
    echo "<br> Não é um objeto! <hr>";
}

$cliente = null;
var_dump($cliente);

if (is_null($cliente)) {
    echo "<br> É um NULL! <hr>";
} else {
    echo "<br> Não é um NULL! <hr>";
}