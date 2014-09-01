<?php

include ("functions/sqlite/bdd_sqlite.php");

session_start();

$nombre = $_POST['nick'];
$passwd = $_POST['clave'];

$id =0;

//Verificar si existe el usuario
$id = getIdUsuario($nombre, $passwd);

if ($id !=0){ // Si el usuario existe
	$_SESSION['usuario'] = $nombre;
	Header("Location: index.php");
}
else if(id ==0){//
	Header("Location: index.php");
}

?>

