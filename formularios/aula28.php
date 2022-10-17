<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cadastro.php" method="GET">
        Nome: <input type="text" name="nome">
        E-mail: <input type="text" name="email">
        <button type="submit">Enviar</button>
        <a href="cadastro.php?nome=Gabriel&email=gabriel.oliveira2040@hotmail.com&idade=18">Enviar dados</a>
    </form>
</body>

</html>