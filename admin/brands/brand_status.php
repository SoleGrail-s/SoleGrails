<?php
    $page_title="Brand Status";
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");

    if(isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"]))
    {
        $brand_id = trim($_GET["q"]);
        $brand = get_brand_by_id($brand_id);
    }

    if($brand["disabled"] === "0")
    {
        $disabled = '1';
        brand_status($disabled, $brand_id);
    }
    else
    {
        $disabled = '0';
        brand_status($disabled, $brand_id);
    }
    echo "<script>window.location='/admin/brands/brands.php';</script>";
	exit(0);
?>