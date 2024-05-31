<?php

declare(strict_types=1);

function check_registration_errors() {
    if (isset($_SESSION["errors_regis"])){
        $errors = $_SESSION["errors_regis"];

        echo "<br>";
        
        foreach($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_regis"]);
    } else if (isset($_GET['regis']) && $_GET['regis'] === "success") {
        echo '<br>';
        echo '<p class="form-success">Registration successful!</p>';
    }
}