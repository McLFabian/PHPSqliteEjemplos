 
<!-- BEGIN INIT -->
<?php 
include ('bdd/sqlite.php');
include('lib/check.php');

//$today = date("Y-m-d");

$capacidad=$_POST['capacidad'];
$origen=$_POST['origen'];
$destino=$_POST['destino'];
$hora_origen=$_POST['start-time'];
$hora_destino = date("H:i", strtotime("$hora_origen +1 minute"));

//$hora_destino=$_POST['start-time'].":15";
//$fecha_origen=$today . " " . $_POST['start-time'].":00";
//$fecha_destino=$today . " " . $_POST['end-time'].":00";


if($capacidad == ""){
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

$aeronave= new Aeronave;
$aeronave->conn();
//echo "Capacidad: $capacidad - Origen: $origen - Destino: $destino - 1 - Hora $hora_origen - Destino $hora_destino ";
$aeronave->insert($capacidad,$origen,$destino,1,$hora_origen,$hora_destino);
echo "<div class='alert alert-success'><a href='#' class='alert-link'>La Aeronave ha sido agregada exitosamente.</a></div>"; 


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
