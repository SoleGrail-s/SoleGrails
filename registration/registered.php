<?php
    $page_title = "Registered";
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
?>
<div class="card mt-5 mx-4 mb-5 text-center mx-sm-auto " id="logincard">
    <h2 class="text-center fw-bolder successful_txt pt-3" >Registration Successful!!!</h2>
        
    <div class=" text-center mx-auto my-4">
    <p class="fw-bolder mb-4">
        Log In to your account
        <button class=" btn-warning btn-sm fw-bolder border-0 box_shadow mx-auto"  id="signup_btn" type="button" ><a class="txt_dec" href="/login/login">Login<i class="ps-1 fa-solid fa-arrow-right-to-bracket fa-lg" style="color: #000000;"></i></a></button>
        
    </p>
    <p class="fw-bolder mb-4">
        Buy from vast range of sneakers
        <button class="btn btn-dark btn-sm fw-bold border-0 box_shadow"  type="button" ><a class="expl_btn" href="/explore/">Explore <i class="ps-1 fa-solid fa-dolly fa-lg" style="color: #ffffff;"></i></a></button>
    </p>
    </div>
</div>
<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php");
?>