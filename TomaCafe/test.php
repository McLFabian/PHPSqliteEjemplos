<?php

include "bdd/basedatos.php";

//$id=$_POST['id'];
$id=4;

echo "<h2>INSERT</H2>";
$user=new User;
$user->conn();
$user->insert("fabian3", "fabian3@maiil.cl", "123");
//$user->conn();
$user->getUser($id);

?>
