<?php include('connection.php');

$output= array();
$sql = "SELECT * FROM Category";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
    0 => 'idCategory',
    1 => 'CategoryName',
    2 => 'CategoryType',
    3 => 'CategoryDescription',
    4 => 'CategoryPicture',

);


if(isset($_POST['search']['value']))
{
    $query .= '
 WHERE image LIKE "%'.$_POST['search']['value'].'%" 
 OR category_name LIKE "%'.$_POST['search']['value'].'%" 
 OR menu_name LIKE "%'.$_POST['search']['value'].'%" 
 OR menu_description LIKE "%'.$_POST['search']['value'].'%" 
 OR menu_item_price LIKE "%'.$_POST['search']['value'].'%" 
 OR menu_qty LIKE "%'.$_POST['search']['value'].'%" 

 ';
}

if(isset($_POST['order']))
{
    $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY menu_name DESC ';
}

$query1 = '';


if($_POST['length'] != -1)
{
    $start = $_POST['start'];
    $length = $_POST['length'];
    $sql .= " LIMIT  ".$start.", ".$length;
}

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
    $sub_array = array();
    $sub_array[] = $row['idCategory'];
    $sub_array[] = $row['CategoryName'];
    $sub_array[] = $row['CategoryType'];
    $sub_array[] = $row['CategoryDescription'];
    $sub_array[] = '<img style ="width : 80px;" src ="'.$row['CategoryPicture'].'"/>';

    $data[] = $sub_array;
}

$output = array(
    'draw'=> intval($_POST['draw']),
    'recordsTotal' =>$count_rows ,
    'recordsFiltered'=>   $total_all_rows,
    'data'=>$data,
);
echo  json_encode($output);
