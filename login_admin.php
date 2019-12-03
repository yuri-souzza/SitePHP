<?php include "includes/pagina_inicial.php" ?> 
<?php include "includes/navbar.php" ?> 
<div class="login-form">
	<h1>LOGIN</h1>
	<form action="conexao_loginadm.php" method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Senha</label>
			<input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="" required>
		</div>
		<button type="submit" class="btn btn-sm btn-outline-primary">Entrar</button>
		<?php include "erro.php";?>
	</form>
</div>
<?///php include "message.php" ?> 
<?php include "includes/footer.php" ?> 

