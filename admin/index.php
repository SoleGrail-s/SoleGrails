<?php
$page_title = "Admin Panel";
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");
?>

<div class="card m-5 border-1"
    style="border-radius: 100px;  background-color: #ffd9007b; box-shadow: 5px 5px 15px #818181; border: 1px solid #D87300;">
    <div class="float-start p-3 ">
        <img src="https://th.bing.com/th/id/OIP.Sr4fxChDzgG6T-SG4zCS8wHaHa?pid=ImgDet&rs=1" class="float-start mx-auto"
            alt="..." style="width: 100px; height: 100px;  border: 3px solid #D87300;">
        <label class="ms-5 mx-auto my-4 fw-bold "
            style="vertical-align: middle ; font-family: 'Lora', sans-serif; font-size: 30px;">Welcome, Kartik
            Kunder</label>
    </div>
</div>

<div class="card mx-5 border-1 mb-5"
    style="border-radius: 20px; box-shadow: 10px 5px 1px #ffd900; border-color: #D87300;">
    <div class="row align-middle mx-5 mt-3">
        <div class="col p-3">
            <a href="/admin/product/view_products.php" class="txt_dec">
                <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">Inventory</button>
            </a>
        </div>
        <div class="col p-3">
            <a href="/admin/customer/view_customer.php" class="txt_dec">
                <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">View Customers</button>
            </a>
        </div>
        <div class="col p-3">
            <a href="" class="txt_dec">
                <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">Customer
                    verification</button>
            </a>
        </div>
    </div>
    <div class="row align-middle mx-5">
        <div class="col p-3">
            <a href="/admin/add_fields.php" class="txt_dec">
                <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">Fields</button>
            </a>
        </div>
        <div class="col p-3">
            <a href="/admin/product/add_product.php" class="txt_dec">
                <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">Add product</button>
            </a>
        </div>
        <div class="col p-3">
            <a href="" class="txt_dec">
                <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">Transaction
                    Monitoring</button>
            </a>
        </div>
    </div>
    <div class="p-3 mb-3">
        <a href="" class="txt_dec">
            <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">Feedback</button>
        </a>

    </div>
</div>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php")
    ?>