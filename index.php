<?php
/*
TODO: 5. INTRODUCCION A PHP
*Se realiza la estructura BASICA de un script PHP
*Se realiza las carpetas manejadas
?Estructura Basica Proyecto en Web/PHP
*Se analiza la estructura basica de php
*Se revisa la ejecucion del servidor temporal sin embargo nosotros no lo realizamos.
*Se realiza nuestro primer hola mundo :D

echo '<h1> Hola Mundo cruel </h1>';
*/
/* 
TODO: 6. FUNCIONES DE SALIDA PHP
*lAS FUNCIONES MAS COMUNES SON: echo, print, print_r, var_dump
?echo: imprime una o mas cadenas
?printf: imprime una cadena
$texto="Mundo mafe 2023";
$mensaje=sprintf("Hola %s",$texto);
echo $mensaje;

*define("MENSAJE","mundo"); arma la cadena
define("MENSAJE","mundo");
printf("%s %s",$texto, MENSAJE);
var_dump($texto);
*/

/*
TODO: 7. VARIABLES Y CONSTANTES
*variable numerica
$edad=20;
*declarar la variable de texto con USO ESTRICTO 
*codigo ESTRICTO
declare(stric_types=1);
$nombre= (string)"Mafe";

*variable booleana
$es_valido=true;
echo var_dump($nombre);

?constantes
*NUMERICA
define("PI",3.14);
*DE TEXTO
define("NOMBRE","Mafecita la mas bonita!");
*BOOLEANA
define("ES_VALIDO",true);

*/

/*
TODO: 8. TIPOS DE DATOS
?diferentes tipos de datos:
*Enteros (int)
*Punto flotante (float)
*Cadenas de texto (string)
*Booleanos (bool)
*Arreglos (array)
*Objetos (object)
*Recursos (resource)
*Nulos (null)

$logueado=true;
var_dump($logueado);


$numero=200;
var_dump($numero);

$float=200.5;
var_dump($float);

$texto="Hola mundo";
var_dump($texto);

$array=[];
var_dump($array);

*/


/*
TODO: 9 numeros y operadores
*/
$numero1=20;
$numero2=10;
$numero3=50;

var_dump($numero1>$numero2);
echo "<br>";

?>

