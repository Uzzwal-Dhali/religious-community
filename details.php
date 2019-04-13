<?php
// connection
include "includes/header.php";

?>


<div class="row">
	<div class="col-md-2">
		<div class="ad" style="height:90px;margin-top: 20px;">
			Ad Size: 180X90 px
		</div>

		<div class="ad" style="height:600px;margin-top: 20px;">
			Ad Size: 180X600 px
		</div>
	</div>
	<div class="col-md-7">
		<div class="row">
			
				<?php
					$id = $_GET['id'];
					$query = mysqli_query($conn, "SELECT * FROM news WHERE id='$id'");
						while($list = mysqli_fetch_assoc($query)){
							?>
							<div class="col-md-12">
								<h1 class="details_news_headline"><?php echo $list['headline']; ?></h1>
								<p class="text-muted"><b>প্রকাশকালঃ</b> <?php echo $list['created_at']; ?></p>
								<?php
									$img_name = $list['img'];
									if(($list['img'] === '') || !file_exists('upload/'.$img_name)) {
										?><img src="default.png" alt="<?php echo $list['headline']; ?>" class="img-resposive"/><?
									} else {
										?><img src="upload/<?php echo $list['img']; ?>" alt="<?php echo $list['headline']; ?>" class="img-resposive"/><?php
									}
								?>
								<p><?php echo $list['news']; ?></p>

								<p><?php echo $list['cat1']; ?></p>
							</div>

							<div class="col-md-12">
								<?php
									if($list['cat1'] != "") {
										?>
											<a href="http://ksforum.org/page.php?cat=<?php echo $list['cat1']; ?>"><span style="background-color: #ff7373; color: #fff; padding: 5px 8px; margin-right: 2px; border-radius: 5px;"><i class="fa fa-tag"></i> <?php echo $list['cat1']; ?></span></a>
										<?php
									}

									if($list['cat2'] != "") {
										?>
											<a href="http://ksforum.org/page.php?cat=<?php echo $list['cat2']; ?>"><span style="background-color: #ffa500; color: #fff; padding: 5px 8px; margin-right: 2px; border-radius: 5px;"><i class="fa fa-tag"></i> <?php echo $list['cat2']; ?></span></a>
										<?php
									}

									if($list['cat3'] != "") {
										?>
											<a href="http://ksforum.org/page.php?cat=<?php echo $list['cat3']; ?>"><span style="background-color: #66cdaa; color: #fff; padding: 5px 8px; margin-right: 2px; border-radius: 5px;"><i class="fa fa-tag"></i> <?php echo $list['cat3']; ?></span></a>
										<?php
									}
								?>
							</div>
					<?php }
				?>
			

			
		</div>
	</div>

	<!-- - Right Sidebar - -->
	<div class="col-md-3">
		<div class="ad" style="height:200px;margin-top: 20px;">
			Ad Size: 280X200 px
		</div>

		<h2 class="cat_name">সাম্প্রতিক...</h2>
		<?php
		$query = mysql_query("SELECT * FROM news GROUP by id DESC LIMIT 10");
			while($list = mysql_fetch_assoc($query)){
				?>
					<div class="row">
						<div class="col-md-3">
							<?php
								$img_name = $list['img'];
								if(($list['img'] === '') || !file_exists('upload/'.$img_name)) {
									?><img src="default.png" class="img-resposive"/><?
								} else {
									?><img src="upload/<?php echo $list['img']; ?>" class="img-resposive"/><?php
								}
							?>
						</div>
						<div class="col-md-9">
							<a href="http://www.ksforum.org/details.php?id=<?php echo $list['id']; ?>"><p class="news_list"><?php echo $list['headline']; ?></p></a>
						</div>
					</div>
			<?php }
		?>

		<div class="ad" style="height:90px;margin-top: 20px;">
			Ad Size: 280X90 px
		</div>
	</div>
</div>

<?php include "includes/footer.php"; ?>