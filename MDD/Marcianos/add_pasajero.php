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
$nombre=$_POST['nombre'];
$id_nave=$_POST['id_nave'];
$ticket=0;
//EL pasajero se creea un una nave nodriza
$tipo_nave=0;// 0  El id_nave corresponde a una nodriza y 1 corresponde a una aeronave

$pasajero= new Pasajero;
$pasajero->conn();
$pasajero->insert($nombre, $id_nave, $ticket, $tipo_nave);
echo "<center>";
echo "<div style=\"width:500\"class='alert alert-success'><a href='#' class='alert-link'>El Pasajero ' $nombre ' ha sido agregada exitosamente.</a></div>";
echo "<br>";
echo "<a href=\"add_pasajero_form.php\" class=\"btn btn-primary\" role=\"button\">Volver</a>";
echo "</center>";
?>



<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
