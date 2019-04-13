<?php 

# Start Session:
session_start();

# Database Connection:
include "../connection.php";

if($_POST){	
	$email = mysqli_real_escape_string($conn, $_POST['email']);;
	$pass	= md5(mysqli_real_escape_string($conn, $_POST['pass']));
	$q = " SELECT * FROM users WHERE email='$email' AND pass='$pass' ";
	$r = mysqli_query($conn, $q);

	print_r($r);
	
	if(mysqli_num_rows($r) == 1){
		$_SESSION['username'] = $_POST['email'];
		header('Location: index.php');
	} else {
		echo "Problem in email and/or password!";
	}
}

?>

<!DOCTYPE html>
<html>
	
<head>
	<title>Admin Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../resources/css/antiboot.css"/>
	<link rel="stylesheet" href="../resources/css/bootstrap.min.css"/>
</head>
	
<body>
	<div id="wrap">
		<div class="container" style="margin-top: 100px;">
			
			<div class="row">				
				
				<div class="col-md-4 col-md-offset-4">
					<div style="border-top:5px solid red;padding:5px;">
						<img src="../img/site_logo.png">
					</div>
					<div class="panel panel-info">
						
						<div class="panel-heading">
							<strong>Login</strong>
						</div> <!-- End Panel Heading -->
						
						<div class="panel-body">
							<form action="login.php" method="post" role="form">						
								<div class="from-group">
									<input class="login" type="email" id="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Enter your email">
								</div>
								
								<div class="form-group">
									<input class="login" type="password" id="password" name="password" value="" placeholder="Your password">		
								</div>
								
								<div class="text-center">
									<button type="submit" class="btn btn-default">Sign in</button>
								</div>
							</form>
						</div> <!-- Emd Panel Body -->
						
					</div> <!-- End Pannel -->

				</div>	<!-- End Col -->			
				
			</div> <!-- End Row -->
			
			
		
		</div> <!-- End Container -->
	
	</div><!-- End Wrap -->
	
</body>
	
</html>