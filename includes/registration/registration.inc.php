<?php

if ($_SERVER ["REQUEST_METHOD"] === "POST") {

    $studentname = $_POST["name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $course = $_POST["course"];
    $yearlvl = $_POST["yearlvl"];
    $birthdate = $_POST["birthdate"];
    $placeofbirth = $_POST["placeofbirth"];
    $religion = $_POST["religion"];
    $emailadd = $_POST["emailadd"];
    $phonenum = $_POST["phonenum"];
    $homeaddress = $_POST["address"];

    $pwd = $_POST["pwd"];
    $confirmpass = $_POST["confirmpass"];

    // ERROR HANDLERS

    $errors = [];

    try {
        
        require_once "../dbh.inc.php";
        require_once "registration_model.inc.php";
        require_once "registration_contr.inc.php";

        if (is_input_empty($studentname, $age, $sex, $course, $yearlvl, $birthdate, $placeofbirth, $religion, $emailadd, $phonenum, $homeaddress, $pwd, $confirmpass)) {
            $errors["empty_input"] = "Please fill in all fields.";
        } else {
        
            if (is_age_invalid($age)) {
                $errors["age_invalid"] = "Age is invalid.";
            }

            if (is_email_invalid($emailadd)) {
                $errors["email_invalid"] = "Email is invalid.";
            }

            if(is_phonenum_invalid($phonenum)) {
                $errors["phonenum_invalid"] = "Phone number is invalid.";
            }

            if (is_password_invalid($pwd, $confirmpass)) {
                $errors["password_invalid"] = "Passwords do not match.";
            }

        }

        require_once "../config_session.inc.php";

        if ($errors) {
            $_SESSION["errors_regis"] = $errors; 

            header("Location: /regis.php");
            die();
        }

        $age = (int) $age;
        $birthdate = date("Y-m-d", strtotime($birthdate));

        update_user($pdo, $studentname, $age, $sex, $course, $yearlvl, $birthdate, $placeofbirth, $religion, $emailadd, $phonenum, $homeaddress, $pwd);

        header("Location: /regis.php?regis=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {

    header("Location: /regis.php");
    die();
}