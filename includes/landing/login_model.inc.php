<?php

declare(strict_types=1);

function get_dormer_data($pdo, $studentnum) {
    $stmt = $pdo->prepare("SELECT * FROM dormers WHERE studentnum = :studentnum");
    $stmt->bindParam(":studentnum", $studentnum);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}