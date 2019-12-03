<?php
    session_start();

    // remove todas as variaveis
    session_unset();
    // destroi a sessão
    session_destroy();
    header("Location: home_page.php");
?>