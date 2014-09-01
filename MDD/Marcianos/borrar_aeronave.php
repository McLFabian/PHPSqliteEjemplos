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

	if(isset($_POST["delete_aeronave"])){
		$id = $_POST["id"];
		
		if($id != ''){
			$del = new Aeronave;
			$del->conn();
			$del->delete($id);
			echo "<div class='alert alert-danger'><a href='#' class='alert-link'>La Aeronave ' $id ' ha sido eliminada.</a></div><br>";
		}
	}
	
	echo "<label for='exampleInputEmail1'>Lista de Aeronaves</label><br><br>";
	$aeronave= new Aeronave;
	$aeronave->conn();
		
	$aeronave->listar_form_delete();
	
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
 
