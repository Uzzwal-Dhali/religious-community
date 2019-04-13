<!DOCTYPE html>
<html lang="bn">
	<head>
		<meta charset="UTF-8">
		<title>Krishna Sarathi Forum</title>
		<link rel="stylesheet" type="text/css" href="../wp-content/themes/KSforum/css/bootstrap.css" />
		<script type="text/javascript">
		function updatepicture(pic){
			document.getElementById("image").setAttribute("src",pic);
		}
		</script>
	</head>
	
	<body>
		<div class="container">
		
			<div class="panel panel-default panel-body" style="margin-top: 30px;">
					
					<?php
						//establish connection
						include_once ('../connection/connection.php');
						if(isset($_GET['edit'])){			
							$id		= $_GET['edit'];
							$res	= mysql_query("SELECT * FROM form_data WHERE id='$id'");
							$row	= mysql_fetch_array($res);
						 }
						
						 if(isset($_POST['newName'])){
							$newName			= $_POST['newName'];
							$newFather			= $_POST['newFather'];
							$newMother			= $_POST['newMother'];
							$newAddress1		= $_POST['newAddress1'];
							$newAddress2		= $_POST['newAddress2'];
							$newBirth			= $_POST['newBirth'];
							$newQualification	= $_POST['newQualification'];
							$newOccupation		= $_POST['newOccupation'];
							$newPhone			= $_POST['newPhone'];
							$newEmail			= $_POST['newEmail'];
							$newRefference		= $_POST['newRefference'];
							$id					= $_POST['id'];
							$image				= addslashes($_FILES['image']['tmp_name']);
							$name				= addslashes($_FILES['image']['name']);
							$image				= file_get_contents($image);
							$image				= base64_encode($image);
							 $sql				= "UPDATE form_data SET uname='$newName', father='$newFather', mother='$newMother', address1='$newAddress1', address2='$newAddress2', birth='$newBirth', qualification='$newQualification', occupation='$newOccupation', phone='$newPhone', email='$newEmail', refference='$newRefference', name='$name', image='$image' WHERE id='$id'";
							 $res				= mysql_query($sql) or die("Update failed!".mysql_error());
							 echo "<meta http-equiv='refresh' content='0;url=index.php'>";
						 }
						?>
					
					<div class="row">
						<div class="col-md-3 col-sm-3">
						</div>
						<div class="col-md-6 col-sm-6">
							<h1 class="text-center" style="font-size: 56px;">কৃষ্ণ সারথী ফোরাম</h1>
							<h3 class="text-center">"সনাতন ধর্ম প্রচারে আপনিও যোগ দিন,<br/>অন্যকেও উৎসাহিত করুন"</h3>
							<h2 class="text-center">সদস্য ফরম</h2>
						</div>
						<div class="col-md-3 col-sm-3">
							<form method="post" enctype="multipart/form-data">
							
								<div class = "form-group" target="iframe">
									<input type="file" id="image" name="image" />							
									<p id="message"></p>
									<img style="min-height:144px;min-width:115px;max-height:144px;border:1px solid #d7d7d7;" id="image" /><br /> <br />
									<iframe style="display:none;" name="iframe"></iframe>
								</div>
						</div>
					</div>							
				
					<hr />
				
				
								
						
						<div class = "form-group">
							<div for = "name" class="col-lg-2 col-md-2 text-right">নামঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newName" value="<?php echo $row[uname]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="father" class="col-lg-2 col-md-2 text-right">পিতার নামঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newFather" value="<?php echo $row[father]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="mother" class="col-lg-2 col-md-2 text-right">মাতার নামঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newMother" value="<?php echo $row[mother]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="address1" class="col-lg-2 col-md-2 text-right">বর্তমান ঠিকানাঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newAddress1" value="<?php echo $row[address1]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="address2" class="col-lg-2 col-md-2 text-right">স্থায়ী ঠিকানাঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newAddress2" value="<?php echo $row[address2]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="birth" class="col-lg-2 col-md-2 text-right">জন্মতারিখঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newBirth" value="<?php echo $row[birth]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="qualification" class="col-lg-2 col-md-2 text-right">শিক্ষাগত যোগ্যতাঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newQualification" value="<?php echo $row[qualification]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="occupation" class="col-lg-2 col-md-2 text-right">পেশাঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newOccupation" value="<?php echo $row[occupation]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="phone" class="col-lg-2 col-md-2 text-right">ফোন নম্বরঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="number" name="newPhone" value="<?php echo $row[phone]; ?>" class="form-control"><br />
							</div>
						</div>
						
						<div class = "form-group">
							<div for="email" class="col-lg-2 col-md-2 text-right">ই-মেইলঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="email" name="newEmail" value="<?php echo $row[email]; ?>" class="form-control"><br />
							</div>
						</div>
						<!--------------------------------------------------------------------------------------------------------------
						Refference
						---------------------------------------------------------------------------------------------------------------->
						<div class = "form-group">
							<div for="refference" class="col-lg-2 col-md-2 text-right">রেফারেন্সঃ</div>
							<div class="col-lg-10 col-md-10">
								<input type="text" name="newRefference" value="<?php echo $row[refference]; ?>" class="form-control"><br />
							</div>
						</div>
						<hr />
						<div class="form-group text-center">
							<div class="col-lg-10 col-lg-offset-2">
								<button type="submit" class="btn btn-default text-center">
								<input type="hidden" name="id" value="<?php echo $row[0]; ?>">
								<input type="hidden" name="submit">
									Update
								</button>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<hr />
								<h4 class="text-center">মোবাইলঃ 01521 325889<br/>www.facebook.com/JAGOHINDUFORAM</h4>
							</div>
						</div>
					
				</form>
				
				
				<!--
				//on connection failure, throw an error
					if(!$con) {  
						die('Could not connect: '.mysqli_connect_error()); 
					}
					
					echo "<div class='text-center'><span class='glyphicon glyphicon-ok'> Registration successfull...!!!</span></div>";
					echo "<meta http-equiv='refresh' content='0;url=index.php'>";
					
					
					

					$sql="INSERT INTO form_data( name, father, mother, address1, address2, birth, qualification, occupation, phone, email, refference) VALUES ( '$_POST[name]', '$_POST[father]', '$_POST[mother]', '$_POST[address1]', '$_POST[address2]', '$_POST[birth]', '$_POST[qualification]', '$_POST[occupation]', '$_POST[phone]', '$_POST[email]', '$_POST[refference]')"; 
					
					mysql_query($sql,$con);
				-->
			</div>
		</div>
	</body>
</html>
