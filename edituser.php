<?php

    require_once "includes/config_session.inc.php";
    require_once "includes/edit_user/edituser_view.inc.php";
    require_once "includes/edit_user/edituser_model.inc.php";
    require_once "includes/dbh.inc.php";

    $result = get_user($pdo, urldecode($_GET["studentnum"]));
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script defer src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
        <title>Registration</title>
    </head>
<body>
    
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100"> 

    <!----------------------- Registration Container -------------------------->

        <div class="border rounded-5 px-5 bg-white shadow">

    <!--------------------------- Registration Content----------------------------->
            
            <div class="header-text text-center my-3 mt-4 fs-2">Edit Dormer Responsibilities</div>
            <form action="includes/edit_user/edituser.inc.php" method="post">
                <div class="row mb-3">
                    <div class="col-md-9">
                        <div class="input-group">   
                            <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Student Name" value="<?php echo $result["studentname"]; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" name="studentnum" class="form-control form-control-lg bg-light fs-6" placeholder="Student Number" value="<?php echo $result["studentnum"]; ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Month(s) to pay:</span>
                            </div>
                            <input name="payment" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Major Offense</span>
                            </div>
                            <input name="majoroffense" type="number" class="form-control">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Minor Offense</span>
                            </div>
                            <input name="minoroffense" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Permit: valid from</span>
                            </div>
                            <input name="permitfrom" type="date" class="form-control">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">until</span>
                            </div>
                            <input name="permitto" type="date" class="form-control">
                        </div>
                    </div>
                </div>
                <?php check_edit_errors(); ?>
                <div class="row mb-4">
                    <div class="col-md-auto">
                        <button type="submit" name="edit" class="btn btn-success">Submit</button>
                    </div>
                    <div class="col-md-auto">
                        <a type="button" class="btn btn-outline-dark" href="view_dormer.php">Back to Admin</a>
                    </div>
                    <div class="col" name="output"></div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>