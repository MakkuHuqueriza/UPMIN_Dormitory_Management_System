<?php

declare(strict_types=1);

function update_user($pdo, $studentname, $age, $sex, $course, $yearlvl, $birthdate, $placeofbirth, $religion, $emailadd, $phonenum, $homeaddress, $pwd) {
    $query = "UPDATE dormers SET studentname = :studentname, age = :age, sex = :sex, course = :course, yearlvl = :yearlvl, birthdate = :birthdate, placeofbirth = :placeofbirth, religion = :religion, emailadd = :emailadd, phonenum = :phonenum, homeaddress = :homeaddress, pwd = :pwd WHERE studentnum = :studentnum";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":studentname", $studentname);
    $stmt->bindParam(":age", $age);
    $stmt->bindParam("sex", $sex);
    $stmt->bindParam(":course", $course);
    $stmt->bindParam(":yearlvl", $yearlvl);
    $stmt->bindParam(":birthdate", $birthdate);
    $stmt->bindParam(":placeofbirth", $placeofbirth);
    $stmt->bindParam(":religion", $religion);
    $stmt->bindParam(":emailadd", $emailadd);
    $stmt->bindParam(":phonenum", $phonenum);
    $stmt->bindParam(":homeaddress", $homeaddress);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":studentnum", $_SESSION["user_id"]);

    $stmt->execute();
}