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
	                    <div class="card-header">Register</div>
	                    <div class="card-body">
	                        <form id="register">
                                <input type="hidden" value="true" name="register_user" id="register_user">
	                            <div class="form-group row">
	                                <label for="email_address" class="col-md-4 col-form-label text-md-right">First Name</label>
	                                <div class="col-md-6">
	                                    <input type="text" id="fname" class="form-control" name="fname">
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Last Name</label>
	                                <div class="col-md-6">
	                                    <input type="text" id="lname" class="form-control" name="lname">
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
	                                <div class="col-md-6">
	                                    <input type="text" id="email" class="form-control" name="email">
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Gender</label>
	                                <div class="col-md-6">
	                                    <select id="gender" class="form-control" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
	                                </div>
	                            </div>

                                <div class="form-group row">
	                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Photo</label>
	                                <div class="col-md-6">
                                        <input class="form-control" type="file" id="image" name="image" accept="image/*">
	                                </div>
	                            </div>

	                            <div class="form-group row">
	                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
	                                <div class="col-md-6">
	                                    <input type="password" id="password" class="form-control" name="password">
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
	                                <div class="col-md-6">
	                                    <input type="password" id="password_confirm" class="form-control" name="password_confirm">
	                                </div>
	                            </div>
	
	                            <div class="col-md-6 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    Register
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

        $("#register").validate({
            errorClass: "my-error-class",
            validClass: "my-valid-class",
            rules: {
                fname: "required",
                lname: "required",
                email: {
                    email: true,
                    required: true
                },
                gender: "required",
                image: {
                    required: true,
					extension: "jpg|jpeg|png|JPG|JPEG|PNG|JPEG"
                },
                password: {
                    required: true,
                    minlength: 5
                },
                password_confirm: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                }
            },
            messages: {
                fname: "First Name Required!",
                lname: "Last Name Required!",
                email: {
                    email: "Wrong Email!",
                    required: "Email Required!"
                },
                gender: "select gender!",
                image: {
                    required: "Photo Required!",
                    extension: "Only Accept images Formats!"
                }
            },
            submitHandler: function () {
                var form_data = new FormData($('#register')[0]);

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "<?php echo $base_url.'db/register.php';?>",
                    data: form_data,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        if (data == "success"){
                            $("#register")[0].reset();
							swal("Successful!", "Register Successful!", "success");
                        }else {
							swal( "Error","This Email Already Exists! ","warning");
                        }
                    },
                    failure: function(errMsg) {
						swal("Error","Connection Error!","warning");
                    }
                });
            }
        });

        $("#register").submit(function(e) {
            e.preventDefault();
        });

    });

    
</script>