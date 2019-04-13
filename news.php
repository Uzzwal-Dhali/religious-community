<?php
include "connection/connection.php";
?>
<!DOCTYPE html>
<html lang="bn">
<head>
	<meta charset="UTF-8">
	<title>কৃষ্ণ বার্তা</title>

	<link rel="stylesheet" href="http://ksforum.org/resources/css/style.css">
	<link rel="stylesheet" href="http://ksforum.org/resources/css/menu.css">
	<link rel="stylesheet" href="http://ksforum.org/resources/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../resources/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>কৃষ্ণ বার্তা</h1>
		</header>

		<nav>
			<ul class="menu list-unstyled">
				<li><a href="http://www.ksforum.org"><i class="fa fa-home"></i></a></li>
				<li><a href="">সারাদেশ</a></li>
				<li><a href="">আন্তর্জাতিক</a></li>
				<li><a href="">রাজনীতি</a></li>
				<li><a href="">অর্থনীতি</a></li>
				<li><a href="">খেলাধুলা</a></li>
				<li><a href="">স্বাস্থ্য</a></li>
				<li><a href="">সাহিত্য</a></li>
				<li><a href="">পঞ্জিকা</a></li>
				<li><a href="">রাশিফল</a></li>
			</ul>
		</nav>

		<div class="row">
			<div class="col-md-9">
				<?php
					$query = mysql_query("SELECT * FROM news GROUP by id DESC LIMIT 12");
					$count = 1;
					while ($list = mysql_fetch_assoc($query)) {
						
						if($count == 1) {
							?>
							<div class="row">
								<div class="col-md-8">
									<div class="news-page-highlited">
										<img src="upload/<?php echo $list['img']; ?>" alt="">
										<h1 class="front-page-news-headline"><a href="http://www.ksforum.org/details.php?id=<?php echo $list['id']; ?>"><?php echo $list['headline']; ?></a></h1>
									</div>
								</div>
								
							<?php
						} 
							if ($count == 2) { ?>
								<div class="col-md-4">
									<div class="front-page-news">
										<img src="upload/<?php echo $list['img']; ?>" alt="">
										<p class="front-page-news-headline"><a href="http://www.ksforum.org/details.php?id=<?php echo $list['id']; ?>"><?php echo $list['headline']; ?></a></p>
									</div>
							<?php }

							if ($count == 3) { ?>
									<div class="front-page-news">	
										<img src="upload/<?php echo $list['img']; ?>" alt="">
										<p class="front-page-news-headline"><a href="http://www.ksforum.org/details.php?id=<?php echo $list['id']; ?>"><?php echo $list['headline']; ?></a></p>
									</div>
								</div>
							</div> <!-- End of Row -->
							
							<?php }

							if ($count > 3) { ?>
								
									<div class="col-md-4">
										<div class="front-page-news">	
											<img src="upload/<?php echo $list['img']; ?>" class="img-responsive" alt="">
											<p class="front-page-news-headline"><a href="http://www.ksforum.org/details.php?id=<?php echo $list['id']; ?>"><?php echo $list['headline']; ?></a></p>
										</div>
									</div>
							
							<?php }

							
								
						$count++; //increasing $count variable
					} //end of while loop
				?>
			</div>

			<div class="col-md-3">
				
			</div>
		</div>

		<footer>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
				<div class="col-md-4">সংবাদ পাঠানঃ example@idhali.com</div>
			</div>
		</footer>
	</div>
</body>
</html>