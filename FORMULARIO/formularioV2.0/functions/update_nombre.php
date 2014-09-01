<?php
include ("sqlite/bdd_sqlite.php");

$new_nombre = $_POST['new_nombre'];
$nombre = $_POST['nombre'];
updateNombre($nombre, $new_nombre);
session_start();
unset($_SESSION['usuario']);
setcookie("usuario");
 $_SESSION['usuario'] = $new_nombre;
Header("Location: ../index.php");

?>

