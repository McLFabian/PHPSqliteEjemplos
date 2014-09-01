<!-- BEGIN INIT -->
<?php 

include ('bdd/sqlite2.php');
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

	if(isset($_POST["change_level"])){
		$nombre = $_POST["nombre"];
		$id = $_POST["id"];
		$level = $_POST["level"];
		if($nombre != ''){
			$change = new Fotografo;
			$change->conn();

			
			if($level > 4){
			echo "<div class='alert alert-danger'><a href='#' class='alert-link'>El nivel maximo ya está asignado. No se realizaron Cambios.</a></div><br>";
			}
			else if($level < 1){
			echo "<div class='alert alert-danger'><a href='#' class='alert-link'>El nivel es incorrecto. No se realizaron Cambios.</a></div><br>";
			}
			else{
				$change->update_level($id,$level);
				echo "<div class='alert alert-danger'><a href='#' class='alert-link'>El fotografo ' $nombre ' ahora tiene nivel ' $level '.</a></div><br>";
			}
		}
	}
	
	echo "<label for='exampleInputEmail1'>Gestionar niveles</label><br><br>";
	$fotografo= new Fotografo;
	$fotografo->conn();
		
	$fotografo->listar_form_niveles();
	
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
 
