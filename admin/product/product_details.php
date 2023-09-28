<?php
	$page_title = "Product Details";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
    if(isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"]))
    {
        $id = trim($_GET["id"]);
        $product=get_product_details_by_passing_id($id);
    }
?>
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page">
    <a href="/admin/product/view_products.php" class="txt_dec">Inventory</a>
    </li>
    <li class="breadcrumb-item " aria-current="page">
        Product Details
    </li>
    
    </ol>
</nav>
<form>       
    <div class="card mt-2 mb-5 mx-5" style="border-radius: 50px; box-shadow: 10px 10px 50px rgb(129, 129, 129);">
        <div class=" fw-bold mx-auto d-grid  mt-3" style="font-size: 40px; text-decoration: underline solid #D87300 5px; border-bottom: 8px;">
            Product Details
        </div>
        <div class="row mx-4 pt-5">
            <div class="col-md-4">
                <p>Product Id:
                <b class="border-0 text-center text-muted ps-2" name="product_id" id="product_id"><?php echo $product["id"]; ?></b></p>
            </div>
            <div class="col-md-4">
                <p>Added Date:<b class="border-0 text-center text-muted ps-2" name="product_id" id="product_id"><?php echo $product["created_timestamp"]; ?></b></p>
            </div>
            <div class="col-md-4">
                <p>Modified Date:<b class="border-0 text-center text-muted ps-2" name="product_id" id="product_id"><?php echo $product["id"]; ?></b></p>
            </div>
            
        </div>
        <div class="mx-4 mt-3 ">
            <label style="color: #5c5c5c;">
                Product Name: 
            </label>
            <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $product["pro_name"]; ?></b>
            </div>
        </div>
        <div class="row m-4 gx-4 gy-4">
            <div class="col-md-2 ">
                
                <label style="color: #5c5c5c;">
                Brand 
                </label>
                <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $product["brand"]; ?></b>
                </div>
            </div>
            <div class="col-md-2">
                
                <label style="color: #5c5c5c;">
                Release Year 
                </label>
                <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $product["release_yr"]; ?></b>
                </div>
            </div>
            <div class="col-md-2">
                
                <label style="color: #5c5c5c;">
                Gender 
                </label>
                <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $product["gender"]; ?></b>
                </div>
            </div>
            <div class="col-md-2">
                <label style="color: #5c5c5c;">
                Type 
                </label>
                <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $product["top_type"]; ?></b>
                </div>
            </div>
            <div class=" col-md-2">
                
                <label style="color: #5c5c5c;">
                    Price 
                </label>
                <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><i class="fa-solid fa-indian-rupee-sign pe-2" style="color: #000000;"></i><?php echo $product["price"]; ?></b>
                </div>
            </div>
        </div>
        <div class=" row mx-4 my-2">
            <label style="color: #5c5c5c;">
            Description 
            </label>
            <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $product["specification"]; ?></b>
            </div>
        </div>
        <div class="row mx-4 mb-5 mt-4">
            <label class="fw-bold">Images</label>
            <div class="col-md-4 gy-2 gx-4">
                <!-- <label>Left Profile</label> -->
                <img src="<?php echo substr($product["l_profile"],26); ?>" alt="" class="src" height= 200px width= auto>
            </div >
            <div class="col-md-4 gy-2 gx-4">
                <!-- <label>Right Profile</label> -->
                <img src="<?php echo substr($product["r_profile"],26); ?>" alt="" class="src" height= 200px width= auto>
            </div >
            <div class="col-md-4 gy-2 gx-4">
                <!-- <label>Top Profile</label> -->
                <img src="<?php echo substr($product["t_profile"],26); ?>" alt="" class="src" height= 200px width= auto>
            </div>
            <div class="col-md-4 gy-2 gx-4">
                <!-- <label>Full Profile</label> -->
                <img src="<?php echo substr($product["full_profile"],26); ?>" alt="" class="src" height= 200px width= auto>
            </div>
            <div class="col-md-4 gy-2 gx-4">
                <!-- <label>Sole Profile</label> -->
                <img src="<?php echo substr($product["sole_profile"],26); ?>" alt="" class="src" height= 200px width= auto>
            </div>
        </div>
        <div class="position-relative mt-3 mb-5 ">
            <div class="position-absolute bottom-0 end-0 mx-4 gx-2">
                <a type="button" href="/admin/product/edit_product.php?q=<?php echo $product["id"]; ?>" class="btn btn-warning  confirm_btn fw-bold" style="border-radius: 30px;"><i class="fa-solid fa-pen" style="color: #000000;"></i> Edit</a>
                <a type="button" href="/admin/product/view_products.php" class="btn btn-primary  confirm_btn fw-bold" style="border-radius: 30px;">Back</a>
            </div>
        </div>
    </div>
</form>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>