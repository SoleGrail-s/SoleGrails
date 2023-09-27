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
                    <label class="fw-bold ">Product Name</label>
                    <input type="text" class="form-control col-md-2" id="inputGroupFile01">
                </div>
                <div class="row m-4 gx-4 gy-4">
                    <div class="col-md-2 ">
                        <select class="form-select" id="floatingSelect">
                        <option selected disabled>Brand</option>

                            <?php
                            if($brands = get_brand_names()): ?>
                                <?php foreach($brands as $brand): ?>

                                    <option value="<?php echo $brand["brand_id"];?>"><?php echo $brand["brand_name"]; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <!-- <option selected >Brand</option>
                            <option value="1">Nike</option>
                            <option value="2">Gucci</option>
                            <option value="3">Air Jordan</option>
                            <option value="4">Dior</option>
                            <option value="5">Adidas</option>
                            <option value="6">Puma</option>
                            <option value="7">Reebook</option>
                            <option value="8">Supreme</option> -->
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="floatingSelect">
                            <option selected>Release Year</option>
                            <option value="1">2023</option>
                            <option value="2">2022</option>
                            <option value="3">2021</option>
                          </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="floatingSelect">
                            <option selected>Size</option>
                            <option value="1">13</option>
                            <option value="2">12.5</option>
                            <option value="3">12</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Gender</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                            <option value="3">Unisex</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Type</option>
                            <option value="1">High</option>
                            <option value="2">Mid</option>
                            <option value="3">lows</option>
                        </select>
                    </div>
                    <div class=" col-md-2">
                        <!-- <div class="row"><i class="fa-regular fa-circle-check pe-2" style="color: #000000;"></i><input type="text" class=" number"></div> -->
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-indian-rupee-sign" style="color: #000000;"></i></span>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class=" row mx-4 my-2">
                    <label class="fw-bold ">Description</label>
                    <textarea class="form-control mx-auto no_resize mx-3 no_resize" placeholder="Description of porduct" id="floatingTextarea" ></textarea>

                </div>
                <div class="row mx-4 mb-5 mt-2">
                    <label class="fw-bold">Images</label>
                    <div class="col-md-4 g-4">
                        <label>Left Profile</label>
                        <input type="text" class="form-control col-md-2" id="inputGroupFile01">
                    </div >
                    <div class="col-md-4 g-4">
                        <label>Right Profile</label>
                        <input type="text" class="form-control col-md-2" id="inputGroupFile01">
                    </div >
                    <div class="col-md-4 g-4">
                        <label>Top Profile</label>
                        <input type="text" class="form-control col-md-2" id="inputGroupFile01">
                    </div>
                    <div class="col-md-4 g-4">
                        <label>Full Profile</label>
                        <input type="text" class="form-control col-md-2" id="inputGroupFile01">
                    </div>
                    <div class="col-md-4 g-4">
                        <label>Sole</label>
                        <input type="text" class="form-control col-md-2" id="inputGroupFile01">
                    </div>
                </div>
                
                <div class="position-relative my-5 ">
                   
                    <button type="button" class="btn btn-warning position-absolute bottom-0 end-0 mx-4 confirm_btn" style="border-radius: 30px;" name="add_product"> <i class="fa-regular fa-circle-check pe-2" style="color: #000000;"></i>Confirm</button>
                </div>
            </div>
        </form>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>