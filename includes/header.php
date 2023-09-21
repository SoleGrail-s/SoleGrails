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
    
		<!-- css link  -->
	<link rel="stylesheet" href="/assets/css/style.css">

	 <!-- js link  -->
	 <link rel="stylesheet" href="/assets/js/script.js">
    
	<!-- Lin to bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

	

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
		<!-- <nav class="navbar navbar-expand-sm  primary_navbar" >
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarcol">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav justify-content-start pe-0" style="position: fixed; left: 2%;">
              <li class="nav-item">
                <a class="nav-link active fw-bolder lora_font" aria-current="page" href="#" style="font-size: 15px; ">HOME</a>
              </li>
            </ul>
          
            <div class="row text-center mx-auto border-bottom-3" >
                <h3 class="lora_font fw-bolder brand_name" >SoleGrail's</h3>
                <div class="col-3 white_r  brand_r pe-3 " ></div>
                <div class="col-3 black_r  brand_r pe-3"></div>
                <div class="col-3 orange_r  brand_r pe-3"></div>
                <div class="col-3 yellow_r  brand_r pe-3"></div>
            </div>

			
			<div class="ms-5 collapse navbar-collapse" id="navBarcol" style="position: fixed; right: 2%;">
          <ul class="nav justify-content-end roboto_font ">
            <li class="nav-item me-0">
              <a class="nav-link active" aria-current="page" href="#">Log In</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Register</a>
            </li>
			</ul>
         </div>
	</nav> -->
		<nav class="navbar navbar-expand-sm primary_navbar navbar-dark">
  			<div class="container-fluid">
    			<h3 class="lora_font fw-bolder brand_name ms-4">SoleGrails's</h3>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
    			<div class="collapse navbar-collapse" id="collapsibleNavbar">
      				<ul class="navbar-nav ms-auto roboto_font me-4">
						<li class="nav-item">
							<a class="nav-link text-dark" href="/login/login">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="/registration/index">Registration</a>
						</li>  
      				</ul>
    			</div>
  			</div>
		</nav>
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
	<?php if($page_title === 'Login' || $page_title === 'Registration'): ?>
        <nav class="navbar navbar-expand-sm primary_navbar ">
            <div class="container-fluid">
                <a class="ms-3 navbar-brand" href="/index.php">
                    <h3 class="lora_font fw-bolder brand_name ms-4">SoleGrails's</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
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
		background-color: ;
	}
</style>