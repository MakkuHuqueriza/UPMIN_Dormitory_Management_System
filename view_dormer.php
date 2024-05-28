<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/search_dormer/search_dormer_view.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>View Dormers</title>
</head>
<body>
    <h3>View Dormers</h3>

    <?php
        require_once 'includes/view_dormer/view_dormer.inc.php'
    ?>

    <h3>Search Dormer</h3>
    <form action="includes/search_dormer/search_dormer.inc.php" method="post">
        <input type="text" name="search_dormer" placeholder="Input Student Number">
        <button type="submit">Search</button>
    </form>

    <?php
        check_search_errors();
    ?>
</body>
</html>