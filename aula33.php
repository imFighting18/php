<?php

$senha = "1231231231456";
$novaSenha = base64_encode($senha);
echo $novaSenha . "<br>";
echo "Descriptografada: ". base64_decode($novaSenha);

echo "<hr>";

$senha = "12345678";
$novaSenha = md5($senha);
echo $novaSenha . "<br>";

echo "<hr>";

$senha = "12345678";
$novaSenha = sha1($senha);
echo $novaSenha . "<br>";

?>