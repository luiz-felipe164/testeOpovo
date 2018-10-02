<!DOCTYPE html>
<html>
<head>
	<title>Atualização de Cliente</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<table id="table">
		<?php 
		//obtenção do id pela url por meio do get e utilização dele para pesquisa no banco de dados
		$id = $_GET['id'];
		include("connect.php");
		  	$result = mysqli_fetch_array(mysqli_query($con,"select * from cliente where id=".$id.""));

		?>
		<form action="att.php" method="post">
			<tr>
				<th>Atualizar Cliente</th>
			</tr>
			<input type="hidden" name="id" <?php echo "value='".$result['id']."'"; ?> required >
			<tr>
				<td>Nome</td><td> <input class="form-group" type="text" name="nome" <?php echo "value='".$result['nome']."'"; ?> required></td>
			</tr>
			<tr>
				<td>E-mail:</td><td> <input type="text" name="email" <?php echo "value='".$result['email']."'"; ?> required></td>
			</tr>
			<tr>
				<td></td><td align="right"><button class="btn btn-success">Atualizar</button></td>
			</tr>
		</form>
		<tr><td><button class="btn btn-default" onclick="window.location.href='index.html'">Retornar</button></td></tr>
	</table>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
