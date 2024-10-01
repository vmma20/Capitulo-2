<?php
// Definimos algunas variables para probar
$var1 = null;
$var2 = "";
$var3 = "Hola";
$var4 = array();
$var5 = array("uno", "dos", "tres");


// Funciones de comprobación
echo "is_null(\$var1): " . (is_null($var1) ? 'true' : 'false') . "\n";
echo "empty(\$var2): " . (empty($var2) ? 'true' : 'false') . "\n";
echo "isset(\$var3): " . (isset($var3) ? 'true' : 'false') . "\n";


// Funciones de valor
echo "is_array(\$var4): " . (is_array($var4) ? 'true' : 'false') . "\n";
echo "is_string(\$var3): " . (is_string($var3) ? 'true' : 'false') . "\n";
echo "is_numeric(\$var5[0]): " . (is_numeric($var5[0]) ? 'true' : 'false') . "\n";
?>
