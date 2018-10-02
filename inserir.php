<?php 
	include 'connect.php';
	include 'functions.php';

	$nome= $_POST['nome'];
	$email= $_POST['email'];

	insert($nome,$email);

 ?>