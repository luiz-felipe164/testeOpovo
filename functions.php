<?php 
	// Séries de funções utilizadas em outras páginas
	function insert($nome,$email){
		include("connect.php");
		if(mysqli_query($con, "insert into cliente values('','".$nome."','".$email."')")){
			echo "<script>alert('Cliente Cadastrado com sucesso!'); window.location.href='cadastro.php'</script>";
		}else{
			echo "<script> alert('Problema ao cadastrar o cliente, tente novamente!'); window.location.href='cadastro.php';</script>";
		}
	}

	function query($nome,$email){
		include("connect.php");
		$result=mysqli_query($con, "Select * from cliente where nome='".$nome."' or numero='".$email."'");
		return $result;
	}

	function delete($id){
		include("connect.php");
		if(mysqli_query($con, "delete from cliente where id='".$id."'")){
			echo "<script>alert('Cliente excluído'); window.location.href='listaUsuario.php'</script>";
		}else{
			echo "<script> alert('Problema ao excluir cliente'); window.location.href='listaUsuario.php';</script>";
		}
	}

?>