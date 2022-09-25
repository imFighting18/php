<?php

$nomes = ["Primo" => "Gabriel", "Vizinho" => "Felipe", "Pai" => "Márcio", "Mãe" => "Márcia"];

//echo is_array($nomes) ? "É um array!" : "Não é um array!";
//echo in_array("Felipe", $nomes) ? "Este valor existe no array!" : "Este valor não existe no array!";

/*$keys = array_keys($nomes);
print_r($keys);*/

/*$values = array_values($nomes);
print_r($values);*/

/*$carros = ["Camaro", "Uno", "Gol"];
$motos = ["Pop100", "50cc", "cb1000"];
$veiculos = array_merge($carros,$motos);
print_r($veiculos);*/

/*$carros = ["Camaro", "Uno", "Gol"];
print_r($carros);
echo "<br>";
echo array_pop($carros)."<br>";
echo array_pop($carros) . "<br>";
print_r($carros);*/

//echo array_shift($nomes);

/*array_unshift($nomes, "Leandro", "Cláudio");
print_r($nomes);*/

/*array_push($nomes, "Leandro", "Cláudio");
print_r($nomes);*/

/*$keys = ["Campeão", "Vice", "Terceiro"];
$values = ["Flamengo", "Vasco", "Botafogo"];
$times = array_combine($keys, $values);
print_r($times);*/

/*$numeros = [5,3,2,5,2,1,4];
echo array_sum($numeros);*/

/*$data = "25/09/2022";
$novadata = explode('/', $data);
print_r($novadata);*/

echo implode('<br>',$nomes);