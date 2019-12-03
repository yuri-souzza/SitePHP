<?php
    if(isset($_GET['id'])){
        $idnoticia = $_GET['id'];
    }
    
    if(isset($_POST['id'])){
    
        include "conexaobd.php";
        $idnoticia = $_POST['id'];
        $sql = "DELETE FROM noticia WHERE id={$idnoticia}";
    
    if ($conn->query($sql) === TRUE){
        header("location: lista_noticias.php");
    }else{
        echo "Error: ".$conn->error;
    }
    $conn->close();
}
?>
<?php include "includes/pagina_inicial.php"?>
<?php include "bloqueio_login.php"; ?>
<?php include "includes/navbar.php"?>
<form method="POST" action="excluir_noticia.php">
	<label> Deseja Realmente Excluir ? </label>
	<input type="hidden" name="id" value="<?php echo $idnoticia; ?>">
	<input type="submit" value="Sim">
</form>
    