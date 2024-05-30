<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/registration/registration_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script defer src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <title>Registration</title>
    </head>
<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100"> 

    <!----------------------- Registration Container -------------------------->

        <div class="border rounded-5 px-5 bg-white shadow box-area h-70">

    <!--------------------------- Registration Content----------------------------->
            <div class="header-text text-center my-3 mt-4 fs-2">Registration</div>
            <form action="includes/registration/registration.inc.php" method="post">
                <div class="row mb-3">
                    <div class="col-md-8">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Full name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="text" name="age" class="form-control form-control-lg bg-light fs-6" placeholder="Age">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="text" name="sex" class="form-control form-control-lg bg-light fs-6" placeholder="Sex">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md">
                        <div class="input-group">
                            <input type="text" name="studentnum" class="form-control form-control-lg bg-light fs-6" placeholder="Student Number" value= <?php echo $_SESSION["user_username"] ?> readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="text" name="course"  class="form-control form-control-lg bg-light fs-6" aria-label="Text input with dropdown button" placeholder="Course">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item">BS Anthropology</a></li>
                                <li><a class="dropdown-item">BS Architecture</a></li>
                                <li><a class="dropdown-item">BA Communication and Media Arts</a></li>
                                <li><a class="dropdown-item">BA English</a></li>
                                <li><a class="dropdown-item">Diploma in Exercise and Sports Science</a></li>
                                <li><a class="dropdown-item">Diploma/Master in Urban and Regional Planning</a></li>
                                <li><a class="dropdown-item">Bachelor of Sports Science</a></li>
                                <li><a class="dropdown-item">Associate in Arts in Sports Studies</a></li>
                                <li><a class="dropdown-item">MS Human Movement Science</a></li>
                                <li><a class="dropdown-item">BS Applied Mathematics</a></li>
                                <li><a class="dropdown-item">BS Biology</a></li>
                                <li><a class="dropdown-item">BS Computer Science</a></li>
                                <li><a class="dropdown-item">BS Food Technology</a></li>
                                <li><a class="dropdown-item">MS Food Science</a></li>
                                <li><a class="dropdown-item">BS Data Science</a></li>
                                <li><a class="dropdown-item">BS Agribusiness Economics</a></li>
                                <li><a class="dropdown-item">Master in Management</a></li>
                                <li><a class="dropdown-item">PhD by Research</a></li>
                                <li><a class="dropdown-item">Professor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="text" name="yearlvl" class="form-control form-control-lg bg-light fs-6 " aria-label="Text input with dropdown button" placeholder="Year Level">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item">1st Year</a></li>
                                <li><a class="dropdown-item">2nd Year</a></li>
                                <li><a class="dropdown-item">3rd Year</a></li>
                                <li><a class="dropdown-item">4rd Year</a></li>
                                <li><a class="dropdown-item">N/A</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-5">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon">Birth Date</span>
                            <input type="date" name="birthdate"  class="form-control form-control-lg bg-light fs-6" placeholder="Date of Birth">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group">
                            <input type="text" name="placeofbirth" class="form-control form-control-lg bg-light fs-6" placeholder="Place of Birth">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <input type="text" name="religion" class="form-control form-control-lg bg-light fs-6" placeholder="Religion">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-7">
                        <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" name="emailadd" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping">+63</span>
                            <input type="text" name="phonenum" class="form-control form-control-lg bg-light fs-6" placeholder="Contact Number">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="input-group">
                            <input type="text" name="address" class="form-control form-control-lg bg-light fs-6" placeholder="Home Address">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-5">
                        <div class="input-group">
                            <input type="password" name="pwd" class="form-control form-control-lg bg-light fs-6" placeholder="Change Password">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="input-group">
                            <input type="password" name="confirmpass" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
                
                <?php
                    check_registration_errors();
                ?>

                <div class="row mb-4">
                    <div class="col-md-auto">
                        <button type="submit" name="regis" class="btn btn-success">Submit</button>
                    </div>
                    <div class="col-md-auto">
                        <a type="button" class="btn btn-outline-dark" href="login.php" >Back to Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(".dropdown-menu .dropdown-item").on("click", function() {
            $(this).closest('.input-group').find('input').val($(this).text());
        });
    </script>
</body>
</html>