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
        $formatos = array("png", "jpg", "gif");

        while ($contador < $quantidadeArquivos) {
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            if (!in_array($extensao, $formatos)) {
                echo "Extensão incorreta!";
            } else {
                $pasta = "formularios/";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid() . ".$extensao";

                if (move_uploaded_file($temporario, $pasta . $novoNome)) {
                    echo "Upload feito com sucesso!";
                } else {
                    echo "Algum erro ocorreu!";
                }
            }
        }
    }

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" style="margin-bottom: 20px;" multiple> <br>
        <input type="submit" name="enviar-form">
    </form>

</body>

</html>