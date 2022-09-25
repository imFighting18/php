<?php

$carros = array(1 => "BMW", 2 => "Ferrari", 3 => "Camaro");
$carros[] = "Amarok";
echo $carros[4] . "<hr>";

$motos = array();
$motos = "Yamaha";
$motos = "Honda";
print_r($motos);
echo "<hr>";

$clientes = ["Rodrigo", "Felipe", "Gabriel"];
echo count($clientes) . "<hr>";

foreach ($clientes as $valor) {
    echo $valor . "<br>";
}


$pessoa = array("nome" => "Gabriel", "idade" => 18);
echo "<hr>" . $pessoa["nome"] . "<hr>";

foreach ($pessoa as $indice => $valor) {
    echo "$indice: $valor <br>";
}

$times = array(
    "cariocas" => array("quarto" => "vasco", "segundo" => "flamengo", "sexto" => "botafogo"),
    "paulistas" => array("primeiro" => "palmeiras", "nono" => "corinthians", "décimo" => "são paulo", "terceiro" =>  "santos")
);

echo "<hr>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo "$indice: $valor <br>";
}
echo "<hr>";

foreach ($times["paulistas"] as $indice => $valor) {
    echo "$indice: $valor <br>";
}