<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $search_dormer = $_POST['search_dormer'];

    try {
        require_once '../dbh.inc.php';
        require_once 'search_dormer_model.inc.php';
        require_once 'search_dormer_contr.inc.php';

        //ERROR HANDLERS
        $errors = [];

        if (is_input_empty($search_dormer)) {
            $errors["empty_input"] = "Please fill in all fields.";
        } else if (is_search_dormer_right_length($search_dormer)) {
            $errors["search_dormer_length"] = "Student number should be exactly 10 characters long.";
        }

        require_once "../config_session.inc.php";

        if ($errors) {
            $_SESSION["errors_search"] = $errors; 

            header("Location: /view_dormer.php");
            die();
        }
        
        $results = search_dormer($pdo, $search_dormer);

        $_SESSION["results"] = $results;

        $pdo = null;
        $stmt = null;

        header("Location: /view_dormer.php");
        
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {

    header("Location: /login.php");
    die();
}