<?php
include './connection.php';

function all_users($link,$user_id){

$sql ="SELECT * From users WHERE id <> ".$user_id." ORDER BY id DESC";
// echo($sql);
$result=mysqli_query($link,$sql);

foreach ($result as $val) {

    $img="";

    if ($val['image']!=null){
        // echo($val['image']);
        $img="<img src='./db/".$val['image']."' class='img-thumbnail' width='45px'>";
        // echo($img);
    }

    if($val['userType']=="0"){
        $user="User";
    }else{
        $user="Admin";
    }

    echo "<tr>
            <td>".$val['id']."</td>
            <td>".$val['fname']." ".$val['lname']."</td>
            <td>".$val['email']."</td>
            <td>".$val['gender']."</td>
            <td>".$img."</td>
            <td>".$user."</td>
            <td>
            <button type='button' class='btn btn-success' onclick='clickChange(".$val['id'].",".$val['userType'].")'><i class='bi bi-pencil'></i></button>
            <button type='button' class='btn btn-danger' onclick='clickDelete(".$val['id'].")'><i class='bi bi-trash'></i></button>
            </td>
          </tr>";
}

}

if ($link==true){
    if(isset($_POST['delete'])&&$_POST['delete']==true){

        $sql = "DELETE FROM users Where id='".$_POST['id']."'";
        if(mysqli_query($link,$sql)){

            echo json_encode("success");

        }else{
            echo json_encode("error");
        }
    }
}

if ($link==true){
    if(isset($_POST['change'])&&$_POST['change']==true){
        if($_POST['type']=="0"){
            $sql = "UPDATE users SET userType=1 Where id='".$_POST['id']."'";
        }else{
            $sql = "UPDATE users SET userType=0 Where id='".$_POST['id']."'";
        }
        if(mysqli_query($link,$sql)){

            echo json_encode("success");

        }else{
            echo json_encode("error");
        }
    }
}