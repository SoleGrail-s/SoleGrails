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
                    <th class="text-center">Sr. No.</th>

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
                <?php if ($orders = get_orders()): ?>
                    <?php
                    $srno = 1;
                    foreach ($orders as $order):
                        ?>
                        <?php $user = get_user_details_by_passing_id($order['user_id']) ?>
                        <?php $product = get_product_details_by_passing_id($order['product_id']) ?>
                        <?php $order_details = get_order_detail_using_id($order['id']) ?>

                        <tr>
                            <td class="text-center">
                                <?php echo $srno ?>

                            </td>
                            <td class="text-center">
                                <?php echo $order["user_id"] ?>

                            </td>
                            <td class="text-center">
                                <?php echo $user["f_name"] . " " . $user["l_name"] ?>

                            </td>
                            <td class="text-center">
                                <?php echo $order["product_id"] ?>

                            </td>
                            <td class="text-center text-uppercase">
                                <?php echo $product["pro_name"] ?>

                            </td>
                            <td class="text-center">
                                <?php echo date('d/m/Y', strtotime($order["order_placed_timestamp"])) ?>

                            </td>
                            <td class="text-center text-success fw-bold"><i class="fa-solid fa-check-double px-2"></i>PAID</td>
                            <td class="text-center">
                                <a href="/admin/orders/order_details.php?q=<?php echo $order["id"]; ?>">
                                    <i class="fa-solid fa-eye fa-lg view_details"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        $srno += 1;
                    endforeach
                    ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- <i class="fa-solid fa-check-double px-2"></i>PAID -->

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");
?>