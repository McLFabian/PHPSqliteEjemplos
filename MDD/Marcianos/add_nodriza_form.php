 
<!-- BEGIN INIT -->
<?php include('lib/check.php'); ?>
<?php include('lib/init.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->

<center>
<form role="form"  method="post" action="add_nodriza.php">
  <div class="form-group" style="width:300px">
    <label for="exampleInputEmail1">Nombre Nueva Nave Nodriza :</label>
    <input  name="nombre"  class="form-control" id="exampleInputEmail1" placeholder="Nombre de la Nave Nodriza" /required>
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
