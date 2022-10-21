<?php

if (isset($_POST['btn-entrar'])) {
    echo "Clicou!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        E-mail: <input type="text" name="email"> <br>
        Senha: <input type="password" name="senha" id="isenha"> <br>
        <button type="submit" name="btn-entrar"> Entrar </button>
    </form>
</body>
</html>