<?php

include ("sqlite/bdd_sqlite.php");

function load_edit($opt){
	echo "<h3>Actualizar :</h3>";
	//ACTIALIZAR NOMBRE
	if($opt == 1){
		$nombre = $_SESSION['usuario'];
		?>
		<br><br><br>
		<form name="formulario" action="functions/update_nombre.php" method="post" >
		<center>
                <table>
                        <tr align="center">
                                <td><b>Nombre :<b></td>
                                <td><input name='new_nombre' type='text' > </td>
                        </tr>
			<tr>
				<td><input name='nombre' type='hidden' value=<?php echo $nombre; ?> > </td>
				<td><input name="boton" type="submit" id="boton" value="Actualizar" /></td>
			</tr>
		</table>
		</center>
		</form>
		<br><br><br>
		<?php
	}
	//ACTUALIZAR APELLIDO
        if($opt == 2){
                $nombre = $_SESSION['usuario'];
                ?>
                <br><br><br>
                <form name="formulario" action="functions/update_apellido.php" method="post" >
                <center>
                <table>
                        <tr align="center">
                                <td><b>Apellido :<b></td>
                                <td><input name='new_apellido' type='text' > </td>
                        </tr>
                        <tr>
                                <td><input name='nombre' type='hidden' value=<?php echo $nombre; ?> > </td>
                                <td><input name="boton" type="submit" id="boton" value="Actualizar" /></td>
                        </tr>
                </table>
                </center>
                </form>
                <br><br><br>
                <?php
        }

        //ACTUALIZAR CLAVE
        if($opt == 3){
                $nombre = $_SESSION['usuario'];
                ?>
                <br><br><br>
                <form name="formulario" action="functions/update_clave.php" method="post" >
                <center>
                <table>
                        <tr align="center">
                                <td><b>Clave :<b></td>
                                <td><input name='new_clave' type='password' > </td>
                        </tr>
                        <tr>
                                <td><input name='nombre' type='hidden' value=<?php echo $nombre; ?> > </td>
                                <td><input name="boton" type="submit" id="boton" value="Actualizar" /></td>
                        </tr>
                </table>
                </center>
                </form>
                <br><br><br>
                <?php
        }

        //ACTUALIZAR CORREO
        if($opt == 4){
                $nombre = $_SESSION['usuario'];
                ?>
                <br><br><br>
                <form name="formulario" action="functions/update_correo.php" method="post" >
                <center>
                <table>
                        <tr align="center">
                                <td><b>Correo :<b></td>
                                <td><input name='new_correo' type='text' > </td>
                        </tr>
                        <tr>
                                <td><input name='nombre' type='hidden' value=<?php echo $nombre; ?> > </td>
                                <td><input name="boton" type="submit" id="boton" value="Actualizar" /></td>
                        </tr>
                </table>
                </center>
                </form>
                <br><br><br>
                <?php
        }

        //ACTUALIZAR PROF
        if($opt == 5){
                $nombre = $_SESSION['usuario'];
                ?>
                <br><br><br>
                <form name="formulario" action="functions/update_prof.php" method="post" >
                <center>
                <table>
                        <tr align="center">
                                <td><b>Profesión :<b></td>
                                <td><input name='new_prof' type='text' > </td>
                        </tr>
                        <tr>
                                <td><input name='nombre' type='hidden' value=<?php echo $nombre; ?> > </td>
                                <td><input name="boton" type="submit" id="boton" value="Actualizar" /></td>
                        </tr>
                </table>
                </center>
                </form>
                <br><br><br>
                <?php
        }

        //ACTUALIZAR FOTO
        if($opt == 6){
                $nombre = $_SESSION['usuario'];
                $foto = getFoto($nombre);
                ?>
                <br><br><br>
                <form name="formulario" action="functions/update_foto.php" method="post"  enctype="multipart/form-data">
                <center>
                <table>
                        <tr align="center">
                                <td>
                                        <label for="archivo"><b>Foto :</b></label>
                                </td>
                                <td>
                                	<input name='nombre' type='hidden' value=<?php echo $nombre; ?> >
                                	<input name='foto' type='hidden' value=<?php echo $foto; ?> >
                                        <input name="archivo" type="file" id="archivo" />
                                        <input name="boton" type="submit" id="boton" value="Actualizar" />
                                </td>
                        </tr>
                </table>
                </center>
                </form>
                <br><br><br>
                <?php
        }


}

?>
