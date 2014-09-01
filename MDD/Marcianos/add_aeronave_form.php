 
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

<script>
function comprobarNodrizas(){ 
   	origen = document.f1.origen.value 
   	destino = document.f1.destino.value 

   	if (origen == destino) 
      	 alert("El origen y el destino de las Nodrizas no pueden ser iguales.") 
} 
</script>

<center>
<form name="f1" role="form"  method="post" action="add_aeronave.php">
	<?php 	
	  $nave_nodriza= new NaveNodriza;
	  $nave_nodriza_d= new NaveNodriza;
	  $nave_nodriza->conn();
	  $nave_nodriza_d->conn();

	  

	?>
  	<div class="form-group" style="width:300px">
    		<label for="exampleInputEmail1">Crear Nueva Aeronave:</label><br>
    		<!--<input  name="nombre"  class="form-control" id="exampleInputEmail1" placeholder="Nombre de la Aeronave" /required>-->
    		<br>Seleccione la capacidad:
    		<input type="number" name="capacidad" min="1" max="100" placeholder="1"/><br>
    		<br>Origen de la Nave Nodriza: &nbsp;&nbsp;&nbsp;<?php $nave_nodriza->get_listar(2); ?><br>
			<br>Destino de la Nave Nodriza:&nbsp;&nbsp;<?php $nave_nodriza_d->get_listar(3); ?><br>
		
			<!--<br><strike>Fecha de vuelo:</strike> <input type="date" min="<?php echo $today; ?>" max="<?php echo date("Y-m-d", strtotime("$today +7 day")); ?>" placeholder="AAAA-MM-DD" name="fecha_origen" ><br>
			<br><strike>Fecha de llegada:</strike> <input type="date" min="<?php echo date("Y-m-d", strtotime("$today +8 day")); ?>" max="<?php echo $arrive; ?>" name="fecha_destino" placeholder="AAAA-MM-DD" ><br>
			-->
			<?php $today = date("H:i"); $hour = date("H:i", strtotime("$today +1 hour")); ?>
			<br>Hora de vuelo: &nbsp;&nbsp;<input id="exit-time" name="start-time" type="time" value="<?php echo $hour; ?>" /required><br>
			
			<!--<br>Hora de llegada: <input id="exit-time" name="end-time" type="time" /required><br>-->
  	
  </div>

  <button type="submit" value="Crear_Aeronave" onClick="comprobarNodrizas()" class="btn btn-default">Crear</button>
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
