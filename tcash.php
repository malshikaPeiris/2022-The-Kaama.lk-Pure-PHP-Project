<?php
include 'connection.php';
if(isset($_POST['submit'])){
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $nic = $_POST['nic'];
  $zip = $_POST['zip'];
  $contact= $_POST['contact'];
  


 



  $sql="insert into `adminpayment`(fullname,email,address,nic,zip,contact)
  values('$fullname','$email','$address','$nic','$zip','$contact')";
$result=mysqli_query($con,$sql);
if($result){

echo '<script>alert("Thank you for order. we will get back to you soon!")</script>';
// header ('location:display.php'); 

  }else{
    die(mysqli_error($con));
  }
}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Cash Payment</title>
  </head>
  <body>
    <h1 class="text-center">Cash payment</h1>
   <div class="container my-5">
   <form method="post" >
     <div class="form-group mb-3">
         <label>Full Name</label>
        <input type="text" class="form-control" placeholder="Enter Your name" name="fullname"  autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter Your email" name="email"autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>Address</label>
        <input type="text" class="form-control" placeholder="Enter Your Address" name="address" autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>NIC</label>
        <input type="text" class="form-control" placeholder="Enter Your NIC" name="nic" autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>ZIP</label>
        <input type="text" class="form-control" placeholder="Enter Your ZIP" name="zip" autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>Contact Number</label>
        <input type="text" class="form-control" placeholder="Enter Your contact" name="contact" autocomplete="false">        
     </div>

  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
</form>
</div>

    
  </body>
</html>