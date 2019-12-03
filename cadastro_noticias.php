<?php

    if($_POST){
        include 'conexao_noticias.php';
    }

?>

<?php include "includes/pagina_inicial.php";?>
<?php include "bloqueio_login.php"; ?>
<?php include "includes/navbar.php";?>
<br><br>
<div class="container">
	<div class="card" id="bodycard">
		<div class="card-body" >
			<h3><p class="text-center">Cadastro De Noticias </p></h3>
			<hr>
			<form class="form-horizontal" method="post" action="cadastro_noticias.php">
			<div class="form-group">
				<div class="col-md-6 offset-md-3">
					<label>Titulo</label>
					<input type="text" name="titulo" class="form-control" placeholder="Titulo">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 offset-md-3">
					<label>Autor</label>
					<input type="text" name="autor" class="form-control" placeholder="Autor">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 offset-md-3">
					<label>Corpo Da Materia</label>
					<textarea  name="texton" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 offset-md-3">
					<label>Data da Noticia</label>
					<input type="date" name="data_noticia" class="form-control" placeholder="Data De Noticia">
					<button type="submit" class="btn btn-outline-primary waves-effect ">Cadastrar</button>
				</div>
			</div>
		</div>
	</div>
<?php include "erro.php";?>
</div>

<?php include "includes/footer.php";?>