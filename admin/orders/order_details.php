<?php
$page_title = "Order Details";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");
if(isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"]))
{
    $id = trim($_GET["q"]);
    $order = get_order_detail_using_id($id);
}
$user =  get_user_details_by_passing_id($order['user_id']);
$product = get_product_details_by_passing_id($order['product_id']);
?>

<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
        <li class="breadcrumb-item " aria-current="page">
            <a href="/admin/orders/view_orders.php" class="txt_dec">Orders</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">Order Details</li>
    </ol>
</nav>
<form action="">
    <div class="card mx-5 mb-5" style="border-radius: 50px; box-shadow: 10px 10px 50px #818181;">
        <div class="  mx-auto d-grid mt-4">
            <h1 class="card_title fw-bold">Order Details</h1>

        </div>
        <div class="mx-4 pt-1">
            <div class="row  px-3">
                <label for="" class="my-4 details_section">Customer Details </label>
                <div class="">
                    <p>Customer Id:
                        <b class=" border-0 text-center text-muted ps-2" name="custome_id" id="custome_id">
                            <?php echo $user["user_id"]; ?>
                        </b>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            First Name:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["f_name"]; ?>
                            </b></div>
                    </div>
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Middle Name:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["m_name"]; ?>
                            </b></div>
                    </div>
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Last Name:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["l_name"]; ?>
                            </b></div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Contact Number:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["contact_no"]; ?>
                            </b></div>
                    </div>
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Alternate Number:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["alternate_no"]; ?>
                            </b></div>
                    </div>
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Email id:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["email_id"]; ?>
                            </b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Address:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["address"]; ?>
                            </b></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Landmark:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["landmark"]; ?>
                            </b></div>
                    </div>
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Postal Code:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["postal_code"]; ?>
                            </b></div>
                    </div>
                    <div class="col-md-4 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            State:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $user["state"]; ?>
                            </b></div>
                    </div>
                </div>
            </div>
            <div class="row  px-3">
                <label for="" class="my-4 details_section">Product Details </label>
                <div class="">
                    <p>Product Id:
                        <b class=" border-0 text-center text-muted ps-2" name="custome_id" id="custome_id">
                       <?php echo $order["product_id"];?>
                        </b>
                    </p>
                </div>
                <div class="row">

                    <div class="col-md-8 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Product Name:
                        </label>
                        <div><b class="form-control text-uppercase"
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $product["pro_name"]; ?>
                            </b></div>
                    </div>
                    <div class="col-md-2 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Brand:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo $product["brand"]; ?>
                            </b></div>
                    </div>
                    <div class="col-md-2 py-2">
                        <label style="display: block; color: #5c5c5c;">
                            Ordered Timestamp:
                        </label>
                        <div><b class="form-control "
                                style="border-color: #00000084; border-radius: 10px;height: 40px; ">
                                <?php echo date('d/m/Y', strtotime($order["order_placed_timestamp"])) ?>
                            </b></div>
                    </div>
                </div>
            </div>
            <div class="position-relative my-5 pt-3">
                <a href="/admin/orders/view_orders.php" type="button"
                    class="btn btn-warning position-absolute bottom-0 end-0 mx-4 confirm_btn"
                    style="border-radius: 30px;"> <i class="fa-solid fa-xmark pe-1"
                        style="color: #000000;"></i>Cancel</a>
            </div>
        </div>
    </div>
</form>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");
?>