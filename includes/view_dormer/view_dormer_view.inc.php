<?php

function show_dormer($results) {
    if (empty($results)) {
        echo '<p class="form-error">No dormers found!</p>';
    } else {
        if (isset($_SESSION["results"])) {
            ob_start();
        }
        foreach ($results as $row) {

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
            echo "<td>" . htmlspecialchars($row['studentnum']) . "</td>"; 
            echo "<td>" . htmlspecialchars($row['studentname']) . "</td>";
            echo "<td>" . htmlspecialchars($row['age']) . "</td>";
            echo "<td>" . htmlspecialchars($row['sex']) . "</td>";
            echo "<td>" . htmlspecialchars($row['course']) . "</td>";
            echo "<td>" . htmlspecialchars($row['yearlvl']) . "</td>";  
            echo "<td>" . htmlspecialchars($row['birthdate']) . "</td>";
            echo "<td>" . htmlspecialchars($row['placeofbirth']) . "</td>";
            echo "<td>" . htmlspecialchars($row['religion']) . "</td>";
            echo "<td>" . htmlspecialchars($row['emailadd']) . "</td>";
            echo "<td>" . htmlspecialchars($row['phonenum']) . "</td>";
            echo "<td>" . htmlspecialchars($row['homeaddress']) . "</td>";
            echo "<td>" . htmlspecialchars($row['create_at']) . "</td>";
            echo "<td>" . htmlspecialchars($row['update_at']) . "</td>";
            echo "</tr>";
            echo "</table>";
        }
        if (isset($_SESSION["results"])) {
            ob_end_clean();
        }
    }
}
