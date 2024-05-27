<?php

declare(strict_types=1);

function is_input_empty(string $studentname, string $age, string $sex, string $course, string $yearlvl, string $birthdate, string $placeofbirth, string $religion, string $emailadd, string $phonenum, string $address, string $pwd, string $confirmpass) {
    return empty($studentname) || empty($age) || empty($sex) || empty($course) || empty($yearlvl) || empty($birthdate) || empty($placeofbirth) || empty($religion) || empty($emailadd) || empty($phonenum) || empty($address) || empty($pwd) || empty($confirmpass);
}

function is_age_invalid(string $age) {
    return !is_numeric($age) || $age < 0 || $age > 100;
}

function is_email_invalid(string $emailadd) {
    return !filter_var($emailadd, FILTER_VALIDATE_EMAIL);
}

function is_phonenum_invalid(string $phonenum) {
    return !preg_match("/^[0-9]{10}$/", $phonenum);
}

function is_password_invalid(string $pwd, string $confirmpass) {
    return $pwd !== $confirmpass;
}