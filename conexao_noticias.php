<?php
	include "conexaobd.php";

				
        $titulo     =$_POST['titulo'];
        $autor      =$_POST['autor'];
		$texton     =$_POST ['texton'];
		$texton = preg_replace("/[^a-z]/i", " ", $texton);
        $dtnoticia  =date("Y-m-d",strtotime($_POST ['data_noticia']));
				$sql = "INSERT INTO noticia VALUES (default,'{$titulo}','{$autor}','{$texton}','{$dtnoticia}')";

		if ($conn->query($sql) === TRUE) {
			$m = "Cadastrado com sucesso";
		} else {
			$erro = "Error: " .$conn->error;
		}
	$conn->close();
?>
