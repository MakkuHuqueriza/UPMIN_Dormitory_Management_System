<?php
try {
    require_once 'includes/dbh.inc.php';
    require_once 'includes/view_dormer/view_dormer_model.inc.php';

    $results = get_all_dormers($pdo);

    $pdo = null;
    $stmt = null;

    require_once 'includes/view_dormer/view_dormer_view.inc.php';

    show_dormer($results);

    if (isset($_SESSION["results"])) {
        show_search_results();
    }
    
} catch (Exception $e) {
    die("Query failed: " . $e->getMessage());
}