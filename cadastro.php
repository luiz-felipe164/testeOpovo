
<?php
//Include da conexão e funções(no caso a funcao insert)
	include("connect.php");
	include("functions.php");
	@$nome = $_POST['nome'];
	@$email = $_POST['email'];
	// verificação se variáveis estão preenchidas para efetuar inserção no banco de dados
	if($nome != "" && $email!=""){
		insert($nome,$email);
		echo "Cadastrado!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container col-sm-6">
		<form action="inserir.php" method="POST">
			<div class="col-md-6">
				<label>Nome</label>	
				<input type="text" name="nome" placeholder="Informe seu nome" class="form-control" required="">
			</div>
		
			<div class="col-md-6">
				<label>Senha</label>	
				<input type="email" class="form-control" name="email" placeholder="Informe seu email" required=""> <br>
			</div>
			<div class="col-md-12">
				<button class="btn btn-primary">Cadastrar</button>
				<button class="btn btn-warning"><a href="index.html">Voltar</a></button>
			</div>
		</form>
	</div>
	
	
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>