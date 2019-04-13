<?php

include_once('../../connection/connection.php');

if(isset ($_GET['del'])){
	$id = $_GET['del'];
	$sql = "DELETE FROM form_data WHERE id='$id'";
	$res = mysql_query($sql) or die("Failed".mysql_error());
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

?>