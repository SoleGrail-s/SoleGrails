<?php
    $page_title="Delete Product";
    $display_navbar_flag = true;
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");

    if(isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"]))
    {
        $product_id = trim($_GET["q"]);
        delete_product($product_id);
    }
    echo "<script>window.location='/admin/product/view_products.php';</script>";
	exit(0);
?>