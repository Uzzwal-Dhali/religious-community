<?php include "connection/connection.php"; ?>
<!DOCTYPE html>
<html lang="bn">
<head>
	<meta charset="UTF-8">
	<title>কৃষ্ণ সারথী ফোরাম</title>
	<link rel="stylesheet" href="resources/css/style.css">
	<link rel="stylesheet" href="resources/css/menu.css">
	<link rel="stylesheet" href="resources/css/bootstrap.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../resources/css/font-awesome.min.css">

	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

	<!-- Meta Info -->
	<meta name="title" content="<?php
    $id = $_GET['id'];
    $query = mysqli_query("SELECT * FROM news WHERE id = $id");
    while ($list = mysqli_fetch_array($query)) {
        echo $list['headline'];
    }
    ?>"/>
	
	
	<meta property="og:image" content="/upload/<?php $id = $_GET['id']; $query = mysqli_query("SELECT * FROM news WHERE id = $id"); while ($list = mysqli_fetch_array($query)) { echo $list['img']; }?>" />
	<link rel="image_src" href="
	/upload/
	<?php
    $id = $_GET['id'];
    $query = mysqli_query("SELECT * FROM news WHERE id = $id");
    while ($list = mysqli_fetch_array($query)) {
        echo $list['img'];
    }?>"/>

	<!-- Slider -->
	<!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

    <!-- Script for form -->
    <script type="text/javascript">
	function updatepicture(pic){
		document.getElementById("image").setAttribute("src",pic);
	}
	</script>

	
</head>
<body>
	<div class="container">
		
		
		