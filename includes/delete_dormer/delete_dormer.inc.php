<?php


try {
    
    require_once 'includes/dbh.inc.php';
    require_once 'includes/delete_dormer/delete_dormer_model.inc.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
        $studentnum = $_POST['studentnum'];
    
        if (deleteStudent($pdo, $studentnum)) {
            echo "success";
        } else {
            echo "failure";
        }
    
        $pdo = null; 
        $stmt = null;
    
        exit(); // stop further execution, very important
    }

} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

