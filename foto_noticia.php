<?php
    session_start();
    include "conexaobd.php";
    $idnoticia = $_GET['id'];

    if($_POST){
        include 'includes/upload_fotos.php';
    }
?>
<?php include "includes/pagina_inicial.php"; ?> <!-- cabecalho -->
<?php include "bloqueio_login.php"; ?>
<?php include "includes/navbar.php"; ?> <!-- menu -->
<div class="container">
    <div class="card">
    <div class="card-body">
    <h1>Foto Noticia</h1>
	<form method="post" action="foto_noticia.php?id=<?php echo $idnoticia;?>" enctype="multipart/form-data"> <!-- multipart/form-data serve para pegar arquivos sem ele nao funciona-->
		<input type="hidden" name="id" size="15" value="<?php echo $dados['id'];?>"/>
        <div class="form group">
            <label class="col-md-4 control-label" for="titulo">Imagem</label>
            <div class="col-md-8">
                <input id="imagem" name="imagem" type="file" placeholder="" class="form-control input-md" required="">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary waves-effect ">Atualizar</button>
    </form>
        </div>
    </div>
</div>
<?php include "erro.php"; ?> <!-- mensagem de erro -->
<?php include "includes/footer.php"; ?> <!-- rodape -->