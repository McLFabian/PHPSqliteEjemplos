<?php

include ("functions/sqlite/bdd_sqlite.php");

$uploaddir = "images/users/";
$uploadfile = $uploaddir.basename($_FILES['archivo']['name']);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$prof = $_POST['prof'];
$error = $_FILES['archivo']['error'];
$nombre_archivo = $_FILES['archivo']['name'];

$edo =1;
if (empty($_FILES['archivo']['name']))
{
	$edo=0;
}
//$fecha = date("d-m-Y H:i:s");
if($edo !=0){
	insertUsuario($nombre, $apellido, $correo, $prof, $nombre_archivo);
}

$subido = false;
$estado;
if(isset($_POST['boton']) && $error==UPLOAD_ERR_OK){
	$subido = copy($_FILES['archivo']['tmp_name'], $uploadfile);
}
if($subido){
	$estado = "El archivo subio con exito";
}
else{
	$estado ="Se ha producido un error: ".$error;
	echo $estado;
	break;
}
Header("Location: ver.php");


?>
