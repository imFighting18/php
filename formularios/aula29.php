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

    if(isset($_POST['enviar-form'])) {
        $erros = array();
        
        if ($idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            echo $idade;
            echo "<br>";
        }

        if ($email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            echo $email;
            echo "<br>";
        }

        if ($peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
            echo $peso;
            echo "<br>";
        } 
    }

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Idade: <input type="text" name="idade"> <br>
        E-mail: <input type="text" name="email"> <br>
        Peso: <input type="text" name="peso"> <br>
        IP: <input type="text" name="ip"> <br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="enviar-form">Enviar</button>
    </form>
</body>

</html>