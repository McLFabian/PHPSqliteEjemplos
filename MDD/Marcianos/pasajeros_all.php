<!-- BEGIN INIT -->
<?php session_start(); ?>
<?php include('lib/init.php'); ?>
<?php include('bdd/sqlite.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->
<center><h3>Adminitrar pasajeros</h3></center>
<br><br>
<?php
$pasajero= new Pasajero;
$aeroneve= new Aeronave;
$pasajero->conn();
$aeroneve->conn();
$pasajero->bajar_pasajeros();
$aeroneve->update_ruta();
$pasajero->listar_pasajeros();
?>

<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
