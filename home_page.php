<?php include "conexaobd.php"; ?>
<?php include "includes/pagina_inicial.php"; ?>
<?php include "includes/navbar.php"; ?>
<br>
<div class="container">
	<div class="row center">
<?php

    $sql = "SELECT * FROM noticia";
    $noticias = $conn->query($sql);

    if ($noticias->num_rows >0 ){
    while ($dados = $noticias->fetch_assoc()){
	
 ?>

<div class="col-sm-5">
	<div class="card-group">
		<div class="card" >
			<div class="view overlay">
				<img class="card-img-top" src="img/bg1.jpg" alt="Card image cap">
				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>
			<div class="card-body elegant-color white-text rounded-bottom">
				<a class="activator waves-effect mr-4"></a>
				<h4 class="card-title" ><?php echo $dados['titulo']; ?></h4>
				<hr class="hr-light">
				<p class="card-text white-text mb-4"><?php echo $dados['texto']; echo substr($dados['texto'],0,100)."...";?></p>
				<p><?php echo $dados['data_noticia'];?></p>
				<a href="pagina_noticia.php?idnoticia=<?php echo $dados['id'];?>" class="white-text d-flex justify-content-end"><h5>Ler Mais <i class="fas fa-angle-double-right"></i></h5></a>
			</div>
		</div>
	</div>
</div>
<?php
}
    }

?>
	</div>
</div>
<?php include "includes/footer.php";?>
