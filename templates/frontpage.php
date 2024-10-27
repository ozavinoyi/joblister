<?php include 'inc/header.php'; ?>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Find a Job — <?php echo $title; ?></h1>
        <form method="GET" action="index.php">
        	<select name="category" class="form-control">
        		<option value="0">Choose Category</option>
        		<?php foreach( $categories as $category ) : ?>
        			<option value="<?php echo $category->id ?>"><?php echo $category->name; ?></option>
        		<?php endforeach; ?>
        	</select>
        	<input type="submit" class="btn btn-success mt-3" value="FIND">
        </form>
      </div>
    </div>

    <?php foreach($jobs as $job): ?>
	    <div class="row align-items-md-stretch">
		    <div class="col-md-10">
		      	<h4><?php echo $job->job_title; ?></h4>
		      	<p>
		      		<?php echo $job->description; ?>
		      	</p>
		    </div>
		    <div class="col-md-2">  	
	      		<a href="job.php?id=<?php echo $job->id; ?>" class="btn btn-primary">View</a>
		    </div>
	    </div>
	  <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>