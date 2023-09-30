<?php
$page_title = "Order Confirmation";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");
if (isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"])) {
    $id = trim($_GET["q"]);
    $sneaker = get_sneakers_by_id($id);
}
if (isset($_GET["user_id"]) && !empty($_GET["user_id"]) && is_numeric($_GET["user_id"])) {
    $id = trim($_GET["user_id"]);
    $user = get_user_details_by_passing_id($id);
}
?>
<!-- <i class="fa-solid fa-truck-ramp-box fa-flip-horizontal" style="color: #000000;"></i> -->
<!-- <div class="card mt-2 mb-5 mx-5 card_style">
    <h3 class=" fw-bold mx-auto d-grid  mt-3 card_title">
        Thank you for shopping
    </h3>
    <div class="mx-auto d-block">

    </div>
</div> -->

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-8">
            <div class="card order_conf_card">
                <!-- <div class="text-left logo p-2 px-5 mx-auto d-grid">
                    <img src="/assets/img/logos/SG-logo.png" width="50">
                </div> -->
                <div class="invoice p-5 pt-1">
                    <h3 class=" fw-bold mx-auto d-grid  mt-3 card_title">
                        Hello,
                        <?php echo ($user["f_name"]); ?>
                    </h3>
                    <!-- <span class="font-weight-bold d-block mt-4">Hello, Chris</span> -->
                    <span>One more step and you'll be on your way to meeting your solemate.</span>
                    <div class="payment border-top mt-3 mb-3 border-bottom border-2 table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Order Date</span>
                                            <span>
                                                <p id="today">
                                                    <script> var date = new Date();
                                                        var today = date.getDate() + "/" + date.getMonth() + "/" + date.getFullYear();
                                                        document.getElementById("today").innerHTML = today</script>
                                                </p>
                                            </span>
                                        </div>
                                    </td>
                                    <!-- <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Order No</span>
                                            <span>MT12332345</span>
                                        </div>
                                    </td> -->
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Postal-code</span>
                                            <span>400088</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Landmark</span>
                                            <span>Near Advert hospital</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="payment  mt-3 mb-3 border-bottom border-2 table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Shiping Address</span>
                                            <span>414 Advert Avenue, NY,USA 14 Advert Avenue, NY,USA 14 Advert Avenue,
                                                NY,USA </span>
                                            <a href="/user/index.php" type="button"
                                                class="txt_dec btn btn-warning   text-center col-4 mt-1"><i
                                                    class="fa-solid fa-pen" style="color: #000000;"></i>
                                                Change address
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom border-2 table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="20%">
                                        <img src="<?php echo substr($sneaker["full_profile"], 26); ?>" width="90">
                                    </td>
                                    <td width="50%">
                                        <span class="font-weight-bold text-uppercase">
                                            <?php echo ($sneaker["pro_name"]); ?>
                                        </span>

                                    </td>
                                    <td width="10%">
                                        <span class="font-weight-bold">13 UK</span>

                                    </td>
                                    <td width="20%">
                                        <div class="text-right">
                                            <i class="fa-solid fa-indian-rupee-sign" style="color: #000000;"></i>
                                            <span class="font-weight-bold">
                                                <?php echo ($sneaker["price"]); ?>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center pt-2">

                        <h4 class="py-2">Delivered till:
                            <span id="delivery_date" style="color: #D87300 ;">
                                <script>
                                    var date = new Date();
                                    date.setDate(date.getDate() + 7); // Add 7 days to the current date
                                    var day = date.getDate();
                                    var month = date.getMonth() + 1; // Adding 1 because months are 0-based
                                    var year = date.getFullYear();
                                    var formattedDate = day + "/" + month + "/" + year;
                                    document.getElementById("delivery_date").innerHTML = formattedDate;
                                </script>
                            </span>
                        </h4>
                        <a href="" type="button"
                            class="txt_dec  buy_product_btn btn-lg fw-bold mx-auto d-block text-center col-4 mx-2">
                            Place Order
                        </a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <!-- <button href="" type="button"
                            class="txt_dec  buy_product_btn btn-lg fw-bold mx-auto d-block text-center col-4">
                            Place Order
                        </button> -->
                    </div>
                </div>
                <!-- <div class="d-flex justify-content-center footer p-3">
                    <span> Click here to view your <a href="/user/cart.php" class="txt-dec">
                            <i class="fa-solid fa-cart-shopping fa-xl addtocart_icon"></i></a></span>
                    <span>12 June, 2020</span>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php")
    ?>