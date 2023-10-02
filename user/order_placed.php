<?php
$page_title = "Order Confirmed";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

if (isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"])) {
    $id = trim($_GET["q"]);
    $sneaker = get_sneakers_by_id($id);
}

$user = display_user_details_by_id();
?>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-8">
            <div class="card order_conf_card">
                <!-- <div class="text-left logo p-2 px-5 mx-auto d-grid">
                    <img src="/assets/img/logos/SG-logo.png" width="50">
                </div> -->
                <div class=" px-5 pt-1 mx-auto d-flex">
                    <h3 class=" fw-bold mx-auto d-grid  mt-3 card_title">
                        Thankyou, for shopping!

                    </h3>

                </div>
                <div class="mx-5 pt-5">
                    <div class="fw-bold h5">Dear
                        <?php echo ($user["f_name"] . " " . $user["l_name"]); ?>
                        ,
                    </div>
                    <div class="text-wrap">

                        You will receive a separate email with tracking information once your package ships. If you have
                        any questions or need assistance, please contact us at
                        <a>solegrails@gmail.com</a> .

                        Thank you for choosing SoleGrail's. Once again thank you for shopping with us!
                    </div>
                    <div class="pt-2">
                        <strong class=" text-muted">Order Details:</strong>

                    </div>
                    <div class="pt-1">Product Name: <span>
                            <?php echo ($sneaker["pro_name"]); ?>
                        </span>
                    </div>
                    <div class="pt-1">Total Amount: <span>
                            <?php echo ($sneaker["price"]); ?>
                        </span><i class="fa-solid fa-indian-rupee-sign px-2" style="color: #000000;"></i>
                    </div>
                    <div class="pt-1">Shipping Address: <span>
                            <?php echo ($user["address"]); ?>
                        </span></div>
                    <div class="pt-1">Order date: <span id="today"></span>
                        <script> var date = new Date();
                            var today = date.getDate() + "/" + date.getMonth() + "/" + date.getFullYear();
                            document.getElementById("today").innerHTML = today</script>
                    </div>
                </div>
                <div class="d-flex justify-content-center  pt-3">
                    <h4> Click here to view your <a href="/user/cart.php" class="txt-dec">
                            <i class="fa-solid fa-cart-shopping addtocart_icon"></i></a></h4>
                </div>
                <div class="d-flex justify-content-center  pt-3 pb-5">
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