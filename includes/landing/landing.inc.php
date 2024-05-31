<?php

try {
    
    $studentnum = $_SESSION["user_id"];

    require_once "../includes/dbh.inc.php";
    require_once "login_model.inc.php";

    require_once "../includes/config_session.inc.php";

    $data = get_dormer_data($pdo, $studentnum);

    $name = $data[0]["studentname"];
    $course = $data[0]["course"];
    $yearlvl = $data[0]["yearlvl"];
    $payment = $data[0]["payment"];
    $major_offense = $data[0]["major_offense"];
    $minor_offense = $data[0]["minor_offense"];
    $permit = $data[0]["permit"];

    $pdo = null;
    $stmt = null;


} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}