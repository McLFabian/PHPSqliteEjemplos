<?php
session_start();
// unset($_SESSION['id']);
unset($_SESSION['nombre']);
setcookie("nombre");
setcookie("id");
Header("Location: index.php");
?>
