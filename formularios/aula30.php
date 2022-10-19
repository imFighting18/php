<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_POST['enviar-form'])) {
        $erros = array();

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo $nome;

        echo "<br>";

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        echo $idade;
        if (!filter_var($idade, FILTER_VALIDATE_INT)) {
            echo "Idade precisa ser um número!";
        }

        echo "<br>";

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        echo $email;

        echo "<br>";

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        echo $url;

    }

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"> <br>
        Idade: <input type="text" name="idade"> <br>
        E-mail: <input type="text" name="email"> <br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="enviar-form">Enviar</button>
    </form>
</body>

</html>