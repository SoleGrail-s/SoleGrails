<?php
	$page_title = "Add Brand";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
?>


<!-- 
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page">
    <a href="/admin/add_fields.php" class="txt_dec">Fields</a>
    </li>
    <li class="breadcrumb-item " aria-current="page">
    <a href="/admin/brands.php" class="txt_dec">Add Brand</a>
    </li>
    <li class="breadcrumb-item " aria-current="page">
    <a href="" class="txt_dec">Edit Brand</a>
    </li>
    </ol>
</nav>
<div class="row mx-5">
    <div class="col-lg-12">
        <?php require_once($_SERVER["DOCUMENT_ROOT"]."/includes/prompts.php"); ?>
    </div>
</div>
<div class="row mx-5">
    <div class="col-lg-12">
        <?php require_once($_SERVER["DOCUMENT_ROOT"]."/includes/prompts.php"); ?>
    </div>
</div>
<div class="card mx-5 border-1 mb-5 mt-2" style="border-radius: 20px; box-shadow: 10px 5px 1px #ffd900; border-color: #D87300;">
<div class=" fw-bold mx-auto d-grid  mt-3" style="font-size: 40px; text-decoration: underline solid #D87300 5px; border-bottom: 8px;">
        Edit Brand
    </div>
    
    <div class="card-body my-3 mb-5">
        <form role="form" action="<?php echo get_action_attr_value_for_current_page()."?q=".$brand["brand_id"]; ?>" method="post" enctype="multipart/form-data">
            <div class="row text-center justify-content-center">
                <div class="col-lg-5">
                    <div class="input-group-md justify-content-center">
                        <label class="text-dark required-highlight  fw-bold" for="edit_brand_name" >Brand Name</label>
                        <input class="form-control" type="text" placeholder="Edit Brand" name="edit_brand_name" id="edit_brand_name"  value="<?php echo $brand["brand_name"]; ?>" required>
                    </div>
                </div>
                <div class="col-lg-2 mt-4">
                    <button type="submit" id="edit_brand" name="edit_brand" class="btn btn-warning add_brands_btn px-3 border border-1">Update</button>
                    <a href="/admin/brands/brands.php">
                    <button type="submit" class="btn btn-primary px-3 border border-1">Cancel</button>
                    </a>
                    
                </div>
            </div>
        </form>
    </div>
</div> -->