<?php
	include('bdd/sqlite.php');

	$edo=0;
	session_start();

	if(empty($_SESSION['nombre'])){
		$name=$_POST['nombre'];
		$passwd=$_POST['passwd'];
		$usuario = new Usuarios;
		
		$usuario->conn();
		$edo = $usuario->login($name, $passwd);
		$_SESSION['log_'] = true;
		$_SESSION['nombre']=$name;
		$_SESSION['edo']=$edo;
	}
	else{
  		$edo=1;
	}

	header("Location: panel.php");

?>

