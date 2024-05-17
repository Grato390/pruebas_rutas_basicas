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
    echo "El número es diferente de b.<br>";
    if ($a> $b) {
        echo "El número c es mayor que b.<br>";
    } else {
        echo "El número c no es mayor que b.<br>";
    }
}

// Switch
$numeros = [$a, $b];
$opcion = $a;

echo "Debug: Entrando en el switch para verificar la opción seleccionada.<br>";
switch ($opcion) {
    case $numeros[0]:
        echo "entro  número 1 <br>";
        break;
    case $numeros[1]:
        echo " entro  número 2.<br>";
        break;
    default:
        echo "Es un número desconocido.<br>";
        break;
}

// Bucle while
$contador = 0;
$cantidad_elementos = count($numeros);

echo "Debug: Entrando en el bucle while.<br>";
while ($contador < $cantidad_elementos) {
    echo "Iteración del contador: $contador<br>";
    $contador++;
}

// Llamada a la función sumaNumeros() y salida del resultado
$resultado_suma = sumaNumeros($a, $b);
echo "La suma de los números es: $resultado_suma<br>";

echo "Terminaste el código.";
?>
