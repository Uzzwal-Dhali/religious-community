<?php
$url = 'http://localhost/krishna';

// connection
include "../connection.php";

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

/*--------------------------------------------------------------------------------------*/
//sending to login page
# Start the Session:
session_start();

if(!isset($_SESSION['username'])){
	header('Location: login.php');
}

$email = $_SESSION['username'];

//Logged in username
$query = mysqli_query("SELECT * FROM users WHERE email = '$email'");
while($data = mysqli_fetch_assoc($query)){
	$user = $data['username'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Area | by iDhali</title>
	<link rel="stylesheet" href="../resources/css/antiboot.css" crossorigin="anonymous">
	<link rel="stylesheet" href="../resources/css/style.css" crossorigin="anonymous">
	<link rel="stylesheet" href="../resources/css/menu.css" crossorigin="anonymous">
	<link rel="stylesheet" href="../resources/css/bootstrap.css" crossorigin="anonymous">

	<!-- TinyMCE -->
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../resources/css/font-awesome.min.css">


	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

	<script type="text/javascript">
		function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
	                $('#blah')
	                    .attr('src', e.target.result)
	                    .width(500)
	                    .height(300);
	            };

	            reader.readAsDataURL(input.files[0]);
	        }
	    }
	</script>
</head>
<body>
	<div class="container">
		
		<header>
			<!-- <img class="logo" src="../banner.png" alt="Site Logo"> -->
		</header>
		
		
		<nav>
			<ul class="menu list-unstyled">
				<li><a href="<?php echo $url ?>/admin/index.php"><i class="fa fa-home"></i></a></li>
				<li><a href="">Videos</a></li>
				<li><a href="">Books</a></li>
				<li><a href="">Quotes</a></li>
				<li><a href="">Audios</a></li>
				<li><a href="<?php echo $url ?>/admin/notice.php">Notice</a></li>
				<li><a href="<?php echo $url ?>/admin/form-print">Members</a></li>
				<li><a href="<?php echo $url ?>/admin/slider.php">Slider</a></li>
				<li><a href="<?php echo $url ?>/admin/admins.php">About Us</a></li>
			</ul>
		</nav>

		
		<div><?php echo $_SESSION['message']; ?></div>