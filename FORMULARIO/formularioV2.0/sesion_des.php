<?php
session_start();
unset($_SESSION['usuario']);
setcookie("usuario");
Header("Location: index.php");

?>

