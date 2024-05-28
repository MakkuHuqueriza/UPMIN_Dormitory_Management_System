<?php

declare(strict_types=1);

function check_search_errors() {
    if (isset($_SESSION["errors_search"])){
        $errors = $_SESSION["errors_search"];

        echo "<br>";
        
        foreach($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_search"]);
    } 
}

function show_search_results() {

    $results = $_SESSION["results"];

    echo "<br>";
    
    echo "<table class='dormer'>";
    echo "<tr>";
    echo "<td><b>STUDENT NUMBER</b></td>"; 
    echo "<td><b>STUDENT NAME</b></td>";
    echo "<td><b>AGE</b></td>";
    echo "<td><b>SEX</b></td>";
    echo "<td><b>PROGRAM</b></td>";
    echo "<td><b>YEAR LEVEL</b></td>";
    echo "<td><b>BIRTHDATE</b></td>";
    echo "<td><b>PLACE OF BIRTH</b></td>";
    echo "<td><b>RELIGION</b></td>";
    echo "<td><b>EMAIL ADDRESS</b></td>";
    echo "<td><b>PHONE NUMBER (+63)</b></td>";
    echo "<td><b>HOME ADDRESS</b></td>";
    echo "<td><b>CREATED AT</b></td>";
    echo "<td><b>UPDATED AT</b></td>";
    echo "</tr>";
    echo "</table>";

    echo "<table class='dormer'>";
    echo "<tr>";
    echo "<td>" . htmlspecialchars($results[0]['studentnum']) . "</td>"; 
    echo "<td>" . htmlspecialchars($results[0]['studentname']) . "</td>";
    echo "<td>" . htmlspecialchars(strval($results[0]['age'])) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['sex']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['course']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['yearlvl']) . "</td>";  
    echo "<td>" . htmlspecialchars($results[0]['birthdate']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['placeofbirth']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['religion']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['emailadd']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['phonenum']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['homeaddress']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['create_at']) . "</td>";
    echo "<td>" . htmlspecialchars($results[0]['update_at']) . "</td>";
    echo "</tr>";
    echo "</table>";

    unset($_SESSION["results"]);
}