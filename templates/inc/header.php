<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title><?php echo SITE_TITLE; ?></title>
</head>
<body>
	<main>
    <div class="container pb-4">
		<header>
		  <!-- Fixed navbar -->
		  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
		    <div class="container">
		      <a class="navbar-brand" href="#"><?php echo SITE_TITLE; ?></a>
		      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarCollapse">
		        <ul class="navbar-nav me-auto mb-2 mb-md-0">
		          <li class="nav-item">
		            <a class="nav-link" aria-current="page" href="index.php">Home</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="create.php">Create Listing</a>
		          </li>
		        </ul>
		        <form class="d-flex" role="search">
		          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		          <button class="btn btn-outline-success" type="submit">Search</button>
		        </form>
		      </div>
		    </div>
		  </nav>
		</header>
		<?php displayMessage(); ?>

