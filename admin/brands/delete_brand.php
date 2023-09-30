<?php
$page_title = "Delete brand";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

if (isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"])) {
    $brand_id = trim($_GET["q"]);
    delete_brand($brand_id);
}
echo "<script>window.location='/admin/brands/brands.php';</script>";
exit(0);
?>