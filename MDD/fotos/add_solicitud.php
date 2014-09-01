 
<!-- BEGIN INIT -->
<?php 
include ('bdd/sqlite.php');
include('lib/check.php');
$uploaddir = "files/";
$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$mail=$_POST['mail'];
$direccion=$_POST['direccion'];
$fono= $_POST['fono'];
$error = $_FILES['cv']['error'];
$cv = $_FILES['cv']['name'];
$uploadfile = $uploaddir.basename($_FILES['cv']['name']);


?>
<?php include('lib/init.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->
<center>

<?php

$edo =1;
if (empty($_FILES['archivo']['name']))
{
	echo "Entro";
	$edo=0;
}

$subido = false;
$estado;
if(isset($_POST['boton']) && $error==UPLOAD_ERR_OK){
	$subido = copy($_FILES['cv']['tmp_name'], $uploadfile);
}
if($subido){
	$estado = "El archivo subio con exito";
}
else{
	$estado ="Se ha producido un error: ".$error;
	echo $estado;
	break;
}

$mes=date('m');
$dia=date('d');
$ano=date('Y');
$estado=0;

$sol = new Solictud;
$sol->conn();
$sol->insert($rut, $estado, $nombre, $mail, $direccion, $fono, $dia, $mes, $ano, $cv);

echo "Agregado con exito!<br>";
/*
$new_user= new Usuarios;
$new_user->conn();

$n = $new_user->get_id($nombre);
if ($n == "0"){
	$new_user->insert($nombre,$rol,$password);
	echo "<div class='alert alert-success'><a href='#' class='alert-link'>El usuario ' $nombre ' ha sido agregado exitosamente.</a></div>";
}
else{
	echo "<div class='alert alert-danger'><a href='#' class='alert-link'>El usuario ' $nombre ' ya existe.</a></div>";
}
*/
?>
  

</center>
<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
