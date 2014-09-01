 
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
<form role="form"  method="post" action="add_user.php">
	<?php 	
	  $new_user= new Usuarios;
	  $new_user->conn();

	?>
  	<div class="form-group" style="width:300px">
    		<label for="exampleInputEmail1">Agregar Nuevo Usuario:</label><br>
    		<br><input  name="nombre"  class="form-control" id="exampleInputEmail1" placeholder="Nombre de Usuario" /required><br>
			<input  type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Contraseña" /required>
			<br>Seleccionar Rol: &nbsp;<?php $new_user->listar_rol(); ?><br>
    </div>

  <button type="submit" class="btn btn-default">Agregar</button>
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
