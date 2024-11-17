<?php


echo "<br><h2>Prueba de la función fibonacci</h2><br>";

// Ejecutando la función
$limite = 10;

echo "Entrada: $limite<br>";

echo "<br>Salida: <br>";

$serieFibonacci = fibonacci($limite);
// Función para obtener la serie de Fibonacci
function fibonacci($limite) {
    //ya que conocemos el primero y segundo número de la serie, los agregamos al array
    $serie = [0, 1];
    // imprimiento los dos primeros números, solo para mostrar el proceso
    echo "Interracion 1: 0, 1";
    // Generando la serie de Fibonacci, a partir del tercer número y el límite es el numero indicado
    for ($i = 2; $i < $limite; $i++) {
        // Calculando el siguiente número de la serie
        $siguiente = $serie[$i - 1] + $serie[$i - 2];
        $serie[] = $siguiente;
        // imprimiendo el proceso
        echo "<br>Interracion $i: " . $serie[$i - 2] . " + " . $serie[$i - 1]  . " = " . $siguiente; 
    }
    return $serie;
}




echo "<br><h2>Prueba de la función esPrimo </h2><br>";
// Funcion para verificar si un número es primo
$numero = 7;
echo "Entrada: $numero<br>";

echo "<br>Salida: <br>";

if (esPrimo($numero)) {
    echo "<br>$numero es un número primo.";
} else {
    echo "<br>$numero no es un número primo.";
}

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= $numero / 2; $i++) {
        echo "Verificando si $numero es divisible por $i<br>";
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}



echo "<br><h2>Prueba de la función esPalindromo </h2><br>";
// Funcion para verifica si una cadena es palindromo
$cadena = "reconocer";
echo "Entrada: $cadena<br>";

echo "<br>Salida: <br>";
if (esPalindromo($cadena)) {
    echo "<br>'$cadena' es un palíndromo.";
} else {
    echo "<br>'$cadena' no es un palíndromo.";
}


// funcion para verificar si una cadena es palindromo
function esPalindromo($cadena) {
    // utilizando la funcion strrev para invertir la cadena y compararla con la original
    return $cadena === strrev($cadena);
}



echo "<br><h2>Prueba de la Frecuencia de Caracteres </h2><br>";
// Funcion 
$cadenaFrecuencia = "reconocer";
echo "Entrada: $cadenaFrecuencia<br>";

echo "<br>Salida: <br>";
frecuenciaCaracteres($cadenaFrecuencia);


// funcion para verificar la frecuencia de caracteres
function frecuenciaCaracteres($cadena) {
    // definimos un array para almacenar la frecuencia de los caracteres
    $frecuencia = [];
    // convirtiendo la cadena en un array
    $cadenaToArray = str_split($cadena);
    foreach ($cadenaToArray as $caracter) {
        // si el caracter ya existe en el array, incrementamos su frecuencia.
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            // si no existe inicializamos la frecuencia en 1, y el caracter como clave
            $frecuencia[$caracter] = 1;
        }
    }
    // imprimiendo la frecuencia de los caracteres, con echo no funciona..
   print_r($frecuencia);
}



?>