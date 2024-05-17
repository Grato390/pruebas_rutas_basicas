<?php
// Definición de variables
$a = 1;
$b = 2;

// Función que suma los números y devuelve el resultado
function sumaNumeros($a, $b) {
    return $a + $b;
}

// Condicional if
if ($a !== $b) {
    // El número es diferente de b.
    if ($a > $b) {
        // El número c es mayor que b.
    } else {
        // El número c no es mayor que b.
    }
}

// Switch
$numeros = [$a, $b];
$opcion = $a;

// Debug: Entrando en el switch para verificar la opción seleccionada.
switch ($opcion) {
    case $numeros[0]:
        // entro número 1
        break;
    case $numeros[1]:
        // entro número 2.
        break;
    default:
        // Es un número desconocido.
        break;
}

// Bucle while
$contador = 0;
$cantidad_elementos = count($numeros);

// Debug: Entrando en el bucle while.
while ($contador < $cantidad_elementos) {
    // Iteración del contador: $contador
    // Incrementar contador
    $contador++;
}

// Llamada a la función sumaNumeros() y salida del resultado
$resultado_suma = sumaNumeros($a, $b);
// La suma de los números es: $resultado_suma

echo "Terminaste el código.";


// // (1) -> (1.2) -> (5) -> (7) -> (8)
// Camino más cercano:

// (1) -> (1.1) -> (3) -> (8)
?>


