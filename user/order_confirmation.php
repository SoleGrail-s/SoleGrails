<?php
$page_title = "Order Confirmation";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

if (isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"])) {
    $id = trim($_GET["q"]);
    $sneaker = get_sneakers_by_id($id);
}
$sneaker_id = $sneaker['id'];
if (isset($_GET["s"]) && !empty($_GET["s"])) {
    $size = trim($_GET["s"]);
}
if (isset($_POST['place_order_btn'])) {
    insert_orders($id);
    header("Location: /user/order_placed.php?q= $sneaker_id");
    redirect_to_current_page("q=$id");

}
$user = display_user_details_by_id();
?>

<form role="form" action="<?php echo get_action_attr_value_for_current_page() . '?q=' . $sneaker['id'] ?>
" method="post" enctype="multipart/form-data">
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-8">
                <div class="card order_conf_card">
                    <!-- <div class="text-left logo p-2 px-5 mx-auto d-grid">
                    <img src="/assets/img/logos/SG-logo.png" width="50">
                </div> -->
                    <div class="invoice p-5 pt-1">
                        <?php
                        if (($user['address'] && $user['state'] && $user['postal_code']) != 0): ?>
                            <h3 class=" fw-bold  my-3 card_title">
                                Hello,
                                <span name="" id="f_name" class="card_title">
                                    <?php echo ($user["f_name"]); ?>
                                </span>
                            </h3>
                            <span class="mb-5">One more step and you'll be on your way to meeting your solemate.</span>
                            <div class="payment border-top border-bottom border-2 table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="pt-2">
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
                                            <td>
                                                <div class="pt-2">
                                                    <span class="d-block text-muted">Postal-code</span>
                                                    <span>
                                                        <?php echo ($user["postal_code"]); ?>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="pt-2">
                                                    <span class="d-block text-muted">Landmark</span>
                                                    <span>
                                                        <?php echo ($user["landmark"]); ?>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="payment border-bottom border-2 table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="py-2">
                                                    <span class="d-block text-muted">Shipping Address</span>
                                                    <span>
                                                        <?php echo ($user["address"]); ?>
                                                    </span>
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
                                                <span class="font-weight-bold">
                                                    <?php echo $size; ?>
                                                </span>
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
                                <button type="submit"
                                    class="txt_dec  buy_product_btn btn-lg fw-bold mx-auto d-block text-center col-4 mx-2"
                                    onclick="pay_now()" name="place_order_btn">Place Order
                                </button>
                            <?php else: ?>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <h1><i class="fa-solid fa-circle-exclamation px-2" style="color: #818181;"></i>Sorry we can't
                                place
                                this order!</h1>
                        </div>
                        <div class="mx-auto d-grid">
                            <h4 class="py-2">Oops! It seems like you haven't set your shipping address yet. To complete your
                                order and ensure a smooth delivery experience, please click the <a
                                    href="/user/index.php">'Change Address'</a> button to provide your shipping
                                details. Thank
                                you for shopping with us!
                            </h4>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-center footer pt-3 ">
                    <span> Click here to view your <a href="/user/cart.php" class="txt-dec">
                            <i class="fa-solid fa-cart-shopping fa-xl addtocart_icon"></i></a></span>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</form>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");
?>