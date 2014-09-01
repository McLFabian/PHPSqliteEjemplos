 
<!-- BEGIN INIT -->
<?php 
include ('bdd/sqlite.php');
include('lib/check.php');

$nombre=$_POST['nombre'];
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

$nave_nodriza= new NaveNodriza;
$nave_nodriza->conn();

$n = $nave_nodriza->get_id($nombre);
if ($n == "None"){
	$nave_nodriza->insert($nombre);
	echo "<div class='alert alert-success'><a href='#' class='alert-link'>La Nave Nodriza ' $nombre ' ha sido agregada exitosamente.</a></div>";
}
else{
	echo "<div class='alert alert-danger'><a href='#' class='alert-link'>La Nave Nodriza ' $nombre ' ya existe.</a></div>";
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
