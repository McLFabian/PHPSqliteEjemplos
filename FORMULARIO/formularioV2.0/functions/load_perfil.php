<?php

include("functions/sqlite/bdd_sqlite.php");

function load_perfil(){
	$usuario =$_SESSION['usuario'];
	getUser($usuario);
}

?>
