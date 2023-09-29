<?php
	$page_title = "Add Product";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
    if(isset($_POST["add_product"]))
    {
        add_product($_POST);
        redirect_to_current_page();
    }
?>
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page">
        Add Product
    </li>
    </ol>
</nav>
<div class="row mx-5">
    <div class="col-lg-12">
        <?php require_once($_SERVER["DOCUMENT_ROOT"]."/includes/prompts.php"); ?>
    </div>
</div>
<form role="form" action="<?php echo get_action_attr_value_for_current_page(); ?>" method="post" enctype="multipart/form-data">
            <div class="card mt-2 mb-5 mx-5" style="border-radius: 50px; box-shadow: 10px 10px 50px rgb(129, 129, 129);">
                <div class=" fw-bold mx-auto d-grid  mt-3" style="font-size: 40px; text-decoration: underline solid #D87300 5px; border-bottom: 8px;">
                    Add Product
                </div>
                <!-- <div class="row mx-4 pt-5">
                    <div class="col-md-4">
                        <p>Product Id:<input type="number" class="border-0 " name="product_id" id="product_id"></p>
                    </div>
                    <div class="col-md-4">
                        <p>Added Date:<input type="text" class="border-0" name="added_date" id="added_date"></p>
                    </div>
                    <div class="col-md-4">
                        <p>Modified Date:<input type="text" class="border-0" name="modified_date" id="modified_date"></p>
                    </div>
                   
                </div> -->
                <!-- <div class="row mx-4 pt-5">
                    <div class="col-md-8 form-floating gx-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"> -->
                        <!-- placeholder should be given otherwise it may not display -->
                        <!-- <label for="floatingInput">Product Name</label>
                    </div>
                    <div class="col-md-4 align-content-center gx-4" style="color: #818181;">
                        <label></label><i class="fa-solid fa-circle-info "></i>  Name should not exceed 20 character</label>
                    </div>
                </div> -->
                <!-- <div > -->
                        <!-- <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"> -->
                        <!-- placeholder should be given otherwise it may not display -->
                        <!-- <label for="floatingInput">Product Name</label>
                        >

                    </div> -->
                <div class=" row mx-4 pt-5">
                    <label class="fw-bold " for="prod_name" >Product Name</label>
                    <input type="text" class="form-control col-md-2" id="inputGroupFile01" name="pro_name">
                </div>
                <div class="row m-4 gx-4 gy-4">
                    <div class="col-md-2 brand_select">
                        <select class="form-select" id="floatingSelect" name="brand">
                        <option selected disabled>Brand</option>

                            <?php
                            if($brands = get_brand_names()): ?>
                                <?php foreach($brands as $brand): ?>

                                    <option value="<?php echo $brand["brand_name"];?>"><?php echo $brand["brand_name"]; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="floatingSelect" name="release_yr">
                            <option selected disabled>Release Year</option>
                            <?php
                            if($release_yr = get_release_yr()): ?>
                                <?php foreach($release_yr as $year): ?>

                                    <option value="<?php echo $year["year"];?>"><?php echo $year["year"]; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                          </select>
                    </div>
                    <!-- <div class="col-md-2">
                        <select class="form-select" id="floatingSelect" name="sizes">
                            <option selected disabled>Size</option>
                            <?php
                            if($sizes = get_sizes()): ?>
                                <?php foreach($sizes as $size): ?>

                                    <option value="<?php echo $size["id"];?>"><?php echo $size["sizes"]; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <option value="1">13</option>
                            <option value="2">12.5</option>
                            <option value="3">12</option>
                        </select>
                    </div> -->
                    <div class="col-md-2">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="gender">
                            <option selected disabled>Gender</option>
                            <?php
                            if($genders = get_gender()): ?>
                                <?php foreach($genders as $gender): ?>
                                    <option value="<?php echo $gender["id"];?>"><?php echo $gender["gender"]; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="top_type">
                            <option selected disabled>Type</option>
                            <?php
                            if($top_types = get_top_type()): ?>
                                <?php foreach($top_types as $top_type): ?>
                                    <option value="<?php echo $top_type["id"];?>"><?php echo $top_type["type"]; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class=" col-md-2">
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-indian-rupee-sign" style="color: #000000;"></i></span>
                        <input type="text" class="form-control" name="price">
                        </div>
                    </div>
                </div>
                <div class=" row mx-4 my-2">
                    <label class="fw-bold ">Description</label>
                    <input class="form-control mx-auto no_resize mx-3 no_resize" placeholder="Description of porduct" id="floatingTextarea" name="specification"></input>

                </div>
                <div class="row mx-4 mb-5 mt-2">
                    <label class="fw-bold">Images</label>
                    <div class="col-md-4 g-4">
                        <label>Left Profile</label>
                        <input type="file" class="form-control col-md-2" id="l_profile" name ="l_profile" accept="image/*">
                    </div >
                    <div class="col-md-4 g-4">
                        <label>Right Profile</label>
                        <input type="file" class="form-control col-md-2" id="r_profile" name ="r_profile" accept="image/*">
                    </div >
                    <div class="col-md-4 g-4">
                        <label>Top Profile</label>
                        <input type="file" class="form-control col-md-2" id="t_profile" name ="t_profile" accept="image/*">
                    </div>
                    <div class="col-md-4 g-4">
                        <label>Full Profile</label>
                        <input type="file" class="form-control col-md-2" id="full_profile" name ="full_profile" accept="image/*">
                    </div>
                    <div class="col-md-4 g-4">
                        <label>Sole</label>
                        <input type="file" class="form-control col-md-2" id="sole_profile" name ="sole_profile" accept="image/*">
                    </div>
                </div>
                
                <div class="position-relative my-5 ">
                   
                    <button type="submit" value="POST" class="btn btn-warning position-absolute bottom-0 end-0 mx-4 confirm_btn" style="border-radius: 30px;" name="add_product"> <i class="fa-regular fa-circle-check pe-2" style="color: #000000;"></i>Confirm</button>
                    <a type="button" class="btn btn-secondary bottom-0 start-0 mx-5" href="/admin/product/view_products.php"><i class="fa-solid fa-warehouse px-2" style="color: #ffffff;"></i>Inventory</a>
                    
                </div>
            </div>
        </form>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>