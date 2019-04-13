<?php
	include "connection/connection.php";
	include "includes/header.php";
	include "includes/main-baner.php";
	include "includes/main-menu.php";
?>
		<section>
			<div style="max-width:1140px;">
    
			    <!-- Insert to your webpage where you want to display the slider -->
			    <div id="amazingslider-1" style="display:block;position:relative;margin:-10px auto 32px;">
			        <ul class="amazingslider-slides" style="display:none;">
						<?php
							$sql = mysqli_query("SELECT * FROM slider GROUP BY id DESC LIMIT 10");

							while ($row = mysqli_fetch_array($sql)) {
								?>
									<li><img src="upload/<?php echo $row['img']; ?>" alt="<?php echo $row['slider_title']; ?>" data-description="<?php echo $row['description']; ?>" /></li>
								<?php
							}					
						?>
			        </ul>
			    </div>
			    <!-- End of body section HTML codes -->
			    
			</div>

		</section>

		<section>
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 style="color:crimson;" class="animated infinite bounceOut">
						<!-- <?php
							$query = mysql_query("SELECT * FROM news GROUP by id DESC LIMIT 1");
								while($list = mysql_fetch_assoc($query)){
									?>																										
									<p class="animated bounceInDown"><a href="http://www.ksforum.org/details.php?id=<?php echo $list['id']; ?>"><?php echo $list['headline']; ?></a></p>
							<?php }
						?> -->
						২৫ ডিসেম্বর সীতাকুণ্ড ভোলানন্দগিরি আশ্রমে  গীতা শিক্ষা কেন্দ্র চালু
					</h2>
				</div>
			</div>
		</section>

		<section id="pricing">
			
				<!-- <div class="section-header">
					<h2 class="section-title text-center wow fadeInDown">আমাদের কার্যাবলী</h2>
					<p class="text-center wow fadeInDown">হিন্দু ধর্ম প্রচার ও প্রচারনাই আমাদের ব্রত</p>
				</div> -->

				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<span class="price">
											<i class="fa fa-question fa-2x" aria-hidden="true"></i>
										</span>
										<span class="duration">
											/তথ্য
										</span>
									</div>

									<div class="plan-name">
										আমাদের জানুন
									</div>
									<span class="duration">
										[যোগাযোগ করুন]
									</span>
								</li>
								<li>আমাদের সাথে যোগাযোগ করুন</li>

								<li class="plan-purchase"><a class="btn btn-primary" href="#">DETAILS</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<span class="price">
											<i class="fa fa-quote-left fa-2x" aria-hidden="true"></i>
										</span>
										<span class="duration">
											/বাণী
										</span>
									</div>

									<div class="plan-name">
										গুণীজনের কথা
									</div>
									<span class="duration">
										[জ্ঞ্নীদের বাণী]
									</span>
								</li>
								<li>সারা বছর আমরা পূজা-অর্চনা ও ইত্যাদি সকল আচার অনুষ্ঠান পালন করে থাকি।</li>
								<li class="plan-purchase"><a class="btn btn-primary" href="#">DETAILS</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<span class="price">
											<i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
										</span>
										<span class="duration">
											/সংবাদ
										</span>
									</div>

									<div class="plan-name">
										সংবাদ সারাদিন
									</div>
									<span class="duration">
										[হিন্দুদের কথা]
									</span>
								</li>
								<li>হিন্দু ধর্ম ও ধর্মাম্বলীদের জীবন-জীবিকা ও প্রাত্যহিক ঘটনা নিয়ে আমরা প্রতিনিয়ত সংবাদ প্রচার করে থাকি।</li>
								
								<li class="plan-purchase"><a class="btn btn-primary" href="http://www.ksforum.org/news.php">READ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
							<ul class="pricing">
								<li class="plan-header">
									<div class="price-duration">
										<span class="price">
											<i class="fa fa-book fa-2x" aria-hidden="true"></i>
										</span>
										<span class="duration">
											/ধর্মপ্রচার
										</span>
									</div>

									<div class="plan-name">
										ধর্মগ্রন্থ
									</div>
									<span class="duration">
										[Open for Visitors]
									</span>
								</li>
								<li>আমরা আমাদের সংগঠনের পক্ষ থেকে হিন্দু ধর্ম ও এর ঐতিহ্য প্রচারে সদা সচেষ্ট</li>
								<li class="plan-purchase"><a class="btn btn-primary" href="#">DETAILS</a></li>
							</ul>
						</div>
					</div>
				</div>
			
		</section>

		<section>
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="section-title">সাম্প্রতিক সংবাদসমূহ</h1>
					<p>হিন্দু ধর্ম ও হিন্দুদের নিয়ে বিভিন্ন ধরনের আপডেট পেতে নিয়মিত ভিজিট করুন</p>
				</div>

				<div class="col-md-9">
					<div class="row">
						<?php
							$query = mysql_query("SELECT * FROM news GROUP by id DESC LIMIT 6");
								while($list = mysql_fetch_assoc($query)){
									?>
									<div class="col-md-4">
										<div class="front-page-news">
											<?php
												$img_name = $list['img'];
												if(($list['img'] === '') || !file_exists('upload/'.$img_name)) {
													?><img src="doll.png" class="img-resposive"/><?
												} else {
													?><img class="frontpage-img" src="upload/<?php echo $list['img']; ?>" class="img-resposive"/><?php
												}
											?>
											
											<p class="front-page-news-headline"><a href="http://www.ksforum.org/details.php?id=<?php echo $list['id']; ?>"><?php echo $list['headline']; ?></a></p>
										</div>
									</div>
							<?php }
						?>
					</div>
				</div>

				<div class="col-md-3 ads">
					<div class="ad"  style="background-color: #d7d7d7;">
						<img src="ads-img/fashion-ad.jpg" alt="Fashion Ad">
						<img src="ads-img/niyog.jpg" alt="Fashion Ad">
					</div>
				</div>
			</div>
		</section>

		<?php include "includes/footer.php";?>