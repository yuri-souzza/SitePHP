<?php
    session_start();
	include "conexaobd.php";
	

	if(isset($_GET['ano'])){
		$ano = $_GET['ano'];
		$sql = "SELECT * FROM noticia WHERE YEAR(data_noticia) = {$ano}";
	}else{
		$sql = "SELECT * FROM noticia WHERE YEAR(data_noticia) = '2019'";
	}

	
	
    $noticias = $conn->query($sql);
    $conn->close();
?>
<?php include "includes/pagina_inicial.php"; ?>
<?php include "includes/navbar.php";?>
<?php include "includes/jumbo.php";?>
<br>
<div class="container">
    <div class="card">
        <div class="card-body" id="bodycard">
            <h1 class="text-center"> Ultimas Noticia </h1>
        </div>
    </div>
</div>
<br>
<div class="d-flex" id="wrapper">
	<div class="bg-light border-right" id="sidebar-wrapper">
		<div class="sidebar-heading">Data Noticia </div>
		<div class="list-group list-group-flush">
			
			<a href="ultimas_noticias.php?ano=2019" class="list-group-item list-group-item-action bg-light">2019</a>
			<a href="ultimas_noticias.php?ano=2018" class="list-group-item list-group-item-action bg-light">2018</a>
			<a href="ultimas_noticias.php?ano=2017" class="list-group-item list-group-item-action bg-light">2017</a>
			<a href="ultimas_noticias.php?ano=2016" class="list-group-item list-group-item-action bg-light">2016</a>
			<a href="ultimas_noticias.php?ano=2015" class="list-group-item list-group-item-action bg-light">2015</a>
      </div>
    </div>
    <div id="page-content-wrapper">
		<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" id="sidebar">
			<button class="btn btn-primary" id="menu-toggle">Noticia Data</button>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<?php //include "pagex.php";?>
			<?php 
			if ($noticias->num_rows >0 ){
    while ($dados = $noticias->fetch_assoc()){
 ?>

<div class="row">
<div class="col-sm-3">
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
				<p class="card-text white-text mb-4"><?//php echo $dados['texto'];?></p>
				<p><?php echo $dados['data_noticia'];?></p>
				<a href="pagina_noticia.php?idnoticia=<?php echo $dados['id'];?>" class="white-text d-flex justify-content-end"><h5>Ler Mais <i class="fas fa-angle-double-right"></i></h5></a>
			</div>
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
</div>
<?php include "includes/footer.php";?>