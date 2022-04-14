<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Advertisement Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">






</head>

<body>
<div class="page-wrapper bg-color-03 p-t-45 p-b-50">
    <div class="navbar-nav w-100">
        <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="button.php" class="dropdown-item">Buttons</a>
                <a href="typography.php" class="dropdown-item">Typography</a>
                <a href="element.php" class="dropdown-item">Other Elements</a>
            </div>
        </div>
        <a href="widget.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
        <a href="form.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
        <a href="table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
        <a href="chart.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="signin.php" class="dropdown-item">Sign In</a>
                <a href="signup.php" class="dropdown-item">Sign Up</a>
                <a href="404.php" class="dropdown-item">404 Error</a>
                <a href="blank.php" class="dropdown-item">Blank Page</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Category</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="Addcategory.php" class="dropdown-item">Add Category</a>
                <a href="#" class="dropdown-item">Our Category</a>

            </div>
        </div>
    </div>
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Advertisement Registration Form</h2>
            </div>
            <div class="card-body">
                <form method="POST" onsubmit="return validateForm();" name="reg-form">
                    <div class="form-row m-b-55">
                        <div class="name">Name</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="first_name">
                                        <label class="label--desc">first name</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="last_name">
                                        <label class="label--desc">last name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Company</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="company" placeholder="Company name or Individual">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Address</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="Address">
                            </div>
                        </div>
                    </div>
                    <div class="form-row m-b-55">
                        <div class="name">Phone</div>
                        <div class="value">
                            <div class="row row-refine">
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="A-contact">
                                        <label class="label--desc">Area Code</label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="contact">
                                        <label class="label--desc">Phone Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Subject</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="subject">
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option>Subject 1</option>
                                        <option>Subject 2</option>
                                        <option>Subject 3</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="Password" name="psw">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Re-Enter-Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="psw-repeat">
                            </div>
                        </div>
                    </div>
                    <div class="form-row p-t-20">
                        <label class="label label--block">Are you an existing customer?</label>
                        <div class="p-t-15">
                            <label class="radio-container m-r-55">Yes
                                <input type="radio" checked="checked" name="exist">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">No
                                <input type="radio" name="exist">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    <BR>

                    <div>

                        <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

<!-- Validation JS-->
<script src="js/validation.js"></script>

</body>

</html>
