<?php
header('Content-Type: application/json');
/*
TODO GLOSARIO PALABRAS PEQUEÑAS
?PHP: Hypertext Preprocessor
?HTML: HyperText Markup Language
?CSS: Cascading Style Sheets
?JS: JavaScript
?SQL: Structured Query Language
?API: Application Programming Interface
?URL: Uniform Resource Locator
?HTTP: HyperText Transfer Protocol
?HTTPS: HyperText Transfer Protocol Secure

TODO Que es PHP
*Sus siglas significan Hypertext Preprocessor (Preprocesador de Hipertexto).
?Es un lenguaje de scripting de propósito general. 
?Puedes hacer “cualquier cosa” que te imagines con él, 
?por ejemplo comandos para la terminal o aplicaciones de escritorio.
*Es especialmente adecuada para el desarrollo web y para emplearlo más del lado del servidor.
?PHP es un lenguaje de código abierto qué corre del lado del servidor y puede ser incrustado
?en documentos HTML. 
*Una de las grandes ventajas que se tiene el programar con PHP es que
?posee una curva de aprendizaje muy rápido lo cual facilita el proceso de creación de aplicaciones
?orientadas al servidor. 
*a pesar de que PHP es un programa orientado servidor permite su implementación en diferentes 
*entornos de ejecución.

TODO Cosas que lo hacen amigable 🤗
*De alto nivel: no significa que sea complicado, sino todo lo contrario. 
*Es un lenguaje más cercano al humano, es decir, más comprensible de leer y comprender.
*Es un lenguaje interpretado: no pasa por un proceso de compilación, sino que tenemos 
*un pequeño programa llamado intérprete que lee y ejecuta instrucción por instrucción nuestro código.
*Es de tipado débil: no necesitamos definir tipos explícitamente, ya que PHP los define por ti.

TODO: DATOS PLUS
?Cliente y servidor
*Toda nuestra aplicación esta guardada en un servidor, 
*el cual entrega una copia de la misma a cada cliente que la solicite.
*Además, el servidor también se encarga de responder cada solicitud del usuario.

?Dominio
*El dominio es nuestra dirección en internet. 
*Gracias a él cualquier computadora es capaz de encontrar páginas web.

?Servidor físico o VPS
*Es la computadora que se encarga de guardar tu página web y mantener accesible 24/7. 
*Se le conoce como servidor y siempre está conectado a internet.
*A través de él podemos definir ciertas reglas de seguridad para nuestra página.

?Servidor web
*Es un programa que corre dentro de nuestro servidor físico 
*y se encarga de gestionar cualquier petición que llegue al mismo.
*Esta petición es procesada por algún lenguaje de programación y al final devuelve una respuesta.

?Métodos HTTP
*Los métodos HTTP son una forma de comunicación entre el cliente y el navegador. 
*A través de una solicitud HTTP el cliente es capaz de pedirle al servidor que realice una acción

TODO GET
?Pedirle al servidor una solicitud
*Este método permite solicitar información al servidor. 
*Por ejemplo, podemos pedirle una lista de productos en el caso de 
*que estemos haciendo un e-commerce o una lista de cursos si tenemos una pagina como Platzi.

TODO POST
?Este método nos permite pedirle al servidor que nos guarde algo
*Este método permite guardar información. 
*Por ejemplo, podemos recabar datos del usuario desde un formulario 
*y mandarlos a nuestro servidor para procesarlos.
*podríamos guardarlos para armar una base de datos de usuarios o incluso un sistema de login.

TODO PUT/PATCH
TODO PUT - Actualiza todo el registro
TODO Patch - Reemplaza lo necesario, es decir “parcha” la información
*Estos métodos permiten actualizar información ya guardada. 
*Por ejemplo, podemos darle la oportunidad a un usuario de actualizar 
*su correo electrónico o incluso cambiar su contraseña.

?La diferencia es que PUT reemplaza toda la información existente y 
?PATCH solo reemplaza lo necesario, es decir, “parcha” la información

TODO DELETE
*Este método lo usamos para eliminar un recurso del servidor. 
*Por ejemplo, podemos usarlo si deseamos eliminar un blogpost o un comentario.
*Esto no significa que dejamos eliminarlo necesariamente dentro de nuestra base de datos, 
*podemos hacer un “Soft delete”.

TODO 1.2. ESTRUCTURA BASICA DE UN SCRIPT PHP
ESTRUCTURA BASICA:
*/
$imagenURL = "img/1.png";
echo $imagenURL;

/*
TODO: INTRODUCCION A PHP
*Se realiza la estructura BASICA de un script PHP
*Se realiza las carpetas manejadas
?Estructura Basica Proyecto en Web/PHP
*Se analiza la estructura basica de php
*Se revisa la ejecucion del servidor temporal sin embargo nosotros no lo realizamos.
*Se realiza nuestro primer hola mundo :D
*/

echo '<h1> Hola Mundo cruel </h1>';

/* 
TODO: FUNCIONES DE SALIDA PHP
!lAS FUNCIONES MAS COMUNES SON: echo, print, print_r, var_dump, printf, sprintf
?echo: imprime una o mas cadenas
*La función echo se utiliza para imprimir 
*una o más cadenas en la salida. 
*Puede imprimir tanto cadenas de texto como variables. 
*No tiene valor de retorno y 
*se utiliza principalmente para mostrar contenido en la página web.

?print: es similar a echo y se utiliza para imprimir una cadena. 
*Sin embargo, a diferencia de echo, 
*print devuelve siempre el valor 1 y 
*solo puede imprimir una cadena a la vez.

?print_r: se utiliza para imprimir información sobre una variable 
*de forma legible para los humanos. 
*Es especialmente útil para imprimir matrices o 
*estructuras de datos complejas. 
*Muestra tanto el tipo de dato como el contenido de la variable.

?var_dump: se utiliza para mostrar información detallada sobre una
* o más variables, incluyendo su tipo de dato y contenido. 
*Muestra información adicional, como el tamaño y 
*la longitud de una cadena, y es útil para depurar 
*y analizar variables en desarrollo.

?printf: imprime una cadena

?sprintf():  devuelve la cadena formateada como resultado. 

*/
echo "Hola mundo cruel";

$texto="Mundo mafe 2023";
$mensaje=sprintf("Hola %s",$texto);
echo $mensaje;
print $mensaje;

$array = array("manzana", "banana", "cereza");
print_r($array);

$numero = 42;
$texto = "Hola, mundo";
$array = array(1, 2, 3);
var_dump($numero);
var_dump($texto);
var_dump($array);

define("MENSAJE","mundo");
printf("%s %s",$texto, MENSAJE);



/*
TODO:  VARIABLES Y CONSTANTES
*Una varible empieza simpre con un signo de $ y podemos cambiar su valor

    $numero_1 = 8;
    
    $numero_2 = 7;

    echo $numero_1 + $numero2;

*Una constante no se puede cambiar su valor, 
*como buena practica se crea en mayuscula y 
*se define de la siguiente forma:

    define("NUMERO_PI", 3.14);

    echo NUMERO_PI;

?Las variables en PHP se definen usando el símbolo $ 
?seguido del nombre de la variable. 
?La asignación de un valor a la variable se realiza utilizando el operador =
*variable numerica
$edad=20;
*declarar la variable de texto con USO ESTRICTO 
*codigo ESTRICTO
declare(stric_types=1);
$nombre= (string)"Mafe";

?var_dump: nos permite inspeccionar la variable y 
*nos da información acerca de ella. 
*Por ejemplo, en un array nos dice el número de elementos 
*del array y el tipo que es cada elemento.

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
$personas2020 = [
    "Carlos" => 22,
    "Mr. Michi" => 15,
    "Juan" => 65
];
var_dump( $personas2020 );

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
?Enteros (int): se utilizan para almacenar números enteros sin decimales.
?Punto flotante (float): se utilizan para almacenar números con decimales.
?Cadenas de texto (string): se utilizan para almacenar texto y caracteres.
?Booleanos (bool): se utilizan para almacenar valores de verdad o falsedad, 
que se representan por true o false.
?Arreglos (array): se utilizan para almacenar una colección de datos, que pueden ser de
diferentes tipos.
?Objetos (object): se utilizan para almacenar instancias de clases, que son definiciones de
objetos.
?Recursos (resource): se utilizan para almacenar referencias a recursos externos, como
conexiones a bases de datos o archivos abiertos.
?Nulos (null): se utilizan para representar una variable sin valor o sin definir.


TODO Casting
?Es la manera de indicar al interprete de PHP para forzar el cambio 
?de un tipo de dato a otro deseado. 
?Se puede acceder a esta utilidad anteponiendo el tipo de dato 
?entre paréntesis antes de un valor o una variable al momento de 
?la asignación o inicialización.

*Las siguientes definiciones ayudan a forzar el cambio de tipos en PHP:

*(array) forzado al tipo arreglo
*(bool) forzado al tipo booleano
*(boolean) forzado al tipo booleano
*(double) forzado al tipo ‘punto flotante’
*(float) forzado al tipo ‘punto flotante’
*(int) forzado al tipo entero
*(integer) forzado al tipo entero
*(object) forzado al tipo objeto
*(string) forzado al tipo ‘cadena de texto’
*/


$logueado=true;
var_dump($logueado);


$numero=200;
var_dump($numero);

$float=200.5;
var_dump($float);

$texto="Hola mundo";
var_dump($texto);

$array=["hola", "como estas"];
var_dump($array);

//Fácil
$nombre = "Carlos"; # String
$apellido = "Gómez"; # String
$edad = 18; # Integer
$aprobado = true; # Boolean

//Medio
# 1.
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; # Decimal o Float
# 2.
$nombre_completo = $nombre . " " . $apellido; # String
# 3.
$presento_examen = (bool) 1; # Boolean

//Avanzado
# 1.
$numero_preguntas = 5 + "5"; #Integer
# 2.
$numero_respuestas = "5" + 5; # Integer
# 3.
$promedio_maximo = $numero_respuestas / 1.0; # Decimal o Float
# 4.
$michis = 3 + "5 michis"; # Integer (con Warning)

/*
TODO: 9 NUMEROS Y OPERADORES

?agrego la imagen de cada uno en img2
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

/*
*1 si IZQUIERDA ES MENOR
*0 si es IGUAL
*1 si izquierda es MAYOR
*/

var_dump($numero1<=> $numero2);
echo "<br/>";
var_dump($numero2<=> $numero3);
echo "<br/>";
var_dump($numero2<=> $numero1);
echo "<br/>";


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
//echo strpos($nombreCliente, 'Pedro');

$tipoCliente="Premiun -Empresarial";

echo"<br>";
echo "El Cliente ". $nombreCliente. " es ". $tipoCliente;
echo "El cliente {$nombreCliente} es {$tipoCliente}";


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

echo "\n";
echo "\n";

$fruits = array('apple', 'banana', 'orange', 'grape', 'kiwi');

$randomKeys = array_rand($fruits, 3);

foreach ($randomKeys as $key) {
    echo "Random fruit: " . $fruits[$key] . "\n";
}

/*
TODO: ARRAY_UNIQUE()
*se utiliza para eliminar elementos duplicados de un arreglo. 
($array: El arreglo del cual se eliminarán los elementos duplicados.
$flags (opcional): Un modificador opcional que afecta el comportamiento de l
a función al comparar los elementos. Puede ser SORT_REGULAR (valor predeterminado), 
SORT_NUMERIC o SORT_STRING.)
*/
echo "\n";
echo "\n";
$hola = array('hola'=>"5", 'como'=>"2", 'estas'=>"2", 'hola'=>"5");

$numeroUnico = array_unique($hola);

print_r($numeroUnico);
echo "\n";
echo "\n";

$words = array('apple', 'banana', 'orange', 'banana', 'kiwi', 'apple');

$uniqueWords = array_unique($words);

print_r($uniqueWords);

/*
TODO: array_intersect()
*devuelve un nuevo arreglo que contiene los elementos 
*comunes entre los arreglos proporcionados. 
*/
echo "\n";
echo "\n";

$fruits1 = array('apple', 'banana', 'orange', 'kiwi');
$fruits2 = array('banana', 'kiwi', 'mango');
$fruits3 = array('kiwi', 'orange');

$commonFruits = array_intersect($fruits1, $fruits2, $fruits3);

print_r($commonFruits);

$friends1 = array('John', 'Michael','Emma', 'Sarah', 'David');
$friends2 = array('Sarah', 'David', 'Emma');
$friends3 = array('Michael', 'Emma');

$Friends = array_intersect($friends1, $friends2, $friends3);

print_r($Friends);


/*
TODO: array_diff()
*devuelve un nuevo arreglo que contiene los 
!elementos que están presentes en el primer arreglo pero NO en los siguientes arreglos
*/
$friends1 = array('John', 'Michael', 'Sarah', 'David');
$friends2 = array('Sarah', 'David', 'Emma');
$friends3 = array('Michael', 'Emma');

$differentFriends = array_diff($friends1, $friends2, $friends3);

print_r($differentFriends);

/*
TODO: array_push():
*se utiliza para agregar uno o más elementos al final de un arreglo. 
*/
$animales = array('perro', 'gato', 'medusa');

array_push($animales, 'zorro', 'leon');

print_r($animales);


/*
TODO: array_pop():
*se utiliza para eliminar y devolver el último elemento de un arreglo.
?Extrae y elimina el último elemento de un array.
*/
$colores = array('red', 'blue', 'green', 'yellow');

$lastColor = array_pop($colores);

echo $lastColor; // Output: yellow

print_r($colores);

/*
TODO: array_reverse()
*se utiliza para revertir el orden de los elementos en un arreglo. 
*Devuelve un nuevo arreglo con los elementos en orden inverso. 
?Revierte el orden de los elementos en un array.
*/
$tipoPerros=array('pastor aleman', 'pitbull', 'chihuahua', 'labrador');
$reversoPerros=array_reverse($tipoPerros);
print_r($reversoPerros);

/*
TODO: array_sum()
*se utiliza para calcular la suma de los elementos en un arreglo.
*/
$numeros = array(1, 2, 3, 4, 5);

$suma = array_sum($numeros);

echo $suma; // Output: 15

echo "\n";
echo "\n";
$expenso = array(
    'food' => 50,
    'transportation' => 30,
    'utilities' => 70,
    'entertainment' => 40
  );
  
  $totalExpensos = array_sum($expenso);
  
  echo $totalExpensos; // Output: 190

/*
TODO: array_product()
*se utiliza para calcular el producto de los elementos en un arreglo.
?Calcula el producto de los valores de un array.
*Toma como argumento un arreglo y devuelve el producto de todos los 
*valores numéricos presentes en él.
 */

 $numeros = array(2, 3, 4);

 $product = array_product($numeros);
 
 echo $product; // Output: 24 --> 2*3*4

echo "\n";
echo "\n";

 $prices = array(
    'item1' => 10,
    'item2' => 15,
    'item3' => 5
  );
  
  $totalCost = array_product($prices);
  
  echo $totalCost; // Output: 750

/*
TODO: array_chunk()
? Devuelve un nuevo arreglo que contiene los fragmentos como sub-arreglos.
!Esto es útil cuando necesitas procesar o mostrar datos en bloques más manejables.
*se utiliza para dividir un arreglo en trozos más pequeños.
*/
$numeroschunk = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$chunks = array_chunk($numeroschunk, 3);//significa que se dividira en 3 partes 123 456 789 10

print_r($chunks);

/*
TODO: array_keys()
*se utiliza para obtener todas las claves de un arreglo.
?Devuelve un nuevo arreglo que contiene todas las claves del arreglo original.
*/

$estudiantes = array(
    'John' => 85,
    'Sarah' => 92,
    'Michael' => 78,
    'Emma' => 90
);

$origi = array_keys($estudiantes);

print_r($origi);

/* resultado devolviendo sus valores
Array
(
    [0] => John
    [1] => Sarah
    [2] => Michael
    [3] => Emma
)
*/

$estudiantes = array(
    'John' => 85,
    'Sarah' => 92,
    'Michael' => 78,
    'Emma' => 90
);

$buscar=78;
$key = array_keys($estudiantes, $buscar);

print_r($key);

/*
TODO: array_values()
?Devuelve un nuevo arreglo que contiene 
?únicamente los valores del arreglo original, eliminando las claves.
*se utiliza para obtener todos los valores de un arreglo.
*/

$fruits = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
    'kiwi' => 'green'
);

$values = array_values($fruits);

print_r($values);

/*
Array
(
    [0] => red
    [1] => yellow
    [2] => orange
    [3] => green
)
*/
/*
TODO: array_walk():
? Permite iterar sobre un arreglo y realizar una acción personalizada en cada elemento.
*se utiliza para iterar sobre cada elemento de un arreglo y 
*aplicar una función a cada elemento.
*/
$names = array('John', 'Sarah', 'Michael', 'Emma');

function printWithGreeting(&$value, $key) {
    $value = 'Hello, ' . $value;
}

array_walk($names, 'printWithGreeting');

print_r($names);

echo "\n";
echo "\n";

$fruits = array('apple', 'banana', 'orange', 'kiwi');

function addPrefix(&$value, $key, $prefix) {
    $value = $prefix . $value;
}

array_walk($fruits, 'addPrefix', 'fruit_');

print_r($fruits);


?>

