<?php

// Función para obtener la serie de Fibonacci
function fibonacci($limite) {
    //ya que conocemos el primero y segundo número de la serie, los agregamos al array
    $serie = [0, 1];
    // imprimiento los dos primeros números, solo para mostrar el proceso
    echo "Interracion 1: 0, 1";
    // Generando la serie de Fibonacci, a partir del tercer número y el límite es el numero indicado
    for ($i = 2; $i < $limite; $i++) {
        $siguiente = $serie[$i - 1] + $serie[$i - 2];
        $serie[] = $siguiente;
        echo "<br>Interracion $i: " . $serie[$i - 2] . " + " . $serie[$i - 1]  . " = " . $siguiente; 
    }
    return $serie;
}

// Ejemplo de uso
$limite = 10;
$serieFibonacci = fibonacci($limite);
echo "<br>Serie Fibonacci con $limite iteraciones: " . implode(", ", $serieFibonacci);

?>