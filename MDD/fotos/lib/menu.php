<?php

?>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">S.N.A.S.A</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="postular.php">Postular</a></li>
        <?php
        //<li class="active"><a href="#">Link</a></li>
        if(!empty($_SESSION['nombre'])){
	  echo "<li><a href=\"panel.php\">Panel</a></li>";
	}
	?>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <?php 
	if(empty($_SESSION['nombre'])){
	  echo "<li><a href=\"login.php\">Iniciar sesión</a></li>\n";
	}
	else{
	  echo "<li><a href='#'>Usuario : ".$_SESSION['nombre']."</a></li>\n";
	  echo "<li><a href='sesion_des.php'>[Salir ]</a></li>\n";
	}
      ?>
      </ul>
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->

</nav>
