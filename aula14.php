<?php
$n1 = 10;
$n2 = 10;
$media = ($n1 + $n2) / 2;

if ($media >= 6) {
    echo "Aprovado!";
} else if ($media >= 4 && $media < 6) {
    echo "Recuperação!";
} else {
    echo "Reprovado!";
}
echo "<hr>".($media >= 7 ? "Aprovado" : "Reprovado");
