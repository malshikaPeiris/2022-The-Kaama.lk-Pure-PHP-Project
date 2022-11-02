<?php include('connection.php');

$output= array();
$sql = "SELECT * FROM adminpayment";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'fullname',
	2 => 'email',
	3 => 'address',
	4 => 'nic',
	5 => 'zip',
	6 => 'contact',

	
);

 

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
	$sub_array[] = $row['id'];
	$sub_array[] = $row['fullname'];
	$sub_array[] = $row['email'];
	$sub_array[] = $row['address'];
	$sub_array[] = $row['nic'];
	
	$sub_array[] = $row['zip'];
	$sub_array[] = $row['contact'];

	
	
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
