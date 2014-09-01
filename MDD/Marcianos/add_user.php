 
<!-- BEGIN INIT -->
<?php 
include ('bdd/sqlite.php');
include('lib/check.php');

$nombre=$_POST['nombre'];
$password=$_POST['password'];
$rol=$_POST['rol'];

if($nombre == ""){
	header('Location: panel.php');
}

?>
<?php include('lib/init.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->
<center>

<?php

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
