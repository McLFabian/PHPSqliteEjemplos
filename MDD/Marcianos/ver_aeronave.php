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
$id=$_GET['id'];
$aeronave= new Aeronave;
$aeronave->conn();
$aeronave->get_datos($id);

echo "<br><br>";
echo "<center><h3>Pasajeros</h3></center>";
//INVOCAR AERONAVES QUE POSEEAN ID_ORIGEN $id
$tipo_nave=1;
$pasajero = new Pasajero;
$aeronave = new Aeronave;
$pasajero->conn();
$aeronave->conn();
$pasajero->bajar_pasajeros();
$aeronave->update_ruta();
$pasajero->get_pasajeros_nave($id, $tipo_nave);

echo "<br><br>";

?>

<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
