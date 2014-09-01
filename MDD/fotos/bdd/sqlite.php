<?php
//error_reporting(E_ERROR);
/**
* @Conexion con la Base de datos
*/

class DB extends SQLite3{
  function __construct( $file ) {
    $this->open( $file, SQLITE3_OPEN_READWRITE );
   }
}

function db_connect() {
    $db = new DB('bdd/mdd.db');
    if ($db->lastErrorMsg() != 'not an error') {
        print "Database Error: " . $db->lastErrorMsg() . "<br />"; //Does not get triggered
    }
    return $db;
}

/**
* @Modelo para tabla solicitud
*/

class Solictud{
    var $DB;

    function conn(){
        $this->DB= db_connect();
    }
    
    function insert($rut, $estado, $nombre, $mail, $direccion, $fono, $dia, $mes, $ano, $cv){
    $query =  $this->DB->exec("INSERT INTO solicitud (rut, estado, nombre, mail, direccion, fono, dia, mes, ano, cv) VALUES ('$rut', $estado, '$nombre', '$mail', '$direccion', $fono, $dia, $mes, $ano, '$cv');");
    if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }
    $this->DB->close();
  }

  function check_rut($rut, $mes){
    $query= $this->DB->exec("select count(id) as num from solicitud where rut=$rut and mes=$mes");
    $result = $this->DB->query($query);
    if ($res = $result->fetchArray(SQLITE3_ASSOC)){
                return $res['num'];
    }
    else{
      return 0;
    }
   
   }



	function listar_solicitud(){
        try{
            $result = $this->DB->query("select id, rut, nombre, mail, direccion, fono, dia, mes, ano, cv from solicitud order by id;");
			echo "<center><table style=\"width:650px\" class=\"table table-striped\">";
		    echo "<tr><td><b> ID </b></td> <td><b> rut</b> </td> <td><b> nombre</b> </td> <td><b> Correo</b> </td> <td><b> Direccion</b> </td> <td><b> Fono</b> </td> <td><b> Dia / Mes / Año</b> </td> <td><b> CV</b> </td></tr> ";
		    while ($res = $result->fetchArray(SQLITE3_ASSOC)){
			$id = $res['id'];
			$rut = $res['rut'];
			$nombre = $res['nombre'];
			$mail = $res['mail'];
			$direccion = $res['direccion'];
			$fono = $res['fono'];
			$dia = $res['dia'];
			$mes = $res['mes'];
			$ano = $res['ano'];
			$cv = $res['cv'];
			echo "<tr>";
			echo "<td> $rol </td>"; 
			echo "<td> $nombre </td>";
			echo "</tr>";
		    }
	   	    echo "</table></center>";
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    $this->DB->close();
  }  


    
}


/**
* @Modelo para tabla user
*/
class Usuarios{
    var $DB;
    function conn(){
        $this->DB= db_connect();
    }

    function get_nombre($id){
        try{
            $query = "select nombre from user where id=$id";
            $result = $this->DB->query($query);
            if ($res = $result->fetchArray(SQLITE3_ASSOC)){
                return $res['user'];
            }
            else{
    	        return "None";
            }
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    $this->DB->close();
  }

  function get_id($nombre){
    try{
      $query = "select id from user where user='$nombre'";
      $result = $this->DB->query($query);
      if ($res = $result->fetchArray(SQLITE3_ASSOC)){
	    return $res['id'];
      }
      else{
	    return 0;
      }
    }
    catch (Exception $e){
	    echo $e->getMessage();
    }
    $this->DB->close();
  }

  function login($nombre, $passwd){
      try{
          $pass=sha1($passwd);
          $query = "select id from user where user='$nombre' and password='$pass'";
          $result = $this->DB->query($query);
          if ($res = $result->fetchArray(SQLITE3_ASSOC)){
	    //echo "id".$res['id'];
    	    return $res['id'];
          }
          else{
	    //echo "null";
    	    return 0;
          }
        }
        catch (Exception $e){
    	    echo $e->getMessage();
        }
    $this->DB->close();
  }

  
	function listar_user(){
        try{
            $result = $this->DB->query("select rol.nombre as rol, user.nombre as nombre from user, rol where user.rol = rol.id order by rol;");          
			
			echo "<center><table style=\"width:650px\" class=\"table table-striped\">";
		    echo "<tr><td><b> ROL </b></td> <td><b> Usuario</b> </td></tr> ";
		    while ($res = $result->fetchArray(SQLITE3_ASSOC)){
			$rol = $res['rol'];
			$nombre = $res['nombre'];
			echo "<tr>";
			echo "<td> $rol </td>"; 
			echo "<td> $nombre </td>";
			echo "</tr>";
		    }
	   	    echo "</table></center>";		
			
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    $this->DB->close();
  }  

  function listar_form_delete(){
		try{
		    $result = $this->DB->query("select rol.nombre as rol, user.nombre as nombre, user.id as id from user, rol where user.rol = rol.id order by rol;");          
			
	        echo "<center><table style=\"width:650px\" class=\"table table-striped\">";
		    echo "<tr><td><b> ROL </b></td> <td><b> Usuario </b> </td><td><b>Borrar</b></td></tr> ";
		    while ($res = $result->fetchArray(SQLITE3_ASSOC)){
				$rol = $res['rol'];
				$nombre = $res['nombre'];
				$id = $res['id'];
				echo "<form action='borrar_usuario.php' method='post'>";
				echo "<tr>";
				echo "<td> $rol </td>"; 
				echo "<td> $nombre </td>";
				echo "<input type='hidden' name='nombre' value='$nombre'>";				
				echo "<input type='hidden' name='id' value='$id'>";				
				echo "<td><button type='submit' name='delete_user' class='btn btn-danger'>Borrar</button></td>";
				echo "</tr></form>";
		    }
	   	    echo "</table></center>";
		
		}
		catch (Exception $e){
            echo $e->getMessage();
        }
    $this->DB->close();
  
  }
  
  function insert($nombre, $rol, $passwd){
    $pass = sha1($passwd);
    $query =  $this->DB->exec("INSERT INTO user(user,password,mail) VALUES ('$nombre', $rol, '$pass');");
        if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }
    $this->DB->close();
  }

  
  
  function delete($id){
    $query =  $this->DB->exec("DELETE FROM user WHERE id='$id';");
        /*if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }*/
    $this->DB->close();
  }  
  
    function update_nombre($id, $nombre){
        $query =  $this->DB->exec("update user set user='$nombre' where id=$id;");
        if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }
        $this->DB->close();

    }

    function update_passwd($id, $passwd){
        $pass = sha1($passwd);
        $query =  $this->DB->exec("update user set passwordd='$pass' where id=$id;");
        if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }
        $this->DB->close();
    }
}


/**
* @Modelo para tabla Aeronave
*/
class Fotografo{
    var $DB;
    function conn(){
        $this->DB= db_connect();
    }

  function listar_fotografos(){
        try{
            //$result = $this->DB->query("select * from aeronave order by id_nave_origen;");          
			$result = $this->DB->query("select id, rut, nombre, nivel, fono, direccion, cv from fotografo order by nombre;");          
			
			echo "<center><table style=\"width:600px\" class=\"table table-striped\">";
		    echo "<tr> <td><b> ID </b></td> <td><b> Rut </b></td> <td><b> Nombre </b></td> <td><b>Nivel</b></td> <td><b>Fono</b></td> <td><b> Direccion </b></td> <td><b> CV </b> </td></tr> ";
		    while ($res = $result->fetchArray(SQLITE3_ASSOC)){
			$id = $res['id'];
			$rut = $res['rut'];
			$nombre = $res['nombre'];
			$nivel = $res['nivel'];
			$fono = $res['fono'];
			$direccion = $res['direccion'];
			$cv = $res['cv'];
			
			
			echo "<tr>";
			echo "<td><a href='#'>Fotografo </a></td>"; 
			echo "<td> $rut </td>";
			echo "<td> $nombre </td>";
			echo "<td> $nivel </td>";
			echo "<td> $fono </td>";
			echo "<td> $direccion </td>";
			echo "<td> $cv </td>";
			echo "</tr>";
		    }
	   	    echo "</table></center>";		
			
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    $this->DB->close();
  }    
  
  function listar_form_niveles(){
        try{
            //$result = $this->DB->query("select * from aeronave order by id_nave_origen;");          
			$result = $this->DB->query("select id, rut, nombre, nivel, fono, direccion, cv from fotografo order by nombre;");          
			
			echo "<center><table style=\"width:600px\" class=\"table table-striped\">";
		    echo "<tr> <td><b> ID </b></td> <td><b> Rut </b></td> <td><b> Nombre </b></td> <td><b>Nivel</b></td> </tr> ";
		    while ($res = $result->fetchArray(SQLITE3_ASSOC)){
			$id = $res['id'];
			$rut = $res['rut'];
			$nombre = $res['nombre'];
			$nivel = $res['nivel'];
			$fono = $res['fono'];
			$direccion = $res['direccion'];
			$cv = $res['cv'];
			
			
			echo "<tr>";
			echo "<td><a href='#'>Fotografo </a></td>"; 
			echo "<td> $rut </td>";
			echo "<td> $nombre </td>";
			echo "<td><input type='number' min='1' max='5' $nivel </td>";
			
			echo "</tr>";
		    }
	   	    echo "</table></center>";		
			
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    $this->DB->close();
  }
  
  
  
  function get_datos($id){
      echo "<center><h3>Aeronave</h3></center>";
      echo "<center><table style=\"width:650px\" class=\"table table-striped\">";
      try{
        $query = "select * from aeronave where id='$id'";
        $result = $this->DB->query($query);
        if ($res = $result->fetchArray(SQLITE3_ASSOC)){
            echo "<tr>";
            echo "<td><b>ID</b></td><td>".$res['id']."</td>";
            echo "</tr><tr>";
            echo "<td><b>Limite Pasajeros</b></td><td>".$res['limite_pasajeros']."</td>";
            echo "</tr><tr>";
              $query = "select nombre from nave_nodriza where id='".$res['id_nave_origen']."'";
              $result = $this->DB->query($query);
	      if ($res2 = $result->fetchArray(SQLITE3_ASSOC)){
		echo "<td><b>Nave Origen</b></td><td>".$res2['nombre']."</td>";
	      }
            echo "</tr><tr>";
              $query = "select nombre from nave_nodriza where id='".$res['id_nave_destino']."'";
              $result = $this->DB->query($query);
	      if ($res3 = $result->fetchArray(SQLITE3_ASSOC)){
		echo "<td><b>Nave Origen</b></td><td>".$res3['nombre']."</td>";
	      }
            echo "</tr><tr>";
            echo "<td><b>Estado</b></td><td>".$res['id_estado']."</td>";
            echo "</tr><tr>";
            echo "<td><b>Fecha Origen</b></td><td>".$res['fecha_origen']."</td>";
            echo "</tr><tr>";
            echo "<td><b>Fecha Destino</b></td><td>".$res['fecha_destino']."</td>";
            echo "</tr>";
        }
        else{
            echo "<tr>";
            echo "<td><b>No hay datos</b></td>";
            echo "</tr>";
        }
      echo "</table></center>";
    }
    catch (Exception $e){
        echo $e->getMessage();
    }
    $this->DB->close();

  }
  
  function listar_aeronave_en_nodriza($id_nodriza){
        try{
            $result = $this->DB->query("select * from aeronave where id_nave_origen='$id_nodriza' AND id_estado='1' order by id;");          
			
			echo "<center><table style=\"width:650px\" class=\"table table-striped\">";
		    echo "<tr><td><b> ID </b></td> <td><b> Capacidad </b> </td></tr> ";
		    while ($res = $result->fetchArray(SQLITE3_ASSOC)){
				$id = $res['id'];
				$capacidad = $res['limite_pasajeros'];
				$fecha_origen = $res['fecha_origen'];
				$fecha_destino = $res['fecha_destino'];
				echo "<tr>";
				echo "<td><a href='ver_aeronave.php?id=$id'>Nave $id</a> </td>"; 
				echo "<td> $capacidad </td>";
				echo "</tr>";
		    }
	   	    echo "</table></center>";
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    $this->DB->close();
  }
  
  
  function insert($limite_pasajeros, $id_nave_origen, $id_nave_destino, $id_estado, $fecha_origen, $fecha_destino){
    $query =  $this->DB->exec("INSERT INTO aeronave(limite_pasajeros, id_nave_origen, id_nave_destino, id_estado, fecha_origen, fecha_destino) VALUES ($limite_pasajeros, $id_nave_origen, $id_nave_destino, $id_estado, '$fecha_origen', '$fecha_destino');");
        if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }
    $this->DB->close();
  }
  
  
  function insert_aeronave_historico($id, $limite_pasajeros, $id_nave_origen, $id_nave_destino, $id_estado, $fecha_origen, $fecha_destino){
    $edo = $this->check_regitro($id, $limite_pasajeros, $id_nave_origen, $id_nave_destino, $id_estado, $fecha_origen, $fecha_destino);
    if($edo==0){
      //echo "INSERTO -";
      $query =  $this->DB->exec("INSERT INTO aeronave_historico(id_aeronave, limite_pasajeros, id_nave_origen, id_nave_destino, id_estado, fecha_origen, fecha_destino) VALUES ($id, $limite_pasajeros, $id_nave_origen, $id_nave_destino, $id_estado, '$fecha_origen', '$fecha_destino');");
      if (!$query) {
            die("Database transaction failed: " . $this->DB->lastErrorMsg() );
        }
    }
  }
  
  
  function check_regitro($id, $limite_pasajeros, $id_nave_origen, $id_nave_destino, $id_estado, $fecha_origen, $fecha_destino){
      if($fecha_destino!=""){
	$query = "select count (*) as num from aeronave_historico where id_aeronave=$id and limite_pasajeros=$limite_pasajeros and id_nave_origen=$id_nave_origen and id_nave_destino=$id_nave_destino and id_estado=$id_estado and fecha_origen='$fecha_origen' and fecha_destino='$fecha_destino';";
	//echo "<br><br>$query<br>";
	$result = $this->DB->query($query);
	if ($res = $result->fetchArray(SQLITE3_ASSOC)){
	    //echo "NUM: ".$res['num']."<br>";
	    return $res['num'];   
	}
	else{
	    return 0;
	}
      }
  }
  
  
  function ver_historico($file){
      $historico=fopen("historico/$file.txt",'r');
      while(!feof($historico)){
	  $linea=fgets($historico);
	  echo "$linea\n";
	}
  }
  
  function lista_historico(){
	$query = "select * from aeronave_historico;";
        $result = $this->DB->query($query);
        echo "<table class=\"table table-hover\">";
        echo "<tr>";
	  echo "<td><b>ID Registro</b></td><td><b>ID Aeronave</b></td><td><b>Limite Pasajeros</b></td><td><b>Nave Origen</b></td><td><b>Nave Destino</b></td><td><b>Fecha Oringen</b></td><td><b>Fecha Destino</b></td>";
	echo "</tr>";
        while ($res = $result->fetchArray(SQLITE3_ASSOC)){
	   echo "<tr>";
	    echo "<td>".$res['id']."</td>";
	    echo "<td>".$res['id_aeronave']."</td>";
	    echo "<td>".$res['limite_pasajeros']."</td>";
	    $query1 = "select nave_nodriza.nombre from nave_nodriza where nave_nodriza.id=".$res['id_nave_origen'].";";
	    $result1 = $this->DB->query($query1);
	    if ($res1 = $result1->fetchArray(SQLITE3_ASSOC)){
		    echo "<td>".$res1['nombre']."</td>";
	    }
	    $query2 = "select nave_nodriza.nombre from nave_nodriza where nave_nodriza.id=".$res['id_nave_destino'].";";
	     $result2 = $this->DB->query($query2);
	    if ($res2 = $result2->fetchArray(SQLITE3_ASSOC)){
		    echo "<td>".$res2['nombre']."</td>";
	    }
	    echo "<td>".$res['fecha_origen']."</td>";
	    echo "<td>".$res['fecha_destino']."</td>";
	   echo "<tr>";
        }
        echo "</table>";
  }
  
  function lista_naves_revisadas(){
        $query = "select * from historico;";
        $result = $this->DB->query($query);
        echo "<table class=\"table table-hover\">";
        echo "<tr>";
	  echo "<td><b>ID Registro</b></td><td><b>ID Aeronave</b></td><td><b>Fecha</b></td><td><b>Ver</b></td>";
	echo "</tr>";
        while ($res = $result->fetchArray(SQLITE3_ASSOC)){
	   echo "<tr>";
	    echo "<td>".$res['id']."</td>";
	    echo "<td>".$res['id_nave']."</td>";
	    echo "<td>".$res['fecha']."</td>";
	    echo "<td><a href=\"ver_historico.php?&file=".$res['file']."\" class=\"btn btn-primary\" role=\"button\">Ver Registro</a></td>";
	   echo "<tr>";
        }
        echo "</table>";
  }
  

  
}


?>
