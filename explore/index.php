<?php
	$page_title = "Explore";
    $display_navbar_flag = false;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
?>
<style>
   

</style>
<div class="row my-5 p-1 mx-1 g-4">
    <?php if ($sneakers = display_sneakers()): ?>
        <?php foreach ($sneakers as $sneakers): ?>
            <div class=" col-sm-6  ">
                <div class="card">
                    <div class="row">
                        
                        <div class="col-md-5 position-relative" >
                            <?php if ($sneakers["profile"]): ?>
                                <img src="<?php echo ($sneakers["profile"]); ?>" class="float-start catlg_pg_product_img img-fluid " alt="product image">
                            <?php else: ?>
                                <img src="/assets/img/default_img.png" class="float-start catlg_pg_product_img img-fluid " alt="product image">
                            <?php endif; ?>
                            <?php if ($sneakers["brand"]): ?>
                                <h4><span class="badge  bg-white text-dark position-absolute top-0 end-0"><?php echo ($sneakers["brand"]); ?></span></h4>
                            <?php else: ?>   
                                <h4><span class="badge  bg-white text-dark position-absolute top-0 end-0">Brand</span></h4> 
                            <?php endif; ?>
                        </div>
                        <div class="col-md-7 ">
                            <div class="catlg_pg_product_name mx-2" >
                                <p class="fw-bold text-uppercase align-middle" ><?php echo ($sneakers["pro_name"]); ?></p>
                            </div>
                            <div class="row mx-2">
                                <div class="col-6 d-grid mx-auto mb-3" >
                                    <button type="button" class="p-2 fw-bold buy_btn box_shadow" ><i class=" fa-solid fa-indian-rupee-sign fa-lg me-2" style="color: #000000;"><?php echo ($sneakers["price"]); ?></i></button>
                                </div>
                                <div class="col-6 text-center my-auto ">
                                    <i class="fa-solid fa-cart-shopping fa-xl addtocart_icon"></i>
                                </div>
                            </div>    
                        </div>
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>