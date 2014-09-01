<?php
include ("sqlite/bdd_sqlite.php");

$new_apellido = $_POST['new_apellido'];
$nombre = $_POST['nombre'];
updateApellido($nombre, $new_apellido);
Header("Location: ../index.php");

?>

