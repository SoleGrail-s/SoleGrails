<?php
$page_title = "Order Confirmed";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

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
                    <div class="fw-bold h5">Dear Kartik Kunder,</div>
                    <div class="tetx-wrap">

                        You will receive a separate email with tracking information once your package ships. If you have
                        any questions or need assistance, please contact us at
                        <a>solegrails@gmail.com</a> .

                        Thank you for choosing SoleGrail's. Once again thank you for shopping with us!
                    </div>
                    <div class="pt-2">
                        <strong class=" text-muted">Order Details:</strong>

                    </div>
                    <div class="pt-1">Product Name: Air Jordan 7 retro</div>
                    <div class="pt-1">Total Amount: 60,000<i class="fa-solid fa-indian-rupee-sign px-2"
                            style="color: #000000;"></i>
                    </div>
                    <div class="pt-1">Shipping Address: <span>bkive
                            ,veav.,v,aej,aevir.,vaekvra.,rvom,rv.vrar</span></div>
                    <div class="pt-1">Ordered date: 30/9/23</div>


                    <!-- <div class=" p">


                        Your order from [Your Company Name] has been received and is being processed. Here are the key
                        details:

                        **Order Number:** [Order Number]
                        **Date:** [Order Date]
                        **Total Amount:** [Total Amount]
                        **Shipping Address:** [Shipping Address]

                        **Payment Method:** [Payment Method]
                        **Shipping Method:** [Shipping Method]

                        You will receive a separate email with tracking information once your package ships. If you have
                        any questions or need assistance, please contact us at [Customer Support Email] or [Customer
                        Support Phone Number].

                        Thank you for choosing [Your Company Name]. We appreciate your business!

                        Sincerely,
                        [Your Company Name]"
                    </div> -->
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
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php")
    ?>