<?php
	$page_title = "View Product";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
    
?>

    <div class="container-fluid mt-0">
        <nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
            <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
            <li class="breadcrumb-item " aria-current="page">
                Inventory
            </li>
            
            </ol>
        </nav>
        <div class="col-lg-12">
        <?php require_once($_SERVER["DOCUMENT_ROOT"]."/includes/prompts.php"); ?>
    </div>
        <div class="justify-content-center mx-auto d-grid " >
          <h1 class="lora_font fw-bold" style=" text-decoration: underline solid #D87300 5px; border-bottom: 8px;">Products</h1>
          
        </div>
        <div class="d-grid justify-content-end mb-3"> 
          <a href="/admin/product/add_product.php" class="btn btn-light border border-1 border-dark fw-bold btn-sm"><i class="fa-solid fa-circle-plus fa-lg px-1 " style="color: #000000;"></i>Add Product</a>
        </div>
        <div class="card mb-5">
            <table class="table ">
                <thead>
                  <tr >
                    <th class="text-center">Sr. No.</th>
                    <th class="text-center">Product Id</th>
                    <th class="text-center">Display Image</th>
                    <th class="text-center">Product name</th>
                    <th class="text-center">Brand</th>
                    <th class="text-center">Release Year</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Details</th>
                    <th class="text-center">Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php if($products = get_products_list()):?>
                <?php 
                    $srno =1;
                    foreach($products as $product):
                ?>
                  <tr class="align-middle gx-5" >
                  <td class="text-center"><?php echo $srno?></td>

                    <td class="text-center"><?php echo $product["id"]?></td>
                    <td class="text-center">
                      <img src="<?php echo substr($product["l_profile"],26); ?>" class="img-fluid  mx-auto d-block" alt="product image" height="100px" width="100px">
                    </td>
                    <td class="text-uppercase text-center"><?php echo $product["pro_name"]?></td>
                    <td class="text-uppercase text-center"><?php echo $product["brand"]?></td>
                    <td class="text-center"><?php echo $product["release_yr"]?></td>
                    <td class="text-center"><?php echo $product["price"]?></td>
                    <td class="text-center"><a href="/admin/product/product_details.php?id=<?php echo $product["id"]; ?>"><i class="fa-solid fa-eye fa-lg view_details" ></i></a></td>
                    <td class="text-center"><a href="/admin/product/delete_product.php?id=<?php echo $product["id"]; ?>"><i class="fa-solid fa-trash-can fa-lg delete_item"></i></a></td>
                  </tr>
                </tbody>
                <?php 
                    $srno +=1;
														
                        endforeach
                    ?>
                <?php endif;?>
              </table>
        </div>
    </div>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>