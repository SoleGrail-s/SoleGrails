<?php
$page_title = "Add Fields";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");
?>

<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
        <li class="breadcrumb-item " aria-current="page">
            <a href="/admin/index.php" class="txt_dec">Fields</a>
        </li>
    </ol>
</nav>
<div class="card mx-5 border-1 mb-5 mt-2"
    style="border-radius: 20px; box-shadow: 10px 5px 1px #ffd900; border-color: #D87300;">
    <div class=" fw-bold mx-auto d-grid  mt-3"
        style="font-size: 40px; text-decoration: underline solid #D87300 5px; border-bottom: 8px;">
        Add Fields
    </div>
    <div class="row align-middle mx-5 my-3">
        <div class="col p-3">
            <a href="/admin/brands/brands.php" class="txt_dec">
                <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">Add Brands</button>
            </a>
        </div>
        <!-- <div class="col p-3">
            <a href="/admin/view_customer.php" class="txt_dec">
                <button type="button" class=" btn-lg  m-auto fw-bold box_shadow admin_panel_btn">Add Categories</button>
            </a>
        </div> -->
    </div>
</div>
</div>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php")
    ?>