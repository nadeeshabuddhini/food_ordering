<?php 

include 'dbcon.php';
if(isset($_POST['login'])){

	$username=$_POST['uname'];
	$password=$_POST['pw'];
	$key='qwErTyuIop#@flkHZxgjkglf<';//unique key
  	$enp=hash('SHA256',$password.$key);
  	$check=mysqli_query($con,"SELECT * FROM userreg WHERE Username='$username' AND Password='$enp' AND status='1' AND userType='User'");
  	
  	$num_of_rows=mysqli_num_rows($check);
  	

  	if($num_of_rows==1){

  		while($row=mysqli_fetch_array($check)){

  			
  			$_SESSION['userType']=$row['userType'];
  			$logType=$row['userType'];

  			if($logType=='User'){
  				header('Location:shcart.php');
  			}
  			else{
  				header('Location:login.php');
  			}
  		}

  	}
  	
  	
}


?>	
<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Food</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
	body  {
  background-image: url("56275906_1853321828103162_387463967733186560_n - Copy.jpg");
  background-color: #eeffcc;
}
</style>	
 
	</head>
	<body>
	<div class="container-fluid">
<!-- 
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
		<link href="assets/css/stylelogin.css" rel="stylesheet" id="bootstrap-css">
	<!-- 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
		<div class="login-form">
		<form action="" name="loginfm" method="post" >

			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label" >Username or Email</label>
					<input id="user" type="text" class="input" name="uname">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="pw">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="login">
				</div>
				</form>
				<div class="hr"></div>
			</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</div>
		
	</div>
</div>


















	</div>

	</body>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	

	</html>