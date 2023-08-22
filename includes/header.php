<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (isset($page_title) && !empty($page_title)): ?>
		<title>
			<?php echo trim($page_title); ?> | SoleGrail's
		</title>
	<?php else: ?>
		<title>SoleGrail's</title>
	<?php endif; ?>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.css">
	<link rel="stylesheet" href="/assets/css/style.css">


</head>

<body>
	<?php if(!isset($display_navbar_flag)) {
			$display_navbar_flag = true;
		}
	?>
	<?php if($display_navbar_flag === true): ?>
		<!-- <nav class="navbar navbar-expand-lg navbar-background-home">
			<a class="navbar-brand navbar-brand-home" href="/index.php">SoleGrail's</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarcol"
				aria-controls="navBarcol" aria-expanded="false" aria-label="Toggle Navbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse mr-2" id="navBarcol">
				<ul class="navbar-nav ml-auto navbar-nav-home">
					<li class="nav-item home-nav-item">
						<a class="nav-link nav-link-active" href="#">Explore</a>
					</li>
					<li class="nav-item home-nav-item">
						<a class="nav-link nav-link-active" href="#">Ebook</a>
					</li> 
					<li class="nav-item home-nav-item">
						<a class="nav-link nav-link-active responsive-font-para" href="/login/index.php">Sign In</a>
					</li>
					<li class="nav-item home-nav-item">
						<a class="nav-link nav-link-active responsive-font-para" href="/registration/user.php">Sign up</a>
					</li>
          <li class="nav-item home-nav-item">
						<a class="nav-link nav-link-active responsive-font-para" href="/logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav> -->
	<?php endif; ?>

	<?php if (isset($page_title) && !empty($page_title)): ?>
		<link rel="stylesheet" href="/assets/css/navbar.css">
	<?php else: ?>
		<link rel="stylesheet" href="/assets/css/navbar_home.css">
	<?php endif; ?>

<style>
	.home-nav-item:hover{
		background-color: #1363df;
	}
</style>