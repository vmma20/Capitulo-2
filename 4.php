<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprobar Palíndromo</title>
</head>
<body>
    <form method="post">
        <label for="cadena">Introduce una cadena:</label>
        <input type="text" id="cadena" name="cadena" required>
        <button type="submit">Comprobar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["cadena"];
        if (esPalindromo($cadena)) {
            echo "<p>La cadena es un palíndromo.</p>";
        } else {
            echo "<p>La cadena no es un palíndromo.</p>";
        }
    }

    function esPalindromo($cadena) {
        // Convertir la cadena a minúsculas y eliminar espacios y caracteres no alfanuméricos
        $cadena = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $cadena));
        
        // Comparar la cadena original con su reverso
        return $cadena == strrev($cadena);
    }
    ?>
</body>
</html>