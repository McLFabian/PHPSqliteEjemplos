<?php
include ("sqlite/bdd_sqlite.php");

$new_correo = $_POST['new_correo'];
$nombre = $_POST['nombre'];
updateCorreo($nombre, $new_correo);
Header("Location: ../index.php");

?>

