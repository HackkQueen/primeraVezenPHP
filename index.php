<?php
header('Content-Type: application/json');
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

//include
//$nombreCliente="Campers practicas y sufrimiento con desesperacion campuslands";

/*
*Conocer extension de un string
*/
//echo strlen($nombreCliente);
//var_dump($nombreCliente);

/*
*eliminar espacios en blanco
*/
//$texto=trim($nombreCliente);
//echo strlen($texto);

/*
*Convertir a MAYUSCULAS
*/
//echo strtoupper($nombreCliente);

/*
*convertir en MINUSCULAS
*/
//echo strtolower($nombreCliente);

//$mail1="correo@correo.com";
$mail2="Correo@correo.com";

//var_dump(strtolower($mail1) === strtolower($mail2));
//echo str_replace('Juan','J', $nombreCliente);

//Revisar si un string existe o no 
//echo strpos($nombreCliente, 'Pedro');

$tipoCliente="Premiun -Empresarial";

//echo"<br>";
//echo "El Cliente ". $nombreCliente. " es ". $tipoCliente;
//echo "El cliente {$nombreCliente} es {$tipoCliente}";


/*
TODO: 10. Arreglos, asociativos y funciones para arreglos 
*Un arreglo puede contener cualquier tipo de valor, como numeros, cademas, objetos, funciones y otros arreglos
?arreglos INDEXADOS NUMERICAMENTE O ASOCIATIVAMENTE
*EXISTEN 3 TIPOS DE ARRAY
?ARRAY INDEXADO
Este tipo de array tiene índices numéricos. Aquí está un ejemplo de cómo definir un array indexado:
 
$nombres = array("Juan", "Pedro", "Santiago");
    var_dump($nombres);
    echo "<hr>";
?ARRAY ASOCIATIVO
    ?el array => es para asignar un valor a una variable ARRAY ASOCIATIVO
    $edades = array("Juan" => 35, "Pedro" => 37, "Santiago" => 43);
    var_dump($edades);
*EN LOS ARRAY ASOCIATIVOS IENEN COMILLAS
*SE USA PARA AGREGAR U OBTENER UN DATO
?ARRAY MULTIDIMENCIONAL
Este es un array que contiene uno o más arrays en sí. 
Un ejemplo común sería un array que contiene información para varias personas, 
donde cada persona es un array que contiene la información para esa persona. 
Aquí está un ejemplo:
$personas = array(
        "Juan" => array("Edad" => 35, "Ciudad" => "Madrid", "País" => "España"),
        "Pedro" => array("Edad" => 37, "Ciudad" => "Barcelona", "País" => "España"),
        "Santiago" => array("Edad" => 43, "Ciudad" => "Valencia", "País" => "España")
    );
    var_dump($personas);
    *Ejemplo de como aceder al array
    print_r($personas['Pedro']['País']);
    *para crear un dato nuevo al array multidimensional
    $personas["Pedro"]["Altura"] = 1.63;

*ejemplo
$miArreglo=array("valor1","valor2","valor3");
*/
$carrito=['Tablet','Computadora','Television'];

/*
?Util para ver los contenidos de un array
*/
//echo "<pre>";
//var_dump($carrito);
//echo "</pre>";
/*
?Acceder a un elemento del array
*/
//echo $carrito[1];
/*
?añade un elemento en el indice 3 del arreglo
*/
//$carrito[3]='Nuevo Producto...';

/*
?añadir un elemento al final del array 
*/
//array_push($carrito,'Audifonos');

/*
?añadir al inicio
*/
//array_unshift($carrito,'Smartwatch');

/*
?util para ver los contenidos de un array
*/
//echo "<pre>";
//var_dump($carrito);
//echo "</pre>";

$clientes=array('CLiente1','Cliente2','Cliente3');
//echo "<pre>";
//var_dump($clientes);
//echo "</pre>";

//echo $clientes[1];

/*
TODO: PHP cuenta con muchas funciones INTEGRADAS para trabajar ARREGLOS
*count, sort,array_push, array_pop, array_merge, array_key_exists, entre otras.


?ARRAY ASOCIATIVO
*SE ASOCIAN CLAVES CON VALORES
*/
/*
$myArrayAsociativo=array(
    "clave1"=>"valor1",
    "clave2"=>"valor2",
    "clave3"=>"valor3"
);
echo $myArrayAsociativo["clave1"];
echo $myArrayAsociativo["clave2"];
echo $myArrayAsociativo["clave3"];
*/
//los parentecis en funciones php son para pasar parametros
/*
?EJEMPLOS DE LOS METODOS MAS UTILIZADOS:
array_flip(): Intercambia las claves con sus valores correspondientes en un array.
array_fill(): Rellena un array con un valor especificado.
array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
array_key_exists(): Comprueba si una clave existe en un array.
in_array(): Comprueba si un valor existe en un array.
array_rand(): Devuelve una o varias claves aleatorias de un array.
array_unique(): Elimina los valores duplicados de un array.
array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
array_push(): Agrega uno o más elementos al final de un array.
array_pop(): Extrae y elimina el último elemento de un array.
array_reverse(): Revierte el orden de los elementos en un array.
array_sum(): Devuelve la suma de todos los valores de un array numérico.
array_product(): Devuelve el producto de todos los valores de un array numérico.
array_chunk(): Divide un array en fragmentos más pequeños.
array_keys(): Devuelve todas las claves de un array.
array_values(): Devuelve todos los valores de un array.
array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
*/
/*
TODO: ARRAY_FLIP()
?Se utiliza para intercambiar claves y valores en el array
*recibe un array y devuelve un array nuevo invirtiendo los valores y claves
(La función array_fill() recibe tres argumentos:

    $start_index: Es el índice de inicio para el arreglo resultante.
    $num: Es el número de elementos que se crearán en el arreglo.
    $value: Es el valor que se asignará a cada elemento del arreglo.)
*/
$anime=array(
    "nombre"=>"Haikyuu",
    "personaje"=>"Hinata",
    "enemigo"=>"KageyamaXD"
);

$anime=array_flip($anime);

print_r($anime);

/*
TODO: ARRAY_FILL()
?Rellena un array con un valor especificado
*Se utiliza para crear un nuevo arreglo con un tamaño especificado, donde todos los elementos tienen el mismo valor. 
*/
$pokemons=array_fill(30,5,"Pikachu");
print_r($pokemons);

/*
TODO: ARRAY_FILTER()
?Se usa para filtrar elementos o valores dentro de un array
*Se utiliza para filtrar los elementos de un arreglo utilizando una función de devolución de llamada (callback). 
*/
$bts = array(
    'joonkook',
    'kimnamjoon',
    'kimseokjin',
    'minyoongi',
    'junghoseok',
    'parkjimin',
    'kimtaehyung'
);

$especificar = 'kim';

$filtraridol = array_filter($bts, function ($value) use ($especificar) {
    return strpos($value, $especificar) !== false;//se quiere diferenciar con false porque eso significa que no esta esa palabra
});

print_r($filtraridol);

/*
TODO: ARRAY_MAP()
? Se usa para poder utilizar funciones en cada uno de los elementos de un array
*se utiliza para aplicar una función a cada elemento de uno o más arreglos y retornar un nuevo arreglo con los resultados.
(La función array_map() recibe al menos dos argumentos:

    $callback: Es una función de devolución de llamada (callback) que se aplicará a cada elemento de los arreglos.
    $array1, $array2, ...: Son uno o más arreglos de entrada a los que se les aplicará la función.)
*/

$numeros = array(10, 20, 30, 40, 50);

$resultado = array_map(function ($value) {//valores dentro del array
    return $value * 2;//se multiplica por 2
}, $numeros);

print_r($resultado);

/*
*otro ejemplo
*/

$numeros2 = array(10, 20, 30, 40, 50);

$resul = array_map(function ($value) {//valores dentro del array
    return $value - 5;//se le resta 5
}, $numeros2);

print_r($resul);

/*
*ultimo ejemplo
*/
$hola = array("John", "Jane", "Michael", "Sarah");

$adios = array_map(function ($hola) {
    return "Adios camper, " . $hola;
}, $hola);

print_r($adios);

echo "\n";
echo "\n";
/*
TODO: ARRAY_REDUCE()
?se utiliza para poder acomular los valores de un array sin necesidad de hacer un for
*se utiliza para reducir un arreglo a un solo valor aplicando una función de devolución de llamada (callback) a cada elemento del arreglo
(    $array: El arreglo en el cual se aplicará la reducción.
    $callback: Una función de devolución de llamada que se aplicará a los elementos del arreglo.
    $initial: (Opcional) Un valor inicial para la reducción.)
*/

$carrito = array(
    array('producto' => 'camisa', 'precio' => 25000),
    array('producto' => 'pantalon', 'precio' => 55000),
    array('producto' => 'vestido', 'precio' => 85000)
);

$precioTotal = array_reduce($carrito, function ($accumulator, $productoss) {
    return $accumulator + $productoss['precio'];
}, 0);

echo $precioTotal;

/*
TODO: ARRAY_KEY_EXISTS()
?Para confirmar si una clave existente en un array
*se utiliza para verificar si una clave o índice específico existe en un arreglo. 

(La función array_key_exists() recibe dos argumentos:

    $key: La clave o índice que se desea verificar.
    $array: El arreglo en el cual se realizará la verificación.)
*/
/*
?EL \t ES PARA DAR UN ESPACIO
?EL \n ES PARA DAR UN SALTO DE LINEA
*/
echo "\n";
echo "\n";
$bro = array(
    'nombre' => 'Santi',
    'edad' => 13,
    'grado' => '8'
);

if (array_key_exists('grado', $bro)) {
    echo "El grado existe en el array.";
} else {
    echo "El grado no existe en el array.";
}
echo "\n";
echo "\n";

/*
TODO: IN_ARRAY()
?Para confirmar si un valor existe en un array
*verificar si un valor específico existe en un arreglo. 
(    $needle: El valor que se desea buscar.
    $haystack: El arreglo en el cual se realizará la búsqueda.
    $strict (opcional): Un valor booleano que indica si la comparación debe ser estricta en cuanto al tipo de datos.)
*/

$broli = array(
    'nombre' => 'Santi',
    'edad' => 13,
    'grado' => '8'
);

if (in_array('Santi', $broli)) {
    echo "El valor Santi existe en el array.";
} else {
    echo "El valor Santi no existe en el array.";
}
echo "\n";
echo "\n";

/*
TODO: array_rand()
?Para seleccionar uno o varios elementos aleatorios de un array
*se utiliza para seleccionar uno o varios elementos aleatorios de un arreglo. 
*/

$frutas = array('apple', 'banana', 'orange', 'grape', 'kiwi');

$random = array_rand($frutas);

echo "fruta ramdom: " . $frutas[$randomKey];


$fruits = array('apple', 'banana', 'orange', 'grape', 'kiwi');

$randomKeys = array_rand($fruits, 3);

foreach ($randomKeys as $key) {
    echo "Random fruit: " . $fruits[$key] . "\n";
}


?>

