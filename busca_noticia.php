
<?php
    session_start();
    include 'bloqueio_login.php';
    $noticias = null;
    if(isset($_GET['titulo'])){
        include "conexaobd.php";
        $titulo = $_GET['titulo'];
        $sql = "SELECT * FROM noticia WHERE titulo LIKE'%{$titulo}%'";
        
        $noticias = $conn->query($sql);
        $conn->close();
    }
?>

<?php include "includes/pagina_inicial.php"; ?> <!-- cabecalho -->
<?php include "includes/navbar.php"; ?> <!-- menu -->
<?php include "includes/jumbo.php"; ?>
<div class="container">
	<div class="card">
		<div class="card-body" id="bodycard">   
        <h1>Busca de Noticia</h1>
        <form class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" name="titulo" class="form-control" id="email" placeholder="Digite o titulo da materia">
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>

<?php if ($noticias!==null){?>
<table class="table">
	<thead> <!-- cabecalho ou menu -->
		<tr>
			<th scope="col">titulo</th>
			<th scope="col">Autor</th>
			<th scope="col">data Publicaçao</th>
			<th scope="col">EXCLUIR</th>
		</tr>
	</thead>

	<tbody> <!-- corpo -->

<?php
    
    if ($noticias->num_rows > 0) { // verificando se hรก cliente. 
        while($row = $noticias->fetch_assoc()) { // $clientes->fetch_assoc() -> transformar dados em matriz.
            echo '<tr scope="row">';
                // "<td>{echo $row['nome']}</td>"; ou "<td>".$row['nome']."</td>"; podemos usar umas das duas formas

            echo "<td>{$row['titulo']}</td>";

            echo "<td>{$row['autor']}</td>";

            echo "<td>{$row['data_noticia']}</td>";


            echo '<td><a class="btn btn-outline-elegant" href="editar_noticias.php?id='.$row['id'].'"><i class="fas fa-pencil-alt"></i>
            editar</a></td>';

            echo '<td><a  class="btn btn-outline-danger" href=excluir_noticia.php?id='.$row['id'].'"><i class="fas fa-trash-alt"></i>
                        excluir</a></td>';

            echo "<tr/>";
        }
    }
?>
	</tbody>
</table>
<div class="btn btn-primary">
Total Registros: <span class="badge badge-light"><?php echo $noticias->num_rows; ?></span>;
</div>
		</div>
    </div>
</div>

<?php } ?>
<?php include "includes/footer.php"; ?> <!-- rodape -->
         
         
