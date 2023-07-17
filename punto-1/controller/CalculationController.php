    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero1 = floatval($_POST["numero1"]);
        $numero2 = floatval($_POST["numero2"]);
        $operacion = $_POST["operacion"];

        switch ($operacion) {
            case "SUMA":
                $resultado = $numero1 + $numero2;
                break;
            case "RESTA":
                $resultado = $numero1 - $numero2;
                break;
            case "MULTIPLICACION":
                $resultado = $numero1 * $numero2;
                break;
            case "DIVISION":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Error: división entre cero";
                }
                break;
            default:
                $resultado = "Operación no válida";
                break;
        }


    }
    ?>
