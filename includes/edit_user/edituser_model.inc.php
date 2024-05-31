<?php

declare(strict_types=1);

function get_user(object $pdo, string $studentnum) {
    $query = "SELECT * FROM dormers WHERE studentnum = :studentnum";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":studentnum", $studentnum);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ? $result : false;
}

function update_user(object $pdo, string $studentnum, float|null $newPayment, int|null $majoroffense, int|null  $minoroffense, string|null $permit) {
    $query = "UPDATE dormers SET payment = :newPayment, major_offense = :newMajorOffense, minor_offense = :newMinorOffense, permit = :permit WHERE studentnum = :studentnum";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":newPayment", $payment);
    $stmt->bindParam(":newMajorOffense", $majoroffense);
    $stmt->bindParam(":newMinorOffense", $minoroffense);
    $stmt->bindParam(":permit", $permit);
    $stmt->bindParam(":studentnum", $studentnum);
    $stmt->execute();

    return $stmt->rowCount();
}