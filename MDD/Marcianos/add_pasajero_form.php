<!-- BEGIN INIT -->
<?php session_start(); ?>
<?php include('lib/init.php'); ?>
<?php include('bdd/sqlite.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->

<center>
<form role="form"  method="post" action="add_pasajero.php">
  <div class="form-group" style="width:300px">
    <label for="exampleInputEmail1">Nombre Pasajero:</label>
    <input  name="nombre"  class="form-control" id="exampleInputEmail1" placeholder="Nombre del pasajero" /required>
  </div>
  <div class="form-group" style="width:300px">
    <label for="exampleInputEmail1">Procedencia del Pasajero:</label>
    <?php
	$nodriza= new NaveNodriza;
	$nodriza->conn();
	$nodriza->listar_nave_nodriza_box();
    ?>
  </div>
  </div>

  <button type="submit" class="btn btn-default">Crear</button>
</form>
</center>
<br><br><br>

<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
