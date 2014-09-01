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
                <img style="width:300px" src="images/fotografo.jpg">
            </td>
            <td>
                <h1>S.I.G.E.S  </h1>
                <p>Sistema de Gestión de Solicitudes</p>
                <?php 
		  if(empty($_SESSION['nombre'])){
		    echo "<p><a href=\"login.php\" class=\"btn btn-primary btn-lg\" role=\"button\">Login</a></p>";
		  }
		  else{
		    echo "<p><a href=\"sesion_des.php\" class=\"btn btn-primary btn-lg\" role=\"button\">Salir</a></p>";
		  }
		?>
                
            </td>
        </tr>
        </table>
</div>

<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
