<?php

function db_connect() {
    class DB extends SQLite3 {
        function __construct( $file ) {
            $this->open( $file, SQLITE3_OPEN_READWRITE );
        }
    }
    $db = new DB('functions/sqlite/teleco.db');
    if ($db->lastErrorMsg() != 'not an error') {
        print "Database Error: " . $db->lastErrorMsg() . "<br />"; //Does not get triggered
    }
    return $db;
}

/*
*-----------------------
*
*     INSERCIONES
*
*-----------------------
*/


function insertUsuario($nombre, $apellido, $mail, $prof, $foto){
	$db = db_connect();
	$query =  $db->exec("INSERT INTO usuarios(nombre, apellido, correo, prof, foto) VALUES ('$nombre', '$apellido', '$mail', '$prof', '$foto');");
    	if (!$query) {
        	die("Database transaction failed: " . $db->lastErrorMsg() );
    	}
   	$db->close();
}

/*
*-----------------------
*
*     CONSULTAS
*
*-----------------------
*/

function getUsuariosAll(){
	try{
		$db = db_connect();
		$query = "select * from usuarios";
		$result = $db->query($query);
		echo "<table class=\"table table-hover\">";
		while ($res = $result->fetchArray(SQLITE3_ASSOC)){
			$foto = $res['foto'];
			$nombre = $res['nombre'];
			$apellido = $res['apellido'];
			$correo = $res['correo'];
			$prof = $res['prof'];
			echo "<tr>";
			echo "<td><img style=\"height: 55px; width: 55px;\" src=\"images/users/$foto\"></td>";
			echo "<td> $nombre </td>";
			echo "<td> $apellido</td>";
			echo "<td> $correo</td>";
			echo "<td> $prof</td>";
			echo "</tr>";
		}
		echo "</table>";

	}
	catch (Exception $e){
		echo $e->getMessage();
        }
}

?>
