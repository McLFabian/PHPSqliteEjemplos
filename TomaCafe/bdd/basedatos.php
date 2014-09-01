<?php

/**
* @Conexion con la Base de datos
*/
class DB extends SQLite3 {
  function __construct( $file ) {
    $this->open( $file, SQLITE3_OPEN_READWRITE );
   }
}


function db_connect() {
    $db = new DB('bdd/registro.db');
    if ($db->lastErrorMsg() != 'not an error') {
        print "Database Error: " . $db->lastErrorMsg() . "<br />"; //Does not get triggered
    }
    return $db;
}


class User{

    var $DB;
    function conn(){
        $this->DB= db_connect();
    }

  //INSERTA UN USUARIO EN LA BDD	
  function insert($nombre, $correo, $clave){
    $pass = sha1($clave);
    $query =  $this->DB->exec("INSERT INTO user(nombre,correo, clave) VALUES ('$nombre', '$correo', '$clave');");
        if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }
    //$this->DB->close();
  }

	
	//BUSCAR UN USUARIO POR ID Y RETORNA EL NOMBRE
    function getUser($id){
        try{
            $query = "select nombre, correo, clave from user where id=$id;";
            $result = $this->DB->query($query);
            if ($res = $result->fetchArray(SQLITE3_ASSOC)){
		echo "Nombre :".$res['nombre'];
		echo "Correo :".$res['correo'];
		echo "Clave :".$res['clave'];
            }
            else{
    	        echo "None";
            }
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    //$this->DB->close();
  }
}

?>
