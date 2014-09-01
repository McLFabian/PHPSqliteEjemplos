<!-- BEGIN INIT -->

<?php
include('lib/init.php');
include('bdd/sqlite.php');
include('lib/check.php'); //VERIFICA QUE ESTES CON SESION INICIADA

$edo = $_SESSION['edo'];

?>

<!-- END INIT -->

<?php
/*

   LAS VARIABLES PARA CREAR SESION LAS CAMBIE A sesion_login
   PORQUE CADA VEZ QUE VOLIAS A PANEL SE CREABAN Y HABIA ERROR DE CACHE

$edo=0;
session_start();
if(empty($_SESSION['nombre'])){
  $name=$_POST['nombre'];
  $passwd=$_POST['passwd'];
  $usuario = new Usuarios;
  $usuario->conn();
  $edo = $usuario->login($name, $passwd);
  $_SESSION['nombre']=$name;
}
else{
  $edo=1;
}

  HASTA AQUI MOVI
*/

?>

<!-- BEGIN MENU -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->
<?php
   if ($edo == 1){ //USUARIO ADMIN
  ?>
  <center>
  <div >
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
	<img style="width:200px" src="images/station.png" alt="...">
	<div class="caption">
	  <h3>Nodriza</h3>
	  <p>Crea destino para los extraterrestes</p>
	  <p><a href="add_nodriza_form.php" class="btn btn-primary" role="button">Crear</a> <a href="list_nodriza.php" class="btn btn-default"   role="button">Ver</a> <a href="#" class="btn btn-danger"   role="button">Borrar</a></p>
	</div>
      </div>
    </div>
<?php } ?>

<?php
   if ($edo == 1){ //USUARIO ADMIN
  ?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
	<img style="width:200px" src="images/nave.png" alt="...">
	<div class="caption">  
	  <h3>Aeronave</h3>
	  <p>Crea trasporte para los extraterrestes</p>
	  <p><a href="add_aeronave_form.php" class="btn btn-primary" role="button">Crear</a> <a href="listar_aeronaves.php" class="btn btn-default"   role="button">Ver</a> <a href="borrar_aeronave.php" class="btn btn-danger"   role="button">Borrar</a></p>
	</div>
      </div>
    </div>
<?php } ?>

<?php
   if ($edo == 1){ //USUARIO ADMIN
  ?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
	<img style="width:156px" src="images/user.png" alt="...">
	<div class="caption">
	  <h3>Usuarios</h3>
	  <p>Agrega usuarios al sistema</p>
	  <p><a href="add_user_form.php" class="btn btn-primary" role="button">Agregar</a> <a href="ver_usuarios.php" class="btn btn-default"   role="button">Ver</a> <a href="borrar_usuario.php" class="btn btn-danger"   role="button">Borrar</a></p>
	</div>
      </div>
    </div>  
  </div>
<?php } ?>

<?php
   if ($edo == 1){ //USUARIO ADMIN
  ?>
  <div >
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
	<img style="width:200px" src="images/pasajeros.jpg" alt="...">
	<div class="caption">  
	  <h3>Gestiona pasajeros</h3>
	  <p>Crontrol de transpote de extraterrestres</p>
	  <p><a href="add_pasajero_form.php" class="btn btn-primary" role="button"> Crear Pasajero </a> <a href="listar_aeronaves.php" class="btn btn-default" role="button"> Ver por vuelo </a> <a href="pasajeros_all.php" class="btn btn-warning"   role="button">Ver todos</a></p>
	</div>
      </div>
    </div>
<?php } ?>

<?php
   if ($edo == "1" or $edo == "3"){ //USUARIO ADMIN & REVISOR
  ?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
	<img style="width:235px" src="images/escaner.jpg" alt="...">
	<div class="caption">  
	  <h3>Aeronaves Revisadas</h3>
	  <p>Lista de aeronaves que han sido revisadas</p>
	  <p> <a href="revisadas.php" class="btn btn-default"   role="button">Ver naves listas</a></p>
	</div>
      </div>
    </div>
  </div>
<?php } ?>


<?php
   if ($edo == "1"){ //USUARIO ADMIN
  ?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
	<img style="width:165px" src="images/matrix.gif" alt="...">
	<div class="caption">  
	  <h3>Historial</h3>
	  <p>Historial de vuelos</p>
	  <p><a href="historico.php" class="btn btn-primary" role="button">Ver</a></p>
	</div>
      </div>
    </div>
  </div>
<?php } ?>


  </center>
<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
