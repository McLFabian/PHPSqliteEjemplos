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
$id =$_GET['id'];
$pasajero=new Pasajero;
$pasajero->conn();
$pasajero->delete($id);
?>
<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
