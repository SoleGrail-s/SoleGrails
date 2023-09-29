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

	<!-- icon  -->
	<link rel="icon" href="/assets/img/logos/SG-logo.png" sizes="16x16 32x32" type="image/png">

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

<?php if ($page_title === 'Login'): ?>

	<body class="roboto_font login_body login_body">
	<?php elseif ($page_title === 'Registration'): ?>

		<body class="roboto_font register_body">
		<?php elseif ($page_title === 'Profile'): ?>

			<body class="roboto_font user_profile_body">
			<?php elseif ($page_title === 'Home Page'): ?>

				<body class="roboto_font index_bg_img">
				<?php else: ?>

					<body class="roboto_font ">
					<?php endif; ?>

					<?php if (!isset($display_navbar_flag)) {
						$display_navbar_flag = true;
					}
					?>
					<?php if ($display_navbar_flag === true): ?>
						<?php if ($page_title === 'Login' || $page_title === 'Registration' || $page_title === 'Customer Details'): ?>
							<nav class="navbar navbar-expand-sm primary_navbar ">
								<div class="container-fluid">
									<a class="ms-3 navbar-brand" href="/index.php">
										<h3 class="lora_font fw-bolder brand_name ms-4">SoleGrail's</h3>
									</a>
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
										data-bs-target="#mynavbar">
										<span class="navbar-toggler-icon"></span>
									</button>
								</div>
							</nav>
						<?php else: ?>
							<nav class="navbar navbar-expand-sm primary_navbar  navbar-dark">
								<div class="container-fluid">
									<a class="ms-3 navbar-brand" href="/index.php">
										<h3 class="lora_font fw-bolder brand_name ms-4">SoleGrail's</h3>
									</a>
									<div class="row">
										<div class="col"></div>
										<div class="col"></div>
										<div class="col"></div>
										<div class="col"></div>
									</div>
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapsibleNavbar">
										<span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse " id="collapsibleNavbar" style="z-index: 12;">
										<ul class="navbar-nav ms-auto roboto_font me-4">
											<?php if (isset($_SESSION["user_id"]) && ($_SESSION["role"]) && ($_SESSION["role"] === "user")): ?>
												<li class="nav-item my-auto px-1">
													<a href="/user/">
														<i class="fa-solid fa-user fa-lg " style="color: #000000;"></i>
													</a>
												</li>
												<li class="nav-item my-auto px-1">
													<a href="/user/cart.php">
														<i class="fa-solid fa-cart-shopping fa-lg" style="color: #000000;">
														</i>
													</a>
												</li>
												<li class="nav-item px-1">
													<a class="nav-link fw-bold text-dark" href="/logout.php">Logout</a>
												</li>

											<?php elseif (isset($_SESSION["user_id"]) && ($_SESSION["role"]) && ($_SESSION["role"] === "admin")): ?>
												<li class="nav-item">
													<a class="nav-link fw-bold text-dark" href="/logout.php">Logout</a>
												</li>
											<?php elseif ($page_title === 'Admin Panel'): ?>
												<li class="nav-item">
													<a class="nav-link fw-bold text-dark" href="/logout.php">Logout</a>
												</li>

											<?php else: ?>
												<li class="nav-item">
													<a class="nav-link fw-bold text-dark" href="/login/login">Login</a>
												</li>
												<li class="nav-item">
													<a class="nav-link fw-bold text-dark"
														href="/registration/register">Registration</a>
												</li>
											<?php endif; ?>

										</ul>
									</div>
								</div>
							</nav>
						<?php endif; ?>
					<?php endif; ?>


					<!-- <?php if (isset($page_title) && !empty($page_title)): ?>
		<link rel="stylesheet" href="/assets/css/navbar.css">
	<?php else: ?>
		<link rel="stylesheet" href="/assets/css/navbar_home.css">
	<?php endif; ?> -->

					<style>
						.home-nav-item:hover {
							background-color: ;
						}
					</style>