 <?php
    if (isset($_POST['verificar'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];

        $fechaNacimiento = DateTime::createFromFormat('Y-m-d', $anio . '-' . $mes . '-' . $dia);
        $fechaActual = new DateTime();

        $diferencia = $fechaNacimiento->diff($fechaActual);
        $edad = $diferencia->y;

        echo "Edad: " . $edad . "<br>";

        if ($edad < 18) {
            echo "No es mayor de edad";
        } else {
            echo "Es mayor de edad";
        }
    }
    ?>