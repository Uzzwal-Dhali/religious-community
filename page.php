<?php
// connection
include "connection.php";
include "includes/settings.php";
include "includes/header.php";
include "includes/news-menu.php";

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
				<?php
					$cat = $_GET['cat'];
					$query = mysql_query("SELECT * FROM news WHERE cat1='$cat' GROUP by id DESC LIMIT 12");
						while($list = mysql_fetch_assoc($query)){
							?>
							<div class="col-md-4">
								<img src="upload/<?php echo $list['img']; ?>" class="img-resposive"/>
								<a href="<?php echo $url; ?>/details.php?id=<?php echo $list['id']; ?>"><h5 class="news_list"><?php echo $list['headline']; ?></h5></a>
							</div>
					<?php }
				?>
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
								<div class="col-md-3"><img src="upload/<?php echo $list['img']; ?>" class="img-resposive"/></div>
								<div class="col-md-9">
									<a href="<?php echo $url; ?>/details.php?id=<?php echo $list['id']; ?>"><p class="news_list"><?php echo $list['headline']; ?></p></a>
								</div>
							</div>
					<?php }
				?>

				<div class="ad" style="height:90px;margin-top: 20px;">
					Ad Size: 280X90 px
				</div>
			</div>
		</div>

		
		<footer>
			<div class="row">
				<div class="col-md-4 text-center">
					<b>সম্পাদক</b><br>
					মোহাম্মদ সাইদুল আহমেদ<br>
					<b>নির্বাহী সম্পাদক</b><br>
					আলাউদ্দিন আল আজাদ
				</div>

				<div class="col-md-4 text-center">
					ফ্লাট ৪/এ, সাবা কমপ্লেক্স (৪ র্থ তলা)<br>
					৬৪/৪, নয়াপল্টন, ঢাকা - ১০০০<br>
					ফোনঃ ০১৫৫২-৩৯৮৬৭০
				</div>

				<div class="col-md-4 text-center">
					বিজ্ঞাপনঃ ০১৯২০-৭২৭০৮১<br>
					নিউজঃ ০১৫৫২-৪৬৯৫০৮<br>
					ই-মেইলঃ news2bengalbarta@gmail.com
				</div>
			</div>
		</footer>
	
	</div>
</body>
</html>