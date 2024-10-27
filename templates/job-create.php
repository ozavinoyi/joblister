

<?php include 'inc/header.php'; ?>
	
	<br><br>
	<?php echo $_SERVER['SCRIPT_NAME']; ?>
	<h2 class="page-header"> Create Job Listing </h2>
	<form action="create.php" method="POST">
		<div class="form-group mb-4">
			<label>Company</label>
			<input class="form-control" type="text" name="company">
		</div>

		<div class="form-group mb-4">
			<label>Category</label>
			<select class="form-control" name="category">
				<option value="0">Choose Category</option>
        		<?php foreach( $categories as $category ) : ?>
        			<option value="<?php echo $category->id ?>"><?php echo $category->name; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group mb-4">
			<label>Job Title</label>
			<input class="form-control" type="text" name="job_title">
		</div>

		<div class="form-group mb-4">
			<label>Description</label>
			<textarea class="form-control" type="text" name="description"></textarea>
		</div>

		<div class="form-group mb-4">
			<label>Location</label>
			<input class="form-control" type="text" name="location">
		</div>

		<div class="form-group mb-4">
			<label>Salary</label>
			<input class="form-control" type="text" name="salary">
		</div>

		<div class="form-group mb-4">
			<label>Contact User</label>
			<input class="form-control" type="text" name="contact_user">
		</div>

		<div class="form-group mb-4">
			<label>Contact Email</label>
			<input class="form-control" type="text" name="contact_email">
		</div>

		<input type="submit" class="btn btn-dark" name="submit">
	</form>
	
	<br><br>

<?php include 'inc/footer.php'; ?>