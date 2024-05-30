<?php

declare(strict_types=1);

function deleteStudent(object $pdo, string $studentnum) {

    $query = "DELETE FROM dormers WHERE studentnum = :studentnum";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':studentnum', $studentnum);
    $stmt->execute();

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}