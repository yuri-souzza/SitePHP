<?php
    session_start();
    include "conexaobd.php";
    
    $sql = "SELECT * FROM noticia";
    $noticias = $conn->query($sql);

    $conn->close();
?>
<?php include "includes/pagina_inicial.php"; ?>
<?php include "bloqueio_login.php"; ?>
<?php include "includes/navbar.php"; ?>

<br>
<div class="container">
	<div class="card">
		<div class="card-body" id="bodycard">
			<h1> Lista De Noticia </h1>
			<a class="btn btn-outline-primary btn-sm" href="cadastro_noticias.php"><i class="fas fa-pencil-alt"></i></i> Cadastrar Noticias</a></td>
			<a class="btn btn-outline-primary btn-sm" href="busca_noticia.php"><i class="fas fa-search"></i>Buscar Noticias</a></td>'
			<table class="table">
				<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">Titulo</th>
						<th scope="col">Autor </th>
						<th scope="col">Data da Noticia</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php
						if ($noticias->num_rows >0 ){                  // Verificando se há noticias (num_rows)
							while ($row = $noticias->fetch_assoc()){  // $noticias->fetch_assoc()) -> transforma dados em matriz 
								echo '<tr scope="row">';
								echo "<td>";
								$file = "foto_noticia/".$row['id'].".jpg";
								if (file_exists($file)) { // file_exists->arq existe
								echo "<img src=\"{$file}\" width=\"50\"> "; // se existir coloca o que foi excolhido
								}else{ // senao
								echo "<img src=\"foto_noticia/perfil.jpg\" width=\"50\"> "; // acoloca a foto de perfil
								}
								echo "</td>";
								echo "<td>{$row ['titulo']}</td>";
					   
								echo "<td>{$row ['autor']}</td>";
								
								echo "<td>{$row ['data_noticia']}</td>";
								
								echo '<td><a class="btn btn-outline-elegant" href="editar_noticias.php?id='.$row['id'].'"><i class="fas fa-pencil-alt"></i>
									editar</a></td>';
							   
								echo '<td><a  class="btn btn-outline-danger" href=excluir_noticia.php?id='.$row['id'].'"><i class="fas fa-trash-alt"></i>
									excluir</a></td>';
								
								echo '<td><a  class="btn btn-outline-info" href=foto_noticia.php?id='.$row['id'].'"><i class="fas fa-camera"></i>
									foto</a></td>';

									
							
								echo "<tr/>";

							} 
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="btn btn-elegant">
		Total Registros: <span class="badge badge-light"><?php echo $noticias->num_rows; ?></span>
	</div>
</div>
<?php include "includes/footer.php"; ?>