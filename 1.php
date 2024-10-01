<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resolver Ecuación Cuadrática</title>
</head>
<body>
    <h2>Resolver Ecuación Cuadrática</h2>
    <form method="post" action="">
        <label for="a">a:</label>
        <input type="number" step="any" name="a" id="a" required><br><br>
        <label for="b">b:</label>
        <input type="number" step="any" name="b" id="b" required><br><br>
        <label for="c">c:</label>
        <input type="number" step="any" name="c" id="c" required><br><br>
        <input type="submit" name="submit" value="Resolver">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        function resolverEcuacionCuadratica($a, $b, $c) {
            $discriminante = $b * $b - 4 * $a * $c;

            if ($discriminante < 0) {
                return "La ecuación no tiene soluciones reales.";
            } else {
                $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
                $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

                return "Las soluciones son: x1 = $x1 y x2 = $x2";
            }
        }

        echo resolverEcuacionCuadratica($a, $b, $c);
    }
    ?>
</body>
</html>