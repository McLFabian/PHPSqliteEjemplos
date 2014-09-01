<?php

function load_menu($num){

	//HOME
	if ($num == 1){ ?>
                               <div id='cssmenu'>
                                        <ul>
                                           <li class='active '><a href='index.php'><span>Home</span></a></li>
                                           <li><a href='registro.php'><span>Registrarme</span></a></li>
                                           <li><a href='ver.php'><span>Ver</span></a></li>
					   <?php
						if(!empty($_SESSION['usuario'])){
					   ?>
                                           <li><span><?php echo"<a href='#'>Usuario :" .$_SESSION['usuario']; echo "</a>"; ?></span></li>
                                           <li><?php echo"<a href='sesion_des.php'><span>[Salir ]</span></a>"; ?></li>
					   <?php
						}
					   ?>
                                        </ul>
                                </div>

	<?php }
	//VER
        if ($num == 2){ ?>
                               <div id='cssmenu'>
                                        <ul>
                                           <li><a href='index.php'><span>Home</span></a></li>
                                           <li><a href='registro.php'><span>Registrarme</span></a></li>
                                           <li class='active '><a href='ver.php'><span>Ver</span></a></li>
                                           <?php
                                                if(!empty($_SESSION['usuario'])){
                                           ?>
                                           <li><span><?php echo"<a href='#'>Usuario :" .$_SESSION['usuario']; echo "</a>"; ?></span></li>
                                           <li><?php echo"<a href='sesion_des.php'><span>[Salir ]</span></a>"; ?></li>
                                           <?php
                                           }
                                           ?>
                                        </ul>
                                </div>

        <?php }
        //REGISTRO
        if ($num == 3){ ?>
                               <div id='cssmenu'>
                                        <ul>
                                           <li ><a href='index.php'><span>Home</span></a></li>
                                           <li class='active'><a href='registro.php'><span>Registrarme</span></a></li>
                                           <li><a href='ver.php'><span>Ver</span></a></li>
                                           <?php
                                                if(!empty($_SESSION['usuario'])){
                                           ?>
                                           <li><span><?php echo"<a href='#'>Usuario :" .$_SESSION['usuario']; echo "</a>"; ?></span></li>
                                           <li><?php echo"<a href='sesion_des.php'><span>[Salir ]</span></a>"; ?></li>
                                           <?php
                                                }
                                           ?>
                                        </ul>
                                </div>

        <?php }

}

?>
