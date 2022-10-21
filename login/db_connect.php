<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "login";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()) {
    echo "Algo deu errado. ".mysqli_connect_error();
}

?>