<?php
include "admin-header.php";
header('Content-Type: text/html; charset=utf-8');

if(isset($_POST['submit'])){

	$_SESSION['message'] = '';

	//storing form data into variables
	$headline = mysqli_real_escape_string ($conn, $_POST['headline']);
	$cat1 = mysqli_real_escape_string ($conn, $_POST['cat1']);
	$cat2 = mysqli_real_escape_string ($conn, $_POST['cat2']);
	$cat3 = mysqli_real_escape_string ($conn, $_POST['cat3']);
	$news = mysqli_real_escape_string ($conn, $_POST['news']);
	$editor = mysqli_real_escape_string ($conn, $_POST['editor']);

	//if-else statement to check image
	if(empty($_FILES['image']['name'])){ //if no image
		$sql = "INSERT into news (headline, cat1, cat2, cat3, news) VALUES ('$headline', '$cat1', '$cat2', '$cat3', '$news')";

		if ($conn->query($sql) === TRUE) {
		    $_SESSION['message'] = "Updated successfully without image!";
		    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} else { //if there is an image file
		if(	($_FILES['image']['type'] == 'image/gif')
		|| ($_FILES['image']['type'] == 'image/png')
		|| ($_FILES['image']['type'] == 'image/jpeg') ){ //checking image type
			if($_FILES['image']['size'] < 500*1024 ){ //checking image size
				$num = rand(1, 999999);

				//image proccessing
				$img_tmp_name = $_FILES['image']['tmp_name'];
				$file_info = PATHINFO($_FILES["image"]["name"]);
				$supposed_name = str_replace(' ', '_', $headline);
				$new_name = $supposed_name.'.'.$file_info['extension'];

				//checkinf if already exists or not
				if(file_exists('../news-images/'.$new_name)){
					$sql = "INSERT into news (headline, cat1, cat2, cat3, news, img) VALUES ('$headline', '$cat1', '$cat2', '$cat3', '$news', '$new_name')";

					if ($conn->query($sql) === TRUE) {
						$_SESSION['message'] = "Updated successfully without image!";
						move_uploaded_file($img_tmp_name,"../news-images/".$new_name );
					    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
				} else {
					$sql = "INSERT into news (headline, cat1, cat2, cat3, news, img) VALUES ('$headline', '$cat1', '$cat2', '$cat3', '$news', '$new_name')";

					if ($conn->query($sql) === TRUE) {
						move_uploaded_file($img_tmp_name,"../news-images/".$new_name);
					    $_SESSION['message'] = "Updated successfully with image!";
					    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
				}
			} else {
				$warning = "Image should not be more than 500KB";
			}
		} else {
			$danger = "Please select an image!";
		}
	}
	
}

?>

		<div class="row">
			<div class="col-md-3">
				<div style="height: 800px; overflow-x: hidden;">
				<?php
					$sql = "SELECT * FROM news GROUP by id DESC LIMIT 200";
					$result = mysqli_query($conn, $sql);
					while($list = mysqli_fetch_array($result)){
						?>
						<div class="row last-update">
							<div class="col-md-3">
								<img src="../news-images/<?php echo $list['img']; ?>" style="max-width: 65px;" class="img-resposive"/>
							</div>
							<div class="col-md-9">
								<a href="http://www.ksforum.org/admin/delete.php?id=<?php echo $list['id']; ?>"><i class="fa fa-trash-o"></i></a> <i class="fa fa-pencil"></i> <?php echo $list['headline']; ?>
							</div>

							<div class="col-md-12">
								<hr style="margin-bottom: 5px; margin-top: 5px;">
							</div>
						</div>
						<?php
					}
				?>
				</div>
			</div>

			<div class="col-md-9">
				<form method="post" class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8">
					<fieldset>
						<div style="margin-top:10px;" class="col-md-12 form-group">
							<input class="form-control" type="text" name="headline" id="" value="<?php echo $_POST['headline']; ?>" placeholder="সংবাদ শিরোনাম" required>
						</div>

						<div class="row form-group">
							<div class="col-md-4">
								<input class="form-control" type="text" name="cat1" id="" value="<?php echo $_POST['cat1']; ?>" placeholder="প্রধান ক্যাটাগরি" required>
							</div>

							<div class="col-md-4">
								<input class="form-control" type="text" name="cat2" id="" value="<?php echo $_POST['cat2']; ?>" placeholder="প্রথম সাব ক্যাটাগরি">
							</div>

							<div class="col-md-4">
								<input class="form-control" type="text" name="cat3" id="" value="<?php echo $_POST['cat3']; ?>" placeholder="দ্বিতীয় সাব ক্যাটাগরি">
							</div>
						</div>

						<div class="form-group col-md-12">
							<textarea name="news" value="<?php echo $_POST['news']; ?>" rows="20"></textarea>
						</div>

						<div class="text-center form-group col-md-12">
							<div class="alert alert-warning">
								<strong>Warning!</strong> image size should be of 500X300px
							</div>
							
							<input type="file" name="image" onchange="readURL(this);">
							<img id="blah" src="#" alt="No image selected" />
						</div>

						<div class="text-center form-group col-md-12">
							<input class="btn btn-primary" type="submit" name="submit" value="Publish">
						</div>
					</fieldset>
				</form>
				
			</div>
		</div>
		
		<?php include 'admin-footer.php'; ?>
	</div>	
</body>
</html>