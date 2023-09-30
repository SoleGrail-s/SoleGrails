<?php
$page_title = "Home Page";
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");
?>


<style>
    .shop_now {
        background-color: #D87300;
        border-radius: 5px;
    }
</style>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0">
            <div class="overlay ">
                <img src="/assets/img/website_pics/hpic_4c.jpg" alt="Background Image" class="img-fluid"
                    style="width: 100%; opacity: 60%; ">
                <div class="overlay-content ">
                    <h1 class=" fw-bold lora_font" style="color: #000000;">Find your Sole Mate at SoleGrail's, Walk with
                        style</h1>

                    <a href="/explore/index.php " class=""><button
                            class="shop_now txt_dec btn-lg fw-bold text-uppercase  lora_font box_shadow">Shop
                            Now</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");
?>