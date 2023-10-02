<?php
$page_title = "Explore";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");
?>

<div class="row mt-3 mb-5 p-1 mx-1 g-4">
    <?php if ($sneakers = display_sneakers()): ?>
        <?php foreach ($sneakers as $sneaker): ?>
            <div class=" col-sm-6  ">
                <div class="card">
                    <a href="/explore/sneaker_details.php?q=<?php echo $sneaker["id"]; ?>"
                        class="text-decoration-none text-dark">
                        <div class="row ">
                            <div class="col-md-5 position-relative">
                                <?php if ($sneaker["l_profile"] > '0'): ?>
                                    <img src="<?php echo substr($sneaker["l_profile"], 26); ?>"
                                        class="float-start catlg_pg_product_img img-fluid " alt="product image">
                                <?php else: ?>
                                    <img src="/assets/img/default_img.png" class="float-start catlg_pg_product_img img-fluid "
                                        alt="product image">
                                <?php endif; ?>
                                <?php if ($sneaker["brand"]): ?>
                                    <h4><span class="badge  bg-white text-dark position-absolute top-0 end-0">
                                            <?php echo ($sneaker["brand"]); ?>
                                        </span></h4>
                                <?php else: ?>
                                    <h4><span class="badge  bg-white text-dark position-absolute top-0 end-0">Brand</span></h4>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-7 ">
                                <div class="catlg_pg_product_name mx-2">
                                    <p class="fw-bold text-uppercase align-middle">
                                        <?php echo ($sneaker["pro_name"]); ?>
                                    </p>
                                </div>
                                <div class="row mx-2">
                                    <div class="col-6 d-grid mx-auto mb-3">
                                        <button type="button" class="p-2 fw-bold buy_btn box_shadow"><i
                                                class=" fa-solid fa-indian-rupee-sign fa-lg me-2" style="color: #000000;">
                                                <?php echo ($sneaker["price"]); ?>
                                            </i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php")
    ?>