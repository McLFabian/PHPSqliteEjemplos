<?php

function load_menu($num){

	//HOME
	if ($num == 1){ ?>
                               <div id='cssmenu'>
                                        <ul>
                                           <li class='active '><a href='index.php'><span>Home</span></a></li>
                                           <li><a href='ver.php'><span>Ver</span></a></li>
                                        </ul>
                                </div>

	<?php }
        if ($num == 2){ ?>
                               <div id='cssmenu'>
                                        <ul>
                                           <li><a href='index.php'><span>Home</span></a></li>
                                           <li class='active '><a href='ver.php'><span>Ver</span></a></li>
                                        </ul>
                                </div>

        <?php }

	//HOME LOGEADO
	//------------
}

?>
