<?php include 'admin-header.php'; 

// Receiving ID
$id = $_GET['id'];

// Query from slider
$sql = "SELECT img FROM slider WHERE id='$id'";
$result = mysqli_query($conn, $sql);
while($list = mysqli_fetch_assoc($query)){
	$img_name = $list['img'];
}

//Storing image URL
$file = "../upload/$img_name";

//Deleting data
$sql = "DELETE FROM slider WHERE id='$id'";


$sql = "SELECT * FROM slider WHERE img = '$img_name'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($r) !== 1) {
	if(file_exists($file)){
		unlink($file);
	}
}

//deleting
if($sql){
	session_start();
	$_SESSION['delMsg'] = "Deleted successfully!";

	// echo "<meta http-equiv='refresh' content='0;url=slider.php'>";
} else {
	echo "Error!";
}

?>

<section>
	<div class="row">
		<div class="col-md-3">
			<div style="height: 700px; overflow-x: hidden;">
			<?php

				$sql = "SELECT * FROM slider GROUP BY id DESC LIMIT 50";
				$result = mysqli_query($conn, $sql);
				
				while($list = mysqli_fetch_assoc($result)){
					?>
					<img class="img-thumbnail" style="margin-bottom: 5px;" src="../upload/<?php echo $list['img']; ?>" alt="">
					<div style="background-color: #088da5; color: #fff; margin-bottom: 10px; padding: 5px 10px;"><a style="color: #fff;" href="http://ksforum.org/admin/slider.php?id=<?php echo $list['id']; ?>"><i class="fa fa-trash"></i></a> <?php echo $list['slider_title']; ?></div>
					<?php	
				}
				
				
			?>
			</div>
		</div>

		<div class="col-md-9">
			<?php
				if(isset($_POST['submit'])){
				//storing form data into variables
				$slider_title = mysqli_real_escape_string ($connection, $_POST['slider_title']);
				$description = mysqli_real_escape_string ($connection, $_POST['description']);

				//if-else statement to check image
				if(getimagesize($_FILES["image"]["tmp_name"]) == FALSE ){ //if no image
					$sql = "INSERT into slider (slider_title, description) VALUES ('$slider_title', '$description')";

					if ($connection->query($sql) === TRUE) {
					    $info = "Updated successfully without image!";
					    echo "<meta http-equiv='refresh' content='0;url=slider.php'>";
					} else {
					    echo "Error: " . $sql . "<br>" . $connection->error;
					}
				} else { //if there is an image file
					if(($_FILES['image']['type'] == 'image/gif') || ($_FILES['image']['type'] == 'image/png') || ($_FILES['image']['type'] == 'image/jpeg')){ //checking image type
						//if($_FILES['image']['size'] < 500*1024 ){ //checking image size
							// $num = rand(1, 999999);

							//image proccessing
							$img_tmp_name = $_FILES['image']['tmp_name'];
							// $definedName = str_replace(' ', '_', $headline);
							$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
							$filename = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
							// $img_name = $definedName.'_'.$num.'.'.$ext;
							$img_name = $filename.'.'.$ext;

							//checkinf if already exists or not
							if(file_exists('../upload/'.$img_name)){
								$sql = "INSERT into slider (slider_title, description, img) VALUES ('$slider_title', '$description', '$img_name')";

								if ($connection->query($sql) === TRUE) {
								    $success = "Updated successfully with image!";
								    echo "<meta http-equiv='refresh' content='0;url=slider.php'>";
								} else {
								    echo "Error: " . $sql . "<br>" . $connection->error;
								}
							} else {
								$sql = "INSERT into slider (slider_title, description, img) VALUES ('$slider_title', '$description', '$img_name')";

								if ($connection->query($sql) === TRUE) {
									move_uploaded_file($img_tmp_name,"../upload/$img_name");
									
								    $success = "Updated successfully with image!";
								    echo "<meta http-equiv='refresh' content='0;url=slider.php'>";
								} else {
								    echo "Error: " . $sql . "<br>" . $connection->error;
								}
							}
						//} else {
							//$warning = "Image should not be more than 500KB";
						//}
					} else {
						$danger = "Please select an image!";
					}
				}
				
			}
			?>

			<form method="post" class="form-horizontal" enctype="multipart/form-data">
				<fieldset>
					<div class="form-group">
						<div class="col-lg-12">
							<input class="form-control" name="slider_title" id="slider_title" placeholder="Title for this image" type="text" maxlength="50" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-12">
							<input class="form-control" name="description" id="description" placeholder="Short description" type="text" maxlength="200" required>
						</div>
					</div>

					<div class="text-center form-group col-md-12">
						<div class="alert alert-warning">
							<strong>Warning!</strong> image size should be of 1140X400px
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
</section>

<?php include 'admin-footer.php'; ?>