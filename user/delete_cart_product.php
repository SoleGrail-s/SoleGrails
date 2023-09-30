<?php
$page_title = "Delete Cart Product";
require_once($_SERVER["DOCUMENT_ROOT"] . "/.php");

if (isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"])) {
    $id = trim($_GET["q"]);
    delete_cart_item($id);
}
echo "<script>window.location='/user/cart.php';</script>";
exit(0);
?>