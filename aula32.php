<?php

    session_start();
    $_SESSION['cor'] = "Verde";

    echo $_SESSION['cor']."<br>";
    echo session_id();

?>