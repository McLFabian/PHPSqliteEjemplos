<?php
include ("sqlite/bdd_sqlite.php");

$new_prof = $_POST['new_prof'];
$nombre = $_POST['nombre'];
updateProf($nombre, $new_prof);
Header("Location: ../index.php");

?>

