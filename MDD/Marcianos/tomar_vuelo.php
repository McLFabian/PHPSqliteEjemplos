<!-- BEGIN INIT -->
<?php session_start(); ?>
<?php include('lib/init.php'); ?>
<?php include('bdd/sqlite.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->

<?php
$id_nodriza=$_GET['id'];
$id_pasajero=$_GET['pj'];
$aeronave= new Aeronave;
$aeronave->conn();
//id nodriza, el cero es para que imprima la tabla de aeronaves
$aeronave->tomar_aeronave($id_nodriza, $id_pasajero,0);

?>

<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
