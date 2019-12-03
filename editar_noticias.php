<?php
	session_start();
	include "bloqueio_login.php"; 
	include "conexaobd.php";
    $idnoticia = $_GET['id'];
    $sql = "SELECT * FROM noticia WHERE id={$idnoticia}";
    $noticia = $conn->query($sql);
    // print_r($cliente->fetch_assoc());
    $dados = $noticia->fetch_assoc();
    $conn->close();
?>
<?php include "includes/pagina_inicial.php" ?>

<?php include "includes/navbar.php" ?>
<div class="container">
	<div class="card" id="bodycard">
		<div class="card-body" >
			<h3><p class="text-center">Editar Noticia </p></h3>
            <hr>
            <form class="form-horizontal" method="post" action="conexao_editarnoticia.php">
				<input type="hidden" name="id" size="15" value="<?php echo $dados['id'];?>" />
				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>Titulo</label>
						<input type="text" name="titulo" class="form-control" value="<?php echo $dados['titulo'];?>"/>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>Autor</label>
						<input type="text" name="autor" class="form-control" value="<?php echo $dados['autor'];?>">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>Corpo Da Materia</label>
						<textarea  name="texton" class="form-control" ><?php echo $dados['texto'];?>"</textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 offset-md-3">
						<label>Data da Noticia</label>
						<input type="date" name="data_noticia" class="form-control" value="<?php echo $dados['data_noticia'];?>">
						<button type="submit" class="btn btn-outline-primary waves-effect btn-lg">Atualizar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include "includes/footer.php" ?>
