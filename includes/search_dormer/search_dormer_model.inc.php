<?php

declare(strict_types=1);

function search_dormer(object $pdo, string $search_dormer) {
    $query = "SELECT * FROM dormers WHERE studentnum = :search_dormer";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':search_dormer', $search_dormer);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $results;
}