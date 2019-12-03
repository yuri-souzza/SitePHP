<?php

    include "conexaobd.php";
    $idnoticia  =$_POST['id'];
    $titulo     =$_POST['titulo'];
    $autor      =$_POST['autor'];
    $texton     =$_POST ['texton'];
    $dtnoticia  =$_POST ['data_noticia'];
    $sql = "UPDATE noticia SET titulo='{$titulo}', autor='{$autor}', texto='{$texton}',data_noticia='{$dtnoticia}' WHERE id={$idnoticia}";

    if ($conn->query($sql) === TRUE){
        echo "Atualizado com sucesso";
        header("Location: lista_noticias.php");
    }else{
        echo "Error: ".$conn->error;
    }

    $conn->close();
?>
