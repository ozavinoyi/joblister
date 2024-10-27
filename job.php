<?php include_once "config/init.php"; ?>

<?php

$job = new Job();

if( isset( $_POST[ 'del_id' ] ) ) {

	$del_id = $_POST[ 'del_id' ];
	if( $job->delete( $del_id ) ) {
		redirect( 'index.php', 'Job Deleted', 'success' );
	} else {
		redirect( 'index.php', 'Job Deleted'. var_dump($job->delete( $del_id )), 'error' );
	}
}

$jobId = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : null;
$template = new Template( 'templates/job-single.php' );

if( $jobId ) {

	$template->job = $job->getById( $jobId );

}

echo $template;
