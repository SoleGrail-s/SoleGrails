<?php
	$page_title = "Add Product";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");

    if(isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"]))
    {
        $id = trim($_GET["q"]);
        $product = get_product_details_by_passing_id($id);
    }

    if(isset($_POST["edit_product"]))
    {
        $pro_name = $_POST["pro_name"];
        $brand = $_POST["brand"];
        $price = $_POST["price"];
        $release_yr = $_POST["release_yr"];
        $top_type = $_POST["top_type"];
        $gender = $_POST["gender"];
        $specification = $_POST["specification"];
        $l_profile = $_FILES["l_profile"]["name"];
        $r_profile = $_FILES["r_profile"]["name"];
        $t_profile = $_FILES["t_profile"]["name"];
        $full_profile = $_FILES["full_profile"]["name"];
        $sole_profile = $_FILES["sole_profile"]["name"];
        edit_product($id, $pro_name, $brand, $price, $release_yr, $top_type, $gender, $specification, $l_profile, $r_profile, $t_profile, $full_profile, $sole_profile);
        redirect_to_current_page("q=$id");
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/includes/prompts.php"); ?>
                </div>
            </div>
            <form role="form" action="<?php echo get_action_attr_value_for_current_page().'?q='.$id?>" method="post" enctype="multipart/form-data">
                <div class="card mt-2 mb-5 mx-5" style="border-radius: 50px; box-shadow: 10px 10px 50px rgb(129, 129, 129);">
                <!-- style="font-size: 40px; text-decoration: underline solid #D87300 5px; border-bottom: 8px;" -->
                    <div class=" fw-bold mx-auto d-grid  mt-3 card_title" >
                        Edit Product
                    </div>
                    <div class="row mx-4 pt-5">
                        <div class="col-md-4">
                            <p>Product Id:<input type="number" class="border-0 " name="product_id" id="product_id"></p>
                        </div>
                        <div class="col-md-4">
                            <p>Added Date:<input type="text" class="border-0" name="added_date" id="added_date"></p>
                        </div>
                        <div class="col-md-4">
                            <p>Modified Date:<input type="text" class="border-0" name="modified_date" id="modified_date"></p>
                        </div>
                    
                    </div>
                    <div class="row mx-4 pt-0">
                        <div class="col-md-8 form-floating gx-4">
                            <input type="text" class="form-control" id="floatingInput" name="pro_name" value="<?php echo $product["pro_name"]; ?>" placeholder="name@example.com">
                            <!-- placeholder should be given otherwise it may not display -->
                            <label for="floatingInput">Product Name</label>
                        </div>
                        <div class="col-md-4 align-content-center gx-4" style="color: #818181;">
                            <label></label><i class="fa-solid fa-circle-info "></i>  Name should not exceed 20 character</label>
                        </div>
                    </div>
                    <div class="row m-4 gx-4 gy-4">
                        <div class="col-md-2 ">
                            <select class="form-select" id="floatingSelect" name="brand">
                                <option selected >Brand</option>
                                <option value="<?php echo $product["brand"]; ?>" selected><?php echo $product["brand"]; ?></option>
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
                                <option selected>Release Year</option>
                                <option value="<?php echo $product["release_yr"]; ?>" selected><?php echo $product["release_yr"]; ?></option>
                                <?php
                                if($release_yr = get_release_yr()): ?>
                                    <?php foreach($release_yr as $year): ?>

                                        <option value="<?php echo $year["year"];?>"><?php echo $year["year"]; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <!-- <div class="col-md-2">
                            <select class="form-select" id="floatingSelect">
                                <option selected>Size</option>
                                <option value="1">13</option>
                                <option value="2">12.5</option>
                                <option value="3">12</option>
                            </select>
                        </div> -->
                        <div class="col-md-2">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="gender">
                                <option selected>Gender</option>
                                <option value="<?php echo $product["gender"]; ?>" selected><?php echo $product["gender"]; ?></option>
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
                                <option selected>Type</option>
                                <option value="<?php echo $product["top_type"]; ?>" selected><?php echo $product["top_type"]; ?></option>
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
                            <input type="text" class="form-control" value="<?php echo $product["price"]; ?>" name="price">
                            </div>
                        </div>
                    </div>
                    <div class=" row mx-4 my-2">
                        <label class="fw-bold ">Description</label>
                        <textarea class="form-control mx-auto no_resize mx-3 no_resize" placeholder="Description of porduct" id="specification  " name="specification"><?php echo $product["specification"]; ?></textarea>

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
                    
                        <button type="submit" class="btn btn-warning position-absolute bottom-0 end-0 mx-4 confirm_btn" id="edit_product" name="edit_product" style="border-radius: 30px;"> <i class="fa-regular fa-circle-check pe-2" style="color: #000000;"></i>Confirm</button>
                        <a type="button" class="btn btn-secondary bottom-0 start-0 mx-5" href="/admin/product/view_products.php"><i class="fa-solid fa-warehouse px-2" style="color: #ffffff;"></i>Inventory</a>
                    </div>
                </div>
            </form>
        </div>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>