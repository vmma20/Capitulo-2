<?php
function filtrarMenoresQue($array, $limite) {
    // Usar array_filter para filtrar los elementos menores que el límite
    $resultado = array_filter($array, function($numero) use ($limite) {
        return $numero < $limite;
    });
    
    // Reindexar el array para que las claves sean consecutivas
    return array_values($resultado);
}


// Ejemplo de uso
$numeros = [1, 5, 8, 12, 20, 3];
$limite = 10;
$numerosFiltrados = filtrarMenoresQue($numeros, $limite);


print_r($numerosFiltrados);
?>
