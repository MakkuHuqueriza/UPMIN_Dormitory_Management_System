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
    
    echo '<tr class="highlight">';
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
    echo '<td>';
    // echo '<a href="edit.php?studentnum=' . urlencode($row['studentnum']) . '" class="edit-action"><i class="lni lni-pencil-alt"></i></a>';
    echo '<button type="button" class="btn btn-danger delete-action" onclick="deleteStudent(\'' . $results[0]['studentnum'] . '\')"><i class="lni lni-trash-can"></i></button>';
    echo '</td>';
    echo '</tr>';

    unset($_SESSION["results"]);
}