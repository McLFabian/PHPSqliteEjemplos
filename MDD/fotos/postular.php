<!-- BEGIN INIT -->
<?php session_start(); ?>
<?php include('lib/init.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->

<div class="jumbotron">
    <table>
        <tr>
            <td>
                <h1>S.I.G.E.S  </h1>
                <p>Postulaci&oacute;n</p>
                <center>
		<form role="form"  method="post" action="add_solicitud.php"  enctype="multipart/form-data">
		<div class="form-group" style="width:300px">
		      <label for="exampleInputEmail1">Agregar Nuevo Usuario:</label><br>
		      <br>
		      <b>Nombre: </b><input  name="nombre"  class="form-control" id="exampleInputEmail1" placeholder="Nombre de Usuario" /required><br>
		      <b>Rut: </b><input  name="rut"  class="form-control" id="exampleInputEmail1" placeholder="11.111.111-1" /required><br>
		      <b>Correo: </b><input  name="mail"  class="form-control" id="exampleInputEmail1" placeholder="correo@mail.org" /required><br>
		      <b>Dirección: </b><input  name="direccion"  class="form-control" id="exampleInputEmail1" placeholder="" /required><br>
		      <b>Fono: </b><input  name="fono"  class="form-control" id="exampleInputEmail1" placeholder="" /required><br>
		      <b>CV:</b><input name="cv" type="file" id="cv" />
		  </div>
                
            </td>
        </tr>
        </table>
</div>
  <?php /*<input  type="submit" id="boton" value="Enviar" />*/ ?>
  <button name="boton" type="submit" class="btn btn-default">Agregar</button>
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
