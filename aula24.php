<?php

$num = 1234.56;
$preco = number_format($num, 2, ",", ".");
echo "O valor é $preco";
echo "<hr>";
echo round(6.10);
echo "<hr>";
echo ceil(10.10);
echo "<hr>";
echo floor(1.99);
echo "<hr>";
echo rand(1,20);