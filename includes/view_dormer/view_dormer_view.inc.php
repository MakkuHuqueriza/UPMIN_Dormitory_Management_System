<?php

function show_dormer($results) {
    if (empty($results)) {
        echo '<p class="form-error">No records of dormers in the database!</p>';
    } else {
        if (isset($_SESSION["results"])) {
            ob_start();
        }
        foreach ($results as $row) {
            echo '<tr class="highlight">';
            echo '<td>' . htmlspecialchars($row['studentnum']) . '</td>';
            echo '<td>' . htmlspecialchars($row['studentname']) . '</td>';
            echo '<td>' . htmlspecialchars($row['age']) . '</td>';
            echo '<td>' . htmlspecialchars($row['sex']) . '</td>';
            echo '<td>' . htmlspecialchars($row['course']) . '</td>';
            echo '<td>' . htmlspecialchars($row['yearlvl']) . '</td>';
            echo '<td>' . htmlspecialchars($row['birthdate']) . '</td>';
            echo '<td>' . htmlspecialchars($row['placeofbirth']) . '</td>';
            echo '<td>' . htmlspecialchars($row['religion']) . '</td>';
            echo '<td>' . htmlspecialchars($row['emailadd']) . '</td>';
            echo '<td>' . htmlspecialchars($row['phonenum']) . '</td>';
            echo '<td>' . htmlspecialchars($row['homeaddress']) . '</td>';
            echo '<td>' . htmlspecialchars($row['payment']) . '</td>';
            echo '<td>' . htmlspecialchars($row['major_offense']) . '</td>';
            echo '<td>' . htmlspecialchars($row['minor_offense']) . '</td>';            
            echo '<td>' . htmlspecialchars($row['permit']) . '</td>';
            echo '<td>';
            echo '<a href="edituser.php?studentnum=' . urlencode($row['studentnum']) . '" class="btn btn-primary btn-sm"><i class="lni lni-pencil-alt"></i></a>';
            echo '<button type="button" class="btn btn-danger delete-action btn-sm" onclick="deleteStudent(\'' . $row['studentnum'] . '\')"><i class="lni lni-trash-can"></i></button>';
            echo '</td>';
            echo '</tr>';
        }
        if (isset($_SESSION["results"])) {
            ob_end_clean();
        }
    }
}
