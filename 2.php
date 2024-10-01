<?php
function resolverEcuacionCuadratica($a, $b, $c) {
    // Calcular el discriminante
    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante < 0) {
        // No hay soluciones reales
        return false;
    } else {
        // Calcular las dos soluciones
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

        return array($x1, $x2);
    }
}

// Ejemplo de uso
$a = 1;
$b = -3;
$c = 2;
$resultado = resolverEcuacionCuadratica($a, $b, $c);

if ($resultado === false) {
    echo "La ecuación no tiene soluciones reales.";
} else {
    echo "Las soluciones son: x1 = " . $resultado[0] . " y x2 = " . $resultado[1];
}
?>