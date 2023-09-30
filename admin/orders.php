<?php
$page_title = "Orders";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");
?>
<div class="container-fluid mt-0">
    <nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
            <li class="breadcrumb-item " aria-current="page">
                Orders
            </li>

        </ol>
    </nav>
    <div class="col-lg-12">
        <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/prompts.php"); ?>
    </div>
    <div class="justify-content-center mx-auto d-grid mb-3">
        <h1 class="lora_font fw-bold card_title">Orders</h1>
    </div>
    <div class="card mb-5">
        <table class="table ">
            <thead>
                <tr>
                    <th class="text-center">Customer Id</th>
                    <th class="text-center">Customer Name</th>
                    <th class="text-center">Product Id</th>
                    <th class="text-center">Product Name</th>
                    <th class="text-center">Order date</th>
                    <th class="text-center">Payment Status</th>
                    <th class="text-center">Details</th>
                    <!-- <th class="text-center">Delete</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Kartik Kunder</td>
                    <td class="text-center">4</td>
                    <td class="text-center">Air jordan</td>
                    <td class="text-center">30/8/23</td>
                    <td class="text-center txt-success fw-bold" style="color:#FF0000;"><i
                            class="fa-solid fa-xmark px-2"></i>UNPAID</td>
                    <td class="text-center"><i class="fa-solid fa-eye fa-lg view_details"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- <i class="fa-solid fa-check-double px-2"></i>PAID -->

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");
?>