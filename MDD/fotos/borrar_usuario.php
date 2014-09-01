<!-- BEGIN INIT -->
<?php 
include ('bdd/sqlite.php');
include('lib/check.php');

?>
<?php include('lib/init.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->
<center>
<?php

	if(isset($_POST["delete_user"])){
		$nombre = $_POST["nombre"];
		$id = $_POST["id"];
		if($nombre != ''){
			$del = new Usuarios;
			$del->conn();
			$del->delete($id);
			echo "<div class='alert alert-danger'><a href='#' class='alert-link'>El usuario ' $nombre ' ha sido eliminado.</a></div><br>";
		}
	}
	
	echo "<label for='exampleInputEmail1'>Lista de Usuarios</label><br><br>";
	$user= new Usuarios;
	$user->conn();
		
	$user->listar_form_delete();
	
	echo "<br><br>";

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
 
