

<?php include 'inc/header.php'; ?>
	
	<br><br>
	<?php echo $_SERVER['SCRIPT_NAME']; ?>
	<h2 class="page-header"> Edit Job Listing </h2>
	<form action="edit.php?id=<?php echo $job->id; ?>" method="POST">
		<div class="form-group mb-4">
			<label>Company</label>
			<input class="form-control" type="text" name="company" value="<?php echo $job->company; ?>">
		</div>

		<div class="form-group mb-4">
			<label>Category</label>
			<select class="form-control" name="category">
				<option value="0">Choose Category</option>
        		<?php foreach( $categories as $category ) : ?>
        			<?php if( $job->category_id == $category->id ) : ?>
        				<option selected value="<?php echo $category->id ?>"><?php echo $category->name; ?></option>
        			<?php else : ?>
        				<option value="<?php echo $category->id ?>"><?php echo $category->name; ?></option>
        			<?php endif; ?>
        		<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group mb-4">
			<label>Job Title</label>
			<input class="form-control" type="text" name="job_title" value="<?php echo $job->job_title; ?>">
		</div>

		<div class="form-group mb-4">
			<label>Description</label>
			<textarea class="form-control" type="text" name="description"><?php echo $job->description; ?>s</textarea>
		</div>

		<div class="form-group mb-4">
			<label>Location</label>
			<input class="form-control" type="text" name="location" value="<?php echo $job->location; ?>">
		</div>

		<div class="form-group mb-4">
			<label>Salary</label>
			<input class="form-control" type="text" name="salary" value="<?php echo $job->salary; ?>">
		</div>

		<div class="form-group mb-4">
			<label>Contact User</label>
			<input class="form-control" type="text" name="contact_user" value="<?php echo $job->contact_user; ?>">
		</div>

		<div class="form-group mb-4">
			<label>Contact Email</label>
			<input class="form-control" type="text" name="contact_email" value="<?php echo $job->contact_email; ?>">
		</div>

		<input type="submit" class="btn btn-dark" name="submit">
	</form>
	
	<br><br>

<?php include 'inc/footer.php'; ?>