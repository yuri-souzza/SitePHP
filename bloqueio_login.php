<?php
    // se nao existir nomeUsuario,redireciona para index
    if (!isset($_SESSION["idUsuario"]))
    header("Location: home_page.php?erro=102");
    // isset -> Verifica se foi criada
?>