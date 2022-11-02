<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<h1 class="text-center my-3">Payment Managment </h1>
    <div class = "container">
        <button class="btn btn-primary my-5"><a href = "tcash.php" class="text-light" >cash payment</a></button>
        
        <button class="btn btn-primary my-5"><a href = "treport.php" class="text-light" >Report</a> </button>
        <button class="btn btn-primary my-5"><a href = "https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" class="text-light" >Customer Contact</a></button>


<form class="d-none d-md-flex ms-4" method="post" action="display.php">
                <input class="form-control border-0" type="search" placeholder="Enter the NIC" name="search">
                <button class="btn btn--radius-2 btn--red btn-warning" type="submit">Search</button>
            </form>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">NIC</th>
      <th scope="col">ZIP</th>
      <th scope="col">CONTACT</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
 
  <?php
$sql = "select * from `adminpayment`";

if ($_POST['search']){

  $search = $_POST['search'];
  $sql = $sql . " where nic LIKE '%{$search}%'";
  
}

$result= mysqli_query($con,$sql);
if ($result){
    while($row= mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $fullname=$row['fullname'];
        $email=$row['email'];
        $address=$row['address'];
        $nic=$row['nic'];
        $zip=$row['zip'];
        $contact=$row['contact'];
         
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$fullname.'</td>
        <td>'.$email.'</td>
        <td>'.$address.'</td>
        <td>'.$nic.'</td>
        <td>'.$zip.'</td>
        <td>'.$contact.'</td>
         

        <td>
            <button class="btn btn-primary"><a href="tupdate.php? updateid='.$id.'" class="text-light">Update </a></button>
            <button class="btn btn-danger"><a href="tdelete.php? deleteid='.$id.'" class="text-light">Delete </a></button>
        </td>
      </tr>';
    }
}



  ?>


  </tbody>
</table>
    </div>
</body>
</html>



