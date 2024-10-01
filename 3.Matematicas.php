<?php
function resolverEcuacionSegundoGrado($a, $b, $c) {
    // Calcula el discriminante
    $discriminante = $b * $b - 4 * $a * $c;

    // Verifica si el discriminante es negativo
    if ($discriminante < 0) {
        return false; // No hay soluciones reales
    }

    // Calcula las dos soluciones
    $raiz_discriminante = sqrt($discriminante);
    $x1 = (-$b + $raiz_discriminante) / (2 * $a);
    $x2 = (-$b - $raiz_discriminante) / (2 * $a);

    return array($x1, $x2);
}

// Ejemplo de uso
$a = 1; // Cambia estos valores para probar con diferentes coeficientes
$b = -3;
$c = 2;

$resultado = resolverEcuacionSegundoGrado($a, $b, $c);
if ($resultado === false) {
    echo "La ecuación no tiene soluciones reales.";
} else {
    echo "Las soluciones son: x1 = " . $resultado[0] . ", x2 = " . $resultado[1];
}
?>
