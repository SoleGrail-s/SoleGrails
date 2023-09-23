<?php
	$page_title = "View Product";
    $display_navbar_flag = false;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
    
?>
    <div class="container-fluid">

        <div class="justify-content-center mx-auto d-grid my-3">
          <h1 class="lora_font fw-bold" style=" text-decoration: underline solid #D87300 5px; border-bottom: 8px;">Products</h1>
        </div>
        <div>
            <table class="table ">
                <thead>
                  <tr >
                    <th>Sr. No.</th>
                    <th>Product Id</th>
                    <th>Display Image</th>
                    <th>Product name</th>
                    <th>Brand</th>
                    <th>Release Year</th>
                    <th>Price</th>
                    <th>Details</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php if($products = get_products_list()):?>
                <?php 
                    $srno =1;
                    foreach($products as $product):
                ?>
                  <tr class="align-middle gx-5" >
                  <td><?php echo $srno?></td>

                    <td><?php echo $product["id"]?></td>
                    <td >
                      <img src="imageView.php?image_id=<?php echo ($product["l_profile"]); ?>" class="img-fluid  mx-auto d-block" alt="product image" height="100px" width="100px">
                    </td>
                    <td class="text-uppercase"><?php echo $product["pro_name"]?></td>
                    <td class="text-uppercase"><?php echo $product["brand"]?></td>
                    <td><?php echo $product["release_yr"]?></td>
                    <td><?php echo $product["price"]?></td>
                    <td><i class="fa-solid fa-eye fa-lg view_details" ></i></td>
                    <td><i class="fa-solid fa-trash-can fa-lg delete_item"></i></td>
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