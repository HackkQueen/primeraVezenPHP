<?php

/*
TODO EJERCICIO 1
*Imagina que tienesun array que representa los planetas en nuestro sistema solar. 
*Las claves son los nombres de los planetas y los valores son sus respectivos números de orden,empezandodesdeel sol.
?Paso1:Crearelarraydeplanetas
*Nota: Ahora, te enfrentas a una tarea. Necesitas poder buscar los nombres de los planetas por su número de orden.
?Paso 2: Buscar el nombre de un planeta por su número de ordenEjemplo‘Marte’
*/
/*
    $planetas = array(
        "Sol" => 0,
        "Mercurio" => 1,
        "Venus" => 2,
        "Tierra" => 3,
        "Marte" => 4,
        "Jupiter" => 5,
        "Saturno" => 6,
        "Urano" => 7,
        "Neptuno" => 8,
        "Pluton" => 9
    );

    $planetas = array_flip($planetas);

    $numero = $_POST['numero'];

    echo <<<HTML
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">El planeta de la posicion $numero es: $planetas[$numero]</h1>
        <a href='index.php'><button class="btn btn-info">Volver</button></a>
    </div>
    
    HTML;
*/
/*
TODO EJERCICIO 2
*Supongamos que estás creando un juego de simulación espacial y necesitas crear un sistema solar básico. 
*Decides que cada sistema solar en tu juego debe tener un cierto número de planetas cuando se crea.
?Paso1:Decidir cuántos planetas tendrá el sistema solar
*Nota: La cantidad de planetas tienen que estar inicializados en
!'Deshabitado'.
?Paso2:Verificar el estado inicial del sistema solar
*/
/*  
    $planetas = [];

    $cantidad = $_POST['cantidad'];

    for ($i=1; $i <= $cantidad; $i++) { 
        $planetas[$i-1] = "planeta ".$i;
    };

    $planetas = array_flip($planetas);

    for ($i=1; $i <= $cantidad; $i++) { 
        $planetas["planeta ".$i] = "Deshabitado";
    };

    $planetas_value = array_values($planetas);

    $planetas_key = array_keys($planetas);

    $tabla = '<table class="table table-dark table-striped table-hover"><thead><tr><th scope="col">Planeta</th><th scope="col">Estado</th></tr></thead><tbody>';
    
    for ($i=0; $i < $cantidad; $i++) { 
        $tabla .= "<tr><td>$planetas_key[$i]</td><td>$planetas_value[$i]</td></tr>";
    };

    echo <<<HTML
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">El estado del planeta es: $tabla</h1>
        <br>
        <a href='index.php'><button class="btn btn-info m-3">Volver</button></a>
    </div>
    
    HTML;
*/
/*
TODO EJERCICIO 3
*Supongamos que tienes un array asociativo que representa varios planetas en nuestro universo. 
*Las claves son los nombres de los planetas y los valores son booleanos que
*representan si un planeta es habitable (true) o no (false).
?Paso1:Crear el array de planetas.
*Nota: Ahora, tienes una tarea interesante. Necesitas filtrar este array para obtener un nuevo array que sólo contenga los
*planetas que son habitables.
?Paso2:Verificar el resultado de los planetas filtrados.
*/

    /*
    $planetas = array(
        "Mercurio" => "No habitable",
        "Venus" => "No habitable",
        "Tierra" => "Habitable",
        "Marte" => "No habitable",
        "Jupiter" => "No habitable",
        "Saturno" => "No habitable",
        "Urano" => "No habitable",
        "Neptuno" => "No habitable"
    );

    $planetas = array_filter($planetas, function($value){
        return $value == "Habitable";
    });

    $tabla = '<table class="table table-dark table-striped table-hover"><thead><tr><th scope="col">Planeta</th><th scope="col">Estado</th></tr></thead><tbody>';

    foreach ($planetas as $key => $value) {
        $tabla .= "<tr><td>$key</td><td>$value</td></tr>";
    };

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">Planetas habitables: $tabla</h1>
        <br>
        <a href='index.php'><button class="btn btn-info m-3">Volver</button></a>
    </div>
    
    HTML;
    */

/*
TODO EJERCICIO 4
*Supón que tienes un array que representa la gravedad de varios planetas en nuestro sistema solar como una fracción
*de la gravedad de la Tierra. Necesitas transformar estos valores en la gravedad real, dado que la gravedad de la
?Tierra es aproximadamente 9.8m/s^2.
?Paso1:Crearelarraydeplanetasconsugravedad
?Paso2:Defineunafunciónparacalcularlagravedadreal
*Nota: Ahora, tienes una tarea interesante. Necesitas calcular la gravedad aproximada de cada planeta
*/

    /*

    $masayRadio = array(
        "Mercurio" => array(3.30*pow(10,23), 2439700),
        "Venus" => array(4.87*pow(10,24), 6051800),
        "Tierra" => array(5.97*pow(10,24), 6371000),
        "Marte" => array(6.39*pow(10,23), 3389500),
        "Jupiter" => array(1.898*pow(10,27), 69911000),
        "Saturno" => array(5.68*pow(10,26), 58232000),
        "Urano" => array(8.681*pow(10,25), 25362000),
        "Neptuno" => array(1.024*pow(10,26), 24622000)
    );

    $consG = 6.67*pow(10,-11);


    $masayRadio = array_map(function($value) use ($consG){
        $value = number_format($consG * $value[0] / pow($value[1],2), 4, ".", ".");
        return $value;
    }, $masayRadio);

    $gravedadTierra = floatval($masayRadio["Tierra"]);

    $comparacion = $masayRadio;

    $comparacion = array_map(function($value) use ($gravedadTierra){
        $value = number_format(floatval($value) / $gravedadTierra, 3, ".", ".");
        return $value;
    }, $comparacion);

    $tabla = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planeta</th><th scope="col">Gravedad (m/s^2)</th><th scope="col">Comparación con la Tierra</th></tr></thead><tbody>';

    foreach ($masayRadio as $key => $value) {
        $tabla .= "<tr><td>$key</td><td>$value</td><td>$comparacion[$key]</td></tr>";
    };

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">La gravedad de los planetas es: $tabla</h1>
        <br>
        <a href='index.php'><button class="btn btn-info m-3">Volver</button></a>
    </div>

    HTML;

    */

/*
TODO EJERCICIO 5
*Supónquetienesunarrayquerepresentalamasadevarias naves espaciales en tu flota y necesitas calcular la masa
*totaldetodas lasnavesespaciales.
?Paso1:Crearelarraydenavesespaciales
?Paso2:Defineunafunciónparacalcularlamasatotal
*Nota: Ahora, tienes una tarea interesante. Necesitas calcular la suma de las masas de todas las naves espaciales.
*/

    /*

    $naves = array(
        "nave1" => 5,
        "nave2" => 3,
        "nave3" => 7,
        "nave4" => 10,
        "nave5" => 2,
        "nave6" => 1,
        "nave7" => 8,
        "nave8" => 4,
        "nave9" => 6,
        "nave10" => 9
    );

    $naves = array_sum($naves);

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">La suma de la masa de las naves es: $naves </h1>
        <a href='index.php'><button class="btn btn-info">Volver</button></a>
    </div>
    
    HTML;

    */

/*
TODO EJERCICIO 6
*Supón que tienes un array que representa los planetas de nuestro sistema solar. Quieres ser capaz de verificar si un
*planetaespecíficoexisteenestesistema.
?Paso1:Crearelarraydeplanetas.
*Nota: Ahora, tienes una tarea interesante. Necesitas verificar la existencia de un planeta.
*/

    /*

    $planetas = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");
    
    $planetas = array_map(function($value){
        $value = strtolower($value);
        return $value;
    }, $planetas);

    $planeta = $_POST["planeta"];

    $planeta = strtolower($planeta);

    $planetas = in_array($planeta, $planetas);

    if ($planetas == true) {
        echo <<<HTML

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <div class="container text-center p-3">
            <h1 style="color: white;">El planeta $planeta EXISTE en nuestro sistema solar</h1>
            <a href='index.php'><button class="btn btn-info">Volver</button></a>
        </div>
        
        HTML;
    } else {
        echo <<<HTML

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <div class="container text-center p-3">
            <h1 style="color: white;">El planeta $planeta NO EXISTE en nuestro sistema solar</h1>
            <a href='index.php'><button class="btn btn-info">Volver</button></a>
        </div>
        
        HTML;
    }
    */
    

/*
TODO EJERCICIO 7
*Supón que tienes un array que representa los tipos de
*naves espaciales en tu flota. Quieres ser capaz de verificar
*si un tipo específico de nave espacial está presente en tu flota.
?Paso1:Crearelarraydenavesespaciales.
*Nota: Ahora, tienes una tarea interesante. Necesitas Verificar la existencia de un tipo de nave espacial
*/

    /*

    $naves = array(
        "nave1" => "Emperatriz",
        "nave2" => "Fenix",
        "nave3" => "Galactica",
        "nave4" => "Halcon",
        "nave5" => "Imperial",
    );

    $naves = array_map(function($value){
        $value = strtolower($value);
        return $value;
    }, $naves);

    $nave = $_POST["nave"];

    $nave = strtolower($nave);

    $naves = in_array($nave, $naves);

    if ($naves == true) {
        echo <<<HTML

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <div class="container text-center p-3">
            <h1 style="color: white;">La nave tipo $nave EXISTE en la flota de naves</h1>
            <a href='index.php'><button class="btn btn-info">Volver</button></a>
        </div>
        
        HTML;
    } else {
        echo <<<HTML

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <div class="container text-center p-3">
            <h1 style="color: white;">La nave tipo $nave NO EXISTE en la flota de naves</h1>
            <a href='index.php'><button class="btn btn-info">Volver</button></a>
        </div>
        
        HTML;
    }

    */

/*
TODO EJERCICIO 8
*Supón que tienes un array que representa los planetas de nuestro sistema solar. Quieres ser capaz de seleccionar
*aleatoriamente un planeta para enviar una misión de exploración.
?Paso1:Crearelarraydeplanetas.
?Paso2:Generauníndicealeatorio
?Paso3:Usaelíndicealeatorioparaseleccionarunplaneta
*Nota: Ahora, tienes una tarea interesante. Necesitas mostrar el planeta que el explorador va a explorar
*/

    /*
     $planetas = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

     $numero = array_rand($planetas, 1);

    $planeta = $planetas[$numero];

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">El planeta seleccionado aleatoriamente para explorar es: $planeta</h1>
    <a href='index.php'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;

    */

/*
TODO EJERCICIO 9
*Supón que tienes un array que representa las diferentes
*especies alienígenas que tu equipo de exploración ha encontrado. Sin embargo, la lista podría contener especies
*duplicadas y necesitas eliminar las duplicaciones para obtenerunalistaúnicadeespeciesalienígenas.
?Paso1:Crearelarraydeespeciesalienígenas.
*Nota: Ahora, tienes una tarea interesante. Necesitas eliminar las especies duplicadas
*/

    /*
     $aliens = array(
        "alien1" => "Alienigena",
        "alien2" => "Depredador",
        "alien3" => "E.T.",
        "alien4" => "Extraterrestre",
        "alien5" => "Marciano",
        "alien6" => "Predator",
        "alien7" => "Xenomorfo",
        "alien8" => "Depredador",
        "alien9" => "E.T.",
        "alien10" => "Marciano",
    );

    $aliens = array_unique($aliens);

    $tabla = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Tipos de aliens</th></tr></thead><tbody>';

    foreach ($aliens as $key => $value) {
        $tabla .= "<tr><td>$value</td></tr>";
    }

    echo <<<HTML
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">Tabla de tipos de aliens</h1>
    $tabla
    </tbody></table>
    <a href='index.php'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;

    */

/*
TODO EJERCICIO 10
*Supongamos que tienes dos arrays que representan los
*planetas en dos sistemas solares diferentes. Quieres encontrar losplanetasquesoncomunesenambos sistemas solares.
?Paso1:Crearlosarraysdeplanetas.
*Nota: Ahora, tienes una tarea interesante. Tienes que  encontrar los planetas comunes.
*/

    /*

    $planetas1 = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

    $planetas2 = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Kepler-438b", "Gliese 667 Cc" , "HD 40307g" , "Kepler-442b");

    $planetas = array_intersect($planetas1, $planetas2);

    $tabla = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planetas en ambos sistemas solares</th></tr></thead><tbody>';

    foreach ($planetas as $key => $value) {
        $tabla .= "<tr><td>$value</td></tr>";
    }

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">Tabla de planetas en ambos sistemas solares</h1>
    $tabla
    </tbody></table>
    <a href='index.php'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;

    */

/*
TODO EJERCICIO 11
*Supongamos que tienes dos arrays que representan los planetas en dos sistemas solares diferentes. Quieres
*encontrar losplanetasquesonúnicosencada sistema solar, esdecir, aquellos queno estánpresentes enel otro sistema solar.
? Paso1:Crearlosarraysdeplanetas.
? Paso2:Encontrarlosplanetasúnicosencadasistemasolar
*Nota: Ahora, tienes una tarea interesante. Tienes que mostrar los planetas únicos en cada sistema solar.
*/

    /*

    $planetas1 = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

    $planetas2 = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Kepler-438b", "Gliese 667 Cc" , "HD 40307g" , "Kepler-442b");

    $planetasS1 = array_diff($planetas1, $planetas2);

    $planetasS2 = array_diff($planetas2, $planetas1);

    $tabla1 = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planetas únicos el sistema solar 1</th></tr></thead><tbody>';

    foreach ($planetasS1 as $key => $value) {
        $tabla1 .= "<tr><td>$value</td></tr>";
    }

    $tabla2 = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planetas únicos el sistema solar 2</th></tr></thead><tbody>';

    foreach ($planetasS2 as $key => $value) {
        $tabla2 .= "<tr><td>$value</td></tr>";
    }

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">Tabla de planetas únicos en cada sistema solar</h1>
    $tabla1
    </tbody></table>
    $tabla2
    </tbody></table>
    <a href='index.php'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;

    */

/*
TODO EJERCICIO 12
*Supongamos que estás construyendo un programa para rastrear los satélites que orbitan alrededor de diferentes
*planetas en nuestro sistema solar. Quieres poder agregar satélitesalalistadesatélitesdeunplanetaespecífico.
? Paso1:Crearunarraydesatélitesparaunplaneta
*Nota: Ahora, tienes una tarea interesante. Tienes que mostrar los satélites del planeta.
*/

    /*
    $planetas = array(
        "Sol" => 0,
        "Mercurio" => 0,
        "Venus" => 0,
        "Tierra" => array("Luna"),
        "Marte" => array("Fobos", "Deimos"),
        "Jupiter" => array("Io", "Europa", "Ganímedes", "Calisto"),
        "Saturno" => array("Mimas", "Encélado", "Tetis", "Dione", "Rea", "Titán", "Jápeto"),
        "Urano" => array("Ariel", "Umbriel", "Titania", "Oberón", "Miranda"),
        "Neptuno" => array("Tritón", "Nereida", "Náyade", "Talasa", "Despina", "Galatea", "Larisa", "Proteo", "Halimede", "Psámate", "Sao", "Laomedeia", "Neso", "Hippocamp"),
    );

    $satelites = $_POST["satelites"];

    $satelites = strtolower($satelites);
    $satelites = ucfirst($satelites);

    $planeta = $planetas[$satelites];

    $tabla = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Satélites de '.$satelites.'</th></tr></thead><tbody>';

    if (is_array($planeta)) {
        foreach ($planeta as $key => $value) {
            $tabla .= "<tr><td>$value</td></tr>";
        }
    } else {
        $tabla .= "<tr><td>$planeta</td></tr>";
    }

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">Tabla de satélites de $satelites</h1>
    $tabla
    </tbody></table>
    <a href='index.php'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;

    */

/*
TODO Punto 13
*Supongamos que tienes un array que representa los planetas en nuestro sistema solar. Quieres poder revertir el
*ordendelosplanetasenesearray.
? Paso1:Crearelarraydeplanetas
*Nota: Ahora, tienes una tarea interesante. Tienes que invertir el orden de los planetas.
*/
/*
    $planetas = array("Sol", "Mercurio", "Venus", "Tierra", "Marte", "Jupiter", "Saturno", "Urano", "Neptuno");

    $tabla1 = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planetas en orden original</th></tr></thead><tbody>';

    foreach ($planetas as $key => $value) {
        $tabla1 .= "<tr><td>$value</td></tr>";
    }

    $planetas = array_reverse($planetas);

    $tabla2 = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planetas en orden inverso</th></tr></thead><tbody>';

    foreach ($planetas as $key => $value) {
        $tabla2 .= "<tr><td>$value</td></tr>";
    }
    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">Tabla de planetas en orden inverso</h1>
    $tabla1
    </tbody></table>
    $tabla2
    </tbody></table>
    <a href="index.php"><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;
*/
?>