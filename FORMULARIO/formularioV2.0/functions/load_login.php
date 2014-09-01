<?php


function load_login()
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
	   <br><br><br>
	   <p>
        	<form name="login" action="get_login.php" method="post" onsubmit="if (comprobar()) return true; else { alert('Tenga cuidado'); return false; }"  class="form-horizontal">
		        <center><table><tr>
			<td>Usuario:</td><td><INPUT TYPE="text" NAME="nick"></td>
		        </tr><tr>
		        <td>Clave:</td><td><INPUT TYPE=PASSWORD NAME="clave"></td>
		        </tr><tr>
			<td><button type="button" class="btn btn-default" onClick="location.href='registro.php'" >Registrarme</button></td><td><INPUT TYPE="submit" VALUE="Entrar" class="btn btn-default"></td>
		        </tr></table></center>
			</p><br><br><br><br>
		</form>
<?php
}
?>
