<?php
	$page_title = "Add Brand";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");

    if(isset($_POST["add_brand"]))
    {
        add_brand_name($_POST);
        redirect_to_current_page();
    }
?>

<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page">
    <a href="/admin/add_fields.php" class="txt_dec">Fields</a>
    </li>
    <li class="breadcrumb-item " aria-current="page">
    <a href="" class="txt_dec">Add Brand</a>
    </li>
    
    </ol>
</nav>
<div class="row mx-5">
    <div class="col-lg-12">
        <?php require_once($_SERVER["DOCUMENT_ROOT"]."/includes/prompts.php"); ?>
    </div>
</div>
<div class="card mx-5 border-1 mb-5 mt-2" style="border-radius: 20px; box-shadow: 10px 5px 1px #ffd900; border-color: #D87300;">
<div class=" fw-bold mx-auto d-grid  mt-3" style="font-size: 40px; text-decoration: underline solid #D87300 5px; border-bottom: 8px;">
        Add Brand
    </div>
    
    <div class="card-body my-3">
        <form role="form" action="<?php echo get_action_attr_value_for_current_page(); ?>" method="post" enctype="multipart/form-data">
            <div class="row text-center justify-content-center">
                <div class="col-lg-5">
                    <div class="input-group-md justify-content-center">
                        <label class="text-dark required-highlight  fw-bold" for="brand_name" >Brand Name</label>
                        <input class="form-control" type="text" placeholder="Enter new brand" name="new_brand_name" id="new_brand_name" required>
                    </div>
                </div>
                <div class="col-lg-2 mt-4">
                    <button type="submit" id="add_brand" name="add_brand" class="btn btn-warning add_brands_btn px-3 border border-1 box_shadow">Add Brand</button>
                </div>
            </div>
        </form> 
    </div>
    <div class=" fw-bold mx-auto d-grid  my-3" style="font-size: 30px; text-decoration: underline solid #D87300 5px; border-bottom: 8px;">
        
        Existing Brand
        
    </div>
    <div class="card mx-5 mb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Sr. No.</th>
                        <th class="text-center">brand_id</th>
                        <th class="text-center">Brand</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($brands = get_brand_names()):?>
                        <?php 
                            $number = 1;
                            foreach($brands as $brand):
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $number?></td>
                            <td class="text-center"><?php echo $brand["brand_id"]?></td>
                            <td class="text-center"><?php echo $brand["brand_name"]?></td>
                            <td class="text-center">
                                <?php if($brand["disabled"] === "0"):?>
                                    <a href="/admin/brands/brand_status?q=<?php echo $brand["brand_id"]; ?>" id="enable" name="enable"><button type="button" class="btn btn-success btn-sm">Enable</button></a>
                                <?php else:?>
                                    <a href="/admin/brands/brand_status?q=<?php echo $brand["brand_id"]; ?>" id="disable" name="disable"><button type="button" class="btn btn-danger btn-sm">Disabled</button></a>
                                <?php endif;?>    
                            </td>
                            <td class="text-center">
                                <a href="/admin/brands/edit_brands?q=<?php echo $brand["brand_id"]; ?>">
                                    <i class="fa-solid fa-pen fa-lg edit_item_pen"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="/admin/brands/delete_brand?q=<?php echo $brand["brand_id"]; ?>">
                                    <i class="fa-solid fa-trash-can fa-lg delete_item"></i>
                                </a>
                            </td>
                        </tr>
                    <?php 
                        $number += 1;
                        endforeach
                    ?>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    
</div>

<!-- <form action="" method="post" >
<div>
    <div class="input-group w-50 m-4">
        <input type="text" class="form-control" name="brands_list" placeholder="Insert new brands to the field">
        <button class="btn btn-warning fw-bold btn-lg" name="insert_brands">Insert Brand</button>
    </div>
</div>
</form> -->
