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
TODO: 9 NUMEROS Y OPERADORES

*EXISTEN DIFERENTES TIPOS COMO:
*1. operadores aritmeticos
*2. operadores de asignacion
*3. operadores de array
*4. operadores bitwise
*5. operadores de comparacion
*6. operadores de ejecucion
*7. operadores de error control
*8. operadores de incremento/decremento
*9. operadores logicos

url = "https://www.php.net/manual/es/language.operators.php"
*/
/*
*Ejemplo de copilacion basica con operadores
*/
/*
$numero1=20;
$numero2=20;
$numero3=50;

var_dump($numero1>$numero2);
echo "<br/>";
var_dump($numero1<$numero2);
echo "<br/>";
var_dump($numero1>=$numero2);
echo "<br/>";
var_dump($numero1<=$numero2);
echo "<br/>";
var_dump($numero2==$numero3);
echo "<br/>";
var_dump($numero1===$numero3);
echo "<br>/";


*1 si IZQUIERDA ES MENOR
*0 si es IGUAL
*1 si izquierda es MAYOR

var_dump($numero1<=> $numero2);
echo "<br/>";
var_dump($numero2=> $numero3);
echo "<br/>";
var_dump($numero2<=> $numero1);
echo "<br/>";
*/

include
$nombreCliente="Campers practicas y sufrimiento con desesperacion campuslands";

/*
*Conocer extension de un string
*/
echo strlen($nombreCliente);
var_dump($nombreCliente);

/*
*eliminar espacios en blanco
*/
$texto=trim($nombreCliente);
echo strlen($texto);

/*
*Convertir a MAYUSCULAS
*/
echo strtoupper($nombreCliente);

/*
*convertir en MINUSCULAS
*/
echo strtolower($nombreCliente);

$mail1="correo@correo.com";
$mail2="Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Juan','J', $nombreCliente);

//Revisar si un string existe o no 
echo strpos($nombreCliente, 'Pedro');

$tipoCliente="Premiun -Empresarial";

echo"<br>";
echo "El Cliente ". $nombreCliente. " es ". $tipoCliente;
echo "El cliente {$nombreCliente} es {$tipoCliente}";


/*
TODO: 10. Arreglos, asociativos y funciones para arreglos 
*Un arreglo puede contener cualquier tipo de valor, como numeros, cademas, objetos, funciones y otros arreglos
?arreglos INDEXADOS NUMERICAMENTE O ASOCIATIVAMENTE
*ejemplo
$miArreglo=array("valor1","valor2","valor3");
*/
$carrito=['Tablet','Computadora','Television'];

/*
?Util para ver los contenidos de un array
*/
echo "<pre>";
var_dump($carrito);
echo "</pre>";
/*
?Acceder a un elemento del array
*/
echo $carrito[1];
/*
?añade un elemento en el indice 3 del arreglo
*/
$carrito[3]='Nuevo Producto...';

/*
?añadir un elemento al final del array 
*/
array_push($carrito,'Audifonos');

/*
?añadir al inicio
*/
array_unshift($carrito,'Smartwatch');

/*
?util para ver los contenidos de un array
*/
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes=array('CLiente1','Cliente2','Cliente3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];



?>

