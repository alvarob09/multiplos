<?php


$cadena = "imgen10";
//echo $cadena;

 echo $posicion =strpos($cadena,".");
 
 if($posicion!=""){
 echo $rest = substr($cadena, 0, $posicion); 
 }else{
	 
echo $cadena=$cadena;	 
 }
 
 // devuelve "d"
/* $resultado = str_replace(".jpg", " ", $cadena);
echo "La cadena resultante es: " . $resultado; */
 
 
// echo strpos("I love php, I love php too!","php");
/*$cadena2 = "Esta es la cadena de ejemplo para sustituir una cadena";
echo $cadena2;
$resultado2 = str_replace("cadena", "CADENA", $cadena2);
echo "La cadena resultante es: " . $resultado2;*/
?>