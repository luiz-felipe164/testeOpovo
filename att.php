<?php 

	// include com conexão. Atualização dos valores da tabela tendo como parametro o id 
	include("connect.php");

	$id= $_POST['id'];
	$nome= $_POST['nome'];
	$email= $_POST['email'];
	// if para testar se query foi concluida com sucesso
	if(mysqli_query($con, "update cliente set nome='".$nome."', email='".$email."' where id='".$id."'")){

	echo "<script>alert('Atualização concluída!!'); window.location.href='listaUsuario.php' </script>";
}else{
	echo "<script>alert('Problema no banco de dados'); window.location.href='listaUsuario.php' </script>";

}



	

?>