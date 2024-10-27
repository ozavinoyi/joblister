<?php include_once "config/init.php"; ?>

<?php
// error_reporting( E_ALL );
// ini_set( 'display_errors', 1 );

$job = new Job();

$category = isset( $_GET[ 'category' ] ) ? $_GET[ 'category' ] : null;

$template = new Template( 'templates/frontpage.php' );

if( $category ) {

	$template->jobs = $job->getByCategory( $category );
	$template->title = 'Jobs in' . ' ' . $job->getCategory( $category )->name;

} else {

	$template->title = 'Latest Jobs';
	$template->jobs = $job->getAllJobs();

}

$template->categories = $job->getCategories();

echo $template;
