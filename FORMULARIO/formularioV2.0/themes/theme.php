<?php


$conf = fopen("web.conf","r");
if(!$conf){
	echo "No se puede abrir el fichero de la configuraci&oacute;n web.conf";
	break;
}

$pos_theme;
$theme;
while(!feof($conf)){
    $buffer = fgets($conf,4096);
    $pos_theme = substr_count($buffer, 'themes');
    if($pos_theme != 0){
        $ini =7;
        $fin =strlen($buffer)-8;
        $theme = substr($buffer,$ini, $fin);
    }
}
?>

