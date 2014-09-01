<?php

function comprobarnavegador(){
?>
<script type="text/javascript">
var is_ie = navigator.userAgent.toLowerCase().indexOf('msie ') > -1;
if (is_ie ) {
            var posicion = navigator.userAgent.toLowerCase().lastIndexOf('msie ');
            var ver_ie = navigator.userAgent.toLowerCase().substring(posicion+5, posicion+8);
            //Comprobar version
            ver_chrome = parseFloat(ver_ie);
	    alert('Puede ser que el sitio no se vea de forma correcta ya que su navegador es Internet Explorer, Version: ' + ver_ie);
            alert('Porfavor descargue un navegador más actualizado como Firefox o Chrome');
        }
</script>
<?php
}
?>

