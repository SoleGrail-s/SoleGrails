<?php
$page_title = "Login";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

if (isset($_SESSION["user_id"]) && !empty($_SESSION["user_id"]) && is_numeric($_SESSION["user_id"]) && isset($_SESSION["role"])) {
    echo "<script>window.location='/" . $_SESSION["role"] . "';</script>";
    exit(0);
}

if (isset($_POST["login_btn"])) {
    login($_POST);
    redirect_to_current_page();
}
?>
<div class=" login_section mt-5">
    <!-- <img src="/assets/img/website_pics/hpic_1.png" class="" alt=""> -->
    <div class="row mx-5">
        <div class="col-lg-12">
            <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/prompts.php"); ?>
        </div>
    </div>
    <form method="post" action="login.php">
        <div class="card mt-5 mx-4 mb-5 text-center mx-sm-auto " id="logincard">
            <h2 class="text-center fw-bolder login_txt pt-3">Login</h2>
            <div class="row mx-5 mb-3">
                <input class="mt-5 login_fields login_placeholder no_outline" type="text" id="email_id" name="email_id"
                    placeholder="Username" required>
                <input class="my-5 login_fields login_placeholder no_outline" type="password" id="password"
                    name="password" placeholder="Password" required>
                <button class="btn btn-dark mx-auto d-grid mb-4" id="login_btn" name="login_btn"
                    type="submit">Login</button>
            </div>
        </div>
        <div class=" text-center  mb-4">
            <p class="fw-bolder">
                Don't have an account?
                <button class=" btn-warning btn-sm fw-bolder border-0 box_shadow" id="signup_btn" type="button"><a
                        class="txt_dec" href="/registration/register">Sign Up</a></button>
            </p>
        </div>
    </form>
</div>