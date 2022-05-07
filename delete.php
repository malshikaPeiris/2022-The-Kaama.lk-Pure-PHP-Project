<?php
 include('connection.php');
 if(isset($_GET['deleteid'])){
     $id = $_GET['deleteid'];

     $sql ="delete from Category where idCategory=$id";
     $result=mysqli_query($con,$sql);
     if($result){
         echo "Deleted";
     }
 }
