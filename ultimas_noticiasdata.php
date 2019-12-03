<?php
    session_start();
    include "conexaobd.php";
    $sql = "SELECT * FROM noticia";
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
		<div class="sidebar-heading">Start Bootstrap </div>
		<div class="list-group list-group-flush">
			<a href="ultimas_noticias.php" class="list-group-item list-group-item-action bg-light">Voltar</a>
		
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
			<?php include "pagex.php";?>
		</div>
    </div>
</div>
<?php include "includes/footer.php";?>