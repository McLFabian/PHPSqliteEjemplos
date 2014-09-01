<?php
include ('bdd/sqlite.php');

$aeronave= new Aeronave;
$aeronave->conn();
$ticket="N5@486";
$id_vuelo=5;
$r=$aeronave->check_ticket($id_vuelo, $ticket);
echo "$r<br>"


?>
