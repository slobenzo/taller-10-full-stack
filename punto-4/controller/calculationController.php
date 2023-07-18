<?php
    $message = "";


    if (isset($_POST["birth_date"])) {
        $birthDate = new DateTime($_POST["birth_date"]);
        $today = new DateTime();

        $diffDate = $birthDate->diff($today);

        if (($diffDate->y >= 18) && ($diffDate->m == 0) && ($diffDate->d >= 0)) {
            $message = "Tiene " . $diffDate->y . " año(s). Eres mayor de edad.";
    
        } else {
            $message = "Tiene " . $diffDate->y . " año(s). Eres menor de edad.";

        }
    }
