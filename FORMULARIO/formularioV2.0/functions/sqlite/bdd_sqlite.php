<?php


//CONEXION DESDE DIRECTORIO FUCNTIONS

function db_connect_tres() {
    class DB extends SQLite3 {
        function __construct( $file ) {
            $this->open( $file, SQLITE3_OPEN_READWRITE );
        }
    }
    $db = new DB('teleco.db');
    if ($db->lastErrorMsg() != 'not an error') {
        print "Database Error: " . $db->lastErrorMsg() . "<br />"; //Does not get triggered
    }
    return $db;
}


//CONEXION DESDE DIRECTORIO FUCNTIONS

function db_connect_dos() {
    class DB extends SQLite3 {
        function __construct( $file ) {
            $this->open( $file, SQLITE3_OPEN_READWRITE );
        }
    }
    $db = new DB('sqlite/teleco.db');
    if ($db->lastErrorMsg() != 'not an error') {
        print "Database Error: " . $db->lastErrorMsg() . "<br />"; //Does not get triggered
    }
    return $db;
}

//CONEXION DESDE DIRECTORIO RAIZ
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
*     UPDATES
*
*-----------------------
*/

function updateFoto($nombre, $new_foto){
	echo "<p>entro $new_foto";
        $db = db_connect_dos();
	echo "<p>se conecto";
        $query =  $db->exec("update usuarios set foto='$new_foto' where nombre='$nombre';");
        if (!$query) {
                die("Database transaction failed: " . $db->lastErrorMsg() );
        }
        $db->close();

}



function updateProf($nombre, $new_prof){
        $db = db_connect_dos();
        $query =  $db->exec("update usuarios set prof='$new_prof' where nombre='$nombre';");
        if (!$query) {
                die("Database transaction failed: " . $db->lastErrorMsg() );
        }
        $db->close();
}


function updateCorreo($nombre, $new_correo){
        $db = db_connect_dos();
        $query =  $db->exec("update usuarios set correo='$new_correo' where nombre='$nombre';");
        if (!$query) {
                die("Database transaction failed: " . $db->lastErrorMsg() );
        }
        $db->close();
}


function updateClave($nombre, $new_clave){
        $db = db_connect_dos();
        $query =  $db->exec("update usuarios set passwd='$new_clave' where nombre='$nombre';");
        if (!$query) {
                die("Database transaction failed: " . $db->lastErrorMsg() );
        }
        $db->close();
}

function updateApellido($nombre, $new_apellido){
        $db = db_connect_dos();
        $query =  $db->exec("update usuarios set apellido='$new_apellido' where nombre='$nombre';");
        if (!$query) {
                die("Database transaction failed: " . $db->lastErrorMsg() );
        }
        $db->close();
}


function updateNombre($nombre, $new_nombre){
        $db = db_connect_dos();
        $query =  $db->exec("update usuarios set nombre='$new_nombre' where nombre='$nombre';");
        if (!$query) {
                die("Database transaction failed: " . $db->lastErrorMsg() );
        }
        $db->close();
}



/*
*-----------------------
*
*     INSERCIONES
*
*-----------------------
*/


function insertUsuario($nombre, $apellido, $passwd, $mail, $prof, $foto){
	$db = db_connect();
	$query =  $db->exec("INSERT INTO usuarios(nombre, apellido, correo, prof, foto, passwd) VALUES ('$nombre', '$apellido','$mail', '$prof', '$foto', '$passwd');");
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


function getFoto($user){
	$foto="none";
        $db = db_connect();
        $query = "select foto from usuarios where nombre='$user';";
        $result = $db->query($query);
	 while ($res = $result->fetchArray(SQLITE3_ASSOC)){
                $foto = $res['foto'];
	}
   	$db->close();
	return $foto;
}

function getUser($nombre){
        $db = db_connect();
        $query = "select * from usuarios where nombre='$nombre';";
        $result = $db->query($query);
	echo "<table>";
        while ($res = $result->fetchArray(SQLITE3_ASSOC)){
                $foto = $res['foto'];
		$clave= $res['passwd'];
                $nombre = $res['nombre'];
                $apellido = $res['apellido'];
                $correo = $res['correo'];
                $prof = $res['prof'];
		echo "<tr>";
		echo "<td><img style=\"height: 100px; width: 100px;\"  src=\"images/users/$foto\"><br><a href=\"edit.php?opcion=6\">Editar</a><br></td>";
		echo "<td>
			<b>Nombre :</b> $nombre <a href=\"edit.php?opcion=1\">Editar</a><br>
			<b>Apellido :</b> $apellido <a href=\"edit.php?opcion=2\">Editar</a><br>
			<b>Clave :</b> $clave <a href=\"edit.php?opcion=3\">Editar</a><br>
			<b>Correo :</b> $correo <a href=\"edit.php?opcion=4\">Editar</a><br>
			<b>Profesión :</b> $prof <a href=\"edit.php?opcion=5\">Editar</a><br>

		</td>";
		echo "</tr>";
	}
	echo "</table>";
   	$db->close();

}

function getIdUsuario($nombre, $passwd){
	$id=0;
	$db = db_connect();
	$passwd_sha1 = sha1($passwd);
	$query = "select count(nombre) as num from usuarios where nombre='$nombre' and passwd='$passwd_sha1';";
        $result = $db->query($query);
	while ($res = $result->fetchArray(SQLITE3_ASSOC)){
		$id = $res['num'];
	}
        $db->close();
	return $id;
}

function getUsuariosAll(){
	try{
		$db = db_connect();
		$query = "select * from usuarios";
		echo "<table class=\"table table-hover\">";
		$result = $db->query($query);
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
   	$db->close();

}

?>
