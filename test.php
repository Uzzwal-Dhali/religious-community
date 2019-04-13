<?php

include "connection/connection.php";

$query = mysql_query("SELECT * FROM form_data GROUP BY id DESC LIMIT 10");

	while ($row = mysql_fetch_assoc($query)) { ?>							
		<div id="post_<?php echo $row['id']; ?>">
			<h5 class="list-group-item-type">
				<a href="update.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a>
				<a href="delete.php?del=<?php echo $row['id']; ?>" class="delete"><i class="fa fa-trash-o"></i></a>
				<a href="index.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></a>
				<?php echo $row['uname']; ?>
			</h5>
		</div>
<?php } ?>
