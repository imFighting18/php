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
