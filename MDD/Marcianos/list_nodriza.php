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
	echo "<label for='exampleInputEmail1'>Lista de Naves Nodrizas</label><br><br>";

	$nave_nodriza= new NaveNodriza;
	$nave_nodriza->conn();
	// $nave_nodriza->insert($nombre);
	$nave_nodriza->get_listar(1);

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
 
