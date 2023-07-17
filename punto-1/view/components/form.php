<?php include "./controller/calculationController.php"; ?>

<h2>Su Resultado es:</h2>
<div class="xxxxxx">
    <form method="post" action="">
        <label for="numero1">Primer número:</label>
        <input type="number" name="numero1" required><br>

        <label for="numero2">Segundo número:</label>
        <input type="number" name="numero2" required><br>

        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="SUMA">Suma</option>
            <option value="RESTA">Resta</option>
            <option value="MULTIPLICACION">Multiplicación</option>
            <option value="DIVISION">División</option>
        </select><br>


        <button>calcular</button>
    </form>

</div>