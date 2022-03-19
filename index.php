<?php session_start(); ?>
<html>
<head>
    <title>Kaama.lk</title>
    <link rel=stylesheet type=text/css href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="position:relative;" min-height :100%;>
<div id="page-wrapper">

    <div class="logo">
        <a href="index.php"><img class="logo-img" src="images/Asset2x.png"/>
            <img class="bike" src="images/bike.png"/></a>
    </div>
    <div class="cart">

        <a href="track.html"><img class="cart-icon" src="images/lk.png"/></a>
        <?php
        if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
            ?>
            <a href="logout.php"><img class="logout" src="images/logo2.png"/></a>
            <?php
        } else {
            ?>
            <a href="login.php"><img class="login" src="images/logo1.png"/></a>
        <?php } ?>
        <a href="cart.html"><img class="cart-icon" src="images/pngfind.com-cart-logo-png-891718.png"/></a>
    </div>
    <?php
    if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
        echo "Welcome " . $_SESSION['fullname'];
    }
    ?>
    <br><br><br><br><br><br><br><br><br>
    <div class="topnav">
        <a class="button home_button button_round" href="index.php"><i class="fa fa-Home"></i>Home</a>
        <a class="button home_button button_round" href="aboutus.html">About Us</a>
        <a class="button home_button button_round" href="contact.php">Contact Us</a>
        <a class="button home_button button_round" href="userprofile.php">User Profile</a>


        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

    </div>

    <?php include "category-menu.php" ?>


    <div id="box2" class="bg-image2">

    </div>

    <div class="footer-img">
        <img src="images/footer.png"/>
    </div>

</div>


</body>
</html>