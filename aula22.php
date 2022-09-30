<?php

for ($contador=1;$contador<=10;$contador++) {
    echo "<br>";
    echo "8 x ".$contador." = ".($contador*8);
}

echo "<hr>";

$cores = array("Verde", "Amarelo", "Vermelho");

foreach($cores as $valor) {
    echo $valor."<br>";
}