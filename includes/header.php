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
	<title>SoleGrail's</title>
    
    
	<!-- Lin to bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
	<!-- css link  -->
	<link rel="stylesheet" href="/assets/css/style.css">


	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- ROBOTO -->
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
		rel="stylesheet">
	<!-- LORA -->
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
		rel="stylesheet">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Bundle  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</head>

<body>
	<?php if(!isset($display_navbar_flag)) {
			$display_navbar_flag = true;
		}
	?>
	<?php if($display_navbar_flag === true): ?>
		 <nav class="navbar navbar-expand-lg navbar-background-home">
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
		</nav> 
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