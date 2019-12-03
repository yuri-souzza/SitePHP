<?php include "conexaobd.php"; ?>
	
<?php include "includes/pagina_inicial.php"; ?>
<?php include "includes/navbar.php"; ?>
<div class="container">
	<div class="row">
		<?php
			
			include "conexaobd.php";

			$idnoticia = $_GET['idnoticia'];
			$sql = "SELECT * FROM noticia WHERE id={$idnoticia}";
			$noticia = $conn->query($sql);
			// print_r($cliente->fetch_assoc());
			$dados = $noticia->fetch_assoc();
			$conn->close();
		?>
		<div class="jumbotron text-center">
			<div class="view overlay my-4">
				<img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="img-fluid" alt="">
				<a href="#">
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>
			<h5 class="indigo-text h2 mb-4"><?php echo $dados['titulo']; ?></h5>
			<p class="text-left"><strong>Autor: <?php echo $dados['autor'];?></strong></p>
			<p class="text-left">Data:<?php echo $dados['data_noticia'];?></p>
			<p class="text-justify"> <?php echo $dados['texto'];?></p>
		</div>
	</div>
</div>