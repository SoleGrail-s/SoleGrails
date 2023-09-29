<?php
	$page_title = "Cart";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
    
?>
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
    </ol>
</nav>
<div class="container px-5 pt-3">
    <div class="row ">
        <div class="fw-bold text-uppercase h4 col-6 ps-5">MY CART</div>

        <div class="col-3 mx-auto text-end h5"><i class="fa-solid fa-dolly px-2 " style="color: #000000;"></i>88</div>
        <div class="col-3 mx-auto px-auto h5"><i class="fa-solid fa-indian-rupee-sign " style="color: #000000;"></i>150,000</</div>
    </div>
</div>

<div class="container px-3 px-sm-5 py-2">
    <div class="card border-3 mx-3 cart_product_focus">
        <div class="row">
            <div class="col-md-3 col-12 text-center my-auto">
                <img src="/assets/img/SGPROD_011IMGF.jpg" class="img-fluid">
            </div>
            <div class="col-md-5 col-12">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h4 class="lora_font text-center">Air Force 1 High '07 lx 'Blackwhite-Beach-Smoke Grey</h4>
                </div>
            </div>
            <div class="col-md-2 col-6 text-center my-3 my-md-0">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <h5 class="fw-bold">$ 8,80,999</h5>
                </div>
            </div>
            <div class="col-md-2 col-6 text-center my-3 my-md-0">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <i class="fa-solid fa-trash-can fa-xl" style="color: #818181;"></i>
                </div>
            </div>
        </div>
    </div>
</div>









</div>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>