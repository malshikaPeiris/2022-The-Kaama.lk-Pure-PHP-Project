<?php session_start(); ?>

<?php
include './connection.php';
include 'db/users.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta charset="UTF-8">
	<title>E-Restaurant</title>
	
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/croppie.js"></script>
    <link rel="stylesheet" href="assets/css/croppie.css" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="assets/js/core/jquery.3.2.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">

	<script charset="utf8" src="assets/js/jquery.dataTables.js"></script>

	<style type="text/css">
        .my-error-class {
            color: #ff0000;
        }
        .my-valid-class {
            color:green;
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    	<div class="container">
	        <a class="navbar-brand" href="index.php">E-Restaurant</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <ul class="navbar-nav ml-auto">
	            <?php if (isset ($_SESSION['userType'])&&$_SESSION['userType']=="1") {  ?>
	                <li class="nav-item">
	                    <a class="nav-link" >Logout</a>
	                </li>
	            <?php }else{ ?>
	                <li class="nav-item">
	                    <a class="nav-link" href="login.php">Login</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="register.php">Register</a>
	                </li>
	            <?php } ?>
	            </ul>
	
	        </div>
        </div>
	</nav>
    <div class="container">
		
<br>
<p></p>
		<main class="login-form">
	        <div class="row justify-content-center">
	            <div class="col-md-10">
	                <div class="card">
	                    <div class="card-header">System Users</div>
	                    <div class="p-1" id="usersDiv">
                            <table id="table1">
                                <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="20%">Name</th>
                                    <th width="10%">Email</th>
                                    <th width="10%">Gender</th>
                                    <th width="10%">Image</th>
                                    <th width="10%">User Type</th>
                                    <th width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php all_users($link,$_SESSION['user_id'])?>
                                </tbody>
                            </table>
	            </div>
	                </div>
	            </div>
	        </div>
		</main>
	</div>

</body>
</html>

<script>
    
	$(document).ready(function () {
        var dataTable = $('#table1').DataTable({});
    });

    function clickChange(id,type){

        var r = confirm("If you want change user type ?");
		
		if (r == true) {
            var user = id;
            
            var data = {
                "change" : true,
                "id" : user,
                "type": type
            };
            
            var ans = $.ajax({
                type : 'POST',
                url : '<?php echo $base_url.'db/users.php';?>',
                data : data,
                dataType : 'json'
            });
            
            ans.done(function(data){
                if(data=="success"){
                    swal("Successful","Change Successful!", "success");
                    $('#usersDiv').empty();
                    $("#usersDiv").load(location.href + " #usersDiv");
                }else if(data=="error"){
                    swal("Error","Change Unsuccessful!","warning");
                }
            });
            ans.fail(function(data){
                swal("Error","Connection Error !","warning");
            });
        }

    }
    
    function clickDelete(id){
        var r = confirm("If you want remove this user ?");
		
		if (r == true) {
            var user = id;
            
            var data = {
                "delete" : true,
                "id" : user
            };
            
            var ans = $.ajax({
                type : 'POST',
                url : '<?php echo $base_url.'db/users.php';?>',
                data : data,
                dataType : 'json'
            });
            
            ans.done(function(data){
                if(data=="success"){
                    swal("Successful","Remove Successful!", "success");
                    $('#usersDiv').empty();
                    $("#usersDiv").load(location.href + " #usersDiv");
                }else if(data=="error"){
                    swal("Error","Remove Unsuccessful!","warning");
                }
            });
            ans.fail(function(data){
                swal("Error","Connection Error !","warning");
            });
        }
		
    }

</script>