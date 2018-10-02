<?php 
//Include com as funções query(que faz consulta)
	include("functions.php");
	include("connect.php");
	@$nome = $_GET['nome'];
	@$email = $_GET['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<table border="1" class="table table-dark">
		<tr><th scope="col">Clientes</th></tr>
		<tr><td>Nome</td><td>Email</td><td>Apagar</td><td>Atualizar</td></tr>
		
	<?php 
	//Caso pesquisado vai utilizar função query() se não vai pegar todos os resultado da tabela
		if($nome!="" || $email!=""){
		$result = query($nome,$email);
		}else{
			$result = mysqli_query($con, "select * from cliente");
		}
		// mysqli_fetch_array() para obter os resultados, transformo-os em array e chamo os valores desejados por $linha['']
		// button com onclick e script window.location.href para redirecionamento da página
		while($linha = mysqli_fetch_array($result)){?>
			<tr><td><?php echo $linha['nome'] ?></td>
				<td><?php echo $linha['email'] ?></td>
				<td><button class="btn btn-danger" onclick="window.location.href='delete.php?id=<?php echo $linha['id']?>'" id="excluir">Excluir cliente</button> </td>
				<td><button class="btn btn-warning" onclick="window.location.href='update.php?id=<?php echo $linha['id']?>'" id="atualizar">Atualizar cliente</button> </td></tr>
		
		<?php
	}

	?>	
		</table>
		<button class="btn btn-default"><a href="index.html">Voltar</a></button>
	</div>
	
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>