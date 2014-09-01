<?php
include ('sqlite.php');

$usuario = new Usuarios;
$usuario->conn();
$name = $usuario->get_nombre(1);
$id = $usuario->get_id('admin');
$edo = $usuario->login('admin', 'admin');
$rol = $usuario->get_rol(1);
echo "nombre : $name\n";
echo "id : $id\n";
if ($edo != 0){
  echo "Usuario Valido\n";
}
else{
  echo "Usuario Invalido\n";
}
echo "rol $rol\n";
//$usuario->insert('Test', 2, 'hola');
//$usuario->update_passwd(1, 'admin');

$aeronave = new Aeronave;
$aeronave->conn();
$date_1=date("Y-m-d H:m:s");
$date_2=date("Y-m-d H:m:s", strtotime( "$date_1 + 10 second"));
//echo "$date_1 | $date_2\n";
//$aeronave->insert(10, 1, 2, 1, $date_1, $date_2);
//$variable=$aeronave->get_fecha_origen(1);
//$variable=$aeronave->get_fecha_destino(1);
//$variable=$aeronave->get_limite_pasajeros(1);
//$variable=$aeronave->get_id_nave_origen(1);
$variable=$aeronave->get_id_estado(1);
echo "var : $variable\n";

?>
