<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Customer View</title>

<head>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <link rel="stylesheet" type="text/css" href="css/cusview.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

<body>

<div id="page-wrapper">

    <div class="logo">
        <a href="index.php"><img class="logo-img" src="image/Asset2x.png"/>
            <img class="bike" src="image/bike.png"/></a>
    </div>
    <div class="cart">

        <a href="track.html"><img class="cart-icon" src="image/lk.png"/></a>
        <?php
        if (isset($_SESSION['email']) && $_SESSION['email'] != '') {
            ?>
            <a href="logout.php"><img class="logout" src="image/logo2.png"/></a>
            <?php
        } else {
            ?>
            <a href="login.php"><img class="login" src="image/logo1.png"/></a>
        <?php } ?>
        <a href="cart.html"><img class="cart-icon" src="image/pngfind.com-cart-logo-png-891718.png"/></a>
    </div>
    <?php
    if (isset($_SESSION['email']) && $_SESSION['email'] != '') {
        echo "Welcome " . $_SESSION['fullname'];
    }
    ?>


<br>
    <div class="topnav">
        <a class="button home_button button_round" href="Customer_view.php"><i class="fa fa-Home"></i>Home</a>
        <a class="button home_button button_round" href="aboutus.html">About Us</a>
        <a class="button home_button button_round" href="contact.html">Contact Us</a>
        <a class="button home_button button_round" href="#">Category</a>
        <a class="button home_button button_round" href="index.php">Admin Panel</a>


        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

    </div>






    <br><br>

      <div class="card_wrapper">
        <?php
        $sql = "Select * from `menutable`";
        $result = mysqli_query($con, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $category_name = $row['category_name'];
            $menu_name = $row['menu_name'];
            $menu_description = $row['menu_description'];
            $menu_unit_price = $row['menu_unit_price'];
            $image = $row['image'];
            echo '
                    <div class="card">
                    
                   <center> <h6> <div class="card-title">' . $category_name . '</div></h6>
                    <img class="image" style="width:300px; height:200px" src="'.$image.'" alt="Avatar">
                    <div class="card-title">' . $menu_name . '</div></center>
    
                    <div class="card-body">
                    <center>
                    <div class="rate"">
                      <input type="radio" id="star5" name="rate" value="5" />
                      <label for="star5" title="text">5 stars</label>
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4" title="text">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" title="text">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" title="text">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" title="text">1 stars</label>
                    </div>
                    <br/><br/>
                    <button class="btn btn-light btn-sm"><a href="view_det.php? viewid=' . $id . ' " class="text-danger"style="text-decoration:none">View</a> </button>
                    </div></center>
                    
                    </div>
                    </div>
                    ';
          }
        }
        ?>
      </div>

    <div id="box2" class="bg-image2">

    </div>

    <div class="footer-img">
        <img src="image/footer.png"/>
    </div>


</div>

</body>

</html>