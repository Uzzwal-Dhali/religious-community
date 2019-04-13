<!DOCTYPE html>
<html lang="bn">
	<head>
		<title>Krishna Sarathy Forum</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" type="text/css" href="../wp-content/themes/KSforum/css/bootstrap.css" />
		
		<!-- Font Awesome -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">	
			<div class="row" style="margin-top: 30px;">
				<?php include '../connection/connection.php'; ?>
						
						
				<?php
					$exp_id = $_GET['id'];								
					$query = mysql_query("SELECT * FROM form_data WHERE id=$exp_id");						
					while ($list = mysql_fetch_array($query)) { ?>
								
				<div class="col-md-9">
					<div   id="print-content" class="panel panel-default panel-body">
						<legend>
							<div class="row">
								<div class="col-md-2 col-sm-2">
								
								</div>
								<div class="col-md-8 col-sm-8">
									<h1 class="text-center" style="font-size: 36px;">????? ????? ?????</h1>
									<h5 class="text-center">"????? ???? ??????? ????? ??? ???,<br/>??????? ??????? ????"</h3>							
									<h4 class="text-center">????? ???</h2>
								</div>
								<div class="col-md-2 col-sm-2">
									<?php echo '<img style="min-height:144px;min-width:115px;max-height:144px;max-width:115px;border:1px solid #d7d7d7;" src="data:image;base64,'.$list[image].'">'; ?>
								</div>
							</div>
							
						</legend>
						
							
								
								<?php
								echo '<h2 style="font-size: 16px;">';
									echo '<div class="row">';										
										echo '<div class="col-md-3 text-right">';
										echo "????";
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['uname'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo "????? ????";
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['father'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo "????? ????";
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['mother'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';	
									echo '<div class="row">';
										echo '<div class="col-md-3 col-sm-3 text-right">';
										echo '??????? ???????';
										echo '</div>';
										
										echo '<div class="col-md-9 col-sm-9">';
										echo $list['address1'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';	
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo '?????? ???????';
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['address2'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';	
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo '???? ??????';
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['birth'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';	
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo '???????? ????????';
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['qualification'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo '?????';
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['occupation'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';								
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo '????';
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['phone'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo '?-?????';
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['email'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								
								echo '<h2 style="font-size: 16px;">';
									echo '<div class="row">';
										echo '<div class="col-md-3 text-right">';
										echo '??????????';
										echo '</div>';
										
										echo '<div class="col-md-9">';
										echo $list['refference'];
										echo '</div>';
									echo '</div>';
								echo '</h2>';
								?>
							
							<?php } ?>
						<hr />
						<h4 class="text-center">??????? 01521 325889<br/>www.facebook.com/JAGOHINDUFORAM</h4>
					</div>
					<div  class="text-center">
						<input type="button" onclick="printDiv('print-content')" value="Print!"/>
					</div>
				</div>
				
				
			</div>
			
		</div>
	
	<!--Print JavaScript-->
	<script type="text/javascript">
	function printDiv(divName) {
	 alert('Do you want to print this page?');
	 var printContents = document.getElementById(divName).innerHTML;
	 w=window.open();
	 w.document.write(printContents);
	 w.print();
	 w.close();
	}
	</script>
	
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

	<!-- jQuery UI -->
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

	<!-- TinyMCE -->
	<script src="js/tinymce/tinymce.min.js"></script>
	<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>

	<!-- Dropzone.js -->
	<script src="js/dropzone.js"></script>

	<script>
		
		$(document).ready(function(){
			
			$("#console-debug").hide();
			$("#btn-debug").click(function(){
				$("#console-debug").toggle();
			});
			
			$(".delete").on("click", function() {
				var selected = $(this).attr("id");
				var postid = selected.split("del_").join("");
				var confirmed = confirm("Do you really want to delete this?");
				if(confirmed == true) {
					$.get("ajax/pages.php?id="+postid);
					$("#post_"+postid).remove();
				}
				//alert(selected);
			})	
		});
	</script>
	</body>
</html>
