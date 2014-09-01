<?php
include ("sqlite/bdd_sqlite.php");

$nombre = $_POST['nombre'];
$foto  = $_POST['foto'];
$error = $_FILES['archivo']['error'];
$nombre_archivo = $_FILES['archivo']['name'];
$uploaddir = "../images/users/";
$uploadfile = $uploaddir.basename($_FILES['archivo']['name']);

$subido = false;
$estado;

if(isset($_POST['boton']) && $error==UPLOAD_ERR_OK){
        $subido = copy($_FILES['archivo']['tmp_name'], $uploadfile);
}
if($subido){
        $estado = "El archivo subio con exito";
}
else{
        $estado ="Se ha producido un error: ".$error;
        echo $estado;
        break;
}

updateFoto($nombre, $nombre_archivo);

unlink("../images/users/$foto");
Header("Location: ../index.php");

?>

