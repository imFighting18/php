<?php

$senha = "123456";

$senha_db = '$2y$10$KELG3BBEereTgNmVXAgTI.Und3nZA31Pa3lFgIUmFSdGp92lcYOfe';

if (password_verify($senha, $senha_db))
 {
    echo "Senha válida!";
 } else {
    echo "Senha inválida!";
 }

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

echo $senhaSegura;
