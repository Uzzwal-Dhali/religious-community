<?php
include "../connection.php";

$id = $_GET['id'];

$query = mysql_query("SELECT img FROM news WHERE id='$id'");
while($list = mysql_fetch_assoc($query)){
	$img_name = $list['img'];
}

$file = "../upload/$img_name";

$sql = mysql_query("DELETE FROM news WHERE id='$id'");


$dbc = mysqli_connect('localhost', 'ksforum_uzzwal', 'u22w@ldh@li', 'ksforum_data') OR die('Could not connect because: '.mysqli_connect_error());
$q = "SELECT * FROM news WHERE img = '$img_name'";
$r = mysqli_query($dbc, $q);

if(mysqli_num_rows($r) !== 1) {
	if(file_exists($file)){
		unlink($file);
	}
}

//deleting




if($sql){
	session_start();
	$_SESSION['delMsg'] = "Deleted successfully!";

	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
} else {
	echo "Error!";
}