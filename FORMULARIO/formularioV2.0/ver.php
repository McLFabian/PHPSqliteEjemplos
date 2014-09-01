<?php

include ("functions/load_registro.php");
include ("functions/load_footer.php");
include ("functions/load_page_bottom.php");
include ("functions/load_menu.php");
include ("functions/logo.php");
include ("themes/theme.php");

$put_here;
session_start();
//CARGA EL HTML
$web = fopen("themes/$theme/index.html",'r');
if(!$web){
        echo "No se pudo cargar el tema HTML";
        break;
}

//IMPRIME EL SITIO WEB
        while(!feof($web)){
                $buffer = fgets($web,4096);
                $put_here = substr_count($buffer, "#content");
                $footer = substr_count($buffer, "#footer");
                $page_bottom = substr_count($buffer, "#page_bottom");
                $logo = substr_count($buffer, "#logo");
                $menu = substr_count($buffer, "#menu");
                if($menu !=0){
	                load_menu(2);
                }
                if($footer != 0){
                	load_footer();
                }
                if($page_bottom !=0){
                        load_page_bottom();
                }

                if($logo !=0){
                	logo();
                }

               	if($put_here != 0 ){
			 load_registro();
         	}
	        else if($put_here == 0 &&  $logo ==0 &&  $menu==0 && $page_bottom==0 && $footer ==0){
    		        echo "$buffer";
                }
        }
?>

