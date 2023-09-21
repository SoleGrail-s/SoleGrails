<?php
    $page_title = "Login";
    $display_navbar_flag = false;
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
?>

<div class="container">
    <div class="roboto_font login_body">
  
<!-- <img src="/assets/img/404614.jpg" alt="" > -->
    <!--  -->
    <div class=" login_section mt-5">
        <!-- <img src="/assets/img/website_pics/hpic_1.png" class="" alt=""> -->
        <h2 class="text-center fw-bolder login_txt " >Login</h2>
        <form method="post" action="login.php" >
            <div class="card mt-5 mx-4 mb-5 text-center mx-sm-auto card-img-overlay" id="logincard">
                <div class="row mx-5 my-3">
                    <input class="mt-5 login_fields" type="text" id="username"
                        name="username" placeholder="Username" required>
                    <input class="my-5 login_fields" type="password"
                        id="password" name="password" placeholder="Password" required>
                    <button class="btn btn-dark mx-auto d-grid " id="login_btn" type="submit">Login</button>
                </div>
            </div>
        </form>
        <div class=" text-center  mb-4">
            <p class="fw-bolder">
                Don't have an account?
                <button class=" btn-warning btn-sm fw-bolder border-0" id="signup_btn" type="submit">Sign Up</button>
            </p>
        </div>
    </div>
</div>
</div>