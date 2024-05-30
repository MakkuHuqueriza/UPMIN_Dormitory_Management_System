<?php

declare(strict_types=1);

function get_all_dormers(object $pdo) {

    $query = 'SELECT * FROM dormers WHERE studentnum != "admin"';

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}