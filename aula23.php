<?php

$nome = "Gabriel";

$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";
echo substr($nome, 4, 1);
echo "<hr>";
echo str_pad($nome, 9, "*", STR_PAD_BOTH);
echo "<hr>";
echo str_repeat($nome, 5);
echo "<hr>";
echo strlen($nome);
echo "<hr>";
echo str_replace($nome);
echo "<hr>";