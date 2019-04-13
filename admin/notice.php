<?php include "admin-header.php"; ?>

<section>
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-9">
			<form method="post" action="">
				<fieldset>
					<div class="form-group col-md-12">
						<textarea name="notice" value="<?php echo $_POST['notice']; ?>" rows="20"></textarea>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</section>