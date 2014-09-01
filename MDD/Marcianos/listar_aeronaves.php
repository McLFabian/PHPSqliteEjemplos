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
	echo "<label for='exampleInputEmail1'>Lista de Aeronaves</label><br><br>";

	$aeronave= new Aeronave;
	$aeronave->conn();
	$aeronave->update_ruta();
	$aeronave->listar_aeronave();

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
 
