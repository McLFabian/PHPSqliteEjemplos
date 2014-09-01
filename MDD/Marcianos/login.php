<!-- BEGIN INIT -->

<?php include('lib/init.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->

<center>
<form role="form"  method="post" action="sesion_login.php">
  <div class="form-group" style="width:300px">
    <label for="exampleInputEmail1">Usuario</label>
    <input  name="nombre"  class="form-control" id="exampleInputEmail1" placeholder="Ingrese su usuario">
  </div>
  <div class="form-group" style="width:300px">
    <label for="exampleInputPassword1">Password</label>
    <input name="passwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
  </div>
 
  <button type="submit" class="btn btn-default">Ingresar</button>
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






