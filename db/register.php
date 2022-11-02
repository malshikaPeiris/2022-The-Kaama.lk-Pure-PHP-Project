<?php
include 'connection.php';

if ($link==true){
    if(isset($_POST['register_user'])&&$_POST['register_user']==true){
        $chk = "select * from users where email='".$_POST['email']."'";
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==0){
            $fileimage="";
            if ($_FILES['image']['name']!=null){
                $file = $_FILES['image'];

                $ext = pathinfo($file['name']);

                $fileimage = 'upload_image/' . uniqid() . time() . '.' . $ext['extension'];

                move_uploaded_file($file['tmp_name'], $fileimage);
            }
            
            $sql = "INSERT INTO users (fname,lname,email,gender,image,password) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['gender']."', '".$fileimage."', '".md5($_POST['password'])."')";
            if(mysqli_query($link,$sql)){

                $ins_id =$link->insert_id;

                echo "success";

            }else{
                echo "error";
            }
        }else{
            echo "error";
        }
    }
}