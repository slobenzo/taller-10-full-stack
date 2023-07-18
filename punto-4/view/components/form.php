<?php include "./controller/calculationController.php"; ?>

<form method="post">
    <h2>Calculo de edad</h2>
    <div class="pass__input">
        <label for="birth-date">
            Fecha de Nacimiento
        </label>
        <input id="birth-date" type="date" name="birth_date">
    </div>
    <?php if ($message != "") { ?>
        <?php echo $message; ?>
        </span>
    <?php } ?>
    </div>
    <button>Consultar</button>
</form>