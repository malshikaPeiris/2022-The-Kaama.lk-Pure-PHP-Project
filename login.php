<?php ?>
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<style type="text/css">
        .my-error-class {
            color:red;
        }
        .my-valid-class {
            color:green;
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    	<div class="container">
	        <a class="navbar-brand" href="profileServlet">E-Restaurant</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <ul class="navbar-nav ml-auto">
	                <li class="nav-item">
	                    <a class="nav-link" href="login.php">Login</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="register.php">Register</a>
	                </li>
	            </ul>
	        </div>
        </div>
	</nav>
    <div class="container">
		
<br>
<p></p>
		<main class="login-form">
	        <div class="row justify-content-center">
	            <div class="col-md-8">
	                <div class="card">
	                    <div class="card-header">Login</div>
	                    <div class="card-body">
	                        <form id="login">
	                            <div class="form-group row">
	                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
	                                <div class="col-md-6">
	                                    <input type="text" id="email" class="form-control" name="email">
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
	                                <div class="col-md-6">
	                                    <input type="password" id="password" class="form-control" name="password">
	                                </div>
	                            </div>
	                            
	                            <div class="col-md-6 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    Login
	                                </button>
	                            </div>
	                    	</form>
	                    </div>
	                </div>
	            </div>
	        </div>
		</main>
	</div>

</body>
</html>
<?php include 'db/config.php'; ?>
<script>

$(document).ready(function () {

    $("#login").validate({
        errorClass: "my-error-class",
        validClass: "my-valid-class",
        rules: {
        	email: {
                required: true
            },
        	password: "required"
        },
        messages: {
            email: {
                required: "Email Required!"
            },
            password: "Password Required!"
        },
        submitHandler: function () {
            var g_data = {
				"login_user" : true,
				'email' : $('#email').val(),
				'password' : $('#password').val()
            };

            $.ajax({
                type: "POST",
                url: "<?php echo $base_url.'db/login.php';?>",
				data: g_data,
                dataType: "json",
                success: function(data){
                	if(data=="success"){
						console.log("mk");
                        window.location.href = "Customer_view.php";
    				}else if(data=="password"){
    					swal("Error","Wrong Password!","warning");
    				}else if(data=="no_user"){
    					swal("Error","No Records!","warning");
    				}else {
						swal("Error","Something is wrong!","warning");
    				}
                },
                failure: function(errMsg) {
					swal("Error","Connection Error!","warning");
                }
            });
        }
    });

    $("#login").submit(function(e) {
        e.preventDefault();
    });

});

</script>