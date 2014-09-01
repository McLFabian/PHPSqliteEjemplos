 
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

	/*
	  function insert($nombre, $rol, $passwd){
    $pass = sha1($passwd);
    $query =  $this->DB->exec("INSERT INTO user(user,password,mail) VALUES ('$nombre', $rol, '$pass');");
        if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }
    $this->DB->close();
  }
	*/
	?>
  	<div class="form-group" style="width:300px">
    		<label for="exampleInputEmail1">Agregar Nuevo Usuario:</label><br>
			<br><input  name="mail"  class="form-control" id="exampleInputEmail1" placeholder="E-Mail" /required><br>
    		<br><input  name="nombre"  class="form-control" id="exampleInputEmail1" placeholder="Nombre de Usuario" /required><br>
			<input  type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Contraseña" /required>
			
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
