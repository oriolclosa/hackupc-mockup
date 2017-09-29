<?php
$nom = $_GET['nom'];
$emo = $_GET['emoticona'];

if($emo!=""){
	if($emo[0]!=":"){
		$emo = ":".$emo;
	}
	if($emo[strlen($emo)-1]!=":"){
		$emo = $emo.":";
	}
}

//Mides de la imatge
$mida_x = 641;
$mida_y = 800;

//Creació de la imatge
$imatge = imagecreate( $mida_x, $mida_y );

//Colors
$color = imagecolorallocate($imatge, 255, 255, 255);

//Fons
$fons = imagecreatefrompng("./fons.png");
$fons2 = imagecreatefrompng("./fons2.png");

$color2 = imagecolorallocate($fons2, 12, 255, 0);

//Tipografies
$tipo1 = 'Montserrat-Bold.otf';
$tipo2 = 'Montserrat-Thin.otf';

//Afegeix a la imatge
imagecopyresampled($imatge, $fons, 0, 0, 0, 0, $mida_x, $mida_y, $mida_x, $mida_y);

$nom2 = imagettfbbox(20, 0, $tipo1, $nom);
$text_width = $nom2[2]-$nom2[0];
$text_height = $nom2[7]-$nom2[1];
$nom2x = ($mida_x/2)-($text_width/2);
$nom2y = ($mida_y/2)-($text_height/2);
imagettftext($imatge, 20, 0, $nom2x, $nom2y-82, $color, $tipo1, $nom);

$nom3 = imagettfbbox(15, 0, $tipo2, $emo);
$text_width = $nom3[2]-$nom3[0];
$text_height = $nom3[7]-$nom3[1];
$nom3x = ($mida_x/2)-($text_width/2);
$nom3y = ($mida_y/2)-($text_height/2);
imagettftext($imatge, 15, 0, $nom3x, $nom3y-57, $color, $tipo2, $emo);

imagecolortransparent($fons2, $color2);
imagecopyresampled($imatge, $fons2, 0, 0, 0, 0, $mida_x, $mida_y, $mida_x, $mida_y);

//Finalització de la imatge
header( "Content-type: image/png" );
imagepng( $imatge, NULL, 1 );
imagecolordeallocate( $color );
imagedestroy( $imatge );
?>