<?php

require_once 'db_connect.php';
session_start();

if (isset($_POST['btn-entrar'])) {
    $erros = array();
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($email) or empty($senha)) {
        $erros[] = "<li> Algum campo está vazio! </li>";
    } else {
        $sql = "SELECT email FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            mysqli_close($connect);
            if (mysqli_num_rows($resultado) == 1) {
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            } else {
                $erros[] = "<li> Senha e/ou e-mail não conferem! </li>";
            }
        } else {
            $erros[] = "<li> Não existe nenhum registro! </li>";
        }
    }
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

    <?php

    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo $erro;
        }
    }

    ?>

    <hr>


    <form action="" method="POST">
        E-mail: <input type="text" name="email"> <br>
        Senha: <input type="password" name="senha" id="isenha"> <br>
        <button type="submit" name="btn-entrar"> Entrar </button>
    </form>
</body>

</html>