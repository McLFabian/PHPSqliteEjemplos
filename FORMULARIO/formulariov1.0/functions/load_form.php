<?php

function load_form()
{
?>
        <script language="javascript">
        function comprobar()
        {
            var texto1 = document.login.nick.value;
            var texto2 = document.login.clave.value;

            if(texto1 == "")
            {
                alert ("Ingrese el nombre del usuario!")
                return false;
            }

            if(texto2 == "")
            {
                alert ("Debe ingresar una clave!")
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


