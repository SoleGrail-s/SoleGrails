<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .scrollable-content {
    max-height: calc(100vh - 90px); /* Adjust the height based on your design */
    overflow-y: auto;
    }
  .navbar {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90px; /* Set an appropriate height */
  }

  .navbar-text {
    font-size: 40px;
    font-weight: bold; 
    color: black;
  }
  .nav-link-women,
  .nav-link-men, 
  .nav-link-features,
  .nav-link-newarrivals,
  .nav-link-shoecare,
  .nav-link-todaysdeals,
  .nav-link-treading
  {
    font-size: 8px; /* Set your desired font size */
  }
  .navbar-nav {
    display: flex;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .navbar-nav .nav-item {
    margin-right: 50px; /* Adjust the spacing between items */
  }

  .nav-link {
    font-size: 15px; /* Set your desired font size */
    color: black !important; /* Ensure the link color is black */
    text-decoration: none !important; /* Remove underlines */
  }
  .prominent-footer ul {
      list-style-type: disc; /* Use 'circle' for a hollow bullet */
      margin-left: 20px; /* Adjust the margin as needed */
    }
  .prominent-footer p, h1{
    padding-left: 20px;
  }


</style>
<title>SoleGrail's</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--Main Navigation-->
<header class="mb-4 fixed-top">
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container-fluid">
      <div class="row">
        <!-- Right elements -->
        <div
          class="col-md-5 d-flex justify-content-center justify-content-md-start align-items-center d-none d-lg-flex">
        </div>
        <!-- Right elements -->

        <!-- Center elements -->
        <div class="col-md-2 d-none d-lg-block">
          <a href="#!" class="ms-md-2">
            <span class="navbar-text">
                SoleGrail's
            </span>
          </a>
        </div>
        <!-- Center elements -->

        <!-- Right elements -->
        <div class="col-lg-5 d-flex justify-content-center justify-content-md-end align-items-center">
          <a class="text-reset me-3" href="#">
            <i class="fas fa-plus"></i>
          </a>
          <a class="text-reset me-3" href="#">
            <i class="fas fa-info-circle"></i>
          </a>

          

          <!-- User -->
          <div class="dropdown">
            <a class="text-reset dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="50" alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
        </div>
        <!-- Right elements -->
      </div>
    </div>
  </div>

  <section class="scrollable-content">
<!-- Jumbotron -->
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
        -->
        <li class="nav-item">
            <a class="nav-link nav-link-women" href="#">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-men" href="#">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-features" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-newarrivals" href="#">New Arrivals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-shoecare" href="#">Shoe-Care</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-todaysdeals" href="#">Today's Deals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-treading" href="#">Treading</a>
          </li>
         
        </ul>
        
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex input-group w-auto">
      <input
        type="search"
        class="form-control rounded"
        placeholder="Search"
        aria-label="Search"
        aria-describedby="search-addon"
      />
      <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
    </form>
  </div>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
 
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('image/step_to_go.png');
      background-image: no-repeat;
      width: 600vh;
      height: 50vh;
    "
  >
  </div>
  <!-- Background image -->

</header>
    
<!-- landing page starting from the photo -- >



<div class="position-relative">
  <div
    class="svg-wrapper bg-image shadow-1-strong rounded-lg"
    style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/026.webp');
      height: 400px;
      margin-top: 58px;
    "
  >
    <svg
      data-name="Layer 1"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1200 120"
      preserveAspectRatio="none"
      class="svg"
      style="
        height: 669px;
        width: 100%;
        fill: rgb(20, 77, 133);
        opacity: 0.8;
        transform: rotateY(0deg);
      "
    >
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
    </svg>
  </div>
</div>
 Background image 
-->











<!--                               footer from chat gpt                                                                    -->
 <!-- Footer Section -->
 <footer class="bg-dark text-white">
 <footer class="prominent-footer">
  <!--  <div class="container py-5">   -->
  
      <div class="row">
        <div class="col-md-3">
          <h1 class="mb-5">SoleGrail's</h1>
          <p>Your ultimate sneaker destination. Exclusive kicks, hottest releases, limited editions, seamless shopping, lightning-fast shipping, exceptional customer service. Experience style and innovation at SoleGrail's.</p>
        </div>

        <div class="col-md-3">
          <h5 class="mb-5">My SoleGrail's</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">My Account</a></li>
            <li><a href="#" class="text-white">Order Status</a></li>
            <li><a href="#" class="text-white">Soulmates! walk- Subscribe now</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5 class="mb-5">Help & FAQ</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Online Ordering</a></li>
            <li><a href="#" class="text-white">Shipping</a></li>
            <li><a href="#" class="text-white">Billing</a></li>
            <li><a href="#" class="text-white">Returns & Exchanges</a></li>
            <li><a href="#" class="text-white">Customer Service</a></li>
          </ul>
        </div>
        <div class="col-md-3">
        <h5 class="mb-5">Follow Us</h5>
          <ul class="list-inline">
            <!-- Grid column -->
          <!-- Grid column -->
          
            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i>
            </a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
        </div>
<!--
            <li class="list-inline-item"><a href="#" class="text-white">Insta</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Term of use</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Privacy Policy</a></li>
--> 
        </ul>
        </div>

        <div class="col-md-3">
        <h4 class="mb-5"></h4>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="text-white">Help</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Term of use</a></li>
            <li class="list-inline-item"><a href="#" class="text-white">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bg-secondary text-white text-center py-3">
      © 2023 SoleGrail's.inc All Rights Reserved.
    </div>
  </footer>
</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>