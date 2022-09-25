<?php

$nomes = ["Primo"=>"Gabriel", "Vizinho"=>"Felipe", "Pai"=>"Márcio", "Mãe"=>"Márcia"];

//echo is_array($nomes) ? "É um array!" : "Não é um array!";
//echo in_array("Felipe", $nomes) ? "Este valor existe no array!" : "Este valor não existe no array!";
$keys = array_keys($nomes);
print_r($keys);