<?php
	$page_title = "View Customer";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
?>
<div class="container-fluid ">
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page">
        Customer Listing
    </li>
    
    </ol>
</nav>
        <div class="justify-content-center mx-auto d-grid mb-3">
          <h1 class="lora_font fw-bold" style=" text-decoration: underline solid #D87300 5px; border-bottom: 8px;">Customers</h1>
        </div>
        <div class="card mb-5">
            <table class="table ">
                <thead>
                  <tr >
                    <th class="text-center">Sr. No.</th>
                    <th class="text-center">Customer Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Phone nunmber</th>
                    <th class="text-center">Alternate Number</th>
                    <th class="text-center">Email-Id</th>
                    <th class="text-center">State</th>
                    <th class="text-center">Details</th>
                    <!-- <th class="text-center">Delete</th> -->
                  </tr>
                </thead>
                <tbody>
                <?php if($users = get_user_list_from_users()):?>
                <?php 
                    $srno =1;
                    foreach($users as $user):
                ?>
                  <tr class="align-middle gx-5" >
                    <td class="text-center"><?php echo $srno?></td>
                    <td class="text-center"><?php echo $user["user_id"]?></td>
                    <td class="text-center"><?php echo $user["f_name"]," ",$user["l_name"]?></td>
                    <td class="text-center"><?php echo $user["contact_no"]?></td>
                    <td class="text-center"><?php echo $user["alternate_no"]?></td>
                    <td class="text-center"><?php echo $user["email_id"]?></td>
                    <td class="text-center"><?php echo $user["state"]?></td>
                    <td class="text-center"><a href="/admin/customer/customer_details?user_id=<?php echo $user["user_id"]; ?>"><i class="fa-solid fa-eye fa-lg view_details" ></i></a>
                      </td>
                    <!-- <td class="text-center"><i class="fa-solid fa-trash-can fa-lg delete_item"></i></td> -->
                  </tr>
                </tbody>
                <?php 
                    $srno +=1;
                    endforeach
                ?>
                <?php endif;?>
                </tbody>
              </table>
        </div>
    </div>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>