<?php

function load_form()
{
?>
        <script language="javascript">
        function comprobar()
        {
            var nombre = document.formulario.nombre.value;
	    var apellido = document.formulario.apellido.value;
            var passwd = document.formulario.passwd.value;
	    var passwd_conf = document.formulario.passwd_conf.value;
	    var correo = document.formulario.correo.value;
	    var prof = document.formulario.prof.value;
	    var foto = document.formulario.archivo.value;

            if(nombre == ""){
                alert ("Ingrese el nombre del usuario!")
                return false;
            }

            if(apellido == ""){
                alert ("Ingrese el apellido del usuario!")
                return false;
            }

            if(passwd == ""){
                alert ("Debe ingresar una clave!")
                return false;
            }

	   if(passwd != passwd_conf){
		alert ("Las claves no coinciden")
		return false;
	   }

            if(correo == ""){
                alert ("Ingrese un correo!")
                return false;
            }

            if(correo == ""){
                alert ("Ingrese una profesión!")
                return false;
            }

            if(correo == ""){
                alert ("Agregue una foto!")
                return false;
            }



        return true;
	}
        </script>
<p><br>
<form name="formulario" action="get_form.php" method="post" enctype="multipart/form-data" onsubmit="if (comprobar()) return true; else { alert('escriba bien'); return false; }">
<center>
		<table>
			<tr align="center">
				<td>Nombre:</td>
				<td><input name='nombre' type='text'> </td>
			</tr>
			<tr align="center">
				<td>Apellido:</td>
				<td><input name='apellido' type='text'></td>
			</tr>
                        <tr align="center">
                                <td>Password:</td>
                                <td><input name='passwd' type='password'></td>
                        </tr>
                        <tr align="center">
                                <td>Confirmar Password:</td>
                                <td><input name='passwd_conf' type='password'></td>
                        </tr>
			<tr align="center">
				<td>Correo:</td>
				<td> <input name='correo' type='text'></td>
			</tr>
			<tr align="center">
				<td>Profesión:</td>
				<td><input name='prof' type='text'></td>
			</tr>
			<tr align="center">
				<td>
					<label for="archivo">Foto</label>
				</td>
				<td>
					<input name="archivo" type="file" id="archivo" />
					<input name="boton" type="submit" id="boton" value="Enviar" />
				</td>
			</tr>
		</table>
</form>
		</p><br><br><br><br>

<?php
}
?>


