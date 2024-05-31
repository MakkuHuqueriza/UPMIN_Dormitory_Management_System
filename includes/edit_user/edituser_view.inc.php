<?php

declare(strict_types=1);

function check_edit_errors() {
    if (isset($_SESSION["errors_edit"])){
        $errors = $_SESSION["errors_edit"];

        echo "<br>";
        
        foreach($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_edit"]);
    } 
}