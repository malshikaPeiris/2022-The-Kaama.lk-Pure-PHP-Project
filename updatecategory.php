<?php include('connection.php');
$id = $_POST['categoryid'];
$category_name = $_POST['categoryName'];
$category_type = $_POST['category_type'];
$category_description = $_POST['category_description'];
$category_photo = $_POST['uploaded_file'];


$sql = "UPDATE Category SET  CategoryName = '$category_name',CategoryType = '$category_type',CategoryDescription = '$category_description', CategoryPicture = '$category_photo'
                where idCategory = $id";


if ($con->query($sql) === TRUE) {


header('location: index.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>
