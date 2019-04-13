<!DOCTYPE html>
<html lang="bn">
	<head>
		<meta charset="UTF-8">
		<title>Krishna Sarathi Forum</title>
		<link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.css" />
		<script type="text/javascript">
		function updatepicture(pic){
			document.getElementById("image").setAttribute("src",pic);
		}
		</script>
	</head>
	
	<body>
		<div class="container">

			<div class="col-md-10 col-md-offset-1">
		
			<div class="panel panel-default panel-body" style="margin-top: 30px;">
					
				<!--Form Header Part-->
				<div class="row">

					<div class="col-md-3 col-sm-3">
					</div>

					<div class="col-md-6 col-sm-6">
						<h1 class="text-center" style="font-size: 55px; color: #EA3511;">কৃষ্ণ সারথী ফোরাম</h1>
						<h3 class="text-center">"সনাতন ধর্ম প্রচারে আপনিও যোগ দিন,<br/>অন্যকেও উৎসাহিত করুন"</h3>
						<h2 class="text-center">সদস্য ফরম</h2>
					</div>

					<div class="col-md-3 col-sm-3">
						<!--form start from here-->
						<form method="post" enctype="multipart/form-data">
						
							<div class = "form-group" target="iframe">
								<input type="file" id="image" name="image" />							
								<p id="message"></p>
								<img style="min-height:144px;min-width:115px;max-height:144px;border:1px solid #d7d7d7;" id="image" /><br /> <br />
								<iframe style="display:none;" name="iframe"></iframe>
							</div>
					</div>
				</div> <!--End or row //Form Header-->

				<hr>					
						
								<div class = "form-group">
									<label for = "uname" class="col-lg-2 col-md-2 control-label">নামঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="text" name="uname" placeholder="এখানে আপনার পূর্ণাঙ্গ নাম লিখুন" class="form-control" id="uname" maxlength="50" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="father" class="col-lg-2 col-md-2 control-label">পিতার নামঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="text" name="father" placeholder="এখানে আপনার পিতার পূর্ণাঙ্গ নাম লিখুন" class="form-control" id="father" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="mother" class="col-lg-2 col-md-2 control-label">মাতার নামঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="text" name="mother" placeholder="এখানে আপনার মাতার পূর্ণাঙ্গ নাম লিখুন" class="form-control" id="mother" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="address1" class="col-lg-2 col-md-2 control-label">বর্তমান ঠিকানাঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="text" name="address1" placeholder="আপনার বর্তমান ঠিকানা লিখুন" class="form-control" id="address1" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="address2" class="col-lg-2 col-md-2 control-label">স্থায়ী ঠিকানাঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="text" name="address2" placeholder="আপনার স্থায়ী ঠিকানা লিখুন" class="form-control" id="address2" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="birth" class="col-lg-2 col-md-2 control-label">জন্মতারিখঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="text" name="birth" placeholder="আপনার জন্মতারিখ লিখুন" class="form-control" id="birth" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="qualification" class="col-lg-2 col-md-2 control-label">শিক্ষাগত যোগ্যতাঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="text" name="qualification" placeholder="আপনার শিক্ষাগত যোগ্যতা লিখুন" class="form-control" id="qualification" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="occupation" class="col-lg-2 col-md-2 control-label">পেশাঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="text" name="occupation" placeholder="আপনার পেশার নাম লিখুন" class="form-control" id="occupation" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="phone" class="col-lg-2 col-md-2 control-label">ফোন নম্বরঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="number" name="phone" placeholder="আপনার ফোন নম্বরটি লিখুন" class="form-control" id="phone" required><br/>
									</div>
								</div>
								
								<div class = "form-group">
									<label for="email" class="col-lg-2 col-md-2 control-label">ই-মেইলঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="email" name="email" placeholder="আপনার ই-মেইল আইডি লিখুন" class="form-control" id="email" required><br/>
									</div>
								</div>
								<!--Refference-->
								<div class = "form-group">
									<label for="refference" class="col-lg-2 col-md-2 control-label">রেফারেন্সঃ</label>
									<div class="col-lg-10 col-md-10">
										<input type="refference" name="refference" placeholder="ভোটার / জন্ম নিবন্ধন নং" class="form-control" id="refference"><br/>
									</div>
								</div>
								
								<div class="form-group text-center">
									<div class="col-lg-10 col-lg-offset-2">
										<button type="submit" class="btn btn-default text-center">
										<input type="hidden" name="submit">
											Register
										</button>
									</div>
								</div>
								<br /><hr />
								<h4 class="text-center">মোবাইলঃ 01521 325889<br/>www.facebook.com/JAGOHINDUFORAM</h4>
							
							</form>
				
				
				<?php
				if(isset($_POST['submit'])){
					if(getimagesize($_FILES['image']['tmp_name']) == FALSE){
						echo "Something wrong!<br />Try again!";
					} else {
						$uname = mysqli_real_escape_string($con, $_POST['uname']);
						$father = mysqli_real_escape_string($con, $_POST['father']);
						$mother = mysqli_real_escape_string($con, $_POST['mother']);
						$address1 = mysqli_real_escape_string($con, $_POST['address1']);
						$address2 = mysqli_real_escape_string($con, $_POST['address2']);
						$birth = mysqli_real_escape_string($con, $_POST['birth']);
						$qualification = mysqli_real_escape_string($con, $_POST['qualification']);
						$occupation = mysqli_real_escape_string($con, $_POST['occupation']);
						$phone = mysqli_real_escape_string($con, $_POST['phone']);
						$email = mysqli_real_escape_string($con, $_POST['email']);
						$refference = mysqli_real_escape_string($con, $_POST['refference']);
						$image = addslashes($_FILES['image']['tmp_name']);
						$name = addslashes($_FILES['image']['name']);
						$image = file_get_contents($image);
						$image = base64_encode($image);
					}
					//establish connection
					$con = mysql_connect('localhost','ksforum_uzzwal','u22w@ldh@li');
					
					//on connection failure, throw an error
					if(!$con) {  
						die('Could not connect: '.mysqli_connect_error()); 
					} 
						echo "<div class='text-center'><span class='glyphicon glyphicon-ok'> Registration successfull...!!!</span></div>";
						echo "<meta http-equiv='refresh' content='0;url=index.php'>";
					
					
					mysql_select_db("ksforum_data",$con);

					$sql="INSERT INTO form_data( uname, father, mother, address1, address2, birth, qualification, occupation, phone, email, refference, name, image) VALUES ( '$_POST[uname]', '$_POST[father]', '$_POST[mother]', '$_POST[address1]', '$_POST[address2]', '$_POST[birth]', '$_POST[qualification]', '$_POST[occupation]', '$_POST[phone]', '$_POST[email]', '$_POST[refference]', '$name', '$image')"; 
					
					mysql_query($sql,$con);
				 }
				?>
			</div>

			</div>
		</div>
	</body>
</html>
