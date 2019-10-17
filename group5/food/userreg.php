<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Registration</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  
	<link rel="stylesheet" href="assets/css/stylevalidate.css">
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	<style>
body  {
  background-image: url("56275906_1853321828103162_387463967733186560_n - Copy.jpg");
  background-color: #cccccc;
}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3>Registration Form</h3>
	<form method="post" action="" id="reg" name="reg" class="needs-validation" novalidate >
  		<div class="form-group">
    	<label for="fname">First Name</label>
    	<input type="text" class="form-control" id="fname" name="fname"placeholder="first Name" required>
    
    	<span id="txtFname"></span>
  		</div>
  		<div class="form-group">
   	 	<label for="lname">Last Name</label>
    	<input type="text" class="form-control" id="lname" name="lname" placeholder="last Name" required>
   
    	<span id="txtLname"></span>
  		</div>
  		<div class="form-group">
   	 	<label for="nic">NIC</label>
    	<input type="text" class="form-control" id="nic" name="nic" placeholder="NIC" required pattern="^(?:([0-9]{12})|([0-9]{9}[X/V]))$" required>
           	<span id="txtNic"></span>
  		</div>
  		<div class="form-group">
   	 	<label for="email">Email</label>
    	<input type="text" class="form-control" id="email" name="email" placeholder="Email" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">
    	<span id="txtEmail"></span>
  		</div>
  		<div class="form-group">
   	 	<label for="username">User Name</label>
    	<input type="text" class="form-control" id="username" name="username" placeholder="User Name">
    	<span id="txtUname"></span>
  		</div>
  		<div class="form-group">
   	 	<label for="password">Password</label> <!-- more than 8 characters -->
    	<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
     
    	<span id="txtPassword"></span>
  		</div>
  		<div class="form-group">
   	 	<label for="retypepassword">Retype Password</label>
    	<input type="password" class="form-control" id="retypepassword" name="retypepassword" placeholder="Retype Password">
    	<span id="txtRetypepassword"></span>
  		</div>
  		<div class="form-group">
    	<input type="submit" class="btn btn-primary" id="submit" name="submit">
    	<input type="reset" class="btn btn-warning" id="reset" name="reset">
  		</div>


	</form>

	<?php 

	if(isset($_POST['submit'])){
		include("dbcon.php");//samefolder->file name different folder-> path
		$fname=$_POST['fname'];//variable name, <form> name
		$lname=$_POST['lname'];
		$nic=$_POST['nic'];
		$email=$_POST['email'];
		$uname=$_POST['username'];
		$pw=$_POST['password'];
		$key='qwErTyuIop#@flkHZxgjkglf<';
		$enpw=hash('sha256',$pw.$key);
		$date=date('Y-m-d');

		//datbase connection open
		$insert=mysqli_query($con,"INSERT INTO userreg(FName,LName,NIC,Email,Username,Password,Status,RegDate,userType) VALUES('$fname','$lname','$nic','$email','$uname','$enpw',1,'$date','User')");
		if(!$insert){
			echo 'Data insertion failed'.mysqli_error();
			
		}
		mysqli_close($con);//database connection close
	}
  if(isset($_POST['submit'])){
        header('Location:loginphp.php');
  }

	 ?>





		</div>
		<div class="col-md-4"></div>
		</div>


	</div>


	




<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>	
<script src="assets/js/validate.js"></script>	
<script src="assets/js/jquery.dataTables.min.js"></script>	


<script>
		(function()
		{
			'use strict';
			window.addEventListener('load',function(){
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms,function(form){
					form.addEventListener('submit',function(event){
						if(form.checkValidity() === false){
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					},false);
				});
			},false);
		})();
	</script>


</body>
</html>