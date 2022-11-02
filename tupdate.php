<?php
include 'connection.php';

$id=$_GET['updateid'];

$sql="select *from `adminpayment` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$fullname=$row['fullname'];
$email=$row['email'];
$address=$row['address'];
$nic=$row['nic'];
$zip=$row['zip'];
$contact=$row['contact'];

if(isset($_POST['submit'])){
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $nic = $_POST['nic'];
  $zip = $_POST['zip'];
  $contact=$_POST['contact'];



$sql="update `adminpayment`set id=$id, fullname='$fullname', email='$email', address='$address', nic='$nic',zip='$zip',contact='$contact' where id=$id ";
$result=mysqli_query($con,$sql);
if($result){
  echo '<script>alert("Updated successfully !")</script>';
  
 //header ('location:display.php'); 
 
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
    <h1 class="text-center" >Cash payment</h1>
   <div class="container my-5">
   <form method="post" >
     <div class="form-group mb-3">
         <label>Full Name</label>
        <input type="text" class="form-control" placeholder="Enter Your name" name="fullname" value=<?php echo $fullname;?>  autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter Your email" name="email" value=<?php echo $email;?> autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>Address</label>
        <input type="text" class="form-control" placeholder="Enter Your Address" name="address" value=<?php echo $address;?> autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>NIC</label>
        <input type="text" class="form-control" placeholder="Enter Your NIC" name="nic"  value=<?php echo $nic;?> autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>ZIP</label>
        <input type="text" class="form-control" placeholder="Enter Your ZIP" name="zip"  value=<?php echo $zip;?> autocomplete="false">        
     </div>
     <div class="form-group mb-3">
         <label>Contact Number</label>
        <input type="text" class="form-control" placeholder="Enter Your contact" name="contact"  value=<?php echo $contact;?> autocomplete="false">        
     </div>

  <button type="submit" class="btn btn-primary" name ="submit">update</button>
</form>

</div>

    
  </body>
</html>