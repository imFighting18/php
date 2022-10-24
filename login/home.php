<?php

        require_once 'db_connect.php';
        session_start();

        if (!isset($_SESSION['logado'])) {
            header("Location: index.php");
        }

        $id = $_SESSION['id_usuario'];
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $res = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($res);
        mysqli_close($connect);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-color: red;">
    <h1 style="color: green;">Você foi logado com sucesso!</h1>
    <h2> <?php echo $dados['email']; ?> </h2>
    <a href="logout.php">Clique aqui para sair!</a>
</body>
</html>