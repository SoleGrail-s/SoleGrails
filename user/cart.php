<?php
$page_title = "Cart";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");


$userID = $_SESSION['user_id'];
$cartItemCount = getCartItemCount($userID);
?>
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="/explore/index.php" class="txt_dec">Explore</a></li>
    </ol>
</nav>
<div class="row">
    <div class="col-lg-12">
        <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/prompts.php"); ?>
    </div>
</div>
<?php $cart_products = get_cart_products_by_id(); ?>
<div class="container px-5 pt-3 pb-5">
    <div class="row ">
    
	
        <div class="fw-bold text-uppercase h4 col-6 ps-5">MY CART</div>
        <div class="col-3 mx-auto text-end h5"><i class="fa-solid fa-dolly px-2 " style="color: #000000;"></i><?php echo $cartItemCount; ?></div>
        
    </div>
    <?php if ($cart_products = get_cart_products_by_id()): ?>
        <?php foreach ($cart_products as $cart_product): ?>
            <?php $cart_item = get_sneakers_by_id($cart_product["product_id"]); ?>
            <div class="container px-3 px-sm-5 py-2">
                <div class="card border-3 mx-3 cart_product_focus">
                    <!-- <div class="card-body"> -->
                    <div class="row">
                        <div class="col-sm-10 ">
                            <a href="/explore/sneaker_details.php?q=<?php echo $cart_item["id"]; ?>" class="txt_dec">
                                <div class="row">
                                    <?php if ($cart_item["full_profile"] > '0'): ?>
                                        <div class="col-md-3  text-center my-auto">
                                            <img src="<?php echo substr($cart_item["full_profile"], 26); ?>" class="img-fluid">
                                        </div>
                                    <?php else: ?>
                                        <div class="col-md-3  text-center my-auto">
                                            <img src="/assets/img/default_img.png" class="img-fluid">
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-6  text-center mx-auto d-block">
                                        <div class="d-flex flex-column justify-content-center h-100">
                                            <h4 class="lora_font text-center text-uppercase text-center">
                                                <?php echo $cart_item["pro_name"]; ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center mx-auto d-block">
                                        <div class="d-flex align-items-center justify-content-center h-100 text-center">
                                            <h5 class="fw-bold">
                                                <?php echo $cart_item["price"]; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2  d-flex align-items-center text-center ">
                            <div class=" text-center my-auto card-body d-flex align-items-center " style>
                                <a href="/user/delete_cart_product.php?q=<?php echo $cart_item["id"]; ?>"
                                    class="text-center mx-auto  d-flex align-items-center ">
                                    <i class="fa-solid fa-trash-can fa-xl" style="color: #818181;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>

        <?php endforeach; ?>
    <?php endif; ?>

</div>

<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php")
    ?>