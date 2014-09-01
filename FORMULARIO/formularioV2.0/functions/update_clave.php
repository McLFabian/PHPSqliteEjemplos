<?php
include ("sqlite/bdd_sqlite.php");

$new_clave = $_POST['new_clave'];
$nombre = $_POST['nombre'];
updateClave($nombre, sha1($new_clave));
Header("Location: ../index.php");

?>

