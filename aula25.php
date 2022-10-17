<?php

function exibirNome($nome) {
    echo "Meu nome é $nome!";
}

exibirNome("Gabriel");

echo "<hr>";

function calcMedia($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3)/3;
    if ($media >= 7) {
        echo "Aprovado!";
    } else {
        echo "Reprovado";
    }
}

calcMedia(10,10,10);