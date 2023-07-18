 <?php include "./controller/calculationController.php"; ?>

 <form method="post" action="">
     <h2>Verificacion de edad</h2>
     <label for="dia">Día de nacimiento:</label>
     <input type="number" name="dia" required><br>

     <label for="mes">Mes de nacimiento:</label>
     <input type="number" name="mes" required><br>

     <label for="anio">Año de nacimiento:</label>
     <input type="number" name="anio" required><br>

     <input type="submit" name="verificar" value="Verificar">
 </form>