<?php


$con = mysqli_connect('localhost', 'root', '', 'kaama.lk');
if (mysqli_connect_errno()) {
    echo 'Database Connection Error';
}






$category_name = $_POST['categoryName'];
$category_type = $_POST['category_type'];
$category_description = $_POST['category_description'];
$category_photo = $_POST['uploaded_file'];



$sql = "INSERT INTO Category (`CategoryName`,`CategoryType`,`CategoryDescription`, `CategoryPicture`)  
values('$category_name','$category_type','$category_description', '$category_photo')";

if ($con->query($sql) === TRUE) {


    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>